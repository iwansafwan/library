<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //show list of available books and borrowed book
    public function index()
    {
        return view('book.index', [
            // if value yes
            'availableBooks' => Book::where('available', 'Yes')->paginate(50),
            'borrowedBooks' => Book::where('available', 'No')->paginate(50),
        ]);
    }

    //create form new book
    public function create()
    {
        return view('book.create');
    }

    //add new book (form)
    public function store(Request $request)
    {
        Book::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'publisher'=> $request->publisher,
            'year'=> $request->year,
            'category'=> $request->category,
            'available'=>'Yes',
        ]);

        return redirect(route('book.index'));
    }

   //show specific book
    public function show(Book $book)
    {
        return view('book.show', [
            //utk nama buku
            'book'=> $book,
            //untuk active loan
            'loans'=> Loan::where('book_id', '=', $book->id)->whereNull('returnDate')->paginate(25),
            //return book
            'records'=> Loan::where('book_id', '=', $book->id)->whereNotNull('returnDate')->orderBy('id','DESC')->paginate(25),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
