<?php
require_once '../includes/rb.db.inc.php';

// fetch POSTed fields
$familyId = filter_input(INPUT_POST,'hdnId');
$familyFirstName = filter_input(INPUT_POST,'familyFirstName');
$familyLastName = filter_input(INPUT_POST,'familyLastName');
$familyPhoneNumber = filter_input(INPUT_POST,'familyPhoneNumber');
$familyEmailAddress = filter_input(INPUT_POST,'familyEmailAddress');  
$familyPayMethodId = filter_input(INPUT_POST,'familyPayMethod');

if ($familyId==0) {
    // fetch an empty record
    $family = R::dispense('family');
} else {
    // fetch the specific record    
    $family = R::findOne('family',' id=? ', array($familyId));
}

// set fields
$family->first_name = $familyFirstName;
$family->last_name = $familyLastName;
$family->phone_number_1 = $familyPhoneNumber;
$family->email_address_1 = $familyEmailAddress;  
$family->paymethod_id = $familyPayMethodId;  

// save record
R::store($family);

exit();
