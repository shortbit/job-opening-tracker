<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert([
            'name' => 'Indeed',
            'slug' => 'indeed',
        ]);

        DB::table('sources')->insert([
            'name' => 'CraigsList',
            'slug' => 'craigslist',
        ]);

        DB::table('sources')->insert([
            'name' => 'CareerBuilder',
            'slug' => 'careerbuilder',
        ]);

        DB::table('sources')->insert([
            'name' => 'Snag A Job',
            'slug' => 'snagajob',
        ]);

        DB::table('sources')->insert([
            'name' => 'Walk-In',
            'slug' => 'walk-in',
        ]);

    }
}
