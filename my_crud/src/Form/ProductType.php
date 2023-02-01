<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('description')
            ->add('reference')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }

    // public function buildForm(FormBuilderInterface $builder, array $options)
    // {
    //     $builder
    //     ->add('price',TextType::class)
    //     ->add('findBy',  ChoiceType::class, array(
    //         'choices'  => array(
    //             'Commence par' => 'price',
    //             'Contient' => getPrice(),
    //         ),
    //         'mapped'  => false
    //     )
    //     ->add('Rechercher',SubmitType::class);
    // }

}
