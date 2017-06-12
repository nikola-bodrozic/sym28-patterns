<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChkboxType extends AbstractType
{
    /**
     * render checkbox select and radio group
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('ime')
            ->add('prvi')
            ->add('drugi')
            ->add('isAttending', ChoiceType::class, array(
            'choices' => array(
                     'probably' => 'maybe',
                     'sure' => 'yes',
                     'not coming'=>'no'
            ),
            'choices_as_values' => true,
            'expanded' => false, // 'expanded' => true, #daje radio dugmad
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Chkbox'
        ));
    }
}
