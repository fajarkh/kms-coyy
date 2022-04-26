<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            History::create(['judul' => 'judul' . $i, 'konten' => 'ini konten', 'kategori_id' => 1, 'gambar' => 'judul1.jpg']);
        }
        // History::create(['judul' => 'judul', 'konten' => 'ini konten', 'kategori_id' => 1, 'gambar' => 'judul1.jpg']);
    }
}
