@extends('backend.pages.master.master')

    @section('main-content')
        <div class="container mt-5 pt-5 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store.tickets')}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="name">Ticket Category Name</label>
                            <input type="text" name="price_category" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="des">Per Month Price</label>
                            <input type="text" name="price_month" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="des">Per Year Price</label>
                            <input type="text" name="price_year" class="form-control">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
