<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StudentsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $student = new Student();
        $student->setlastname('Le Roy-Nivot');
        $student->setfirstname('Mathis');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Cambert');
        $student->setfirstname('Killian');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Crochet');
        $student->setfirstname('Olivier');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Lafrechoux');
        $student->setfirstname('Elouan');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Battais');
        $student->setfirstname('Erwan');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Bernard');
        $student->setfirstname('Alexandre');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Bigeard');
        $student->setfirstname('Robin');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Marceau');
        $student->setfirstname('David');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Delreux');
        $student->setfirstname('Pierre');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Drouet');
        $student->setfirstname('Djimy');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Girard');
        $student->setfirstname('François');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Guerin');
        $student->setfirstname('Camille');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Guibert');
        $student->setfirstname('Valentin');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Guillard');
        $student->setfirstname('Corentin');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Joulie');
        $student->setfirstname('Antonin');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Ka');
        $student->setfirstname('Racine');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Lecuit');
        $student->setfirstname('Matteo');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Letembet-Ambily');
        $student->setfirstname('Claude Christian');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Maisonneuve');
        $student->setfirstname('Henry');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Potier');
        $student->setfirstname('Tanguy');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Reillon');
        $student->setfirstname('Antonin');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Remaud');
        $student->setfirstname('Sebastien');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Retiere');
        $student->setfirstname('Evan');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Rigaudeau');
        $student->setfirstname('Leo');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Scheidecker');
        $student->setfirstname('Romain');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Suchot');
        $student->setfirstname('Alexandre');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Vadillo');
        $student->setfirstname('Matthieu');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Vaucard');
        $student->setfirstname('Adrien');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();

        $student = new Student();
        $student->setlastname('Vera');
        $student->setfirstname('Samy');
        $student->setbirthdate('01-01-1999');

        $manager->persist($student);

        $manager->flush();
    }
}
