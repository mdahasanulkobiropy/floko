@extends('backend.pages.master.master')

    @section('main-content')
        <div class="container mt-5 pt-5 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.tickets',$tickets->id)}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="name">Ticket Category Name</label>
                            <input type="text" name="price_category" class="form-control" value="{{$tickets->price_category}}">
                        </div>
                        <div class="mt-3">
                            <label for="des">Per Month Price</label>
                            <input type="text" name="price_month" class="form-control" value="{{$tickets->price_month}}">
                        <div class="mt-3">
                            <label for="des">Per Year Price</label>
                            <input type="text" name="price" class="form-control" value="{{$tickets->price_year}}">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
