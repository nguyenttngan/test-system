<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        [
            'name'=> 'Git',
        ],
        [
            'name' => 'SQL'
        ],
        [
            'name'=> 'Laravel'
        ]
            ];
        DB::table('categories')->insert($categories);
    }
}
