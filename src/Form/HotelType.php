<?php

namespace App\Form;

use App\Entity\Hotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Nom de l\'hôtel',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('etoile', ChoiceType::class, [
                'choices' => [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                ],
                'attr' => ['class' => 'form-control'],
                'label' => 'Étoiles de l\'hôtel',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Description de l\'hôtel',
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo de l\'hôtel',
                'mapped' => false, // Non lié directement à l'entité
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
