<?php
  $connection=mysqli_connect("localhost","root","studentData","mysql") or die("Could not Connect".mysqli_connect_error());
  if($connection){
    echo "Connection is Sucessful";
  }
  mysqli_close($connection);
  // include './HTML/header.html';
  // include './HTML/footer.html';
?>
