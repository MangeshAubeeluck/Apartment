<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>My Apartment Booking</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >My Apartment Booking</a>
			</div>
			<div class="logo">
				<img src="logo.png">
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "home.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "booking.php">Book An Apartment</a></li> |
		<li><a href = "contact.php">Contact us</a></li> |

		<li><a href="logout.php"><img alt="Qries" src="./logout.png"width=20" height="20">Logout</a></li>		
		
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Make Your Booking</h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `apartments` WHERE `Apartment_id` = '$_REQUEST[Apartment_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['Apartment_name']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Rs. ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_booking.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />

	
</body>
	<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <li><a href = "aboutus.php">About us</a></li>
      <li>Services</li>
      <li>Privacy Policy</li>
      <li>Locate us</li>
      <li>Terms & Conditions</li>
      <li>Cookie Poicies</li>
    </ul>
  </div>
  <div class="col">
    <h1>Help Desk</h1>
    <ul>
      <li>FAQ</li>
      <li><a href="contact.php"> Contact Us</a></li>
      <li>Useful Information</li>
      <li>Billing & Payments</li>
      <li>Complaints</li>
    </ul>
  </div>
  
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><a href="https://www.instagram.com/"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/ width="32" style="width: 32px;"></a></li>
      <li><a href="https://www.facebook.com/"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/ width="32" style="width: 32px;"></a></li>
      <li><a href="https://www.pinterest.com/"><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></a></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>