<?php
/* mysql_list-1.1.php    Lists sites databases, their tables and columns. */
/**** some vars ****/
  $user  = "fullline_spowell";
$userp = "Lovie777!";
$my_db = "fullline_data";

/**** connect to database ****/
 $conn = mysqli_connect("localhost", $user, $userp,$my_db);
    if (!$conn)
  {
  die('Could not connect:');
  }
?>