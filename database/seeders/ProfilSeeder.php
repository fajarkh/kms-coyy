<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProfilSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            Profil::create(['nama' => $faker->words(3, true), 'deskripsi' => $faker->text, 'budaya_id' => 1]);
        }
    }
}
