<?php
session_start();
$username = $_POST['u_username'];
$password = $_POST['u_password'];

require_once 'connect_db.php';

$strSQL = "SELECT * FROM PSU_PASSPORT WHERE USERNAME = '".mysqli_real_escape_string($connect,$_POST['u_username'])."' 
	and PASSWORD = '".mysqli_real_escape_string($connect,$_POST['u_password'])."'";
	$objQuery = mysqli_query($connect,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["STAFF_ID"] = $objResult["STAFF_ID"];
			$_SESSION["U_TYPE"] = $objResult["U_TYPE"];

			session_write_close();
			
			header("location: http://localhost/OnlineRequestFormOpeningCourse/index.php");
			
	}
	mysqli_close($connect);
?>