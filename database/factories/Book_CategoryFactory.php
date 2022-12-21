<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class book_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $book_id = DB::table('books')->pluck('id');
        $category_id = DB::table('categories')->pluck('id');
        return [
            'book_id' => $this->faker->unique()->randomElement($book_id),
            'category_id' => $this->faker->randomElement($category_id),
        ];
    }
}
