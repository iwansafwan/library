@extends('layouts.template')

@section('main')
    <div class="px-3">
        <div class="pagetitle">
            <h1>Volunteers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('volunteer.index') }}">Volunteer</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @can('create-volunteers', App\Models\User::class)
            <a href="{{ route('volunteer.create') }}" class="btn btn-primary">Add Volunteer</a>
        @endcan
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Showing all Volunteers</h5>
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
            
                                </tr>
                                @foreach ($volunteers as $volunteer)
                                    <tr>
                                        <td>{{ $volunteer->id }}</td>
                                        <td>{{ $volunteer->name }}</td>
                                        <td>{{ $volunteer->email }}</td>
            
                                    </tr>
                                @endforeach
                            </table>
                            {{ $volunteers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="card mt-3">

        </div>

    </div>
@endsection
