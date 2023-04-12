@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 pt-5 col-8">
        <div class="card">
            <div class="card-header">
                <h3>Founder Membar Add</h3>
            </div>
            <div class="card-body">
                <form action="{{route('store.founders')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="des">Description</label>
                        <input type="text" name="short_des" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="log_des">Long Description</label>
                        <br>
                        <textarea name="long_des"  cols="131" rows="4"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="image">Image</label>
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
