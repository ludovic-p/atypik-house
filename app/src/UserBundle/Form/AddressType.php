<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\Address;

class AddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('streetNumber', TextType::class, array(
                'label' => 'Rue',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('address', TextType::class, array(
                'label' => 'Adresse',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('city', TextType::class, array(
                'label' => 'Ville',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('postalcode', TextType::class, array(
                'label' => 'Code Postal',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('country', TextType::class, array(
                'label' => 'Pays',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                )
            ));
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(array(
            'data_class' => Address::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
        return 'userbundle_address';
    }


}
