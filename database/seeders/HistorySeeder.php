<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            History::create(
                [
                    'judul' => $faker->name,
                    'konten' => $faker->text,
                    'kategori_id' => 1,
                    'gambar' => 'gambar1.png'
                ]
            );
        }
    }
}
