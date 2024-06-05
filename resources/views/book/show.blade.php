@extends('layouts.app')

@section('content')
<div class="px-3">
    
    <h2 class="font-weight-bold mt-3">Active Loan</h2>
    <div class="card mt-3">
        <div class="card-body">
            
            <h1>Book: {{$book->title}}</h1>
            <table class="table table-striped">
                <tr>
                    <th>Loan ID</th> 
                    <th>Book ID</th> 
                    <th>Book Title</th>
                    <th>Member IC</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th colspan="2">Return Date</th>
                   
                </tr>
                @foreach ($loans as $loan)
                    <tr>
                        <td>{{ $loan->id }}</td>
                        <td>{{ $loan->book->id }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->member->icNum }}</td>
                        <td>{{ $loan->member->name }}</td>
                        <td>{{ $loan->borrowingDate }}</td>
                        <form action="{{ route('loan.update', $loan) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <td>
                                <input type="date" name="returnDate">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success">Return</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            {{$loans->links()}}
        </div>
    </div>
    
    <h2 class="font-weight-bold mb-3">Inactive Loan / History </h2>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Loan ID</th> 
                    <th>Book ID</th> 
                    <th>Book Title</th>
                    <th>Member IC</th>
                    <th>Member Name</th>
                    <th>Borrowing Date</th>
                    <th>Return Date</th>
                    
                </tr>
                @foreach ($records as $loan)
                    <tr>
                        <td>{{ $loan->id }}</td>
                        <td>{{ $loan->book->id }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->member->icNum }}</td>
                        <td>{{ $loan->member->name }}</td>
                        <td>{{ $loan->borrowingDate }}</td>
                        <td>{{ $loan->returnDate }}</td>
                    </tr>
                @endforeach
            </table>
            {{$records->links()}}
        </div>
    </div>
    
</div>
@endsection


