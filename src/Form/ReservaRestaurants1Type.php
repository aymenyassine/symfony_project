<?php

namespace App\Form;

use App\Entity\ReservaRestaurants;
use App\Entity\Restaurent;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservaRestaurants1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('guest_name')
            ->add('number_of_guests')
            ->add('restaurants_id', EntityType::class, [
                'class' => Restaurent::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservaRestaurants::class,
        ]);
    }
}
