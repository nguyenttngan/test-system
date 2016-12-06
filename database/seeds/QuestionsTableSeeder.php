<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;
use App\Question;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = Category::all();
        foreach($categories as $category){
            factory(Question::class, 5)->create([
                'category_id' => $category->id,
            ]);
        }
    }
}
