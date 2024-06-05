<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //return list of member
    public function index()
    {
        return view('member.index', [
            'members' => Member::paginate(50),
        ]);
    }

    //create member punya page
    public function create()
    {
        return view('member.create');
    }

    //request means from form
    public function store(Request $request)
    {
        Member::create($request->all());
        return redirect(route('member.index'));
    }

    //show tunjuk record loan untuk *specific member* (hantar 3 variable memnber loan record)
    public function show(Member $member)
    {
        return view('member.show', [
            'member'=> $member,
            'loans'=> Loan::where('member_id', '=', $member->id)->whereNull('returnDate')->paginate(25),
            'records'=> Loan::where('member_id', '=', $member->id)->whereNotNull('returnDate')->orderBy('id','DESC')->paginate(25),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
