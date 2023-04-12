@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 pt-5 col-8">
        <div class="card">
            <div class="card-header">
                <h3>Add Event</h3>
            </div>
            <div class="card-body">
                <form action="{{route('store.dschedules')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="name">Header Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="des">Sub-title</label>
                        <input type="text" name="subtitle" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-info" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
