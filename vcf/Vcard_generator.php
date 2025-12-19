<!DOCTYPE html>
<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/jeroendesloovere/vcard/src/VCard.php';

use JeroenDesloovere\VCard\VCard;

include 'db_inc_new.php';
$username = $_GET['username'];


// define vcard
$vcard = new VCard();

$sql = "SELECT * FROM users,company WHERE users.company_ID = company.ID AND username = '$username'";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result))

{
// define variables
$lastname = $row[2];
$firstname = $row[2];
//$additional = '';
//$prefix = '';
//$suffix = '';

// add personal data
$vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

// add work data
$vcard->addCompany('$row[15]');
$vcard->addJobtitle('$row[6]');
//$vcard->addRole('Data Protection Officer');
$vcard->addEmail('$row[3]');
$vcard->addPhoneNumber($row[9], 'PREF;WORK');
$vcard->addPhoneNumber($row[11], 'WORK');
$vcard->addAddress(null, null, '$row[15]', '$row[16]', null, null, null);
//$vcard->addLabel('street, worktown, workpostcode Belgium');
$vcard->addURL('$row[12]');
//$vcard->addPhoto('$row[16]');
}


// return vcard as a string
//return $vcard->getOutput();

// return vcard as a download
return $vcard->download();

// save vcard on disk
//$vcard->setSavePath('C:/vcard/');
//$vcard->save();
?>