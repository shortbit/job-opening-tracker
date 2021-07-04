<?php

use Illuminate\Database\Seeder;

class ApplicationMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_methods')->insert([
            'name' => 'Application',
            'slug' => 'application'
        ]);

        DB::table('application_methods')->insert([
            'name' => 'Resume',
            'slug' => 'Resume'
        ]);
    }
}
