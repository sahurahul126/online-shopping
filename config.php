<?php
  $conn= new mysqli("localhost","root","","shopping");
  if($conn->connect_error){
  	die("Connection Failed!".$con->connect_error);
  }


?>