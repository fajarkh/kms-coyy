<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@kmsdayak.com',
            'password' => app('hash')->make('admin123'),
            'level' => '1',
            'remember_token' => Str::random(10)
        ]);
    }
}
