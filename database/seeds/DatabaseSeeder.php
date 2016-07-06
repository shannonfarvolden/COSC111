<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(SubmissionTableSeeder::class);
        $this->call(QuizTableSeeder::class);
        $this->call(SurveyTableSeeder::class);
        Model::reguard();
    }
}
