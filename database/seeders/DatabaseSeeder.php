<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            JailSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ReportSeeder::class,
            WardSeeder::class,
            
            ImageSeeder::class
        ]);
    }
}