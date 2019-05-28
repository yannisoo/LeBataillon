<?php

namespace App\DataFixtures;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Bill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BillFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0 ; $i < 5; $i++) {

            $bill = new bill();
            $bill->setBillNumber('Facture_'.$i.'_270519');
            $bill->setDescription1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');
            $bill->setDescription2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');
            $bill->setQuantity1('1');
            $bill->setQuantity2('1');
            $bill->setUnitPrice1(rand(1,30));
            $bill->setUnitPrice2(rand(1,30));
            $bill->setStatus(rand(0,2));
            $bill->setProjectId('1');
            $bill->setPriceTotal($bill->getUnitPrice1() + $bill->getUnitPrice2());
            $bill->setMainbillDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');

            $manager->persist($bill);
        }
        for ($i = 0 ; $i < 3; $i++) {

            $bill = new bill();
            $bill->setBillNumber('Facture_'.$i.'_270519');
            $bill->setDescription1('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');
            $bill->setDescription2('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');
            $bill->setQuantity1('1');
            $bill->setQuantity2('1');
            $bill->setUnitPrice1(rand(1,30));
            $bill->setUnitPrice2(rand(1,30));
            $bill->setStatus(rand(0,2));
            $bill->setProjectId('2');
            $bill->setPriceTotal($bill->getUnitPrice1() + $bill->getUnitPrice2());
            $bill->setMainbillDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');

            $manager->persist($bill);
        }

        $manager->flush();
    }
}
