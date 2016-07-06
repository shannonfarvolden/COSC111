<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // A known admin user
        App\User::create([
            'first_name'     => 'Jane',
            'last_name'      => 'Doe',
            'email'          => 'admin@example.com',
            'password'       => bcrypt('password'),
            'student_number' => '12345678',
            'remember_token' => str_random(10),
            'admin'          => true,

        ]);

        factory(App\User::class, 20)->create();
    }
}
