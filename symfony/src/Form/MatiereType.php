<?php

namespace App\Form;

use App\Entity\Intervenant;
use App\Entity\Matiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('intervenant', EntityType::class, [
        'class' => Intervenant::class,
        'required' => false,
        'choice_label' => function(Intervenant $intervenant){
                    return $intervenant->getFirstname() . ' ' . $intervenant->getLastname();
                } ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Matiere::class,
        ]);
    }
}
