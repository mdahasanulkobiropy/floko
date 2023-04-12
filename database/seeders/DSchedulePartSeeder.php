<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DSchedulePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dschedules')->insert([
            'title'=>'Schedule',
            'subtitle'=>'A representation of the event planning of the Design Conference',
        ]);
    }
}
