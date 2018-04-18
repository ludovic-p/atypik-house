<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\User;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => "Email"
                )
            ))
            ->add('username', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => "Nom d'utilisateur"
                )
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_name' => 'pass',
                'second_name' => 'confirm',
                'first_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => "Mot de passe"
                    )
                ),
                'second_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => "Confirmation"
                    )
                ),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }

    public function getName()
    {
        return 'user_registration';
    }
}
