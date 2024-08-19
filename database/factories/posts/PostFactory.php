<?php

namespace Database\Factories\Posts;

use App\Models\posts\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence(),
            'slug'=> $this->faker->slug(),
            'content'=> $this->faker->text(1000),
            'category'=> $this->faker->word(),
        ];
    }
}
