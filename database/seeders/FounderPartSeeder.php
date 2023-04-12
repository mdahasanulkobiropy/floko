<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class FounderPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('founders')->insert([
            'name'=>'Jonathan Kennedy',
            'short_des'=>'Founder of Producthunt',
            'long_des'=> "We just want to say thank you to Floko and to their highly professional staff! They  have supported us throughout all the event. Everything was well organized! The event'sturned to be a great success! You deserve the highest grade!",
            'image'=>'thumb-5.png',
        ]);

        DB::table('founders')->insert([
            'name'=>'Jonathan Kennedy',
            'short_des'=>'Founder of Producthunt',
            'long_des'=> "We just want to say thank you to Floko and to their highly professional staff! They  have supported us throughout all the event. Everything was well organized! The event'sturned to be a great success! You deserve the highest grade!",
            'image'=>'thumb-6.png',
        ]);
        DB::table('founders')->insert([
            'name'=>'Jonathan Kennedy',
            'short_des'=>'Founder of Producthunt',
            'long_des'=> "We just want to say thank you to Floko and to their highly professional staff! They  have supported us throughout all the event. Everything was well organized! The event'sturned to be a great success! You deserve the highest grade!",
            'image'=>'thumb-7.png',
        ]);
    }
}
