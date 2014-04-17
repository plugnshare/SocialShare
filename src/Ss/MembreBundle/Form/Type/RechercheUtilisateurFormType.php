<?php

namespace Ss\MembreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Range;

class RechercheUtilisateurFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('pseudo', 'text');
    }
    
    public function getName()
    {
        return 'ss_membre_recherche';
    }
}
