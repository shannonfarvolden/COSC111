<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i = 1; $i <= 10; $i++ )
        {
            $quiz = App\Quiz::create([
                'name'   => 'Quiz ' . $i,
                'active' => true
            ]);
            for ( $j = 1; $j <= 10; $j++ )
            {
                $question = $quiz->questions()->save(factory(App\Question::class)->make());
                for ( $k = 1; $k <= 3; $k++ )
                {
                    $question->answers()->save(factory(App\Answer::class)->make(['correct' => false]));
                }
                $question->answers()->save(factory(App\Answer::class)->make(['correct' => true]));
            }
        }
    }
}
