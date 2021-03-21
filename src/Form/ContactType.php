<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'required'   => true,
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => 'NOM'
            ])
            ->add('email', EmailType::class, [
                'required'   => true,
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => 'EMAIL'
            ])
            ->add('subject', null, [
                'required'   => true,
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => 'OBJET'
            ])
            ->add('message', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
                'required'   => true,
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => 'MESSAGE'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            
        ]);
    }
}
