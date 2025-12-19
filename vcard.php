<?php
include 'db_inc_new.php';
$username = $_GET['username'];
$sql = "SELECT * FROM users,company WHERE users.company_ID = company.ID AND username = '$username'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$FirstName = $row[1];
$LastName = $row[2];
$EmailAddress = $row[3];
$phone_no = $row[7];
$phone_type2 = $row[8];
$phone_no2 = $row[9];
$url = $row[10];
$add1 = $row[11];
$csz =  $row[12];
$title = $row[13];
$company = $row[14];



include_once('class.vCard.inc.php');
$vCard = (object) new vCard('','');

$vCard->setFirstName('$FirstName');
$vCard->setLastName('$LastName');
//$vCard->setTitle('Doctor');
$vCard->setCompany('$company');
//$vCard->setOrganisation('Linux');
$vCard->setJobTitle('$title');
$vCard->setTelephoneWork1('$phone_no');
$vCard->setTelephoneWork2('$phone_no2');
$vCard->setWorkStreet('$add1');
$vCard->setWorkZIP('$csz');
$vCard->setURLWork('$web_address');
$vCard->setEMail('$EmailAddress');
/*
OR
header('Content-Type: text/x-vcard');
header('Content-Disposition: inline; filename=vCard_' . date('Y-m-d_H-m-s') . '.vcf');
echo $vCard->getCardOutput();
*/
$vCard->writeCardFile();
header('Location:' . $vCard->getCardFilePath());
exit;

?>