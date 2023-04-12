<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class EventPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('events')->insert([
            'title'=>"Events You'll Remember",
            'subtitle'=>"We are a turnkey event agency in New York.",
            'eventinfopart1'=>"EventiX is a leading event management company in the United States. We hold the highest quality events pushing the boundaries of the industry standards.",
            'eventinfopart2'=>"We are passionate about creating integrated experiences that bring cohesive connection between brands and targeted audience. Our team of experienced and talented event  managers strive to deliver stellar results.",
            'image'=>"thumb-9.png",
       ]);
    }
}
