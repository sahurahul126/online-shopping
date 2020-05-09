<?php
  require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Rahul sahu">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Laptop filter </title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>


<body>
  <div class="container-fluid">
    <div class="row bg-info ">
      
      <div class="col-lg-3  p-2">
        <button  class="btn btn-primary" onclick="history.go(-1);">Back </button>
      </div>
      <div class="col-lg-9">

    <h3 class="text-center text-light bg-info p-2">Laptop Filter</h3>
  </div>

</div>
    
    	<div class="row">
    	<div class="col-lg-3">
        
    		<h5> Filter Product</h5>
    		<hr>
    		
    		<h6 class="text-info">Select Brand</h6>
    		<ul class="list-group"> 
    			<?php
    			$sql="SELECT DISTINCT brand FROM products ORDER BY brand";
    			$result=$conn->query($sql);
    			 while($row=$result->fetch_assoc()){


    			?>
    				<li class="list-group-item">
    					<div class="form-check">
    					 <label class="form-check-label">
    					 	<input type="checkbox" class="form-check-input product_check" value="<?=$row['brand']; ?>"  id="brand"><?=$row['brand'];?>
    					 </label> 
    					</div>
    				</li>
    			<?php } ?>
    		</ul>
    		<h6 class="text-info">Select RAM</h6>
    		<ul class="list-group"> 
    			<?php
    			$sql="SELECT DISTINCT ram FROM products ORDER BY ram";
    			$result=$conn->query($sql);
    			 while($row=$result->fetch_assoc()){


    			?>
    				<li class="list-group-item">
    					<div class="form-check">
    					 <label class="form-check-label">
    					 	<input type="checkbox" class="form-check-input product_check" value="<?=$row['ram']; ?>"  id="ram"><?=$row['ram'];?>
    					 </label> 
    					</div>
    				</li>
    			<?php } ?>
    		</ul>
    		<h6 class="text-info">Select HDD</h6>
    		<ul class="list-group"> 
    			<?php
    			$sql="SELECT DISTINCT hdd FROM products ORDER BY hdd";
    			$result=$conn->query($sql);
    			 while($row=$result->fetch_assoc()){


    			?>
    				<li class="list-group-item">
    					<div class="form-check">
    					 <label class="form-check-label">
    					 	<input type="checkbox" class="form-check-input product_check" value="<?=$row['hdd']; ?>"  id="hdd"><?=$row['hdd'];?>
    					 </label> 
    					</div>
    				</li>
    			<?php } ?>
    		</ul>
    		<h6 class="text-info">Select Processor</h6>
    		<ul class="list-group"> 
    			<?php
    			$sql="SELECT DISTINCT processor FROM products ORDER BY processor";
    			$result=$conn->query($sql);
    			 while($row=$result->fetch_assoc()){


    			?>
    				<li class="list-group-item">
    					<div class="form-check">
    					 <label class="form-check-label">
    					 	<input type="checkbox" class="form-check-input product_check" value="<?=$row['processor']; ?>"  id="processor"><?=$row['processor'];?>
    					 </label> 
    					</div>
    				</li>
    			<?php } ?>
    		</ul>
    		<h6 class="text-info">Select Screen Size</h6>
    		<ul class="list-group"> 
    			<?php
    			$sql="SELECT DISTINCT screen_size FROM products ORDER BY screen_size";
    			$result=$conn->query($sql);
    			 while($row=$result->fetch_assoc()){


    			?>
    				<li class="list-group-item">
    					<div class="form-check">
    					 <label class="form-check-label">
    					 	<input type="checkbox" class="form-check-input product_check" value="<?=$row['screen_size']; ?>"  id="screen_size"><?=$row['screen_size'];?>
    					 </label> 
    					</div>
    				</li>
    			<?php } ?>
    		</ul>
 				<h6 class="text-info">Select OS</h6>
    		<ul class="list-group"> 
    			<?php
    			$sql="SELECT DISTINCT os FROM products ORDER BY os";
    			$result=$conn->query($sql);
    			 while($row=$result->fetch_assoc()){


    			?>
    				<li class="list-group-item">
    					<div class="form-check">
    					 <label class="form-check-label">
    					 	<input type="checkbox" class="form-check-input product_check" value="<?=$row['os']; ?>"  id="os"><?=$row['os'];?>
    					 </label> 
    					</div>
    				</li>
    			<?php } ?>
    		</ul>
 
 
 
    	</div>	 
    	<div class="col-lg-9">
           <h5 class="text-center" id="textChange">All Products</h5>
           <hr>
           <div class="text-center"> 
           	<img src="images/loader.gif"  id="loader" width="200"  style="display:none;"></div>
           	<div class="row" id="result">
           		<?php
           		$sql="SELECT * FROM products";
           		$result=$conn->query($sql);
           		while($row=$result->fetch_assoc()){

           			?>
           			<div class="col-md-3 mb-2"> 
           				<div class="card-deck">
           					<div class="card border-secondary">
           						<img src="<?= $row['product_image'];?>" class="card-img-top">
           						<div class="card-img-overlay">
           							<h6 style="margin-top: 175px;" class="text-light bg-info text-center rounded p-1"><?=$row['product_name'];?>
           								
           							</h6>
           						</div>
           						<div class="card-body">
           							<h4 class="card-title text-danger">Price:<?=number_format($row['product_price']);?>/-</h4>
           							<p>
           								RAM:<?=$row['ram'];?><br>
           								HDD:<?=$row['hdd'];?><br>
           								Processor:<?=$row['processor'];?><br>
           								Scree Size:<?=$row['screen_size'];?><br>
           								OS:<?=$row['os'];?><br>
           							</p>
           							<a href="#" class="btn btn-success btn-block">Add To Chart</a>

           						</div>

           					</div>
           				</div>
           			</div>
           	   <?php	} ?>

           	</div>
      </div>
    </div>
   <script type="text/javascript">
   	$(document).ready(function(){
   		$('.product_check').click(function(){
   			$("#loader").show();

   			var action='data';
   			var brand=get_filter_text('brand');
   			var ram=get_filter_text('ram');
   			var hdd=get_filter_text('hdd');
   			var processor=get_filter_text('processor');
   			var screen=get_filter_text('screen_size');
   			var os=get_filter_text('os');

   			$.ajax({
   				url:'action.php',
   				method:'POST',
   				data:{action:action,brand:brand,ram:ram,hdd:hdd,processor:processor,screen:screen,os:os},
   				success:function(response){
   					$("#result").html(response);
   					$("#loader").hide();
   					$("#textChange").text("Filter Products");
   				}
   			});
   		});
   		function get_filter_text(text_id){
   			var filterData=[];
   			$('#'+text_id+':checked').each(function(){
   					filterData.push($(this).val());
   			});
   			return filterData;
   		}

   	});
   </script>
</body>
</html>