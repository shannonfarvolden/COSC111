<?php

use App\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Setting::create(['active_forum' => true, 'quiz_delay' => 1]);
        $this->call(EvaluationTableSeeder::class);
        $this->call(QuizTableSeeder::class);
        $this->call(SurveyTableSeeder::class);

        // for testing
//        $this->call(UserTableSeeder::class);
//        $this->call(SubmissionTableSeeder::class);
//        $this->call(GradeTableSeeder::class);
//        $this->call(ThreadTableSeeder::class);

        Model::reguard();
    }
}
