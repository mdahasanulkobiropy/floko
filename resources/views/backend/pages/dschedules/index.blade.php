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
                        <th>Header Title</th>
                        <th>Sub-Title</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($dschedules as $dschedule)
                   <tr>
                        <td>{{$dschedule->title}}</td>
                        <td>{{$dschedule->subtitle}}</td>
                        <td><a href="{{route('edit.tspeakers',$dschedule->id)}}" class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.events',$dschedule->id)}}" method="post">
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
