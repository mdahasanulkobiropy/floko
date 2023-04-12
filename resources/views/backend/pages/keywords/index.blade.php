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
                        <th>Keyword</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                   @foreach ($keywords as $keyword)
                   <tr>
                        <td>{{$keyword->keyword}}</td>
                        <td><a href="{{route('edit.keywords',$keyword->id)}}" class="btn btn-warning"  >Edit</a></td>
                        <form action="{{route('destory.keywords',$keyword->id)}}" method="post">
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
