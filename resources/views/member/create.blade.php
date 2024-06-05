@extends('layouts.app')

@section('content')
<div class="px-3">
    <form action="{{ route('member.store') }}" method="post">
        @csrf
        <div>
            <label>Name</label><input type="text" name="name" class="form-control" required>
        </div>
        <div>
            <label>IC</label><input type="text" name="icNum" class="form-control" required>
        </div>
        <div>
            <label>Phone</label><input type="text" name="phone" class="form-control" required>
        </div>
        <div>
            <label>Address</label><textarea name="address" class="form-control" required cols="30" rows="1"></textarea>
        </div>
        <div>
            <label>Email</label><input type="email" name="email" class="form-control" required>
        </div>
        <div><button type="submit" class="btn btn-primary mt-3">Submit</button></div>
    </form>
</div>
@endsection

