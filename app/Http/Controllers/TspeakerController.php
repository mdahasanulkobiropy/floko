<?php

namespace App\Http\Controllers;
use App\Models\Tspeaker;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TspeakerController extends Controller
{
    public function index(){
        $tspeakers=Tspeaker::all();
        return view('backend.pages.tspeakers.index',compact('tspeakers'));
    }
    public function create(){
        return view('backend.pages.tspeakers.create');
    }


    public function update(Request $request , $id){
        $tspeaker=Tspeaker::find($id);
        $tspeaker->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $tspeaker->update();
        return to_route('index.tspeakers');
    }

    public function edit($id){
        $tspeaker=Tspeaker::find($id);
        return view('backend.pages.tspeakers.edit',compact('tspeaker'));
    }
    public function destory($id){
        $tspeakers=Tspeaker::find($id);
        $tspeakers->delete();
        return to_route('index.tspeakers');
    }
}
