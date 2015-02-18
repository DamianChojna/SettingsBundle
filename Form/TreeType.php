<?php

namespace Dt\SettingsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TreeType extends AbstractType
{
    
    private $settings;
    
    /**
     * 
     */
    function __construct() {
        
        $this->settings = [
            'node' => [
                'owner' => 'owner',
                'add' => 'add',
                'edit' => 'edit',
                'delete' => 'delete'
            ],
            'seo' => [
                'owner' => 'owner',
                'add' => 'add',
                'edit' => 'edit',
                'delete' => 'delete'
            ],
            'user' => [
                'owner' => 'owner',
                'add' => 'add',
                'edit' => 'edit',
                'delete' => 'delete'
            ]
        ];
    }
   
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach($this->settings as $key => $value) {
            
            $builder->add($key,'choice_tree',[
                'choices' => $value,
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'class' => 'tree-branch-children'
                ]
            ]);
            
        }
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dt_settingsbundle_tree';
    }
}
