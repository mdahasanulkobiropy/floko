@extends('backend.pages.master.master')

    @section('main-content')
        <div class="container mt-5 pt-5 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.ftickets',$ftickets->id)}}" method="post">
                        @csrf
                        <div class="mt-3">
                            <label for="name">Ticket Category id</label>
                            <input type="text" name="ticket_cat_id" class="form-control" value="{{$ftickets->ticket_cat_id}}">
                        </div>
                        <div class="mt-3">
                            <label for="facilitate">Facilitate</label>
                            <input type="text" name="facilitate" class="form-control" value="{{$ftickets->facilitate}}">
                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
