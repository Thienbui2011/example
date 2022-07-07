@extends('index')
@section('title', 'create example')
@section('example')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div>
                <a href="{{ route('example.index') }}" class="btn btn-sm btn-danger">BACK</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form">
                <form action="{{ route('example.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection
