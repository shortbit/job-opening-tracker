<?php

use Illuminate\Database\Seeder;

class ApplicationStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_statuses')->insert([
            'name' => 'Applied',
            'slug' => 'applied'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Not Applied',
            'slug' => 'notapplied'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Interviewing',
            'slug' => 'interviewing'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Offer',
            'slug' => 'offer'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Accepted',
            'slug' => 'Accepted'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Rejected',
            'slug' => 'rejected'
        ]);
    }
}