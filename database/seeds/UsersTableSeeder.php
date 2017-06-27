<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Richard',
            'lastname' => 'Roe',
            'email' => 'user@iovita.dev',
            'password' => bcrypt('password'),
        ]);
    }
}
