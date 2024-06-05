<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use illuminate\Support\Str;

class VolunteerController extends Controller
{
    //return view volunteer index (list of volunteer)
    public function index()
    {
        return view('volunteer.index', [
            'volunteers' => User::where('role', 'Volunteer')->paginate(50)
        ]);
    }

    //create form new volunteer
    public function create()
    {
        //only allow supervisor (check role)
        if (Gate::allows('create-volunteers', User::class)) {
            //true return create
            return view('volunteer.create');
        } else {
            abort(403);
        }
    }

    /**
     * request is a form.
     */
    public function store(Request $request)
    {
        //same gate as define at appserviceprovider
        if (Gate::allows('create-volunteers', User::class)) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'role' => 'Volunteer'
            ]);
            return redirect(route('volunteer.index'));
        } else {
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $volunteer)
    {
        //
    }
}
