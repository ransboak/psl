<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        
        if(Auth::id())
        {
            $users = DB::table('users')->where('role', '!=', 'admin');
           
            $userrole=Auth()->user()->role;

            if($userrole=='customer'){
                return view('dashboard');
            }
            else if($userrole=='admin'){
                return view('backend.main', compact('users'));
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function post(){
        return view('backend.main');
    }

}
