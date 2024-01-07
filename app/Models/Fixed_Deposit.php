<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixed_Deposit extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'date','mobile_number', 'address', 
    'email', 'bank_name', 'account_number', 'account_type', 'deposit_amnt', 
    'mode_of_deposit', 'bank_cheque_no', 'tenure_of_security', 'interest_rate', 'disposal_instruction', 
    'other_instruction', 'bank_branch', 'id_type', 'id_number', 'issue_date', 'account_name'];

    //  'id_type', 'id_number', 'issue_date', 'expiry_date', 'emp_school_name', 'emp_school_name_address','nearest_landmark', 'digital_address', 'city_town', 'nature_of_business', 'emp_contact', 'emp_email', 'investment_objective', 'initial_investment_amnt','funds_source', 'investment_freq',
    //EXPECTED ACCOUNT ACTIVITY
}