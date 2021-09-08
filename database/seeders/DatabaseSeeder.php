<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Role;
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
        // \App\Models\User::factory(10)->create();
        Role::factory(3)->create();
        User::factory(5)->create();
        Article::factory(10)->create();
        Commentaire::factory(20)->create();
    }
}
