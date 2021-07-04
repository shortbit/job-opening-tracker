<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('methods')->insert([
            'name' => 'Applied',
            'slug' => 'applied',
        ]);

        DB::table('methods')->insert([
            'name' => "Called",
            'slug' => 'called',
        ]);

        DB::table('methods')->insert([
            'name' => 'Interviewing',
            'slug' => 'interviewing',
        ]);

        DB::table('methods')->insert([
            'name' => 'Hired',
            'slug' => 'hired',
        ]);

        DB::table('methods')->insert([
            'name' => 'Rejected',
            'slug' => 'rejected',
        ]);
    }
}
