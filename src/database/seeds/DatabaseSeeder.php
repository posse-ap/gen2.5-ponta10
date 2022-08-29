<?php

use App\Country;
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
        $this->call(StudyTableSeeder::class);
        $this->call(TodoTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(PokemonTableSeeder::class);
        $this->call(Pokemon_userTableSeeder::class);
    }
}
