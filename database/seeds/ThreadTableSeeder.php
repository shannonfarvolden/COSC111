<?php

use Illuminate\Database\Seeder;
use App\User;

class ThreadTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        for ( $i = 0; $i < 10; $i++ )
        {
            $student = $users->random();
            $thread = $student->threads()->save(factory(App\Thread::class)->make());
            $numReplies = rand(0, 5);
            for ( $j = 0; $j < $numReplies; $j++ )
            {
                $thread->replies()->save(array_add(factory(App\Reply::class)->make(), 'user_id', $users->random()->id ));

            }
        }

    }
}
