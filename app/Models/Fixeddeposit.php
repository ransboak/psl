<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixeddeposit extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'date', 'user_id', 'mobile_number', 'address', 
    'email', 'bank_name', 'account_number', 'account_type', 'deposit_amnt', 
    'mode_of_deposit', 'bank_cheque_no', 'tenure_of_security', 'interest_rate', 'disposal_instruction', 
    'other_instruction', 'bank_branch', 'id_type', 'id_number', 'issue_date', 'account_name'];
}
