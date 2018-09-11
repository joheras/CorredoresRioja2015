<?php

namespace App\CorredoresRiojaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\CorredoresRiojaBundle\Form\Transformer\RegistroOrganizacionTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrganizacionType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('email')
                ->add('nombre')
                ->add('descripcion')
                ->add('password','repeated',array('type'=>'password',
                    'invalid_message'=>'La contraseña debe ser la misma',
                    'options'=>array('label'=>'Contraseña: ')));
                
        
        $builder->addViewTransformer(new RegistroOrganizacionTransformer());
    }

    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\CorredoresRiojaBundle\Form\DTO\RegistroOrganizacionCommand'
        ));
    }
    
    
    public function getName()
    {
        return 'organizacion';
    }
    
    
}
