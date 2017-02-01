<?php

namespace MainBundle\Form;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MediaType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('path', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            //  ->add('priority', ChoiceType::class, array('choices' => array('High' => 'High', 'Low' => 'Low'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))

            ->add('Save', SubmitType::class, array('label' => 'Create Task', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
        ;
    }
    public function setDefaultOptions(OptionsResolver $resolver)

    {
        $resolver->setDefaults(array(
            'data_class'=>'MainBundle\Document\Media'))
        ;
    }
}