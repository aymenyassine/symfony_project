<?php

namespace App\Form;

use App\Entity\Piscine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PiscineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Nom de la piscine',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Description de la piscine',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo de la piscine',
                'mapped' => false, // Non lié directement à l'entité
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Piscine::class,
        ]);
    }
}
