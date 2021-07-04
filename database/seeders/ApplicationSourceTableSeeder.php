<?php

use Illuminate\Database\Seeder;

class ApplicationSourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_sources')->insert([
            'name' => 'Indeed',
            'slug' => 'indeed'
        ]);

        DB::table('application_sources')->insert([
            'name' => 'CraigsList',
            'slug' => 'craigslist'
        ]);
    }
}
