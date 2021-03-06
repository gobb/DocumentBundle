<?php

namespace Soloist\Bundle\DocumentBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface,
    Symfony\Component\Form\AbstractType,
    Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Document type
 */
class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('category')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class' => 'Soloist\\Bundle\\DocumentBundle\\Entity\\Document',
        ));
    }

    public function getName()
    {
        return 'soloist_document_document';
    }
}
