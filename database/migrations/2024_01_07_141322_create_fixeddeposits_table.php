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
        Schema::create('fixeddeposits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixeddeposits');
    }
};
