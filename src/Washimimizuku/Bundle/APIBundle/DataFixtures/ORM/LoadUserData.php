<?php

namespace Washimimizuku\Bundle\APIBundle\Controller;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Washimimizuku\Bundle\APIBundle\Entity\User;

class LoadUserData implements FixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     */
    public function load(ObjectManager $manager) {
        $alice = new User();
        $alice->setUsername('alice');
        $alice->setEmail('alice@example.com');
        $alice->setPassword('alicepassword');

        $bob = new User();
        $bob->setUsername('bob');
        $bob->setEmail('bob@example.com');
        $bob->setPassword('bobpassword');

        $manager->persist($alice);
        $manager->persist($bob);

        $manager->flush();
    }
}
