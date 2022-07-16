<?php

namespace Database\Seeders;

use App\Models\CeritaRakyat;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CeritaRakyatSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            CeritaRakyat::create(
                [
                    'nama' => $faker->name,
                    'deskripsi' => $faker->text,
                    'budaya_id' => 1,
                    'gambar' => 'gambar1.png'
                ]
            );
        }
    }
}
