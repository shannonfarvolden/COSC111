<?php

use Illuminate\Database\Seeder;
use App\Evaluation;

class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluation::create(['category'=>'In-class activities','grade'=>10]);
        Evaluation::create(['category'=>'Assignments','grade'=>15]);
        Evaluation::create(['category'=>'Labs','grade'=>15]);
        Evaluation::create(['category'=>'Midterm 1','grade'=>10]);
        Evaluation::create(['category'=>'Midterm 2','grade'=>20]);
        Evaluation::create(['category'=>'Final Exam','grade'=>30]);
    }
}
