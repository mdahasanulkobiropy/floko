@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 col-8 pt-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>Show Speakers Title & Sub Title </h3>
            </div>
            <div class="card-body">
               <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Sub-Title</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($tspeakers as $tspeaker)
                   <tr>
                        <td>{{$tspeaker->title}}</td>
                        <td>{{$tspeaker->subtitle}}</td>
                        <td><a href="{{route('edit.tspeakers',$tspeaker->id)}}" class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.events',$tspeaker->id)}}" method="post">
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
