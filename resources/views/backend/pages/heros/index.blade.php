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
                        <th>Titele Part 1</th>
                        <th>Titele Part 2</th>
                        <th>Titele Part 3</th>
                        <th>Titele Part 4</th>
                        <th>Sub-Title</th>
                        <th>Left Image</th>
                        <th>Right Image</th>
                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($heros as $hero)
                   <tr>
                        <td>{{$hero->titlepart1}}</td>
                        <td>{{$hero->titlepart2}}</td>
                        <td>{{$hero->titlepart3}}</td>
                        <td>{{$hero->titlepart4}}</td>
                        <td>{{$hero->subtitle}}</td>
                        <td><img src="{{asset('/uploads/heros/'.$hero->limage)}}" alt="" srcset="" width="50" height="50"></td>
                        <td><img src="{{asset('/uploads/heros/'.$hero->rimage)}}" alt="" srcset="" width="50" height="50"></td>
                        <td><a href="{{route('edit.heros',$hero->id)}}"  class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.events',$hero->id)}}" method="post">
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
