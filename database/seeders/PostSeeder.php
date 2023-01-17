<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post::truncate();

        $csvFile = fopen(base_path("database/data/post.csv"), "r");
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Post::create([
                    "id" => utf8_encode($data['0']),
                    "name" => utf8_encode($data['1']),
                    "slug" => utf8_encode($data['2']),
                    "extract" => utf8_encode($data['3']),
                    "body" => utf8_encode($data['4']),
                    "status" => utf8_encode($data['5']),
                    "user_id" => utf8_encode($data['6']),
                    "category_id" => utf8_encode($data['7'])
                ]);    
            }
            $firstline = false;
        }
        
        fclose($csvFile);


        $posts = Post::all();

        foreach($posts as $post)
        {
            Image::factory()->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            $post->tags()->attach([
                rand(1,3),
                rand(4,5)
            ]);
        }

        
    }
}
