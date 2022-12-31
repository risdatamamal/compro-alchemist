<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            HeaderSeeder::class,
            AboutSeeder::class,
            ExperiencesSeeder::class,
            OurServiceSeeder::class,
            PracticingAreaSeeder::class,
            AttorneysSeeder::class,
            ContactsSeeder::class,
            SocialMediasSeeder::class,
        ]);
    }
}
