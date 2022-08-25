<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>My Apartment</title>
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
				<strong><h3>Apartment Available</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `apartments` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['Apartment_name']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: Rs. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_booking.php?Apartment_id=<?php echo $fetch['Apartment_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Book Now</a>
						</div>
					</div>
				<?php
					}
				?>
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