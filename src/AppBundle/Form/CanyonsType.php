<?php

namespace AppBundle\Form;

use AppBundle\Entity\Canyons;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CanyonsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bounds')
            ->add('cotationverticale')
            ->add('cotationaquatique')
            ->add('cotationengagement')
            ->add('approchetime')
            ->add('retourtime')
            ->add('descentetime')
            ->add('cascademax')
            ->add('corde')
            ->add('altitudedepart')
            ->add('denivele')
            ->add('longueur')
            ->add('note')
            ->add('qualiteeau')
            ->add('frequentation')
            ->add('traceign')
            ->add('latitudeend')
            ->add('longitudeend')
            ->add('approchegeojson')
            ->add('descentegeojson')
            ->add('retourgeojson')
            ->add('idrepname')
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
            'data_class' => Canyons::class,
        ]);
    }
}
