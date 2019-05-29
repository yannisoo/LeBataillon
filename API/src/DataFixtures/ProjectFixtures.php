<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Id\AssignedGenerator;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new project();
            $project->setId($i);
            $project->setUserid(1);
            $project->setName('project '.$i);
            $project->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum efficitur. Nullam a felis vulputate, facilisis sem nec, suscipit mi. Fusce nec luctus metus, in malesuada massa. Phasellus tempus euismod nibh, sed facilisis ex lobortis ut.');
            $project->setAddress($i.' rue du maréchal ferrand');
            $project->setCity('ville '.$i);
            $project->setPostcode(92000);
            $project->setPhone('06 06 06 06 0'.$i);
            $project->setEmail('email'.$i.'@gmail.com');
            $project->setStatus(rand(0,2));
            $project->setContact('contact'.$i);
            $project->setDownpayment(rand( 10,15));
            $project->setTotalPrice(rand( 15,100));
            $project->setRemaining($project->getTotalPrice() - $project->getDownpayment());
            $manager->persist($project);
        }
        $metadata = $manager->getClassMetaData(get_class($project));
        $metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
        $metadata->setIdGenerator(new AssignedGenerator());


        $manager->flush();
    }
}
