<?php

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
        $this->call(\Database\Seeds\UsersTableSeeder::class);
        $this->call(\Database\Seeds\CountriesTableSeeder::class);
        $this->call(\Database\Seeds\GeneralConfigSeeder::class);
    }
}
