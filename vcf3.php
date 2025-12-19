<?php
include 'db_inc_new.php';
$username = $_GET['username'];
$sql = "SELECT * FROM users,company WHERE users.company_ID = company.ID AND username = '$username'";
$result = mysqli_query($conn,$sql);


while ($row = mysqli_fetch_array($result))

{
$first = $row['FirstName'];
$last = $row['LastName'];
$email = $row['EmailAddress'];
$user = $row['username'];
$vcf = $row['username'];
$vcf .= ".vcf";
$phone_type = $row['phone_type'];
$phone = $row['phone_no'];
$phone_type2 = $row['phone_type2'];
$phone2 = $row['phone_no2'];
$url = $row['web_address'];
$add1 = $row['add1'];
$csz =  $row['csz'];
$title = $row['title'];
$corp = $row['corp'];
$logo = $row['logo'];

header('Content-Type: text/x-vcard');  
header('Content-Disposition: inline; filename= "'.$user.'.vcf"');  

$vcard = "BEGIN:VCARD\r\n";
$vcard .= "VERSION:4.0\r\n";
$vcard .= "N: ";
$vcard .= $last;
$vcard .= ";";
$vcard .= $first;
$vcard .= ";;;";
$vcard .= "\r\nFN:";
$vcard .= $first;
$vcard .= "&nbsp;&nbsp;";
$vcard .= $last;
$vcard .= "\r\nTITLE:";
$vcard .= $title;
$vcard .= "\r\nPHOTO;VALUE#URI;TYPE#JPG:";
$vcard .= $logo;
$vcard .= "\r\nEMAIL:";
$vcard .= $email;
$vcard .= "\r\nORG:";
$vcard .= $corp;
$vcard .="\r\nTEL;type=";
$vcard .= $phone_type;
$vcard .= ":";
$vcard .= $phone;
$vcard .="\r\nTEL;type=";
$vcard .= $phone_type2;
$vcard .= ":";
$vcard .= $phone2;
$vcard .= "\r\nURL;type=pref:";
$vcard .= $url;
$vcard .= "\r\nADR:;";
$vcard .= $add1;
$vcard .=";";
$vcard .= $csz;
$vcard .= ";";
$vcard .= "\r\nEND:VCARD\r\n";

echo $vcard;
}

?>