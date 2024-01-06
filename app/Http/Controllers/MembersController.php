<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    public function index(){
        
       $users = Member::all();
        return view('backend.staff.staff-table', compact('users'));
    }
    public function addMembers(Request $request){


        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('members', 'email')],
            'contact' => ['required', 'string', 'max:255'],
            'staff_id' => ['required', 'string', 'max:255', Rule::unique('members', 'staff_id')],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'contact' => $request->contact,
            'role' => 'staff',
            'password' => Hash::make($request->password),
        ]);
        
        $member = Member::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'staff_id' => $request->staff_id,
            'email' => $request->email,
            'contact' => $request->contact,
        ]);
        return redirect('/home');
    }
}
