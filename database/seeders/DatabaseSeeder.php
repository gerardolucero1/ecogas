<?php

namespace Database\Seeders;

use App\Models\Info;
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
        $info = Info::create([
            'registers' => 0,
            'prizes' => 0
        ]);
    }
}
