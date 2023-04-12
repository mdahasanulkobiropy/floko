@extends('backend.pages.master.master')

    @section('main-content')
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h3 class="mb-0 text-uppercase">Hero Area </h3>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0 text-primary">Add Hero Part</h5>
                    </div>
                    <hr>
                    <form action="{{route('update.heros',$hero->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="title" class="form-label">Hero Title All Part</label>
                        </div>
                        <div class="col-md-3">
                            <label for="titlepart1" class="form-label">Title Part-1</label>
                            <input type="text" class="form-control" name="titlepart1" value="{{$hero->titlepart1}}">
                        </div>
                        <div class="col-md-3">
                            <label for="titlepart2" class="form-label">Title Part-2</label>
                            <input type="text" class="form-control" name="titlepart2" value="{{$hero->titlepart2}}">
                        </div>
                        <div class="col-md-3">
                            <label for="titlepart3" class="form-label">Title Part-3</label>
                            <input type="text" class="form-control" name="titlepart3" value="{{$hero->titlepart3}}">
                        </div>
                        <div class="col-md-3">
                            <label for="titlepart4" class="form-label">Title Part-4</label>
                            <input type="text" class="form-control" name="titlepart4" value="{{$hero->titlepart4}}">
                        </div>
                        <div class="col-md-12">
                            <label for="subtitle" class="form-label">Hero Sub-Title </label>
                            <input type="text" class="form-control" name="subtitle" value="{{$hero->subtitle}}">
                        </div>
                        <div class="col-md-6">
                            <label for="limage" class="form-label">Left Image For Hero</label>
                            <input type="file" class="form-control" name="limage" value="{{$hero->limage}}">
                        </div>
                        <div class="mt-3">
                            <label for="image">Image </label>
                            <img src="{{asset('/uploads/heros/'.$hero->limage)}}" alt="" srcset="" width="120" height="120">
                        </div>
                        <div class="col-md-6">
                            <label for="rimage" class="form-label">Right Image For Hero</label>
                            <input type="file" class="form-control" name="rimage" value="{{$hero->rimage}}">
                        </div>
                        <div class="mt-3">
                            <label for="image">Image </label>
                            <img src="{{asset('/uploads/heros/'.$hero->rimage)}}" alt="" srcset="" width="120" height="120">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Update</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
