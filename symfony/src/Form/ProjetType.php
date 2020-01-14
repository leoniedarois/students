<?php

namespace App\Form;

use App\Entity\Etudiant;
use App\Entity\Matiere;
use App\Entity\Projet;
use App\Repository\EtudiantRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('note')
            ->add('etudiants', EntityType::class, [
                'class' => Etudiant::class,
                'multiple' => true,
                'expanded' => true,
                'query_builder' => function(EtudiantRepository $st) use ($options){
                    $firstRequest = $st->createQueryBuilder('etudiant')
                        ->leftJoin('etudiant.projets', 's')
                        ->groupBy('etudiant.id')
                        ->having('count(s.id) < 4');
                    $secondRequest = $st->createQueryBuilder('obj')
                        ->where('obj.id in (' . $firstRequest->getDQL() . ')')
                        ->orWhere('obj in (:etudiant)')
                        ->setParameter('etudiant', $options['etudiant']);
                    return $secondRequest;
                },
                'choice_label' => function(Etudiant $etudiant){
                    return $etudiant->getFirstname() . ' ' . $etudiant->getLastname();
                } ])
            ->add('matiere', EntityType::class, [
                'class' => Matiere::class,
                'choice_label' => function(Matiere $matiere){
                    return $matiere->getName();
                } ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
            'etudiant' => []
        ]);
    }
}
