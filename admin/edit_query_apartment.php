<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_apartment'])){
		$Apartment_name = $_POST['Apartment_name'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `apartments` SET `Apartment_name` = '$Apartment_name', `price` = '$price', `photo` = '$photo_name' WHERE `Apartment_id` = '$_REQUEST[Apartment_id]'") or die(mysqli_error());
		header("location:apartment.php");
	}
?>