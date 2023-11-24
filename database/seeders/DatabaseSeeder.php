<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class  DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(5)->create();
        $posts = \App\Models\Post::factory(200)->create();
        foreach ($posts as $post) {
            $post->categories()->attach([rand(1, 5), rand(1, 5)]);
        }
        \App\Models\User::create([
            'name'=>'admin',
            'email'=>'alexzvon31@gmail.com',
            'password'=>'$2y$12$VZTzDuTE5emrRWxWJ13XsumZtZxtwbY3MaukQm.t5RnoOy8ATXuHa',
            'is_admin'=>true,
        ]);
    }
}
