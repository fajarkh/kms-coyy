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
        History::create(['judul' => 'judul', 'konten' => 'ini konten', 'kategori_id' => 1, 'gambar' => 'judul1.jpg']);
    }
}
