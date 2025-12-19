<!DOCTYPE html>

<html lang="en">
<head>

<?php
include 'db_inc_new.php';
$username = $_GET['username'];

?>

<meta http-equiv="Content-Type" content="text/html">
<meta charset="UTF-8">
<?php
$query = "SELECT FirstName, LastName FROM users WHERE ID = '$ID'";
$res = mysqli_query($conn,$query);
?>
<title>Contact Card For
<?php
while ($row2 = mysqli_fetch_array($res)) {
echo $row2[0];
echo " ";
echo $row2[1];
}


?>
</title>
 
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


 
 <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css">

 <style>
.header{
    font-family: 'Alegreya';
    font-size:30px;
  } 



 </style>


</head>
<body>
<?php
$sql = "SELECT * FROM users,company WHERE users.company_ID = company.ID AND username = '$username'";
$result = mysqli_query($conn,$sql);


while ($row = mysqli_fetch_array($result))

{
$first = $row['FirstName'];
$last = $row['LastName'];
$email = $row['EmailAddress'];
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
$company_name = $row['company_name'];
$logo = $row['logo'];

}
?>
<div class="container">
<div class="row">
 
  <div class="col text-center">
  <img src="<?php echo '/images/MyAvatar.png' ?>" width = "200" alt="My Avatar">
  <!-- <img src="<?php echo $logo; ?>" width = "200" alt="Company Logo"> -->
  </div></div>
  <div class="row">
  <div class="col text-center">
  <h4><?php echo ($first. ' '.$last); ?></h4>
  <?php echo $title; ?>
  <br /><?php echo $company_name; ?>
  <br /><?php echo $add1; ?>
  <br /><?php echo $csz; ?>
  <br /><?php echo $phone; ?>
  <br /><?php echo $mobile_hpone_no; ?>
  </div>
</div>
<hr style="border: thin solid navy; width: 50%;">
<div class="row">
<div class="col text-center">
<a href="tel:<?php echo $phone; ?>">
<img src="https://stanpowell.com/contact/images/phone_icon.png" width = "50" alt="Phone"/></a>
</div>
<div class="col text-center">
<a href="mailto:<?php echo $email; ?>">
<img src="https://stanpowell.com/contact/images/email_icon.png" width = "50" alt="Email"/></a>
</div>
<div class="col text-center">
<a href="sms:<?php echo $email; ?>">
<img src="https://stanpowell.com/contact/images/sms_icon.jpg" width = "50" alt="SMS"/></a>
</div>
<div class="col text-center">
<a href="https://www.stanpowell.com">
<img src="https://www.stanpowell.com/contact/images/website_icon.png" width = "50" alt="QR Code"/></a>
</div>
</div>


<br />
<div class="row">
<div class="col text-center">
<a href="https://stanpowell.com/contact/vcf/<?php echo $vcf; ?>" style="background-color: navy;  color: white;  padding: 1em 1.5em;  text-decoration: none;">Add To Address Book</a>
</div>
</div>
<br />
<br />

<br />
<br />
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>