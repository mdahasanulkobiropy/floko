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
                        <th>Titele</th>
                        <th>Sub-Titele</th>
                        <th>Event Info Part1</th>
                        <th>Event Info Part2</th>
                        <th>Image</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($events as $event)
                   <tr>
                        <td>{{$event->title}}</td>
                        <td>{{$event->subtitle}}</td>
                        <td>{{$event->eventinfopart1}}</td>
                        <td>{{$event->eventinfopart2}}</td>
                        <td><img src="{{asset('/uploads/events/'.$event->image)}}" alt="" srcset="" width="50" height="50"></td>
                        <td><a href="{{route('edit.events',$event->id)}}" class="btn btn-warning">Edit</a ></td>
                        <form action="{{route('destory.events',$event->id)}}" method="post">
                            @csrf
                            <td><button href="" class="btn btn-danger">Delete</button></td>
                        </form>
                    </tr>
                   @endforeach
               </table>
            </div>
        </div>
    </div>
    @endsection
