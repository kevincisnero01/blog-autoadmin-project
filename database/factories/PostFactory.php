<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(100),
            'body' => $this->faker->text(600),
            'status' => 2,
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
