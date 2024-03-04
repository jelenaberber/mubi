<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,20) as $index){
            DB::table('users')->insert([
                'role_id'=>3,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'username' => $faker->userName(),
                'email' => $faker -> email(),
                'password' => 'sifra123',
                'profile_img' => 'person_jpg',
            ]);
        }

    }
}
