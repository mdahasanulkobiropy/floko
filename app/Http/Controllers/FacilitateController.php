<?php

namespace App\Http\Controllers;

use App\Models\Facilitate;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FacilitateController extends Controller
{
    public function index(){
        $ftickets=Facilitate::all();
        return view('backend.pages.ftickets.index',compact('ftickets'));
    }
    public function create(){
        $tickets=Ticket::all();
        return view('backend.pages.ftickets.create',compact('tickets'));
    }

    public function store(Request $request){
        $ftickets=Facilitate::create($request->except('_token')+['update_at'=>Carbon::now()]);

        $ftickets->save();
        return back();
    }

    public function update(Request $request , $id){
        $ftickets=Facilitate::find($id);
        $ftickets->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $ftickets->update();
        return to_route('index.ftickets');
    }

    public function edit($id){
        $ftickets=Facilitate::find($id);
        return view('backend.pages.ftickets.edit',compact('ftickets'));
    }
    public function destory($id){
        $tickets=Facilitate::find($id);
        $tickets->delete();
        return to_route('index.ftickets');
    }
}
