<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SpeakerPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('speakers')->insert([
            'name'=>'Duke Stump',
            'des'=>'Game-Changing CMO & Founder, Nonfire with Soul',
            'image'=>'thumb-2.png',

        ]);

        DB::table('speakers')->insert([
            'name'=>'Jelani Memory',
            'des'=>'Game-Changing CMO & Founder, Nonfire with Soul',
            'image'=>'thumb-3.png',

        ]);

        DB::table('speakers')->insert([
            'name'=>'Christa Couture pk',
            'des'=>'Game-Changing CMO & Founder, Nonfire with Soul',
            'image'=>'thumb-4.png',

        ]);

    }
}
