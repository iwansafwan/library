@extends('layouts.app')

@section('content')
<div class="px-3">
    <form action="{{ route('loan.store') }}" method="post" >
        @csrf
        <div>
            <label>Book ID</label><input type="text" name="book_id" class="form-control" required>
        </div>

        <div>
            <label>Member ID</label><input type="text" name="member_id" class="form-control" required>
        </div>

        <div>
            <label>Borrowing Date</label><input type="date" name="borrowingDate" class="form-control" required>
        </div>
        <div><button type="submit" class="btn btn-primary mt-3">Submit</button></div>
    </form>
</div>
@endsection


