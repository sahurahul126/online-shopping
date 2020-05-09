<?php
  $conn=new mysqli("localhost","root","","shopping");
  if($conn->connect_error){
  	die("Failed to Connect!".$conn->connect_error);
  }
  if(isset($_POST['query'])){
  	$inputText=$_POST['query'];
  	$query="SELECT search FROM users where search like '%$inputText%'";
  	$result=$conn->query($query);
  	if($result->num_rows>0){
  		while($row=$result->fetch_assoc()){
  			echo "<a href='mobile.php' class='list-group-item list-group-item-action border-1'>".$row['search']."</a>";
  		}
  	}
  	else{
  		echo "<p class='list-group-item border-1'>No Record</p>";
  	}
  }
?>



