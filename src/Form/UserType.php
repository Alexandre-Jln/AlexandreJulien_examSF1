<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles',
                ChoiceType::class, [
                    'multiple' => true,
                    'expanded' => true,
                    'choices' => [
                        'admin' => 'ROLE_ADMIN',
                        'user' => 'ROLE_USER'
                    ]])
            ->add('password')
            ->add('firstName')
            ->add('lastName')
            ->add('photo')
            ->add('sector')
            ->add('contractType')
            ->add('departureDate',

            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
