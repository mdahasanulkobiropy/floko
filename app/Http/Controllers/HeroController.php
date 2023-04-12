<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HeroController extends Controller
{

    public function index(){
        $heros=Hero::all();
        return view('backend.pages.heros.index',compact('heros'));
    }
    public function create(){
        return view('backend.pages.heros.create');
    }

    public function store(Request $request){

        // dd($request->all());
        $heros=Hero::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $limage=$request->file('limage');
        $lfilename=rand().time().".".$limage->extension();
        $llocation=public_path('uploads/heros');
        $limage->move($llocation,$lfilename);
        $heros->limage=$lfilename;




        $rimage=$request->file('rimage');
        $rfilename=rand().time().".".$rimage->extension();
        $rlocation=public_path('uploads/heros');
        $rimage->move($rlocation,$rfilename);
        $heros->rimage=$rfilename;
        $heros->save();
        return back();
    }

    public function update(Request $request , $id){
        $hero=Hero::find($id);
        $hero->update($request->except('_token')+['update_at'=>Carbon::now()]);
        if($request->file('limage')){
            $limage=$request->file('limage');
            $lfilename=rand().time().".".$limage->extension();
            $llocation=public_path('uploads/heros');
            $limage->move($llocation,$lfilename);
            $hero->limage=$lfilename;
        }

        if($request->file('rimage')){
            $rimage=$request->file('rimage');
            $rfilename=rand().time().".".$rimage->extension();
            $rlocation=public_path('uploads/heros');
            $rimage->move($rlocation,$rfilename);
            $hero->rimage=$rfilename;
        }

        $hero->update();
        return to_route('index.heros');
    }

    public function edit($id){
        $hero=Hero::find($id);
        return view('backend.pages.heros.edit',compact('hero'));
    }

    public function destory($id){
        $heros=Hero::find($id);
        $heros->delete();
        return to_route('index.heros');
    }
}
