<!DOCTYPE html>

<html lang="en">
<head>
<?php
include 'db_inc_new.php';
$username = $_GET['username'];


?>


</head>
<body>
<?php
$sql = "SELECT * FROM users,company WHERE users.company_ID = company.ID AND users.username = '$username'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


while ($row = mysqli_fetch_array($result))

{
$first = $row[1];
$last = $row[2];
$email = $row[8];
//$vcf = $row[4];
//$vcf .= ".vcf";
$phone = $row[17];
$phone_type2 = $row[18];
$phone2 = $row[19];
$url = $row[20];
$add1 = $row[21];
$csz =  $row[22];
$title = $row[10];
$corp = $row[23];
$logo = $row[24];
$cell = $row[14];
}
?>
<table style="border: 1px solid navy;">
 <tr>
  <td style="padding: 0 8px 0 20px;">

  <table>
 <tr>
 <td style="padding: 0 8px 0 20px;">

<img  width="120" src="<?php
  echo $logo;
  ?>" alt="Logo">
  <br >
  <br >
  <a href='https://www.facebook.com/fleonline'><img src="https://www.fulllineexhaust.com/contact/images/facebook.png" style="padding-left: 25px;width: 30px;" alt="Facebook Page"></a><a href='x.com/FullLineExhaust'> <img src="https://www.fulllineexhaust.com/contact/images/x.png" style="padding-left: 25px; width: 30px;" alt="X Page"></a>
  <br >
</td>
  <td  style="padding: 0 20px 0 20px; line-height: 1.25em;">

    <span  style="font-size: 18px; font-family: 'Georgia'; color: navy;"><?php
    echo $first;
    echo " ";
    echo $last;
    ?></span>  
<br >

    <span  style="font-size: 16px; font-family: 'Georgia'; font-weight: bold;color: navy; "><?php
    echo $title;
    ?></span>
<br >

    <span  style="font-size: 14px; font-family: 'Georgia';color: navy; "><?php
    echo $corp;
    ?></span>

<br >
<hr style="border: thin solid navy;">
     <span style="font-size: 11px; color: navy; font-family: 'Georgia';"><img src="https://www.fulllineexhaust.com/contact/images/phone-icon.jpg" width='16' alt='Phone Icon'></span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
    echo $phone;
    ?></span>
<br >
<span style="font-size: 11px; color: navy; font-family: 'Georgia';">f:</span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
    echo $phone2;
    ?></span>
<br >
     <span style="font-size: 11px; color: navy; font-family: 'Georgia'; "><img src="https://www.fulllineexhaust.com/contact/images/address-icon.jpg" width='16' alt="Address Icon"></span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
    echo $add1;
    echo " ";
    echo $csz;
    ?></span>
<br >

      <span style="font-size: 11px; color: navy; font-family: 'Georgia';"><img src="https://www.fulllineexhaust.com/contact/images/link-icon.jpg" width='16' alt="Web Address"></span>
      <span><a href="https://www.fulllineexhaust.com" target="_blank" style="color: #000; text-decoration: none; font-size: 12px; font-family: 'Georgia';" >&nbsp;&nbsp;www.fulllineexhaust.com</a></span>
<br >

      <span style="font-size: 11px; color: navy; font-family: 'Georgia'; "><img src="https://www.fulllineexhaust.com/contact/images/email-icon.jpg" width='16' alt="Email Icon"></span>
      <span><a href="mailto:<?php
    echo $email;
    ?>" target="_blank" style="font-size: 12px; color: #000; text-decoration: none; font-family: 'Georgia';" >&nbsp;&nbsp;<?php
    echo $email;
    ?></a></span>
     <br >
     <span style="font-size: 11px; color: navy; font-family: 'Georgia';"><img src="https://www.fulllineexhaust.com/contact/images/cell_icon.jpg" width='16' alt='Cellular Icon'></span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
     echo "Cell: ";
    echo $cell;
    ?></span>

  </td>
 </tr>
</table>
</body>
</html>