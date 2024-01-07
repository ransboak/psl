//Wizard Init

$("#wizard").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "none",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="number">#index#</span>'
});

//Form control

$('.purpose-radio-input').on('change', function(e) {
    $('#account-type').text(e.target.value);
}); 

$('#name').on('change', function(e) {
    $('#enteredName').text(e.target.value || 'Kofi Ansah');
});
$('#id_type').on('change', function(e) {
    $('#enteredIdType').text(e.target.value || 'National ID / Ghana Card');
});
$('#id_number').on('change', function(e) {
    $('#enteredIdNumber').text(e.target.value || 'GHA-563427635-0');
});
$('#issue_date').on('change', function(e) {
    $('#enteredIssueDate').text(e.target.value || '12/06/20');
});
$('#address').on('change', function(e) {
    $('#enteredAddress').text(e.target.value || 'Enter Address');
});
$('#mobile_number').on('change', function(e) {
    $('#enteredMobileNumber').text(e.target.value || '+233-582-6609');
});
$('#email').on('change', function(e) {
    $('#enteredEmailAddress').text(e.target.value || '');
});
$('#deposit_amnt').on('change', function(e) {
    $('#enteredDepositAmnt').text(e.target.value || '');
});
$('#mode_of_deposit').on('change', function(e) {
    $('#enteredModeOfDeposit').text(e.target.value || '');
});
$('#bank_cheque_no').on('change', function(e) {
    $('#enteredBankNo').text(e.target.value || '');
});
$('#tenure_of_security').on('change', function(e) {
    $('#enteredTenureOfSecurity').text(e.target.value || '');
});
$('#disposal_instruction').on('change', function(e) {
    $('#enteredDisposalInstruction').text(e.target.value || '');
});
$('#interest_rate').on('change', function(e) {
    $('#enteredInterestRate').text(e.target.value || '');
});
$('#other_instruction').on('change', function(e) {
    $('#enteredOtherInstruction').text(e.target.value || '');
});
$('#bank_name').on('change', function(e) {
    $('#enteredBankName').text(e.target.value || '');
});
$('#bank_branch').on('change', function(e) {
    $('#enteredBankBranch').text(e.target.value || '');
});
$('#account_name').on('change', function(e) {
    $('#enteredAccountName').text(e.target.value || '');
});
$('#account_number').on('change', function(e) {
    $('#enteredAccountNumber').text(e.target.value || '');
});

