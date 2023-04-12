<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index(){
        $founders=Founder::all();
        return view('backend.pages.founders.index',compact('founders'));
    }
    public function create(){
        return view('backend.pages.founders.create');
    }

    public function store(Request $request){
        $founders=Founder::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $image=$request->file('image');
        $filename=rand().time().".".$image->extension();
        $location=public_path('uploads/founders');
        $image->move($location,$filename);
        $founders->image=$filename;
        $founders->save();
        return back();
    }

    public function update(Request $request , $id){
        $founder=Founder::find($id);
        $founder->update($request->except('_token')+['update_at'=>Carbon::now()]);
        if($request->file('image')){
            $image=$request->file('image');
            $filename=rand().time().".".$image->extension();
            $location=public_path('uploads/founders');
            $image->move($location,$filename);
            $founder->image=$filename;
        }
        $founder->update();
        return to_route('index.founders');
    }

    public function edit($id){
        $founder=Founder::find($id);
        return view('backend.pages.founders.edit',compact('founder'));
    }
    public function destory($id){
        $founders=Founder::find($id);
        $founders->delete();
        return to_route('index.founders');
    }
}
