<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.Admin.profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|string|confirmed|min:6|different:old_password'
        ]);


        if(Hash::check( $request->old_password, $user->password)) {
            $newPassword = Hash::make($request->password);

            $user->update([
                'password' => $newPassword
            ]);

            toastr()->success('Password has been changed');
            return back();

        } else {
            toastr()->error('Wrong Old Password');
            return back();
        }
    }

     public function updateEmail(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'old_email' => 'required',
            'new_email' => 'required|unique:users,email|string|email|max:255|different:old_email'
        ]);

        if($request->old_email == $user->email) {

            $user->update([
                'email' => $request->new_email
            ]);

            toastr()->success('Password has been changed');
            return redirect()->route('admin.logout');

        } else {
            toastr()->error('Wrong Old Password');
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
