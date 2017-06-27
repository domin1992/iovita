<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'display_name' => 'John Doe',
            'email' => 'admin@iovita.dev',
            'password' => bcrypt('password'),
        ]);
    }
}
