@extends('layouts.dashboard')

@section('content')

<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="img-profile rounded-circle " src="{{ asset('assets/img/img-profile.png') }}" style="max-width: 200px">
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="email" class="form-control" readonly value="{{ auth()->user()->name }}" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" readonly value="{{ auth()->user()->email }}" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kontak</label>
                            <input type="email" class="form-control" readonly value="{{ auth()->user()->contact }}" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection