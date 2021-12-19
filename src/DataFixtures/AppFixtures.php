<?php
/*
 * This file is part of the TEST Project.
 *
 * (c) Hamza El Ghoul <elghoulhamzaa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\MovieList;
use App\Entity\UserMovie;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private  $passwordHasher;
    
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $hasher = $this->passwordHasher;
        
        $user = new User();
        $user->setUsername('justATest')->setPassword($hasher->hashPassword($user, 'justATest123'));
        $manager->persist($user);
        
        $user2 = new User();
        $user2->setUsername('another')->setPassword($hasher->hashPassword($user2, 'another123'));
        $manager->persist($user2);
        
        $user3 = new User();
        $user3->setUsername('oneMore')->setPassword($hasher->hashPassword($user3, 'oneMore123'));
        $manager->persist($user3);
        

    }
}
