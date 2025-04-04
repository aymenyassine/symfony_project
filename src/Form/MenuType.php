<?php

namespace App\Form;

use App\Entity\Menu;
use App\Entity\Restaurent;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Name',
            ])
            ->add('description', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Description',
            ])
            ->add('price', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Price',
            ])
            ->add('restaurents', EntityType::class, [
                'class' => Restaurent::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => false, 
                'attr' => ['class' => 'form-select'], 
                'label' => 'Associated Restaurants',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
