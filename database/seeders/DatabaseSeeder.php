<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('pokemons')->insert([
                'id' => str_pad($i, 4, '0', STR_PAD_LEFT),
                'name' => $faker->word,
                'species' => $faker->word,
                'primary_type' => $faker->randomElement(['Grass', 'Fire', 'Water', 'Bug', 'Normal', 'Poison', 'Electric', 'Ground', 'Fairy', 'Fighting', 'Psychic', 'Rock', 'Ghost', 'Ice', 'Dragon', 'Dark', 'Steel', 'Flying']),
                'weight' => $faker->randomFloat(2, 0, 9999),
                'height' => $faker->randomFloat(2, 0, 9999),
                'hp' => $faker->numberBetween(0, 9999),
                'attack' => $faker->numberBetween(0, 9999),
                'defense' => $faker->numberBetween(0, 9999),
                'is_legendary' => $faker->boolean,
                'photo' => $faker->imageUrl(640, 480, 'animals', true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
