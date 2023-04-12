<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class KeywordPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keywords')->insert([
            'keyword'=>'Leadership Coaching'
        ]);
        DB::table('keywords')->insert([
            'keyword'=>'Career Coaching'
        ]);
        DB::table('keywords')->insert([
            'keyword'=>'Life Coaching'
        ]);
        DB::table('keywords')->insert([
            'keyword'=>'Job Search Coaching'
        ]);
        DB::table('keywords')->insert([
            'keyword'=>'Leadership Coaching'
        ]);
    }
}
