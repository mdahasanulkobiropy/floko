@extends('backend.pages.master.master')

    @section('main-content')
        <div class="container mt-5 pt-5 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store.ftickets')}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="name">Select Ticket Category</label>
                            <select class="form-select" name="ticket_cat_id" aria-label="Default select example">
                                <option selected>--select--</option>
                                    @foreach ($tickets as $tickets)
                                    <option value="{{$tickets->id}}">{{$tickets->price_category}}</option>
                                    @endforeach
                              </select>
                        </div>
                        <div class="mt-3">
                            <label for="facilitate">Facilitate</label>
                            <input type="text" name="facilitate" class="form-control">
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
