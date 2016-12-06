<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = \App\Question::all();
        foreach($questions as $question){
            factory(\App\Result::class, 4)->create([
                'question_id' => $question->id,
            ]);
        }
    }
}
