<?php

namespace App\Http\Controllers;

use App\Models\Facilitate;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $tickets=Ticket::all();
        return view('backend.pages.tickets.index',compact('tickets'));
    }
    public function create(){
        return view('backend.pages.tickets.create');
    }

    public function store(Request $request){
        $tickets=Ticket::create($request->except('_token')+['update_at'=>Carbon::now()]);

        $tickets->save();
        return back();
    }

    public function update(Request $request , $id){
        $tickets=Ticket::find($id);
        $tickets->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $tickets->update();
        return to_route('index.tickets');
    }

    public function edit($id){
        $tickets=Ticket::find($id);
        return view('backend.pages.tickets.edit',compact('tickets'));
    }
    public function destory($id){

        $tickets=Ticket::find($id);
        Facilitate::where('ticket_cat_id', $tickets->id)->get()->each->delete();
        $tickets->delete();
        return to_route('index.tickets');
    }
}
