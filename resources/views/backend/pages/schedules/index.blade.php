@extends('backend.pages.master.master')

    @section('main-content')
    <div class="container mt-5 pt-5 col-12 text-left">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h3>Show Schedule</h3>
                </div>
               <table class="table">
                    <tr>
                        <th>Serial</th>
                        <th>Numeric</th>
                        <th>Day & Month</th>

                        <th>RTime</th>
                        <th>RTitle</th>
                        <th>RSubTitle</th>

                        <th>PTime</th>
                        <th>PTitle</th>
                        <th>PSubTitle</th>

                        <th>QTime</th>
                        <th>QTitle</th>
                        <th>QSubTitle</th>

                        <th>LTime</th>
                        <th>LTitle</th>
                        <th>LSubTitle</th>

                        <th>ReTime</th>
                        <th>ReTitle</th>
                        <th>ReSubTitle</th>

                        <th>Edit Action</th>
                        <th>Delete Action</th>
                    </tr>

                   @foreach ($schedules as $schedule)
                   <tr>
                        <td>{{$schedule->serialday}}</td>
                        <td>{{$schedule->numericdate}}</td>
                        <td>{{$schedule->monthday}}</td>
                        <td>{{$schedule->rtime}}</td>
                        <td>{{$schedule->qsubtitle}}</td>
                        <td>{{$schedule->rsubtitle}}</td>
                        <td>{{$schedule->ptime}}</td>
                        <td>{{$schedule->ptitle}}</td>
                        <td>{{$schedule->psubtitle}}</td>
                        <td>{{$schedule->qtime}}</td>
                        <td>{{$schedule->qtitle}}</td>
                        <td>{{$schedule->qsubtitle}}</td>
                        <td>{{$schedule->ltime}}</td>
                        <td>{{$schedule->ltitle}}</td>
                        <td>{{$schedule->lsubtitle}}</td>
                        <td>{{$schedule->retime}}</td>
                        <td>{{$schedule->retitle}}</td>
                        <td>{{$schedule->resubtitle}}</td>
                        <td><a href="{{route('edit.schedules',$schedule->id)}}"  class="btn btn-warning">Edit</a></td>
                        <form action="{{route('destory.schedules',$schedule->id)}}" method="post">
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
