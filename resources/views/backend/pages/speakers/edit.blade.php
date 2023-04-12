@extends('backend.pages.master.master')

    @section('main-content')
        <div class="container mt-5 pt-5 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.speakers',$speaker->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$speaker->name}}">
                        </div>
                        <div class="mt-3">
                            <label for="des">Description</label>
                            <input type="text" name="des" class="form-control" value="{{$speaker->des}}">
                        </div>
                        <div class="mt-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="image">Image </label>
                            <img src="{{asset('/uploads/speakers/'.$speaker->image)}}" alt="" srcset="" width="120" height="120">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
