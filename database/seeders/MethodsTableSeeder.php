<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('methods')->insert([
            'name' => 'Application',
            'slug' => 'application',
        ]);

        DB::table('methods')->insert([
            'name' => 'Resume',
            'slug' => 'resume',
        ]);
    }
}
