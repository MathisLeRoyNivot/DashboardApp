<?php

namespace App\DataFixtures;

use App\Entity\MainStats;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MainStatFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Statistiques basées sur 100%

        // PONCTUALITE
        $stat = new MainStats();
        $stat->setStatName("Ponctualité");
        $stat->setValue(90);

        $manager->persist($stat);
        $manager->flush();

        // ABSENTEISME
        $stat = new MainStats();
        $stat->setStatName("Absentéisme");
        $stat->setValue(3);

        $manager->persist($stat);
        $manager->flush();

        // QUALITE DU TRAVAIL
        $stat = new MainStats();
        $stat->setStatName("Qualité du travail");
        $stat->setValue(55);

        $manager->persist($stat);
        $manager->flush();

        // NOUVEAUX ELEVES (par rapport à année -1)
        $stat = new MainStats();
        $stat->setStatName("Nouveau(x) élève(s)");
        $stat->setValue(1);

        $manager->persist($stat);
        $manager->flush();

        // ELEVES EN MOINS (par rapport à année -1)
        $stat = new MainStats();
        $stat->setStatName("Elève(s) en moins");
        $stat->setValue(4);

        $manager->persist($stat);
        $manager->flush();
    }
}
