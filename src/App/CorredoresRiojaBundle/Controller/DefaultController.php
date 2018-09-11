<?php

namespace App\CorredoresRiojaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\CorredoresRiojaBundle\Form\CorredorType;

class DefaultController extends Controller {

    public function indexAction() {
        $carreraspordisputar = $this->get('carrerasrepository')->buscaCarrerasPorDisputar();
        return $this->render("AppCorredoresRiojaBundle:Default:portada.html.twig", array('carreras' => $carreraspordisputar));
    }

    public function carrerasAction() {
        $carrerasdisputadas = $this->get('carrerasrepository')->buscaCarrerasDisputadas();
        $carreraspordisputar = $this->get('carrerasrepository')->buscaCarrerasPorDisputar();
        return $this->render("AppCorredoresRiojaBundle:Default:carreras.html.twig", array('carrerasdisputadas' => $carrerasdisputadas,
                    'carreraspordisputar' => $carreraspordisputar));
    }

    public function carreraAction($slug) {
        $carrera = $this->get('carrerasrepository')->buscaCarreraBySlug($slug);
        $corredores = $this->get('participantesrepository')->buscaPartipantesDeCarrera($carrera);
        return $this->render("AppCorredoresRiojaBundle:Default:carrera.html.twig", array('carrera' => $carrera,
                    'corredores' => $corredores));
    }

    public function organizacionAction($slug) {
        $organizacion = $this->get('organizacionesrepository')->buscaOrganizacionPorSlug($slug);
        $organizadas = $this->get('carrerasrepository')->buscaCarrerasPorDisputarOrganizadasPor($organizacion);
        //$organizadas[] = $this->get('carrerasrepository')->buscaCarrerasPorDisputarOrganizadasPor($organizacion);
        return $this->render("AppCorredoresRiojaBundle:Default:organizador.html.twig", array('organizacion' => $organizacion,
                    'carreras' => $organizadas));
    }

    public function registroAction() {
        $peticion = $this->getRequest();

        $form = $this->createForm(new CorredorType());
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            // Recogemos el corredor que se ha registrado
            $corredor = $form->getData();
            // Codificamos la contraseña del corredor
            $encoder = $this->get('security.encoder_factory')->getEncoder($corredor);
            $password = $encoder->encodePassword($corredor->getPassword(), $corredor->getSalt());
            $corredor->saveEncodedPassword($password);
            // Enviamos un mail al usuario
            //$this -> get('registroemail')->sendemail($corredor->getEmail());
            // Lo almacenamos en nuestro repositorio de corredores
            $this->get('corredoresrepository')->registraCorredor($corredor);
            // Creamos un mensaje flash para mostrar al usuario que se ha registrado correctamente
            $this->get('session')->getFlashBag()->add('info', '¡Enhorabuena ' . $corredor->getNombre() . ', te has registrado en CorredoresPorLaRioja!');

            return $this->redirect($this->generateUrl('portada'));
            //$corredores = $this -> get('corredoresrepository') -> buscaTodosLosCorredores();
            //return new Response(implode("<br/>",$corredores));
        }
        return $this->render("AppCorredoresRiojaBundle:Default:registro.html.twig", array('formulario' => $form->createView()));
    }

    public function loginAction() {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
                        "AppCorredoresRiojaBundle:Default:login.html.twig", array(
                    // last username entered by the user
                    'last_username' => $lastUsername,
                    'error' => $error,
                        )
        );
    }

    public function miscarrerasAction() {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $corredoruser = $this->getUser();
        $corredor = $this->get('corredoresrepository')->buscaCorredor($corredoruser->getUsername());

        $carrerasdisputadas = $this->get('participantesrepository')->buscaCarrerasDisputadasPorCorredor($corredor);
        $carreraspordisputar = $this->get('participantesrepository')->buscaCarrerasPorDisputarDeCorredor($corredor);
        return $this->render("AppCorredoresRiojaBundle:Default:miscarreras.html.twig", array('carrerasdisputadas' => $carrerasdisputadas,
                    'carreraspordisputar' => $carreraspordisputar));
    }

    public function inscribirAction($slug) {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $corredoruser = $this->getUser();
        $corredor = $this->get('corredoresrepository')->buscaCorredor($corredoruser->getUsername());
        $carrera = $this->get('carrerasrepository')->buscaCarreraBySlug($slug);

        $inscrito = $this->get('participantesrepository')->isCorredorInscrito($corredor, $carrera);

        if ($inscrito) {
            $this->get('session')->getFlashBag()->add('info', 'Ya te habías registrado en la carrera ' . $carrera->getNombre());
        } else {
            $this->get('participantesrepository')->inscribirParticipante($corredor, $carrera);
            $this->get('session')->getFlashBag()->add('info', 'Enhorabuena, te has registrado en la carrera ' . $carrera->getNombre());
        }


        return $this->redirect($this->generateUrl('show_miscarreras'));
    }

    public function desapuntarAction($slug) {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $corredoruser = $this->getUser();
        $corredor = $this->get('corredoresrepository')->buscaCorredor($corredoruser->getUsername());
        $carrera = $this->get('carrerasrepository')->buscaCarreraBySlug($slug);


        $this->get('participantesrepository')->eliminaParticipante($corredor, $carrera);



        return $this->redirect($this->generateUrl('show_miscarreras'));
    }

    public function perfilAction() {
        $peticion = $this->getRequest();

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $corredoruser = $this->getUser();
        $corredor = $this->get('corredoresrepository')->buscaCorredor($corredoruser->getUsername());
        $form = $this->createForm(new CorredorType(), $corredor);
        $originalpassword = $form->getData()->getPassword();
        $form->handleRequest($peticion);
        if ($form->isValid()) {
            // Recogemos el corredor que se ha registrado
            $corredor = $form->getData();

            if (null == $corredor->getPassword()) {
                // Si el corredor no ha introducido una nueva contraseña, le asignamos la inicial
                $corredor->saveEncodedPassword($originalpassword);
            } else {
                // Codificamos la contraseña del corredor
                $encoder = $this->get('security.encoder_factory')->getEncoder($corredor);
                $password = $encoder->encodePassword($corredor->getPassword(), $corredor->getSalt());
                $corredor->saveEncodedPassword($password);
            }
            // Lo almacenamos en nuestro repositorio de corredores
            $this->get('corredoresrepository')->actualizaCorredor($corredor);
            // Creamos un mensaje flash para mostrar al usuario que se ha registrado correctamente
            $this->get('session')->getFlashBag()->add('info', '¡Enhorabuena ' . $corredor->getNombre() . ', tus datos se han cambiado con exito!');

            return $this->redirect($this->generateUrl('portada'));
            //$corredores = $this -> get('corredoresrepository') -> buscaTodosLosCorredores();
            //return new Response(implode("<br/>",$corredores));
        }
        return $this->render("AppCorredoresRiojaBundle:Default:perfil.html.twig", 
                array('formulario' => $form->createView()));
    }

}
