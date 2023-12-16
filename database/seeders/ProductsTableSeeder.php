<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'quantity' => $faker->numberBetween(10, 100),
                'price' => $faker->randomFloat(2, 5, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    }

