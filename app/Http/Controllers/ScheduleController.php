<?php

namespace App\Http\Controllers;

use App\Exports\SchedulesExport;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;

class ScheduleController extends Controller
{
    public function index(){
        $schedules=Schedule::all();
        return view('backend.pages.schedules.index',compact('schedules'));
    }
    public function create(){
        return view('backend.pages.schedules.create');
    }

    public function store(Request $request){
        $schedules=Schedule::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $schedules->save();
        return back();
    }


    public function update(Request $request , $id){
        $schedules=Schedule::find($id);
        $schedules->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $schedules->update();
        return to_route('index.schedules');
    }

    public function edit($id){
        $schedules=Schedule::find($id);
        return view('backend.pages.schedules.edit',compact('schedules'));
    }
    public function destory($id){
        $schedules=Schedule::find($id);
        $schedules->delete();
        return to_route('index.schedules');
    }


    public function export()
    {
        // $schedules = Schedule:: select('id','product_name')->get();
        return Excel::download(new SchedulesExport, 'schedules.xlsx');












    }
}
