<?php

namespace Ss\MembreBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Ajout des champs persos
        $builder->add('prenom');
        $builder->add('nom');
        $builder->add('date_naissance', 'date');
        $builder->add('genre');
        $builder->add('description');
    }

    public function getName()
    {
        return 'ss_membre_profil';
    }
}
