<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Rahul sahu">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Home </title>

<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  </style>


	
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<body >
  <div class="container-fluid">
		<div class="row">
		<div class="col-md-3 offset-mid-2 bg-dark text-info p-4 mt-3 ">
			<h1 class="text-center ">Avenue Shopping</h1>
		</div>
			<div class="col-md-9 offset-mid-2 bg-dark p-4 mt-3 ">
				
					<form action="details.php" method="post" class="form-inline p-3">
						<input type="text" name="search" id="search" class="form-control border-info form-control-lg rounded-0" placeholder="Search for Mobile ,Laptop...." style="width:80%;">
						<input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0" style="width:10%;">
					</form>
			</div>
			<div class="col-md-5" style="position:relative;margin-top:-38px margin-left:215px;">
				<div class="list-group" id="show-list">
					
					</div>

			</div>
		</div> 
  </div>

   
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\ip.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3> Iphone</h3>
        <p>We love the Big Apple!</p>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\thi.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>KeyBoard</h3>
        <p>We had such a great time in Avenue!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\mob.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Phones</h3>
        <p>Thank You</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<script type="text/javascript">
  	$(document).ready(function () {
  		$("#search").keyup(function(){
  			var searchText=$(this).val();
  			if(searchText='mobiles'){
  				$.ajax({
  					url:'mobile.php',
  					method:'post',
  					data:{query:searchText},
  					success:function(response){
  						
  					}
  				})
  			}
  			if(searchText!=''){
  				$.ajax({
  					url:'search1.php',
  					method:'post',
  					data:{query:searchText},
  					success:function(response){
  						$('#show-list').html(response);
  					}
  				})
  			}
  			else{
  				$('#show-list').html('');
  			}
  		});
  		$(document).on('click','a',function(){
  			$('#search').val($(this).text());
  			$("#show-list").html('');
  		}
  		// body...
  	});
  </script>
</body>


