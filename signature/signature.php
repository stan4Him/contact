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
$add1 = $row[22];
$csz =  $row[23];
$title = $row[10];
$corp = $row[23];
$logo = $row[24];
$cell = $row[14];
}
?>
<table>
 <tr>
  <td style="padding: 0 8px 0 20px;">

    <img  width="200" src="<?php
    echo $logo;
    ?>" alt="Logo"/>
    <br />
    <br />
  </td>
  <td  style="padding: 0 8px 0 20px; line-height: 1.25em;">

    <span  style="font-size: 18px; font-family: 'Georgia'; color: navy;"><?php
    echo $first;
    echo " ";
    echo $last;
    ?></span>  
<br />

    <span  style="font-size: 16px; font-family: 'Georgia'; font-weight: bold;color: navy; "><?php
    echo $title;
    ?></span>
<br />

    <span  style="font-size: 14px; font-family: 'Georgia';color: navy; "><?php
    echo $corp;
    ?></span>

<br />
<hr style="border: thin solid navy;">
     <span style="font-size: 11px; color: navy; font-family: 'Georgia';">Office: </span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
    echo $phone;
    ?></span>
<br />
     <span style="font-size: 11px; color: navy; font-family: 'Georgia'; "><img src="https://www.fulllineexhaust.com/contact/images/facebook.png" width='9' alt="Facebook Icon"></span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
    echo "facebook.com/fleonline/";
    ?></span>
<br />
<span style="font-size: 11px; color: navy; font-family: 'Georgia'; "><img src="https://www.fulllineexhaust.com/contact/images/x.png" width='9' alt="Facebook Icon"></span>
     <span  style="font-size: 12px; font-family: 'Georgia';">&nbsp;&nbsp;<?php
    echo "x.com/FullLineExhaust";
    ?></span>
<br />

     

  </td>
 </tr>
</table>
</body>
</html>