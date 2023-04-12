<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class HeroPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
            'titlepart1'=>'grow',
            'titlepart2'=>'faster',
            'titlepart3'=>'with a',
            'titlepart4'=>'coach',
            'subtitle'=>' Work with a world-class coach to grow as a leader, find career clarity, or accelerate your job search.',
            'limage'=>'thumb-2.png',
            'rimage'=>'thumb-3.png',
       ]);
    }
}
