<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SchedulePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            'serialday'=>'Day One',
            'numericdate'=>'05',
            'monthday'=>' April, Tuesday',
            'rtime'=>'8:00 AM - 9:00 AM',
            'rtitle'=>'Registration & Coffee',
            'rsubtitle'=>'Register your personal data in customer service and take coffee before entering the room',
            'ptime'=>'9:20 AM - 11:00 AM',
            'ptitle'=>'Plan & Conduct User Research',
            'psubtitle'=>'Many early researchers are challanged by aspect of the design and  implementation of research studies as well the efective dissemunation.',
            'qtime'=>'11:20 AM - 12:30 AM',
            'qtitle'=>'Q&A For Speaker',
            'qsubtitle'=>'Register your personal data in customer service and take food before entering the room',
            'ltime'=>'12:30 AM - 2:30 AM',
            'ltitle'=>'Launch Break',
            'lsubtitle'=>'',
            'retime'=>'2.40-4.30',
            'retitle'=>'Research For The Right Thing',
            'resubtitle'=>'Research encompasses a cariety of investigative methods used to add context and insight to the design process',
        ]);

        DB::table('schedules')->insert([
            'serialday'=>'Two Day',
            'numericdate'=>'08',
            'monthday'=>' April, Friday',
            'rtime'=>'8:00 AM - 9:00 AM',
            'rtitle'=>'Registration & Coffee',
            'rsubtitle'=>'Register your personal data in customer service and take coffee before entering the room',
            'ptime'=>'9:20 AM - 11:00 AM',
            'ptitle'=>'Plan & Conduct User Research',
            'psubtitle'=>'Many early researchers are challanged by aspect of the design and  implementation of research studies as well the efective dissemunation.',
            'qtime'=>'11:20 AM - 12:30 AM',
            'qtitle'=>'Q&A For Speaker',
            'qsubtitle'=>'Register your personal data in customer service and take food before entering the room',
            'ltime'=>'12:30 AM - 2:30 AM',
            'ltitle'=>'Launch Break',
            'lsubtitle'=>'ok',
            'retime'=>'2.40-4.30',
            'retitle'=>'Research For The Right Thing',
            'resubtitle'=>'Research encompasses a cariety of investigative methods used to add context and insight to the design process',
        ]);
        DB::table('schedules')->insert([
            'serialday'=>'Third',
            'numericdate'=>'10',
            'monthday'=>' April, Sunday',
            'rtime'=>'8:00 AM - 9:00 AM',
            'rtitle'=>'Registration & Coffee',
            'rsubtitle'=>'Register your personal data in customer service and take coffee before entering the room',
            'ptime'=>'9:20 AM - 11:00 AM',
            'ptitle'=>'Plan & Conduct User Research',
            'psubtitle'=>'Many early researchers are challanged by aspect of the design and  implementation of research studies as well the efective dissemunation.',
            'qtime'=>'11:20 AM - 12:30 AM',
            'qtitle'=>'Q&A For Speaker',
            'qsubtitle'=>'Register your personal data in customer service and take food before entering the room',
            'ltime'=>'12:30 AM - 2:30 AM',
            'ltitle'=>'Launch Break',
            'lsubtitle'=>'',
            'retime'=>'2.40-4.30',
            'retitle'=>'Research For The Right Thing',
            'resubtitle'=>'Research encompasses a cariety of investigative methods used to add context and insight to the design process',
        ]);
    }
}
