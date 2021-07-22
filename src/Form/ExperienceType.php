<?php

namespace App\Form;

use App\Entity\Experience;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
            'label' => 'Mon titre'
            ])
            ->add('image', UrlType::class, [
                'label' => 'Url de mon image'
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Résumé de l\'expérience'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville ou quartier'
            ])
            ->add('category', null, [
                'choice_label' => 'name',
                'label' => 'Catégorie'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Experience::class,
        ]);
    }
}
