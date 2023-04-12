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
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($speakers as $speaker)
                   <tr>
                        <td>{{$speaker->name}}</td>
                        <td>{{$speaker->des}}</td>
                        <td><img src="{{asset('/uploads/speakers/'.$speaker->image)}}" alt="" srcset="" width="50" height="50"></td>
                        <td><a href="{{route('edit.speakers',$speaker->id)}}" class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.events',$speaker->id)}}" method="post">
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
