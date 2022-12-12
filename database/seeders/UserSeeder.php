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
        Image::factory(1)->create([
            'imageable_id' => 1,
            'imageable_type' => User::class
        ]);

        $image = Image::find(1);
        
        User::factory()->create([
            'name' => 'Admin Test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'profile_photo_path' =>  $image->url,

        ])->assignRole('Admin');

        User::factory(19)->create();
    }
}
