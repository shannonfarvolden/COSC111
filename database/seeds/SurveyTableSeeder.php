<?php

use Illuminate\Database\Seeder;

class SurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = App\Survey::create(['name'=>'Survey 1']);
        for ( $j = 1; $j <= 10; $j++ )
        {
            $question = $survey->questions()->save(factory(App\SurveyQuestion::class)->make());
            for ( $k = 1; $k <= 4; $k++ )
            {
                $question->answers()->save(factory(App\SurveyAnswer::class)->make());
            }
        }
    }
}
