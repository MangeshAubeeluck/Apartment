<?php
	if(ISSET($_POST['add_room'])){
		$Apartment_name = $_POST['Apartment_name'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `apartments` (Apartment_name, price, photo) VALUES('$Apartment_name', '$price', '$photo_name')") or die(mysqli_error());
		header("location:apartment.php");
	}
?>