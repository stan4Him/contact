<?php
/* mysql_list-1.1.php    Lists sites databases, their tables and columns. */
/**** some vars ****/
  $user  = "stanpowe_stan";
$userp = "SP7826stan@";
$my_db = "stanpowe_contact";

/**** connect to database ****/
 $conn = mysqli_connect("localhost", $user, $userp,$my_db);
    if (!$conn)
  {
  die('Could not connect:');
  }
?>