@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 pt-5 col-8">
        <div class="card">
            <div class="card-header">
                <h3>Update Event</h3>
            </div>
            <div class="card-body">
                <form action="{{route('update.events',$event->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="name">Even Title</label>
                        <input type="text" name="title" class="form-control" value="{{$event->title}}">
                    </div>
                    <div class="mt-3">
                        <label for="des">Sub-title</label>
                        <input type="text" name="subtitle" value="{{$event->subtitle}}" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="eventinfo">Event-Content-Info</label>
                    </div>
                    <div class="mt-3">
                        <label for="part1">Par1</label>
                        <br>
                        <textarea name="eventinfopart1"  cols="129" rows="4" value="">{{$event->eventinfopart1}}</textarea>
                        <br>
                        <label for="part2">Par2</label>
                        <br>
                        <textarea name="eventinfopart2"  cols="129" rows="4" value="">{{$event->eventinfopart2}}</textarea>
                    </div>
                    <div class="mt-3">
                        <label for="image">Image </label>
                        <input type="file" name="image" class="form-control" value="{{$event->image}}">
                    </div>
                    <div class="mt-3">
                        <label for="image">Image </label>
                        <img src="{{asset('/uploads/events/'.$event->image)}}" alt="" srcset="" width="120" height="120">
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-info" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
