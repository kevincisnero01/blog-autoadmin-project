<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'url' => $this->faker->imageUrl(640,480),
            'url' => 'posts/' . $this->faker->image('public/storage/posts',640,480,null,false), //posts/image.jpg
        ];
    }
}
