<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->count(10)->create();
        Booking::factory()->count(10)->create();
        User::create([
            "name"=>"Khant Min Kyi",
            "email"=>"khantminkyi@gmail.com",
            "password"=>Hash::make("asdasdasd")
        ]);
    }
}
