@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 pt-5 col-8">
        <div class="card">
            <div class="card-header">
                <h3>Add Event</h3>
            </div>
            <div class="card-body">
                <form action="{{route('store.events')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="name">Even Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="des">Sub-title</label>
                        <input type="text" name="subtitle" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="eventinfo">Event-Content-Info</label>
                    </div>
                    <div class="mt-3">
                        <label for="part1">Par1</label>
                        <br>
                        <textarea name="eventinfopart1"  cols="129" rows="4"></textarea>
                        <br>
                        <label for="part2">Par2</label>
                        <br>
                        <textarea name="eventinfopart2"  cols="129" rows="4"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="image">Image </label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-info" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
