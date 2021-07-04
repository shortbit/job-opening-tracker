<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $date = $faker->date;
        $name = $faker->name;
        $contact = $faker->name;
        $location = $faker->city;
        $contact_phone = $faker->phoneNumber;
        $contact_email = $faker->email;
        DB::table('applications')->insert([
            'user_id' => 1,
            'date' => $date,
            'position' => 'Customer Service',
            'company' => 'WalMart',
            'location' => $location,
            'contact_name' => $contact,
            'contact_phone' => $contact_phone,
            'contact_email' => $contact_email,
            'method' => 'Resume',
            'status' => 'Applied',
            'source' => 'Indeed',
            'called' => true,

        ]);
    }
}
