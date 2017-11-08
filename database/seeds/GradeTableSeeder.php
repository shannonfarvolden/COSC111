<?php

use Illuminate\Database\Seeder;
use App\Submission;
use App\User;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('admin', false)->get();
        $submissions = Submission::all();
        foreach($users as $user){
           foreach($submissions as $submission){
               $user->grades()->create(['user_id'=>$user->id, 'submission_id'=>$submission->id, 'mark'=>rand(0, $submission->total)]);
           }

        }
    }
}
