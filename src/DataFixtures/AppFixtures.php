<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!

            $product = new User();
            $product->setUsername('admin');
            $product->setPassword('admin');
            $product->setEmail('admin@admin.com');
            $product->setIsActive(true);
            $manager->persist($product);

            $manager->flush();
    }

    /*private function encPass(UserPasswordEncoderInterface $encoder) {
        $user = new App\Entity\User();
        $plainPassword = 'admin';
        $encoded = $encoder->encodePassword($user, $plainPassword);

        return $encoded;
    }*/
}