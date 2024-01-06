<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fixed_deposits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('investor_account_number')->nullable();
            $table->date('date');
            $table->string('account_type');
            $table->string('name');
            $table->string('id_type');
            $table->string('id_number');
            $table->date('issue_date');
            $table->string('address');
            $table->string('mobile_number');
            $table->string('email');
            $table->decimal('deposit_amnt');
            $table->string('mode_of_deposit');
            $table->string('bank_cheque_no');
            $table->string('tenure_of_security');
            $table->string('interest_rate');
            $table->string('disposal_instruction');
            $table->text('other_instruction');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('account_name');
            $table->string('account_number')->nullable();
            //PERSONAL INNFORMATION
            // $table->string('customer_status');
            // $table->string('title');
            // $table->string('name');
            // $table->string('maidenname')->nullable();
            // $table->date('dob');
            // $table->string('country_of_origin');
            // //CONTACT DETAILS
            // $table->string('mobile_number');
            // $table->string('email');
            // $table->string('residential_address');
            // $table->string('nearest_landmark');
            // $table->string('city');
            // $table->string('postal_address');
            // $table->string('emerg_contact_name');
            // $table->string('emerg_relationship_with_client');
            // $table->string('emerg_contact_number');
            // //PROOF OF IDENTITY
            // // $table->string('id_type');
            // // $table->string('id_number');
            // // $table->date('issue_date');
            // // $table->date('expiry_date');


            // //EMPLOYMENT / BUSINESS DETAILS
            // $table->string('emp_status');
            // $table->string('monthly_income_range');
            // // $table->string('emp_school_name');
            // // $table->string('emp_school_name_address');
            // // $table->string('nearest_landmark');
            // // $table->string('digital_address');
            // // $table->string('city_town');
            // // $table->string('nature_of_business');
            // // $table->string('emp_contact');
            // // $table->string('emp_email');


            // //CLIENT INVESTMENT PROFILE
            // // $table->text('investment_objective');
            // // $table->string('risk_tolerance');
            // // $table->string('investment_horizon');
            // // $table->string('investment_knowledge');
            // // $table->decimal('initial_investment_amnt');

            // //EXPECTED ACCOUNT ACTIVITY
            // // $table->string('funds_source');
            // // $table->string('investment_freq');
            // $table->string('withdrawals');
            // $table->decimal('exp_top_up_amnt');
            // $table->decimal('exp_withdrawal_amnt');
            // //STATEMENT SERVICE
            // $table->string('statement_delivery');
            // $table->string('statement_freq');
            // //BANK ACCOUNT DETAILS
            // $table->string('bank_name')->nullable();
            // $table->string('account_number')->nullable();
            // $table->string('bank_branch')->nullable();
            // //Terms and condition
            // $table->int('agree_terms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_deposits');
    }
};
