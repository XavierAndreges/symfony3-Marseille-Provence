<?php

namespace AppBundle\Form;

use AppBundle\Entity\BonsPlans;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BonsPlansType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('actif')
            ->add('table')
            ->add('titleFr')
            ->add('titleEn')
            ->add('shorttitle')
            ->add('region')
            ->add('department')
            ->add('city')
            ->add('type')
            ->add('soustype')
            ->add('macaron')
            ->add('promo_fr')
            ->add('promo_en')
            ->add('mountains')
            ->add('longitude')
            ->add('latitude')
            ->add('longituderouting')
            ->add('latituderouting')
            ->add('smallnodewalk')
            ->add('smallnodecar')
            ->add('fullnodewalk')
            ->add('fullnodecar')
            ->add('costwalk')
            ->add('costcar')
            ->add('closecity')
            ->add('pied')
            ->add('velo')
            ->add('moto')
            ->add('auto')
            ->add('bus')
            ->add('resumeFr')
            ->add('link')
            ->add('transportFr')
            ->add('transportEn')
            ->add('transportBonus')
            ->add('infosFr')
            ->add('infosEn')
            ->add('mail')
            ->add('mainimage')
            ->add('textFr')
            ->add('textEn')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BonsPlans::class,
        ]);
    }
}
