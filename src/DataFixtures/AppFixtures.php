<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use App\Entity\Pate;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i=0; $i < 5; $i++) {
            $user = new User();
            $user->setEmail($faker->email());
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($faker->password());
            $user->setUsername($faker->userName());
            $user->setAdress($faker->address());
            $manager->persist($user);

        }
        for ($i=0; $i < 15; $i++) {
            $pate = new Pate();
            $pate->setName($faker->name());
            $pate->setType($faker->sentence());
            $pate->setTime($faker->numberBetween(1, 60));
            $pate->setDifficulty($faker->numberBetween(1, 5));
            $pate->setStepOne($faker->paragraph());
            $pate->setStepTwo($faker->paragraph());
            $pate->setStepThree($faker->paragraph());
            $pate->setPicture($faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'));
            $pate->addIngredient(Ingredient::class->$faker->paragraph());
            $manager->persist($pate);

        }

        $manager->flush();
    }
}
