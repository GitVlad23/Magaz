<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::factory(1)->create([
           "name" => "Admin",
           "email" => "admin@laravel.com",
           "password" => bcrypt("12345")
       ]);
    }
}
