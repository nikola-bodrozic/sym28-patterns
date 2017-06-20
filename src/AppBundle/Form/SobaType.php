<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SobaType extends AbstractType
{
    /**
	 * radio, checkbox and select elements rendered from database
	 * 
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imesobe')
            ->add('zgrada', EntityType::class, array(
				// query choices from this entity
				'class' => 'AppBundle:Zgrada',

				// use the User.username property as the visible option string
				'choice_label' => 'ime',
// select single
//				'multiple' => false,
//				'expanded' => false 	

// select multiple
//				'multiple' => true,
//				'expanded' => false 	

// checkbox checkboxes
//				'multiple' => true,
//				'expanded' => true 	

// radio buttons
				'multiple' => false,
				'expanded' => true 		
				)
			)
			;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Soba'
        ));
    }
}
