<?php
$conn=new mysqli("localhost","root","","shopping");
  if($conn->connect_error){
  	die("Failed to Connect!".$conn->connect_error);
  }
  if(isset($_POST['submit'])){
  	$data=$_POST['search'];
  	$sql="SELECT * FROM users where search='$data'";
    $output ='';
  	$result=$conn->query($sql);
  	$row=$result->fetch_assoc();
  	 /*echo "ID :".$row['id']."<br>";
  	 echo "search:".$row['search']."<br>";
  	 */
  	 if($data=='mobile'||$data=='mobiles'){
  	 			include 'mobile.php';
  	 }
  	  else if($data=='laptop'||$data=='laptops'){
  	 	include 'laptop.php';

  	 }
  	 else if($data!==''){
  	 	$output="<h3>No Product Found !</h3>";
        echo $output;
  	 }
  }
  ?>