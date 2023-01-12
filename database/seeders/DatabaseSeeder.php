<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Category::factory(5)->create();
        Tag::factory(5)->create();
        $this->call(PostSeeder::class);
    }
}
