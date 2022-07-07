@extends('index')
@section('title', 'index example')
@section('example')
    @if (session('status'))
        <h4 class="alert alert-warning">{{ session('status') }}</h4>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($example as $key => $value)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $value['name'] }}</td>
                            <td>{{ $value['email'] }}</td>
                            <td>
                                <a href="{{ route('example.edit', $key) }}" class="btn btn-sm btn-success">Edit</a>
                                <form action="{{ route('example.destroy', $key) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
