<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new project();
            $project->setUserid(1);
            $project->setName('project '.$i);
            $project->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ipsum nibh. Curabitur at luctus mi. Pellentesque pharetra bibendum efficitur. Nullam a felis vulputate, facilisis sem nec, suscipit mi. Fusce nec luctus metus, in malesuada massa. Phasellus tempus euismod nibh, sed facilisis ex lobortis ut.');
            $project->setAddress($i.' rue du maréchal ferrand');
            $project->setCity('ville '.$i);
            $project->setPostcode(92000);
            $project->setPhone('06 06 06 06 0'.$i);
            $project->setEmail('email'.$i.'@gmail.com');
            $project->setStatus(0);
            $project->setContact('contact'.$i);
            $manager->persist($project);
        }

        $manager->flush();
    }
}
