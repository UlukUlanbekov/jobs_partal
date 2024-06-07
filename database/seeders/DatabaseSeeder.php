<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Company::factory(10)->create();
         Position::factory()->count(20)->create();

         $this->call([
             ApplicationSeeder::class,
         ]);
    }
}
