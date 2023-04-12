@extends('backend.pages.master.master')

    @section('main-content')
    <div class="row">
        <div class="col-xl-7 mx-auto">
            <h3 class="mb-0 text-uppercase">Hero Area </h3>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0 text-primary">Add KeyWord</h5>
                    </div>
                    <hr>
                    <form action="{{route('store.keywords')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="keyword" class="form-label">Keyword</label>
                            <input type="text" class="form-control" name="keyword">
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
