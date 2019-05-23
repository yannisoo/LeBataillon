<?php

namespace App\DataFixtures;

use App\Entity\Agency;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AgencyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $agency = new Agency();
        $agency->setName('Tribord Digital');
        $agency->setAddress('12 rue du Château Landon');
        $agency->setCity('Paris');
        $agency->setSignature('TRIBORD DIGITAL');
        $agency->setSIREP('81540934700029');
        $agency->setPhoneWork('01 85 73 39 87');
        $agency->setPhoneMobile(0606060605);
        $manager->persist($agency);

        $manager->flush();
    }
}
