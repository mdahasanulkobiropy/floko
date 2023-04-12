@extends('backend.pages.master.master')

    @section('main-content')
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h3 class="mb-0 text-uppercase">Hero Area </h3>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0 text-primary">Add Hero Part</h5>
                    </div>
                    <hr>
                    <form action="{{route('store.schedules')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        {{-- Serial Day --}}
                        <div class="col-md-12">
                            <label for="serialday" class="form-label">Serial Day</label>
                            <input type="text" class="form-control" name="serialday">
                        </div>
                        <div class="col-md-12">
                            <label for="numericdate" class="form-label">Numeric Date</label>
                            <input type="text" class="form-control" name="numericdate">
                        </div>
                        <div class="col-md-12">
                            <label for="title" class="form-label">Month & Day</label>
                            <input type="text" class="form-control" name="monthday">
                        </div>

                        {{-- Registration --}}
                        <div>
                            <label class="form-label">Registration Part</label>
                        </div>
                        <div class="col-md-12">
                            <label for="rtime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="rtime">
                        </div>
                        <div class="col-md-12">
                            <label for="rtitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="rtitle">
                        </div>
                        <div class="col-md-12">
                            <label for="subtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="rsubtitle">
                        </div>


                        {{-- Plan & Conduct --}}
                        <div>
                            <label class="form-label">Plan & Conduct</label>
                        </div>
                        <div class="col-md-12">
                            <label for="ptime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="ptime">
                        </div>
                        <div class="col-md-12">
                            <label for="ptitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="ptitle">
                        </div>
                        <div class="col-md-12">
                            <label for="psubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="psubtitle">
                        </div>

                        {{-- Q&A --}}
                        <div>
                            <label class="form-label">Q&A</label>
                        </div>
                        <div class="col-md-12">
                            <label for="qtime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="qtime">
                        </div>
                        <div class="col-md-12">
                            <label for="qtitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="qtitle">
                        </div>
                        <div class="col-md-12">
                            <label for="qsubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="qsubtitle">
                        </div>

                        {{-- Launch Break --}}

                        <div>
                            <label class="form-label">Launch Break</label>
                        </div>
                        <div class="col-md-12">
                            <label for="ltime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="ltime">
                        </div>
                        <div class="col-md-12">
                            <label for="ltitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="ltitle">
                        </div>
                        <div class="col-md-12">
                            <label for="lsubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="lsubtitle">
                        </div>

                        {{-- Research For --}}

                        <div>
                            <label class="form-label">Research For</label>
                        </div>
                        <div class="col-md-12">
                            <label for="retime" class="form-label">Time</label>
                            <input type="text" class="form-control" name="retime">
                        </div>
                        <div class="col-md-12">
                            <label for="retitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="retitle">
                        </div>
                        <div class="col-md-12">
                            <label for="resubtitle" class="form-label">Sub-title</label>
                            <input type="text" class="form-control" name="resubtitle">
                        </div>


                        <div class="mt-3">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
