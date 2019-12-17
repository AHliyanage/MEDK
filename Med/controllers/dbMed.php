<?php
//hides db errors ir response as it violates JSON format.  Errors are handled by try catch blocks
error_reporting(E_ERROR | E_PARSE);

//declare db connnection creation function
function getConnection(){
	$server = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "med";

	$conn = mysqli_connect($server, $dbUsername ,$dbPassword, $dbname);
	if(!$conn){
		//throw error if db connection fails
		throw new Exception(mysqli_connect_error());
		//only uncomment below line for debugging
		//die("Cannot connect to DB : "+mysqli_connect_error());
	}else{
		return $conn;
	}
}
?>