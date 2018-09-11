<?php

namespace App\CorredoresRiojaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\CorredoresRiojaBundle\Form\Transformer\RegistroCorredorTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CorredorType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('dni')
                ->add('nombre')
                ->add('apellidos')
                ->add('email')
                ->add('password','repeated',array('type'=>'password',
                    'invalid_message'=>'La contraseña debe ser la misma',
                    'options'=>array('label'=>'Contraseña: ')))
                ->add('fechanacimiento','birthday',array('label'=>'Fecha de nacimiento: '))
                ->add('direccion','textarea',array('label'=>'Dirección: '));
                
        
        $builder->addViewTransformer(new RegistroCorredorTransformer());
    }

    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\CorredoresRiojaBundle\Form\DTO\RegistroCorredorCommand',
            'error_mapping' => array('passwordLegal' => 'password',
                                     'mayorEdad' => 'fechanacimiento')
        ));
    }
    
    
    public function getName()
    {
        return 'corredor';
    }
    
    
}
