<?php

namespace App\Http\Controllers;

use App\Models\Dschedule;
use App\Models\Event;
use App\Models\Facilitate;
use App\Models\Founder;
use App\Models\Hero;
use App\Models\Keyword;
use App\Models\Schedule;
use App\Models\Speakers;
use App\Models\Ticket;
use App\Models\Tspeaker;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $tickets=Ticket::all();
        $schedules=Schedule::all();
        $dschedules=Dschedule::all();
        $heros=Hero::all();
        $keywords=Keyword::all();
        $events=Event::all();
        $speakers=Speakers::all();
        $tspeakers=Tspeaker::all();
        $founders=Founder::all();
        return view('welcome',compact('speakers','founders','heros','keywords','events','tspeakers','dschedules','schedules','tickets'));
    }
}
