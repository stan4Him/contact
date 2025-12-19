<?php
include 'db_inc_new.php';
$username = $_GET['username'];
$query = "SELECT FirstName, LastName FROM users WHERE username = '$username'";
$res = mysqli_query($conn,$query);
?>

<!DOCTYPE html >
<html>
<head>

<meta http-equiv="Content-Type" content="text/html" />
<meta charset="UTF-8">
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
<meta name="viewport" content="width = device-width, initial-scale = 1">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="new_style.css" />
 
 <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

 <style type="text/css">
.header{
    font-family: 'Alegreya';
    font-size:30px;
  } 
 #logo {
  font-family: "Roboto Slab", serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
  
}  
 #logo_old {
	vertical-align:middle;
  font-family: 'Bungee';
}
.navbar-brand span {
	font-size:2rem;
	line-height:1.2;
	font-weight: 200;
	display:inline-block;
	vertical-align:middle;
	padding:0 0 0 15px;
}
.navbar-brand b {
	display:block;
	font-size:50%;
	line-height:1;
}
.navbar-nav {
	margin-left:auto;
}
.agent {
    width: 400px; 
    -webkit-border-radius: 25px;
	-khtml-border-radius: 25px;	
	-moz-border-radius: 25px;
	border-radius: 25px; 
    padding: 20px;
}
.agent img {
  max-width: 100%; /* Ensures the image doesn't exceed the div's width */
  height: auto;    /* Automatically adjusts height to maintain aspect ratio */
  display: block;  /* Helps with potential spacing issues */
}
.bottom {
    width: 400px; 
    padding: 20px;
}

 </style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light"> 
  <!-- Brand --> 
  <a class="navbar-brand" href="#" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="logo" ><img src="/images/splogo.jpg" alt="Logo"></span> </a> 
  
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
  
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Connect</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Contact Me</a></li>
    </ul>
  </div>
</nav>

<div id= "main">

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
$mobile_phone_no = $row['mobile_phone_no'];

$biz_phone_no = $row['biz_phone_no'];
$url = $row['web_address'];
$add1 = $row['add1'];
$csz =  $row['csz'];
$title = $row['title'];
$corp = $row['corp'];
$logo = $row['logo'];
$qr_image = "https://www.stanpowell.com/contact/qrcodes/";
$qr_image .= $first;
$qr_image .= ".";
$qr_image .= $last;
$qr_image .= ".png";

}
?>
<div class="container agent">

    

  <div class="text-center">
  <!--<img src="<?php echo $logo; ?>" width = "200" alt="Company Logo"  />-->
  <img src="https://www.stanpowell.com/contact/images/MyAvatar.png" width="400px">
  </div>
 
  <div class="text-center" style="background-color: navy;color: white;">
  <h4><br /><?php echo ($first. ' '.$last); ?></h4>
  <?php echo $title; ?>
  <br /><?php echo $corp; ?>
  <br /><?php echo $add1; ?>
  <br /><?php echo $csz; ?>
  <br /><?php echo $mobile_phone_no; ?>
  <br /><?php echo $biz_phone_no; ?>

</div>
</div>
<!--<hr style="border: thin solid navy; width: 100%;">-->

<div class="container bottom">
<div class="row">

<div class="col-12 text-center">
<!-- QR stuff goes here-->


<img src="<?php echo $qr_image; ?>" alt="QR Code"/>
</div>
</div>
</div>

<br>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>