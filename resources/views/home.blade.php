@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- start card --}}
            <div class="card mb-3">
                <div class="card-header">Supervisors</div>
                <div class="card-body">
                    <a href="{{route('supervisor.index')}}" class="btn btn-primary">Go to supervisor page</a>
                </div>
            </div>
            {{-- end card --}}
            {{-- start card --}}
            <div class="card mb-3">
                <div class="card-header">Volunteers</div>
                <div class="card-body">
                    <a href="{{route('volunteer.index')}}" class="btn btn-primary">Go to volunteer page</a>
                </div>
            </div>
            {{-- end card --}}
            {{-- start card --}}
            <div class="card mb-3">
                <div class="card-header">Members</div>
                <div class="card-body">
                    <a href="{{route('member.index')}}" class="btn btn-primary">Go to member page</a>
                </div>
            </div>
            {{-- end card --}}
            {{-- start card --}}
            <div class="card mb-3">
                <div class="card-header">Books</div>
                <div class="card-body">
                    <a href="{{route('book.index')}}" class="btn btn-primary">Go to book page</a>
                </div>
            </div>
            {{-- end card --}}
            {{-- start card --}}
            <div class="card mb-3">
                <div class="card-header">Loans</div>
                <div class="card-body">
                    <a href="{{route('loan.index')}}" class="btn btn-primary">Go to loan page</a>
                </div>
            </div>
            {{-- end card --}}
        </div>
    </div>
</div>
@endsection
