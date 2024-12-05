<?php

namespace App\Form;

use App\Entity\UserDrawEuromillions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserDrawEuromillionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('balls', ChoiceType::class, [
                'choices' => array_combine(range(1, 50), range(1, 50)),
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('stars', ChoiceType::class, [
                'choices' => array_combine(range(1, 12), range(1, 12)),
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('reset', ResetType::class)
            ->add('validate', SubmitType::class, [
                'label' => 'Valider'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserDrawEuromillions::class,
        ]);
    }
}
