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
            $bill->setProjectId('1');
            $bill->setTotalPrice($bill->getUnitPrice1() + $bill->getUnitPrice2());
            $bill->setStatus('0');
            $bill->setBillDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');
            $bill->setDownpayment(rand( 10,15));
            $bill->setRemaining($bill->getDownpayment() - $bill->getTotalPrice());
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
            $bill->setProjectId('2');
            $bill->setTotalPrice($bill->getUnitPrice1() + $bill->getUnitPrice2());
            $bill->setStatus('0');
            $bill->setBillDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum.');
            $bill->setDownpayment(rand( 10,15));
            $bill->setRemaining($bill->getDownpayment() - $bill->getTotalPrice());
            $manager->persist($bill);
        }

        $manager->flush();
    }
}
