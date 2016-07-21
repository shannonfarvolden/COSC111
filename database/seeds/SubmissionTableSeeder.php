<?php

use Illuminate\Database\Seeder;

class SubmissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create lab submissions
        for ( $i = 1; $i <= 10; $i++ )
        {
            App\Submission::create([
                'name'     => 'Lab ' . $i,
                'due_date' => Carbon\Carbon::createFromDate(2016, rand(8, 12), rand(1, 30)),
                'total'    => rand(10, 30),
                'category' => 'Labs',
                'active'   => true,
                'bonus'    => false
            ]);
        }
    }
}

