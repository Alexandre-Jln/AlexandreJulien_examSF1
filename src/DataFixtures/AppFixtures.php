<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 15; $i++) {
            $user = new User();
            $user
                ->setEmail($faker->email)
                ->setRoles(['ROLE_USER'])
                ->setPassword($faker->password($minLength = 6, $maxLength = 20))
                ->setFirstName($faker->firstName)
                ->setLastName($faker->lastName)
                ->setSector($faker->randomElement(['RH', 'Informatique', 'Comptabilité', 'Direction']))
                ->setContractType($contractType = $faker->randomElement(['CDI', 'CDD', 'Interim']))
                ->setDepartureDate($contractType === 'CDI' ? null : $faker->dateTime('+3 years'));

            $manager->persist($user);
        }
        $manager->flush();
    }
}
