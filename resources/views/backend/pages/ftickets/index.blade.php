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
                        <th>Ticket Category Id</th>
                        <th>Facilitate</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($ftickets as $fticket)
                   <tr>
                        <td>{{$fticket->ticket->price_category}}</td>
                        <td>{{$fticket->facilitate}}</td>
                        <td><a href="{{route('edit.ftickets',$fticket->id)}}" class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.ftickets',$fticket->id)}}" method="post">
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
