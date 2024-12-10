<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ages')->insert([
            'id' => 1,
            'range' => '20~30歳',
        ]);

        DB::table('ages')->insert([
            'id' => 2,
            'range' => '31~40歳',
        ]);

        DB::table('ages')->insert([
            'id' => 3,
            'range' => '41~50歳',
        ]);

        DB::table('ages')->insert([
            'id' => 4,
            'range' => '51~60歳',
        ]);

        DB::table('ages')->insert([
            'id' => 5,
            'range' => '61歳~',
        ]);
    }
}
