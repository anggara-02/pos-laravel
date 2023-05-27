<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class LogActivity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 50; $i++) { 
            DB::table('log_activity')->insert([
                'log_user_id'   => $faker->randomDigitNot(0),
                'log_datetime'  => $faker->date('Y-m-d'),
                'log_desc'      => $faker->text(100),
            ]);
        }
    }
}