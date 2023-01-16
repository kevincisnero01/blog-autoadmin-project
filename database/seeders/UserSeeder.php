<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Image::factory()->create([
            'imageable_id' => 1,
            'imageable_type' => User::class
        ]);

        $image = Image::find(1);
        
        User::factory()->create([
            'name' => 'Root User',
            'email' => 'root@gmail.com',
            'password' => bcrypt('root'),
            'profile_photo_path' =>  $image->url,

        ])->assignRole('Root');

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'profile_photo_path' =>  $image->url,

        ])->assignRole('Admin');

        
        User::factory()->create([
            'name' => 'Blog User',
            'email' => 'blog@gmail.com',
            'password' => bcrypt('blog'),
            'profile_photo_path' =>  $image->url,

        ])->assignRole('Blogger');

        User::factory()->create([
            'name' => 'Guest User',
            'email' => 'guest@gmail.com',
            'password' => bcrypt('guest'),
            'profile_photo_path' =>  $image->url,

        ])->assignRole('Guest');

        //User::factory(10)->create();
    }
}
