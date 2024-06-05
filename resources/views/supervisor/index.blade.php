@extends('layouts.app')

@section('content')
    <div class="px-3">
        <h1 class="mt-3 font-weight-bold">Supervisor</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($supervisors as $supervisor)
                        <tr>
                            <td>{{ $supervisor->id }}</td>
                            <td>{{ $supervisor->name }}</td>
                            <td>{{ $supervisor->email }}</td>
                        </tr>
                    @endforeach
                </table>
                {{$supervisors->links()}}
            </div>
        </div>
    </div>
@endsection
