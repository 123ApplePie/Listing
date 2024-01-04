<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 2000) as $index) {
            DB::table('companies')->insert([
                'city_id' => $faker->randomElement([$faker->numberBetween(2025412, 2034424), 3174010, 3174014, 3174017]),   //Interval of the cities
                'company' => $faker->company,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'street' => $faker->streetName,
            ]);
        }    
    }
}
