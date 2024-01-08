<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::all();
        return view('backend.products.pending-applications', compact('applications') );
    }
    public function fixedDeposit(Request $request){
        
        // $request->validate([
        //     'name'=>'required',
        //     'date'=>'required',
        //     'mobil
        // ])
        $user_id = Auth::user()->id;
        $application = Application::create([
            'investment_category' => 'Fixed Deposit',
            'name'=>$request->name,
            'user_id' => $user_id,
            'date' => $request->date,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'email' => $request->email,
            'bank_name'=> $request->bank_name,
            'account_number'=>$request->account_number,
            'account_type'=>$request->account_type,
            'deposit_amnt'=>$request->deposit_amnt,
            'mode_of_deposit'=>$request->mode_of_deposit,
            'bank_cheque_no'=>$request->bank_cheque_no,
            'tenure_of_security'=>$request->tenure_of_security,
            'interest_rate'=>$request->interest_rate,
            'disposal_instruction'=>$request->disposal_instruction,
            'other_instruction'=>$request->other_instruction,
            'bank_branch'=>$request->bank_branch,
            'id_type'=>$request->id_type,
            'id_number'=>$request->id_number,
            'issue_date'=>$request->issue_date,
            'account_name'=>$request->account_name,
        ]);

        return redirect('/pending-applications');
        
    }

    public function treasuryBill(Request $request){
        
        // $request->validate([
        //     'name'=>'required',
        //     'date'=>'required',
        //     'mobil
        // ])
        $user_id = Auth::user()->id;
        $application = Application::create([
            'investment_category' => 'Treasury Bill',
            'name'=>$request->name,
            'user_id' => $user_id,
            'date' => $request->date,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'email' => $request->email,
            'bank_name'=> $request->bank_name,
            'account_number'=>$request->account_number,
            'account_type'=>$request->account_type,
            'deposit_amnt'=>$request->deposit_amnt,
            'mode_of_deposit'=>$request->mode_of_deposit,
            'bank_cheque_no'=>$request->bank_cheque_no,
            'tenure_of_security'=>$request->tenure_of_security,
            'interest_rate'=>$request->interest_rate,
            'disposal_instruction'=>$request->disposal_instruction,
            'other_instruction'=>$request->other_instruction,
            'bank_branch'=>$request->bank_branch,
            'id_type'=>$request->id_type,
            'id_number'=>$request->id_number,
            'issue_date'=>$request->issue_date,
            'account_name'=>$request->account_name,
        ]);

        return redirect('/pending-applications');
        
    }
}
