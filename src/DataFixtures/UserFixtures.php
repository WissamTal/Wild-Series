<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
   /* private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }*/

    public function load(ObjectManager $manager)
    {
       /* // Création d’un utilisateur de type “contributeur” (= auteur)
        $contributor = new User();
        $contributor->setEmail('contributor@monsite.com');
        $contributor->setRoles(['ROLE_CONTRIBUTOR']);
        $contributor->setPassword($this->encoder->encodePassword(
            $contributor,
            'contributorpassword'
        ));

        $manager->persist($contributor);

        // Création d’un utilisateur de type “administrateur”
        $admin = new User();
        $admin->setEmail('admin@monsite.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->encoder->encodePassword(
            $admin,
            'adminpassword'
        ));

        $manager->persist($admin);

        // Sauvegarde des 2 nouveaux utilisateurs :
        $manager->flush();*/
    }
}
