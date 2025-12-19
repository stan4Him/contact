<!DOCTYPE html>

<html lang="en">
<head>

<?php
include 'db_inc_new.php';
$username = $_GET['username'];
$year = date('Y') - 1988;
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$query = "SELECT FirstName, LastName FROM users WHERE username = '$username'";
$res = mysqli_query($conn,$query);
?>
<title>DBCard For
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


}
?>
<div class="container">
<div class="row">
 
  <div class="col text-center">
  <img src="<?php echo $logo; ?>" width = "200" alt="Company Logo"  />
  </div></div>
  
  <br />
  <br />
  <br />
  <div class="row">
  <div class="col text-center">
  <h1><?php echo ($first. ' '.$last); ?></h1>
  <?php echo $title; ?>
  <br />
  <br />
  <br />
  <?php
  echo '<img src=../qrcodes/';
  echo $first;
  echo '.';
  echo $last;
  echo '.png />'; 
  ?>
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