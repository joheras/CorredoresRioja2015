<?php

namespace App\CorredoresRiojaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\CorredoresRiojaBundle\Form\Transformer\NuevaCarreraTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarreraType extends AbstractType {
    
    private $organizacion;
    
    public function __construct($organizacion) {
        $this -> organizacion = $organizacion;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('nombre')
                ->add('descripcion','textarea')
                ->add('fechacelebracion','datetime',array('label'=>'Fecha de celebración: '))
                ->add('distancia','choice',array('choices'=>array('5km','10km','21km','42km')))
                ->add('fechalimiteinscripcion','datetime',array('label'=>'Fecha límite de inscripción: '))
                ->add('numeromaximoparticipantes','number',array('label'=>'Participantes: '))
                ->add('imagen','file',array('required'=>false));
                
        
        $builder->addViewTransformer(new NuevaCarreraTransformer($this -> organizacion));
    }

    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\CorredoresRiojaBundle\Form\DTO\NuevaCarreraCommand',
            'error_mapping' => array('passwordLegal' => 'password',
                                     'mayorEdad' => 'fechanacimiento')
        ));
    }
    
    
    public function getName()
    {
        return 'corredor';
    }
    
    
}
