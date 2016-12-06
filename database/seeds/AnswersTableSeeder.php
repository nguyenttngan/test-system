<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
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
            $results = \App\Result::where('question_id', $question->id)->first();
//            foreach($results as $result){
//                $resultid[] = $result->id;
//            }
            factory(\App\Answer::class, 1)->create([
                'question_id' => $question->id,
                'result_id' => $results->id,
            ]);

        }
    }
}
