<?php
// src/Form/RestaurentType.php

namespace App\Form;

use App\Entity\Menu;
use App\Entity\Restaurent;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RestaurentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Nom du restaurant',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Description',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo',
                'mapped' => false, // Non lié directement à l'entité
                'required' => false,
            ])
            ->add('menus', EntityType::class, [
                'class' => Menu::class,
                'choice_label' => 'name', // Affiche le nom du menu
                'multiple' => true, // Permet plusieurs choix
                'expanded' => true, // Affiche des cases à cocher (optionnel)
                'attr' => ['class' => 'form-control'],
                'label' => 'Menus associés',
                'label_attr' => ['class' => 'form-label'],
            ])
          
            ->add('menu', EntityType::class, [
                'class' => Menu::class,
                'choice_label' => 'name', // Affiche le nom du menu
                'attr' => ['class' => 'form-control'],
                'label' => 'Menu principal',
                'label_attr' => ['class' => 'form-label'],
            ]);
            
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurent::class,
        ]);
    }
}
