<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('sales')->insert([
                'product_id' => $faker->numberBetween(1, 20), // Assuming you have 20 products
                'quantity' => $faker->numberBetween(1, 10),
                'total_amount' => $faker->randomFloat(2, 10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

