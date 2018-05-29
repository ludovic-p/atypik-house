<?php

namespace ToolsBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\User;

class Fixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager)
    {
        // Un admin
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@atipikhouse.com');
        $userAdmin->setEmailCanonical('admin@atipikhouse.com');
        $userAdmin->setPlainPassword('Azerty123');
        $userAdmin->setEnabled(true);
        $userAdmin->setRoles(
            [
            'ROLE_SUPER_ADMIN',
            'ROLE_USER'
            ]
        );
        $manager->persist($userAdmin);

        $manager->flush();
    }
}