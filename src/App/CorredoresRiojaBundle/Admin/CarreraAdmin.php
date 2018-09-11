<?php

namespace App\CorredoresRiojaBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use App\CorredoresRiojaDomain\Model\Carrera;


class CarreraAdmin extends Admin{
     /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombre')
            ->add('descripcion')
            ->add('fechacelebracion')
            ->add('distancia')
            ->add('direccion')
             ->add('fechalimiteinscripcion')
                ->add('numeromaximoparticipantes')
                ->add('imagen')
                ->add('organizador')
        ;
    }
    
 
    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('nombre')
            ->add('descripcion')
            ->add('fechacelebracion')
            ->add('distancia')
            ->add('direccion')
             ->add('fechalimiteinscripcion')
                ->add('numeromaximoparticipantes')
                ->add('imagen')
                ->add('organizador')
            ->end()
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('fechacelebracion')
            ->add('distancia')
            ->add('direccion')
             ->add('fechalimiteinscripcion')
                ->add('numeromaximoparticipantes')
                ->add('imagen')
                ->add('organizador')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('nombre')
                ->add('organizador')
        ;
    }
    
    
    
    
}
