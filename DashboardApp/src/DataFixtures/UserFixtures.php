<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
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

        $manager->persist($user);

        $manager->flush();

        // RU - Romain Scheidecker
        $user = new User();
        $user->setUsername('romain.scheidecker');
        $user->setEmail('romain.scheidecker@ynov.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, 'P@ssw0rd')
        );
        $user->setUserType(0);

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

        $manager->persist($user);

        $manager->flush();
    }
}