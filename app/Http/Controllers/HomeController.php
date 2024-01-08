<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        if(Auth::id())
        {
            $users = DB::table('users')->where('role', '!=', 'admin');
           
            $userrole=Auth()->user()->role;

            if($userrole=='customer'){
                $user_id = Auth::user()->id;
                $applications = Application::where('user_id', $user_id)->get();
                return view('dashboard', ['applications' => $applications]);
            }
            else if($userrole=='admin' || $userrole=='staff'){
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
