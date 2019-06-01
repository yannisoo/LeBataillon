<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 4; $i++) {

            $user = new User();
            $user->setUserName('cdp '.$i);
            $user->setEmail('email'.$i.'@gmail.com');
            $user->setPassword('admin');
            $user->setRole('cdp');

            $manager->persist($user);
        }

        for ($i = 0; $i < 2; $i++) {

            $user = new User();
            $user->setUserName('comptable '.$i);
            $user->setEmail('email'.$i.'@gmail.com');
            $user->setPassword('admin');
            $user->setRole('comptable');

            $manager->persist($user);
        }

            $user = new User();
            $user->setUserName('Master');
            $user->setEmail('email.master@gmail.com');
            $user->setPassword('admin');
            $user->setRole('master');

            $manager->persist($user);

        $manager->flush();
    }
}
