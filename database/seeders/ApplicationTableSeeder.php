<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker;
        DB::table('application')->insert([
            'app_date' => Carbon::now(),
            'user_id' => 1,
            'position' => "News Anchor",
            'company' => "AJB News",
            'location' => 'Noman, VT',
            'calls' => 'N/A',
            'source' => 1,
            'method' => 2,
            'status' => 1,
            'interviews' => 'N/A',
            'contact_name' => 'Toby Shoof',
            'contact_phone' => '521-483-8723',
            'contact_email' => 'tshoof@ajbnews.com',
        ]);
    }
}
