@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 col-8 pt-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>Show Speaker </h3>
            </div>
            <div class="card-body">
               <table class="table">
                    <tr>
                        <th>Ticket Category Name</th>
                        <th>Price Month</th>
                        <th>Price Year</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($tickets as $ticket)
                   <tr>
                        <td>{{$ticket->price_category}}</td>
                        <td>{{$ticket->price_month}}</td>
                        <td>{{$ticket->price_year}}</td>
                        <td><a href="{{route('edit.tickets',$ticket->id)}}" class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.tickets',$ticket->id)}}" method="post">
                            @csrf
                            <td><button class="btn btn-danger">Delete</button></td>
                        </form>
                    </tr>
                   @endforeach
               </table>
            </div>
        </div>
    </div>
@endsection
