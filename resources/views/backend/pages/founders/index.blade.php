@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 pt-5 col-8">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h3>Show Founder</h3>
                </div>
               <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($founders as $founder)
                   <tr>
                        <td>{{$founder->name}}</td>
                        <td>{{$founder->short_des}}</td>
                        <td>{{$founder->long_des}}</td>
                        <td><img src="{{asset('/uploads/founders/'.$founder->image)}}" alt="" srcset="" width="50" height="50"></td>
                        <td><a href="{{route('edit.founders',$founder->id)}}" class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.events',$founder->id)}}" method="post">
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
