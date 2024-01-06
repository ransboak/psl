<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
      // $users = DB::table('users')->where('role', '=', 'customer');
            $users = User::where('role', '=', 'customer')->latest()->get();
            $userrole=Auth()->user()->role;
      return view('backend.customers.customers-table', compact('users'));
    }

}
