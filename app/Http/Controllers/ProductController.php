<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Fixeddeposit;
use Illuminate\Http\Request;
use App\Models\Fixed_Deposit;
use App\Models\Tbill;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function approve(Application $application){
        if(Auth::user()->role == 'admin'){
            $investment_category = $application->investment_category;

        if($investment_category == 'Fixed Deposit'){
            $fixeddeposit = new Fixeddeposit();
            $fixeddeposit->name = $application->name;
            $fixeddeposit->email = $application->email;
            $fixeddeposit->user_id = $application->user_id;
            $fixeddeposit->date = $application->date;
            $fixeddeposit->mobile_number = $application->mobile_number;
            $fixeddeposit->address = $application->address;
            $fixeddeposit->bank_name = $application->bank_name;
            $fixeddeposit->account_number = $application->account_number;
            $fixeddeposit->account_type = $application->account_type;
            $fixeddeposit->deposit_amnt = $application->deposit_amnt;
            $fixeddeposit->mode_of_deposit = $application->mode_of_deposit;
            $fixeddeposit->bank_cheque_no = $application->bank_cheque_no;
            $fixeddeposit->tenure_of_security = $application->tenure_of_security;
            $fixeddeposit->interest_rate = $application->interest_rate;
            $fixeddeposit->disposal_instruction = $application->disposal_instruction;
            $fixeddeposit->other_instruction = $application->other_instruction;
            $fixeddeposit->bank_branch = $application->bank_branch;
            $fixeddeposit->id_type = $application->id_type;
            $fixeddeposit->id_number = $application->id_number;
            $fixeddeposit->issue_date = $application->issue_date;
            $fixeddeposit->account_name = $application->account_name;

            $fixeddeposit->save();

            $application->delete();
            
            return redirect('/fixeddeposit');
        }elseif($investment_category == 'Treasury Bill'){
            $treasurybill = new Tbill();
            $treasurybill->name = $application->name;
            $treasurybill->email = $application->email;
            $treasurybill->user_id = $application->user_id;
            $treasurybill->date = $application->date;
            $treasurybill->mobile_number = $application->mobile_number;
            $treasurybill->address = $application->address;
            $treasurybill->bank_name = $application->bank_name;
            $treasurybill->account_number = $application->account_number;
            $treasurybill->account_type = $application->account_type;
            $treasurybill->deposit_amnt = $application->deposit_amnt;
            $treasurybill->mode_of_deposit = $application->mode_of_deposit;
            $treasurybill->bank_cheque_no = $application->bank_cheque_no;
            $treasurybill->tenure_of_security = $application->tenure_of_security;
            $treasurybill->interest_rate = $application->interest_rate;
            $treasurybill->disposal_instruction = $application->disposal_instruction;
            $treasurybill->other_instruction = $application->other_instruction;
            $treasurybill->bank_branch = $application->bank_branch;
            $treasurybill->id_type = $application->id_type;
            $treasurybill->id_number = $application->id_number;
            $treasurybill->issue_date = $application->issue_date;
            $treasurybill->account_name = $application->account_name;

            $treasurybill->save();

            $application->delete();
            
            return redirect('/treasurybills');
        }else{
            return redirect()->back();
        }
        
        }


        
    }
}
