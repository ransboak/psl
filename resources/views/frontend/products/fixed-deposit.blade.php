@extends('frontend.main')
@section('welcome');
<head>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/css/bd-wizard.css">
    <!-- Custom style CSS -->
    
    <link rel='shortcut icon' type='image/x-icon' href='assets2/img/favicon.ico' />
</head>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Apply Now</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                <li>Pages</li>
                <li>User</li>
                <li>Fixed Deposit</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Sign Up Area -->
<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <main class="d-flex align-items-center">
            <div class="container">
              @if(Auth::user())
                <form action="/apply/fixed-deposit" method="POST" id="wizard">
                @csrf
                <h3>Step 1 Title</h3>
                  <section>
                   <h5 class="bd-wizard-step-title">Step 1</h5>
                   <h2 class="section-heading">Select Account type </h2>
                   <p>Which Account type do you hold?</p>
                   <div class="purpose-radios-wrapper">
                      <div class="purpose-radio">
                          <input type="radio" name="account_type" id="branding" class="purpose-radio-input" value="Single" checked>
                         <label for="branding" class="purpose-radio-label">
                           <span class="label-icon">
                             <img src="assets2/images/icon_branding.svg" alt="branding" class="label-icon-default">
                             <img src="assets2/images/icon_branding_green.svg" alt="branding" class="label-icon-active">
                           </span>
                           <span class="label-text">Single</span>
                         </label>
                        </div>
                        <div class="purpose-radio">
                           <input type="radio" name="account_type" id="joint" class="purpose-radio-input" value="Joint">
                          <label for="joint" class="purpose-radio-label">
                            <span class="label-icon">
                              <img src="assets2/images/icon_mobile_design.svg" alt="branding" class="label-icon-default">
                              <img src="assets2/images/icon_mobile_design_green.svg" alt="branding" class="label-icon-active">
                            </span>
                            <span class="label-text">Joint</span>
                          </label>
                         </div>
                         <div class="purpose-radio">
                             <input type="radio" name="account_type" id="itf" class="purpose-radio-input" value="ITF">
                            <label for="itf" class="purpose-radio-label">
                              <span class="label-icon">
                                <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                                <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                              </span>
                              <span class="label-text">ITF</span>
                            </label>
                           </div>
                         <div class="purpose-radio">
                             <input type="radio" name="account_type" id="corporate" class="purpose-radio-input" value="Corporate">
                            <label for="corporate" class="purpose-radio-label">
                              <span class="label-icon">
                                <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                                <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                              </span>
                              <span class="label-text">Corporate</span>
                            </label>
                           </div>
                           {{-- <div class="form-group">
                            <label for="investor_account_number" class="sr-only">Investor Account Number</label>
                            <input id="id_number" name="id_number" type="text" class="form-control" placeholder="ID NUmber">
                          </div> --}}
                          <div class="form-group">
                            <label for="date" class="sr-only">Date</label>
                            <input class="form-control" type="date" id="date" name="date" placeholder="Date Of Application">
                          </div>
                   </div>
                  </section>
                  <h3>Step 2 Title</h3>
                  <section>
                    <h5 class="bd-wizard-step-title">Step 2</h5>
                    <h2 class="section-heading">Customer Details</h2>
                    <input type="hidden" name="investment_category" id="investment_category" class="form-control" value="Fixed Deposit">
                    <div class="form-group">
                      <label for="name" class="sr-only">Name Of Customer</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="id_type" class="sr-only">ID Type</label>
                      <select id="id_type" name="id_type" class="form-control">
                        <option value="">--Please Select--</option>
                        <option value="Ghana Card">National ID / Ghana Card</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="id_number" class="sr-only">ID Number</label>
                      <input id="id_number" name="id_number" type="text" class="form-control" placeholder="ID NUmber">
                    </div>
                    <div class="form-group">
                      <label for="issue_date" class="sr-only">Issue Date</label>
                      <input class="form-control" type="date" value="2024-01-01" id="issue_date" name="issue_date">
                    </div>
                    <div class="form-group">
                      <label for="address" class="sr-only">Address</label>
                      <textarea class="form-control" rows="5" id="address" placeholder="Address" required name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mobile_number" class="sr-only">Mobile Number</label>
                        <input id="mobile_number" name="mobile_number" type="text" class="form-control" placeholder="Mobile NUmber" required>
                      </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email Address</label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" required>
                      </div>
                  </section>
                  <h3>Step 2 Title</h3>
                  <section>
                    <h5 class="bd-wizard-step-title">Step 3</h5>
                    <h2 class="section-heading">Investment Details</h2>
                    <div class="form-group">
                      <label for="deposit_amnt" class="sr-only">Amount Invested / Deposit</label>
                      <input type="number" name="deposit_amnt" id="deposit_amnt" class="form-control" placeholder="Amoount Invested / Deposit">
                    </div>
                    <div class="form-group">
                      <label for="mode_of_deposit" class="sr-only">Mode Of Deposit</label>
                      <select id="mode_of_deposit" name="mode_of_deposit" class="form-control">
                        <option value="">--Please Select--</option>
                        <option value="transfer">Transfer</option>
                        <option value="cash">Cash</option>
                        <option value="cheque">Cheque</option>
                        <option value="other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="bank_cheque_no" class="sr-only">Bank / Cheque No</label>
                      <input id="bank_cheque_no" name="bank_cheque_no" type="text" class="form-control" placeholder="Bank / Cheque No">
                    </div>
                    <div class="form-group">
                        <label for="tenure_of_security" class="sr-only">TENURE OF SECURITY</label>
                        <select id="tenure_of_security" name="tenure_of_security" class="form-control">
                          <option value="">--TENURE OF SECURITY--</option>
                          <option value="91-DAY">91-DAY</option>
                          <option value="182-DAY">182-DAY</option>
                          <option value="1-YEAR">1-YEAR</option>
                          <option value="2-YEAR">2-YEAR</option>
                          <option value="YEAR(BOND)">YEAR(BOND)</option>
                          <option value="TOP UP">TOP UP</option>
                          <option value="OTHERS">OTHERS</option>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="interest_rate" class="sr-only">Interest Rate</label>
                        <input id="interest_rate" name="interest_rate" type="text" class="form-control" placeholder="Interest Rate">
                      </div>
                      <div class="form-group">
                        <label for="disposal_instruction" class="sr-only">Disposal Instruction Upon Maturity</label>
                        <select id="disposal_instruction" name="disposal_instruction" class="form-control">
                          <option value="">--Disposal Instruction Upon Maturity--</option>
                          <option value="Roll Over With Interest">Roll Over With Interest</option>
                          <option value="Roll Over Without Interest">Roll Over Without Interest</option>
                          <option value="Do not Rollover">Do not Rollover</option>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="other_instruction" class="sr-only">Any Other Instruction</label>
                        <textarea class="form-control" rows="5" id="other_instruction" name="other_instruction" placeholder="Any Other Instruction" required></textarea>
                      </div>
                  </section>
                  <h3>Step 5 Title</h3>
                  <section>
                    <h5 class="bd-wizard-step-title">Step 5</h5>
                    <h2 class="section-heading">Client's Bank Account</h2>
                    <div class="form-group">
                      <label for="bank_name" class="sr-only">Name Of Bank</label>
                      <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Name Of Bank">
                    </div>
                    <div class="form-group">
                      <label for="bank_branch" class="sr-only">Bank Branch</label>
                      <input type="text" name="bank_branch" id="bank_branch" class="form-control" placeholder="Bank Branch">
                    </div>
                    <div class="form-group">
                      <label for="account_name" class="sr-only">Account Name</label>
                      <input type="text" name="account_name" id="account_name" class="form-control" placeholder="Account Name">
                    </div>
                    <div class="form-group">
                      <label for="account_number" class="sr-only">Account Number</label>
                      <input type="text" name="account_number" id="account_number" class="form-control" placeholder="Account Number">
                    </div>     
                  </section>
                  <h3>Step 3 Title</h3>
                  <section>
                      <h5 class="bd-wizard-step-title">Step 3</h5>
                      <h2 class="section-heading mb-5">Review your Details and Submit</h2>
                      <h5 class="section-heading mb-5">Fixed Deposit</h5>
                      <h6 class="font-weight-bold">Select Account type</h6>
                      <p class="mb-4" id="account-type"></p>
                      <h6 class="font-weight-bold">Customer Details</h6>
                      <p class="mb-4"><span id="enteredName"></span> <br>
                          {{-- ID Type: <span id="enteredIdType"></span> <br> --}}
                           ID Number: <span id="enteredIdNumber"></span></p>
                          Issue Date: <span id="enteredIssueDate"></span></p>
                          Address: <span id="enteredAddress"></span></p>
                          Mobile Number: <span id="enteredMobileNumber"></span></p>
                          Email: <span id="enteredEmailAddress"></span></p>
                          Amount Invested / Deposit: <span id="enteredDepositAmnt"></span></p>
                          {{-- Mode of Deposit: <span id="enteredModeOfDeposit"></span></p> --}}
                          {{-- Tenure Of Security: <span id="enteredTenureOfSecurity"></span></p> --}}
                          Interest Rate: <span id="enteredInterestRate"></span></p>
                          {{-- Disposal Instruction Upon Maturity: <span id="enteredDisposalInstruction"></span></p> --}}
                          Any Other Instruction: <span id="enteredOtherInstruction"></span></p>
                      <h6 class="font-weight-bold">Client's Bank Account</h6>
                        Name Of Bank: <span id="enteredBankName"></span></p>
                        Bank Branch: <span id="enteredBankBranch"></span></p>
                        Account Name: <span id="enteredAccountName"></span></p>
                        Account No: <span id="enteredAccountNumber"></span></p>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                            <div class="agree-label">
                                <input type="checkbox" id="chb1" required>
                                <label for="chb1">
                                    I agree with Prudential Securities Limited's Privacy Policy
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                  </section>
                
                </form>
                @else
                <h5 class="bd-wizard-step-title">Please Login to apply!</h5>
                @endif
            </div>
          </main>

            </div>


    </div>
</section>
<!-- End Sign Up Area -->
 <!-- jQuery  -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="assets2/js/jquery.steps.min.js"></script>
  <script src="assets2/js/bd-wizard.js"></script>
@endsection