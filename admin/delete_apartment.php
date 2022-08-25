<?php
	require_once 'connect.php';
	mysql_query("DELETE FROM `apartments` WHERE `Apartment_id` = '$_REQUEST[Apartment_id]'") or die(mysql_error());
	header("location:apartment.php");
?>