<?php

namespace App\Form;

use App\Entity\Ingredient;
use App\Entity\Pate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('time')
            ->add('difficulty')
            ->add('stepOne')
            ->add('stepTwo')
            ->add('stepThree')
            ->add('picture', FileType::class)
            ->add('ingredient', CollectionType::class, [
                'entry_type' => IngredientType::class,
                'allow_add' => true, // true si tu veux que l'utilisateur puisse en ajouter
                'allow_delete' => true, // true si tu veux que l'utilisateur puisse en supprimer
                'label' => 'Les ingrédients',
                'entry_options' => ['label' => false],
                'prototype' => true, //prototype : On veut qu’un prototype soit défini afin de pouvoir gérer la collection en javascript côté client.
                'by_reference' => false, //En passant cet attribut à false, on force Symfony à appeler le setter de l’entité.

            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pate::class,
        ]);
    }
}
