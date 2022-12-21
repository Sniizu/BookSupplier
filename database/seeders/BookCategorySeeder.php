<?php

namespace Database\Seeders;

use App\Models\book_category;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        book_category::factory()
            ->count(100)
            ->create();
    }
}
