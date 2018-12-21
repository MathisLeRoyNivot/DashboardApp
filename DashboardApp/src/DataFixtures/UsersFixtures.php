<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager)
    {
        // ADMIN USERS
        // AU - Mathis Le Roy-Nivot
        $user = new User();
        $user->setUsername('mathis.leroynivot');
        $user->setEmail('mathis.leroynivot@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(1);
        $user->setLastname('Le Roy-Nivot');
        $user->setFirstname('Mathis');
        $user->setMarkDev(15);
        $user->setMarkNetwork(12);
        $user->setMarkBdd(16);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // AU - Elouan Lafrechoux
        $user = new User();
        $user->setUsername('elouan.lafrechoux');
        $user->setEmail('elouan.lafrechoux@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(1);
        $user->setLastname('Lafréchoux');
        $user->setFirstname('Elouan');
        $user->setMarkDev(13);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(19);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // AU - Killian Cambert
        $user = new User();
        $user->setUsername('killian.cambert');
        $user->setEmail('killian.cambert@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(1);
        $user->setLastname('Cambert');
        $user->setFirstname('Killian');
        $user->setMarkDev(17);
        $user->setMarkNetwork(9);
        $user->setMarkBdd(13);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // AU - Olivier Crochet
        $user = new User();
        $user->setUsername('olivier.crochet');
        $user->setEmail('olivier.crochet@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(1);
        $user->setLastname('Crochet');
        $user->setFirstname('Olivier');
        $user->setMarkDev(14);
        $user->setMarkNetwork(11);
        $user->setMarkBdd(10);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // ----------------------------------------------------------------------------------------------
        // REGULAR USERS
        // RU - Erwan Battais
        $user = new User();
        $user->setUsername('erwan.battais');
        $user->setEmail('erwan.battais@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Battais');
        $user->setFirstname('Erwan');
        $user->setMarkDev(14);
        $user->setMarkNetwork(12);
        $user->setMarkBdd(16);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Alexandre Bernard
        $user = new User();
        $user->setUsername('alexandre.bernard');
        $user->setEmail('alexandre.bernard@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Bernard');
        $user->setFirstname('Alexandre');
        $user->setMarkDev(18);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(13);
        $user->setMarkPunctuality(30);

        $manager->persist($user);

        $manager->flush();

        // RU - Robin Bigeard
        $user = new User();
        $user->setUsername('robin.bigeard');
        $user->setEmail('robin.bigeard@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Bigeard');
        $user->setFirstname('Robin');
        $user->setMarkDev(20);
        $user->setMarkNetwork(15);
        $user->setMarkBdd(16);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Marceau David
        $user = new User();
        $user->setUsername('marceau.david');
        $user->setEmail('marceau.david@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('David');
        $user->setFirstname('Marceau');
        $user->setMarkDev(19);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(12);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Pierre Delreux
        $user = new User();
        $user->setUsername('pierre.delreux');
        $user->setEmail('pierre.delreux@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Delreux');
        $user->setFirstname('Pierre');
        $user->setMarkDev(13);
        $user->setMarkNetwork(11);
        $user->setMarkBdd(12);
        $user->setMarkPunctuality(80);

        $manager->persist($user);

        $manager->flush();

        // RU - Djimmy Drouet
        $user = new User();
        $user->setUsername('djimmy.drouet');
        $user->setEmail('djimmy.drouet@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Drouet');
        $user->setFirstname('Djimmy');
        $user->setMarkDev(13);
        $user->setMarkNetwork(9);
        $user->setMarkBdd(11);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - François Girard
        $user = new User();
        $user->setUsername('francois.girard');
        $user->setEmail('francois.girard@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Girard');
        $user->setFirstname('François');
        $user->setMarkDev(11);
        $user->setMarkNetwork(10);
        $user->setMarkBdd(12);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Camille Guerin
        $user = new User();
        $user->setUsername('camille.guerin');
        $user->setEmail('camille.retiere@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Guérin');
        $user->setFirstname('Camille');
        $user->setMarkDev(14);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(12);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Valentin Guibert
        $user = new User();
        $user->setUsername('valentin.guibert');
        $user->setEmail('valentin.guibert@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Guibert');
        $user->setFirstname('Valentin');
        $user->setMarkDev(14);
        $user->setMarkNetwork(12);
        $user->setMarkBdd(11);
        $user->setMarkPunctuality(80);

        $manager->persist($user);

        $manager->flush();

        // RU - Corentin Guillard
        $user = new User();
        $user->setUsername('corentin.guillard');
        $user->setEmail('corentin.guillard@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Guillard');
        $user->setFirstname('Corentin');
        $user->setMarkDev(13);
        $user->setMarkNetwork(12);
        $user->setMarkBdd(13);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Antonin Joulie
        $user = new User();
        $user->setUsername('antonin.joulie');
        $user->setEmail('antonin.joulie@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Joulie');
        $user->setFirstname('Antonin');
        $user->setMarkDev(15);
        $user->setMarkNetwork(12);
        $user->setMarkBdd(14);
        $user->setMarkPunctuality(45);

        $manager->persist($user);

        $manager->flush();

        // RU - Racine Ka
        $user = new User();
        $user->setUsername('racine.ka');
        $user->setEmail('racine.ka@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Ka');
        $user->setFirstname('Racine');
        $user->setMarkDev(9);
        $user->setMarkNetwork(8);
        $user->setMarkBdd(7);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Matteo Lecuit
        $user = new User();
        $user->setUsername('matteo.lecuit');
        $user->setEmail('matteo.lecuit@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Lecuit');
        $user->setFirstname('Mattéo');
        $user->setMarkDev(18);
        $user->setMarkNetwork(16);
        $user->setMarkBdd(17);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Claude Christian LETEMBET AMBILY
        $user = new User();
        $user->setUsername('claudechristian.letembetambily');
        $user->setEmail('claudechristian.letembetambily@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Letembet Ambily');
        $user->setFirstname('Claude Christian');
        $user->setMarkDev(13);
        $user->setMarkNetwork(11);
        $user->setMarkBdd(12);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Henry Maisonneuve
        $user = new User();
        $user->setUsername('henry.maisonneuve');
        $user->setEmail('henry.maisonneuve@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Maisonneuve');
        $user->setFirstname('Henry');
        $user->setMarkDev(15);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(15);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Tanguy Potier
        $user = new User();
        $user->setUsername('tanguy.potier');
        $user->setEmail('tanguy.potier@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Potier');
        $user->setFirstname('Tanguy');
        $user->setMarkDev(15);
        $user->setMarkNetwork(20);
        $user->setMarkBdd(14);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Antonin Reillon
        $user = new User();
        $user->setUsername('antonin.reillon');
        $user->setEmail('antonin.reillon@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Reillon');
        $user->setFirstname('Antonin');
        $user->setMarkDev(10);
        $user->setMarkNetwork(9);
        $user->setMarkBdd(10);
        $user->setMarkPunctuality(60);

        $manager->persist($user);

        $manager->flush();

        // RU - Sebastien Remaud
        $user = new User();
        $user->setUsername('sebastien.remaud');
        $user->setEmail('sebastien.remaud@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Remaud');
        $user->setFirstname('Sébastien');
        $user->setMarkDev(9);
        $user->setMarkNetwork(8);
        $user->setMarkBdd(8);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Evan Retiere
        $user = new User();
        $user->setUsername('evan.retiere');
        $user->setEmail('evan.retiere@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Retière');
        $user->setFirstname('Evan');
        $user->setMarkDev(13);
        $user->setMarkNetwork(11);
        $user->setMarkBdd(13);
        $user->setMarkPunctuality(25);

        $manager->persist($user);

        $manager->flush();

        // RU - Léo Rigaudeau
        $user = new User();
        $user->setUsername('leo.rigaudeau');
        $user->setEmail('leo.rigaudeau@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Rigaudeau');
        $user->setFirstname('Léo');
        $user->setMarkDev(16);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(15);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Romain Schedeicker
        $user = new User();
        $user->setUsername('romain.schedeicker');
        $user->setEmail('romain.schedeicker@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Schedeicker');
        $user->setFirstname('Romain');
        $user->setMarkDev(11);
        $user->setMarkNetwork(10);
        $user->setMarkBdd(9);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Alexandre Suchot
        $user = new User();
        $user->setUsername('alexandre.suchot');
        $user->setEmail('alexandre.suchot@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Suchot');
        $user->setFirstname('Alexandre');
        $user->setMarkDev(20);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(18);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Johan Teillais
        $user = new User();
        $user->setUsername('johan.teillais');
        $user->setEmail('johan.teillais@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Teillais');
        $user->setFirstname('Johan');
        $user->setMarkDev(12);
        $user->setMarkNetwork(10);
        $user->setMarkBdd(11);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Matthieu Vadillo
        $user = new User();
        $user->setUsername('matthieu.vadillo');
        $user->setEmail('matthieu.vadillo@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Vadillo');
        $user->setFirstname('Matthieu');
        $user->setMarkDev(11);
        $user->setMarkNetwork(10);
        $user->setMarkBdd(10);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Adrien Vaucard
        $user = new User();
        $user->setUsername('adrien.vaucard');
        $user->setEmail('adrien.vaucard@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Vaucard');
        $user->setFirstname('Adrien');
        $user->setMarkDev(20);
        $user->setMarkNetwork(17);
        $user->setMarkBdd(18);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

        // RU - Samy Vera
        $user = new User();
        $user->setUsername('samy.vera');
        $user->setEmail('samy.vera@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);
        $user->setLastname('Vera');
        $user->setFirstname('Samy');
        $user->setMarkDev(20);
        $user->setMarkNetwork(14);
        $user->setMarkBdd(16);
        $user->setMarkPunctuality(100);

        $manager->persist($user);

        $manager->flush();

    }
}
