<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(25)->create();
        \App\Models\Work::factory(80)->create();
        \App\Models\Chapter::factory(500)->create();
        \App\Models\Comment::factory(5000)->create();
        \App\Models\Tag_type::factory(25)->create();
        \App\Models\Tag::factory(500)->create();
        \App\Models\User_tag_blacklist::factory(100)->create();
        \App\Models\Work_tag::factory(500)->create();
        \App\Models\Work_like::factory(800)->create();
        \App\Models\User_author_blacklist::factory(100)->create();
        \App\Models\Collection::factory(40)->create();
        \App\Models\Collection_list::factory(250)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
