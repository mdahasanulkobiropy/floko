<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TspeakerPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tspeakers')->insert([
            'title'=>'Meet the talented Speakers',
            'subtitle'=>'The convention is the main event of the year for professionals in the world of design and architecture.',
        ]);
    }
}
