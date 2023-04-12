<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    public function index(){
        $keywords=Keyword::all();
        return view('backend.pages.keywords.index',compact('keywords'));
    }
    public function create(){
        return view('backend.pages.keywords.create');
    }

    public function store(Request $request){

        // dd($request->all());
        $keywords=Keyword::create($request->except('_token')+['update_at'=>Carbon::now()]);
        $keywords->save();
        return back();
    }

    public function update(Request $request , $id){
        $keyword=Keyword::find($id);
        $keyword->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $keyword->update();
        return to_route('index.keywords');
    }

    public function edit($id){
        $keyword=Keyword::find($id);
        return view('backend.pages.keywords.edit',compact('keyword'));
    }

    public function destory($id){
        $keywords=Keyword::find($id);
        $keywords->delete();
        return to_route('index.keywords');
    }
}
