<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events=Event::all();
        return view('backend.pages.events.index',compact('events'));
    }
    public function create(){
        return view('backend.pages.events.create');
    }

    public function store(Request $request){
        $events=Event::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $image=$request->file('image');
        $filename=rand().time().".".$image->extension();
        $location=public_path('uploads/events');
        $image->move($location,$filename);
        $events->image=$filename;
        $events->save();
        return back();
    }

    public function update(Request $request , $id){
        $events=Event::find($id);
        $events->update($request->except('_token')+['update_at'=>Carbon::now()]);
        if($request->file('image')){
            $image=$request->file('image');
            $filename=rand().time().".".$image->extension();
            $location=public_path('uploads/events');
            $image->move($location,$filename);
            $events->image=$filename;
        }
        $events->update();
        return to_route('index.events');
    }

    public function edit($id){
        $event=Event::find($id);
        return view('backend.pages.events.edit',compact('event'));
    }

    public function destory($id){
        $events=Event::find($id);
        $events->delete();
        return to_route('index.events');
    }
}
