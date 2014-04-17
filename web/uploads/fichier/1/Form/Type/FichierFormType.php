<?php

namespace Ss\FichierBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichierFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Ajout des champs persos
        $builder
			->add('nom', 'text')
			->add('description', 'text')
			->add('file', 'file')
			->remove('emplacement');
    }
    
      public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Ss\FichierBundle\Entity\Fichier'
    ));
  }

    public function getName()
    {
        return 'ss_fichier_upload';
    }
}
