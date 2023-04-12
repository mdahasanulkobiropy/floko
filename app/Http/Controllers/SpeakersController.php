<?php

namespace App\Http\Controllers;

use App\Models\Speakers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    public function index(){
        $speakers=Speakers::all();
        return view('backend.pages.speakers.index',compact('speakers'));
    }
    public function create(){
        return view('backend.pages.speakers.create');
    }

    public function store(Request $request){
        $speakers=Speakers::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $image=$request->file('image');
        $filename=rand().time().".".$image->extension();
        $location=public_path('uploads/speakers');
        $image->move($location,$filename);
        $speakers->image=$filename;
        $speakers->save();
        return back();
    }

    public function update(Request $request , $id){
        $speaker=Speakers::find($id);
        $speaker->update($request->except('_token')+['update_at'=>Carbon::now()]);
        if($request->file('image')){
            $image=$request->file('image');
            $filename=rand().time().".".$image->extension();
            $location=public_path('uploads/founders');
            $image->move($location,$filename);
            $speaker->image=$filename;
        }
        $speaker->update();
        return to_route('index.speakers');
    }

    public function edit($id){
        $speaker=Speakers::find($id);
        return view('backend.pages.speakers.edit',compact('speaker'));
    }
    public function destory($id){
        $speaker=Speakers::find($id);
        $speaker->delete();
        return to_route('index.speakers');
    }
}
