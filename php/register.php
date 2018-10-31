<?php
	session_start();
	include_once("link.php");
	$sql = "INSERT INTO `users` ( `name`, `cardnumber`, `postid`, `address`, `phone`, `isuser`) VALUES ('".$_POST["name"]."','".$_POST["cardNumber"]."',
	'".$_POST["userID"]."',
	'".$_POST["address"]."',
	'".$_POST["phone"]."',
	'".$_POST["demo-priority"]."')";
	$result = mysqli_query($link, $sql);
	$_SESSION["userID"]=$_POST["userID"];
	$_SESSION["userName"]=$_POST["name"];
	header("Location:index.php");
?>