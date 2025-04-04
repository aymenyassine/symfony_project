<?php

namespace App\Form;

use App\Entity\Excursions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ExcursionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Nom de l\'excursion',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('descriptions', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Description de l\'excursion',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('price', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Prix',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo de l\'excursion',
                'mapped' => false, // Non lié directement à l'entité
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excursions::class,
        ]);
    }
}
