@extends('backend.pages.master.master')

    @section('main-content')
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h3 class="mb-0 text-uppercase">Schedule  </h3>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0 text-primary">Edit Schedule Part</h5>
                    </div>
                    <hr>
                    <form action="{{route('update.schedules',$schedules->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        {{-- Serial Day --}}
                        <div class="col-md-12">
                            <label for="serialday" class="form-label">Serial Day</label>
                            <input type="text" class="form-control" name="serialday" value="{{$schedules->serialday}}">
                        </div>
                        <div class="col-md-12">
                            <label for="numericdate" class="form-label">Numeric Date</label>
                            <input type="text" class="form-control" name="numericdate"  value="{{$schedules->numericdate}}">
                        </div>
                        <div class="col-md-12">
                            <label for="title" class="form-label">Month & Day</label>
                            <input type="text" class="form-control" name="monthday"  value="{{$schedules->serialday}}">
                        </div>

                        {{-- Registration --}}
                        <div>
                            <label class="form-label">Registration Part</label>
                        </div>
                        <div class="col-md-12">
                            <label for="rtime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="rtime"  value="{{$schedules->serialday}}">
                        </div>
                        <div class="col-md-12">
                            <label for="rtitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="rtitle" value="{{$schedules->rtitle}}">
                        </div>
                        <div class="col-md-12">
                            <label for="subtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="rsubtitle"  value="{{$schedules->rsubtitle}}">
                        </div>


                        {{-- Plan & Conduct --}}
                        <div>
                            <label class="form-label">Plan & Conduct</label>
                        </div>
                        <div class="col-md-12">
                            <label for="ptime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="ptime" value="{{$schedules->ptime}}">
                        </div>
                        <div class="col-md-12">
                            <label for="ptitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="ptitle"  value="{{$schedules->ptitle}}">
                        </div>
                        <div class="col-md-12">
                            <label for="psubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="psubtitle" value="{{$schedules->psubtitle}}">
                        </div>

                        {{-- Q&A --}}
                        <div>
                            <label class="form-label">Q&A</label>
                        </div>
                        <div class="col-md-12">
                            <label for="qtime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="qtime" value="{{$schedules->qtime}}">
                        </div>
                        <div class="col-md-12">
                            <label for="qtitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="qtitle" value="{{$schedules->qtitle}}">
                        </div>
                        <div class="col-md-12">
                            <label for="qsubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="qsubtitle"value="{{$schedules->qsubtitle}}">
                        </div>

                        {{-- Launch Break --}}

                        <div>
                            <label class="form-label">Launch Break</label>
                        </div>
                        <div class="col-md-12">
                            <label for="ltime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="ltime"  value="{{$schedules->ltime}}">
                        </div>
                        <div class="col-md-12">
                            <label for="ltitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="ltitle" value="{{$schedules->ltitle}}">
                        </div>
                        <div class="col-md-12">
                            <label for="lsubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="lsubtitle" value="{{$schedules->lsubtitle}}">
                        </div>

                        {{-- Research For --}}

                        <div>
                            <label class="form-label">Research For</label>
                        </div>
                        <div class="col-md-12">
                            <label for="retime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="retime"  value="{{$schedules->retime}}">
                        </div>
                        <div class="col-md-12">
                            <label for="retitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="retitle"  value="{{$schedules->retitle}}">
                        </div>
                        <div class="col-md-12">
                            <label for="resubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="resubtitle"  value="{{$schedules->resubtitle}}">
                        </div>


                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Update</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
