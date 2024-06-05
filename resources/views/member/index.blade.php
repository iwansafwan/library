@extends('layouts.app')

@section('content')
    <div class="px-3">
        <h1 class="font-weight-bold mb-3">Members</h1>
        <a href="{{ route('member.create') }}" class="btn btn-primary">Register Members</a>
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>IC Number</th>
                        <th>Address</th>

                    </tr>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->icNum }}</td>
                            <td>{{ $member->address }}</td>
                            <td><a href="{{route('member.show', $member)}}" class="btn btn-primary">Show</a></td>
                        </tr>
                    @endforeach
                </table>
                {{$members->links()}}
            </div>
        </div>

    </div>
@endsection
