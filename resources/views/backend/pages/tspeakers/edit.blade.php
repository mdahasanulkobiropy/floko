@extends('backend.pages.master.master')

    @section('main-content')
        <div class="container mt-5 pt-5 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.tspeakers',$tspeaker->id)}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$tspeaker->title}}">
                        </div>
                        <div class="mt-3">
                            <label for="suybtitle">Sub-Title</label>
                            <input type="text" name="subtitle" class="form-control" value="{{$tspeaker->subtitle}}">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
