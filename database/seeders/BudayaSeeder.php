<?php

namespace Database\Seeders;

use App\Models\Budaya;
use App\Models\User;
use Illuminate\Database\Seeder;

class BudayaSeeder extends Seeder
{
    public function run()
    {
        Budaya::updateOrCreate(
            ['id' => 1],
            [
                'nama' => 'Dayak Bahau',
                'user_id' => User::where('level', 1)->first()->id
            ]
        );
    }
}
