<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categories::factory()
            ->count(5)
            ->create();
    }
}
