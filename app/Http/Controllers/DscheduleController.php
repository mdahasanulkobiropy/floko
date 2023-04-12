<?php

namespace App\Http\Controllers;

use App\Models\Dschedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DscheduleController extends Controller
{
    public function index(){
        $dschedules=Dschedule::all();
        return view('backend.pages.dschedules.index',compact('dschedules'));
    }
    public function create(){
        return view('backend.pages.dschedules.create');
    }

    public function store(Request $request){
        $dschedules=Dschedule::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $dschedules->save();
        return back();
    }


    public function update(Request $request , $id){
        $dschedules=Dschedule::find($id);
        $dschedules->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $dschedules->update();
        return to_route('index.dschedules');
    }

    public function edit($id){
        $dschedules=Dschedule::find($id);
        return view('backend.pages.dschedules.edit',compact('dschedules'));
    }
    public function destory($id){
        $dschedules=Dschedule::find($id);
        $dschedules->delete();
        return to_route('index.dschedules');
    }
}
