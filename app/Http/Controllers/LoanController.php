<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    //list of loan
    public function index()
    {
        return view('loan.index', [
            //list active loan
            'loans' => Loan::whereNull('returnDate')->paginate(50),
            //list return books
            'records' => Loan::whereNotNull('returnDate')->paginate(50),
        ]);
    }

    //function search
    public function search(Request $request)
    {

        $result = Loan::whereNull('returnDate')->whereAny(['book_id', 'member_icNum'], '=', "$request->searchkey")->paginate(25);
        $loans = Loan::whereNull('returnDate')->paginate(25);
        $records = Loan::whereNotNull('returnDate')->paginate(25);
        return view('loan.index', [
            'loans' => $result,
            'records' => $records
        ]);
    }

    //display form new loan
    public function create()
    {
        return view('loan.create');
    }

    //add new loan
    public function store(Request $request)
    {
        $member = Member::find($request->member_id);
        $book = Book::find($request->book_id);

        //check book are available or not
        if ($book->available == "Yes") {
            Loan::create([
                'book_id' => $request->book_id,
                'member_id' => $member->id,
                'member_icNum' => $member->icNum,
                'borrowingDate' => Carbon::parse($request->borrowingDate)->format('d/m/Y'),

            ]);
            $book->available = 'No';
            $book->save();
            return redirect(route('loan.index'));
        } else {
            // return back()->withInput($request->input());
            return 'test';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    //function return book 
    public function update(Request $request, Loan $loan)
    {
        $loan->returnDate = Carbon::parse($request->returndate)->format('d/m/Y');
        $loan->save();

        //update
        $book = $loan->book;
        $book->available = 'Yes';
        $book->save();

        return redirect(route('loan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
