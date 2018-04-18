<?php

namespace UserBundle\Form;

use Sonata\MediaBundle\Form\Type\MediaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Enum\RoleUserEnum;

class UserProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'label' => "Nom d'utilisateur",
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => "Email",
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('image', MediaType::class, array(
                'label' => false,
                'provider' => 'sonata.media.provider.image',
                'required' => true,
                'context'  => 'default'
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'required' => false,
                'type' => PasswordType::class,
                'first_name' => 'pass',
                'second_name' => 'confirm',
                'first_options' => array(
                    'label' => "Mot de passe",
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ),
                'second_options' => array(
                    'label' => "Comfirmer mot de passe",
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('address', AddressType::class)
            ->add('personalInfo', PersonalInfoType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }


}
