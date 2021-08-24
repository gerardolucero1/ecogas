<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Pruebas',
            'email' => 'pruebas@pruebas.com',
            'password' => bcrypt('12345678')
        ]);

        $info = Info::create([
            'registers' => 0,
            'prizes' => 0
        ]);
    }
}
