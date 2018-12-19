<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Students;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StudentsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $student = new Students();
        $student->setlastname('Le Roy-Nivot');
        $student->setfirstname('Mathis');
        $student->getEmail(2);

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Cambert');
        $student->setfirstname('Killian');
        $student->setEmail('killian.cambert@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Crochet');
        $student->setfirstname('Olivier');
        $student->setEmail('olivier.crochet@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Lafrechoux');
        $student->setfirstname('Elouan');
        $student->setEmail('elouan.lafrechoux@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Battais');
        $student->setfirstname('Erwan');
        $student->setEmail('erwan.battais@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Bernard');
        $student->setfirstname('Alexandre');
        $student->setEmail('alexandre.bernard@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Bigeard');
        $student->setfirstname('Robin');
        $student->setEmail('robin.bigeard@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Marceau');
        $student->setfirstname('David');
        $student->setEmail('marceau.david@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Delreux');
        $student->setfirstname('Pierre');
        $student->setEmail('pierre.delreux@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Drouet');
        $student->setfirstname('Djimmy');
        $student->setEmail('djimy.drouet@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Girard');
        $student->setfirstname('François');
        $student->setEmail('francois.girard@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Guerin');
        $student->setfirstname('Camille');
        $student->setEmail('camille.guerin@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Guibert');
        $student->setfirstname('Valentin');
        $student->setEmail('valentin.guibert@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Guillard');
        $student->setfirstname('Corentin');
        $student->setEmail('corentin.guillard@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Joulie');
        $student->setfirstname('Antonin');
        $student->setEmail('antonin.joulie@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Ka');
        $student->setfirstname('Racine');
        $student->setEmail('racine.ka@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Lecuit');
        $student->setfirstname('Matteo');
        $student->setEmail('matteo.lecuit@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Letembet-Ambily');
        $student->setfirstname('Claude Christian');
        $student->setEmail('claudechristian.letembetambily@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Maisonneuve');
        $student->setfirstname('Henry');
        $student->setEmail('henry.maisonneuve@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Potier');
        $student->setfirstname('Tanguy');
        $student->setEmail('tanguy.potier@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Reillon');
        $student->setfirstname('Antonin');
        $student->setEmail('antonin.reillon@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Remaud');
        $student->setfirstname('Sebastien');
        $student->setEmail('sebastien.remaud@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Retiere');
        $student->setfirstname('Evan');
        $student->setEmail('evan.retiere@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Rigaudeau');
        $student->setfirstname('Leo');
        $student->setEmail('leo.rigaudeau@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Scheidecker');
        $student->setfirstname('Romain');
        $student->setEmail('romain.schedeicker@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Suchot');
        $student->setfirstname('Alexandre');
        $student->setEmail('alexandre.suchot@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Vadillo');
        $student->setfirstname('Matthieu');
        $student->setEmail('matthieu.vadillo@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Vaucard');
        $student->setfirstname('Adrien');
        $student->setEmail('adrien.vaucard@ynov.com');

        $manager->persist($student);

        $manager->flush();

        $student = new Students();
        $student->setlastname('Vera');
        $student->setfirstname('Samy');
        $student->setEmail('samy.vera@ynov.com');

        $manager->persist($student);

        $manager->flush();
    }
}
