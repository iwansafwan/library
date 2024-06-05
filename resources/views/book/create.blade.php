@extends('layouts.app')

@section('content')
<div class="px-3">
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div>
            <label>Title</label><input type="text" name="title"class="form-control" required>
        </div>

        <div>
            <label>Author</label><input type="text" name="author"class="form-control" required>
        </div>

        <div>
            <label>Publisher</label><input type="text" name="publisher"class="form-control" required>
        </div>

        <div>
            <label>Published Year</label><input type="text" name="year"class="form-control" required>
        </div>

        <div>
            <label>Category</label><input type="text" name="category"class="form-control" required>
        </div>

        <div><button type="submit" class="btn btn-primary mt-3">Submit</button></div>
    </form>
</div>
@endsection

