<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AgeSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            LikeSeeder::class,
            AreaSeeder::class,
            Area_userSeeder::class,
            ConditionSeeder::class,
            Condition_userSeeder::class,
            WorkSeeder::class,
            SupporterSeeder::class,
            FollowerSeeder::class,
        ]);
    }
}
