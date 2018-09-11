<?php

namespace App\CorredoresRiojaBundle\Controller;

use App\CorredoresRiojaBundle\Form\OrganizacionType;
use App\CorredoresRiojaBundle\Form\CarreraType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class OrganizacionController extends Controller {

    public function portadaAction() {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $organizacionuser = $this->getUser();
        $organizacion = $this->get('organizacionesrepository')->buscaOrganizacionPorEmail($organizacionuser->getUsername());

        $carrerasdisputadas = $this->get('carrerasrepository')->buscaCarrerasDisputadasOrganizadasPor($organizacion);
        $carreraspordisputar = $this->get('carrerasrepository')->buscaCarrerasPorDisputarOrganizadasPor($organizacion);
        return $this->render("AppCorredoresRiojaBundle:Organizacion:carreras.html.twig", array('carrerasdisputadas' => $carrerasdisputadas,
                    'carreraspordisputar' => $carreraspordisputar));
    }

    public function registroAction() {
        $peticion = $this->getRequest();

        $form = $this->createForm(new OrganizacionType());
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            // Recogemos el corredor que se ha registrado
            $organizador = $form->getData();
            // Codificamos la contraseña del corredor
            $encoder = $this->get('security.encoder_factory')->getEncoder($organizador);
            $password = $encoder->encodePassword($organizador->getPassword(), $organizador->getSalt());
            $organizador->saveEncodedPassword($password);
            // Lo almacenamos en nuestro repositorio de corredores
            $this->get('organizacionesrepository')->registraOrganizacion($organizador);
            // Creamos un mensaje flash para mostrar al usuario que se ha registrado correctamente
            $this->get('session')->getFlashBag()->add('info', '¡Enhorabuena, te has registrado como organización en CorredoresPorLaRioja!');

            return $this->redirect($this->generateUrl('organizacion_portada'));
            //$corredores = $this -> get('corredoresrepository') -> buscaTodosLosCorredores();
            //return new Response(implode("<br/>",$corredores));
        }
        return $this->render("AppCorredoresRiojaBundle:Organizacion:registro.html.twig", array('formulario' => $form->createView()));
    }

    public function loginAction() {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
                        "AppCorredoresRiojaBundle:Organizacion:login.html.twig", array(
                    // last username entered by the user
                    'last_username' => $lastUsername,
                    'error' => $error,
                        )
        );
    }

    public function perfilAction() {
        $peticion = $this->getRequest();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $organizacionuser = $this->getUser();
        $organizacion = $this->get('organizacionesrepository')->buscaOrganizacionPorEmail($organizacionuser->getUsername());
        $form = $this->createForm(new OrganizacionType(), $organizacion);
        $originalpassword = $form->getData()->getPassword();
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            // Recogemos el corredor que se ha registrado
            $organizacion = $form->getData();

            if (null == $organizacion->getPassword()) {
                // Si el corredor no ha introducido una nueva contraseña, le asignamos la inicial
                $organizacion->saveEncodedPassword($originalpassword);
            } else {
                // Codificamos la contraseña del corredor
                $encoder = $this->get('security.encoder_factory')->getEncoder($organizacion);
                $password = $encoder->encodePassword($organizacion->getPassword(), $organizacion->getSalt());
                $organizacion->saveEncodedPassword($password);
            }
            // Lo almacenamos en nuestro repositorio de corredores
            $this->get('organizacionesrepository')->actualizaOrganizacion($organizacion);
            // Creamos un mensaje flash para mostrar al usuario que se ha registrado correctamente
            $this->get('session')->getFlashBag()->add('info', '¡Enhorabuena, tus datos se han cambiado con exito!');

            return $this->redirect($this->generateUrl('organizacion_portada'));
            //$corredores = $this -> get('corredoresrepository') -> buscaTodosLosCorredores();
            //return new Response(implode("<br/>",$corredores));
        }
        return $this->render("AppCorredoresRiojaBundle:Organizacion:perfil.html.twig", array('formulario' => $form->createView()));
    }

    public function nuevaCarreraAction() {

        $peticion = $this->getRequest();
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $organizacionuser = $this->getUser();
        $organizacion = $this->get('organizacionesrepository')->buscaOrganizacionPorEmail($organizacionuser->getUsername());
        $form = $this->createForm(new CarreraType($organizacion));
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            $carrera = $form->getData();
            $carrera->subirFoto();
            $this->get('carrerasrepository')->creaCarrera($carrera);
            // Creamos un mensaje flash para mostrar al usuario que se ha registrado correctamente
            //return $this ->portadaAction();
            return $this->redirect($this->generateUrl('organizacion_portada'));
        }
        return $this->render("AppCorredoresRiojaBundle:Organizacion:nuevacarrera.html.twig", array('formulario' => $form->createView()));
    }

    public function modificarCarreraAction($slug) {

        $peticion = $this->getRequest();
        $carrera = $this->get('carrerasrepository')->buscaCarreraBySlug($slug);

        $authChecker = $this->get('security.authorization_checker');
        $this->denyAccessUnlessGranted('edit', $carrera, 'Unauthorized access!');

        
        $organizacionuser = $this->getUser();
        $organizacion = $this->get('organizacionesrepository')->buscaOrganizacionPorEmail($organizacionuser->getUsername());
        $form = $this->createForm(new CarreraType($organizacion), $carrera);
        $carreraid = $carrera->getId();
        $carreraimagen = $carrera -> getImagen();
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            $carrera = $form->getData();
            $carrera -> setId($carreraid);
            if($carrera -> getImagen()){
                $carrera->subirFoto();
            }else{
            $carrera -> setImagen($carreraimagen);
            }
            
            $this->get('carrerasrepository')->actualizaCarrera($carrera);
            // Creamos un mensaje flash para mostrar al usuario que se ha registrado correctamente
            //return $this ->portadaAction();
            return $this->redirect($this->generateUrl('organizacion_portada'));
        }
        return $this->render("AppCorredoresRiojaBundle:Organizacion:actualizacarrera.html.twig", array('formulario' => $form->createView(), 'slug' => $slug));
    }
    
    
    public function modificarCarrerasAction() {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $organizacionuser = $this->getUser();
        $organizacion = $this->get('organizacionesrepository')->buscaOrganizacionPorEmail($organizacionuser->getUsername());

        $carreraspordisputar = $this->get('carrerasrepository')->buscaCarrerasPorDisputarOrganizadasPor($organizacion);
        return $this->render("AppCorredoresRiojaBundle:Organizacion:modificarcarreras.html.twig", array(
                    'carreraspordisputar' => $carreraspordisputar));
    }

}
