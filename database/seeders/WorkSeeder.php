<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            'name' => '精神科医',
        ]);

        DB::table('works')->insert([
            'name' => '公認心理士',
        ]);

        DB::table('works')->insert([
            'name' => '臨床心理士',
        ]);

        DB::table('works')->insert([
            'name' => '介護福祉士',
        ]);

        DB::table('works')->insert([
            'name' => 'その他',
        ]);
    }
}
