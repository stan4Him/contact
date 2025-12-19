<?php
include 'db_inc_new.php';
$username = $_GET['username'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$FirstName = $row[1];
$LastName = $row[2];
$EmailAddress = $row[3];
$phone_no = $row[7];
$phone_type2 = $row[8];
$phone_no2 = $row[9];
$web_address = $row[10];
$add1 = $row[11];
$csz =  $row[12];
$title = $row[13];
$company = $row[14];

$myfile = fopen("/vcf/". $username .".vcf", "w") or die("Unable to open file!");
$txt = "BEGIN:VCARD\n";
$txt ="VERSION:4.0\n";
$txt = "N:";
$txt = $LastName;
$txt = ";";
$txt = $FirstName;
$txt = ";;;\n";
$txt = "FN:";
$txt = $FirstName;
$txt = " ";
$txt = $LastName;
$txt = "\n";
$txt = "EMAIL:";
$txt = $EmailAddress;
$txt = "\n";
$txt = "ORG:";
$txt = $company;
$txt = "\n";
$txt = "TEL:";
$txt = $phone_no;
$txt = "\n";
$txt = "TEL;type=FAX:";
$txt = $phone_no2;
$txt = "\n";
$txt = "URL;type=pref:";
$txt = $web_address;
$txt = "\n";
$txt = "ADR:;";
$txt = $add1;
$txt = ";:";
$txt = $csz;
$txt = ";\n";
$txt = "END:VCARD";
fwrite($myfile, $txt);
fclose($myfile);
?>