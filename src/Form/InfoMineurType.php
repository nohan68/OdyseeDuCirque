<?php
/**
 * Created by PhpStorm.
 * User: zalaahaz
 * Date: 18/12/19
 * Time: 17:11
 */

namespace App\Form;


use App\Entity\InformationsMineur;
use Doctrine\DBAL\Types\BooleanType;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Form\AbstractType;
use App\Entity\InformationsFamille;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class InfoMineurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('autorisationTransport', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],])
            ->add('droitImage', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],])
            ->add('autorisationTransportMedical', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],])
            ->add('autorisationSortieSeul', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],])
            ->add('membreFamille', HiddenType::class)

            /*->add('autorisationSorties', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],])*/
            ->add('submit', SubmitType::class)
            ->getForm()
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InformationsMineur::class,
        ]);
    }
}