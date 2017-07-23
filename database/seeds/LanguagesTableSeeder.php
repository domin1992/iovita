<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'Polski (Polish)',
            'iso_code' => 'pl',
            'code' => 'pl-PL',
            'active' => true,
        ]);
    }
}
