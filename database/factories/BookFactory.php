<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $publisher_id = DB::table('publishers')->pluck('id');
        return [
            'publisher_id' => $this->faker->randomElement($publisher_id),
            'title' => $this->faker->word(),
            'author' => $this->faker->name(),
            'year' => $this->faker->year($max = 'now'),
            'synopsis' => $this->faker->text(),
            'image' => "https://picsum.photos/seed/".$this->faker->unique()->word."/640/480/"
        ];
    }
}
