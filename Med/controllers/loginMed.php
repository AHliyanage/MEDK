<?php
//import db file
require("dbMed.php");
require("loginValidation.php");

session_start();

//define login function
function login(){
	//create default php object for AJAX response
	$response = new stdClass();
	try{

		// Parameters
		$username=$_POST["un"];
		$password=hash('sha256', $_POST['pw']);

		$toValidate = array();

		//set validation data
		array_push($toValidate, array("un", "Username", $username,"required,minL3,maxL20,alphabatic"));
		array_push($toValidate, array("pw", "Password", $password,"required,minL5,maxL20"));
		
		//validate inputs
		$result = validate($toValidate);
		
		if(count($result) > 0){
			//if data not valid
			$response-> errorList = $result;
		}else{
			
			//get DB connection instance and execute query
			$conn = getConnection();
			//query ekat locking status eka gann.
			$query = "SELECT staff_id, first_name, last_name, password  FROM staff WHERE user_name = '$username' AND password ='$password'";
			$loginQueryResult = mysqli_query($conn, $query);
			
			if(mysqli_num_rows($loginQueryResult) == 1){
				//if user exists create user session
				while($row = mysqli_fetch_row($loginQueryResult)){
					//wrong password
					if($password != $row[3]){
						if(!isset($_SESSION["invaldAttempts"])){
							$_SESSION["invaldAttempts"] = 0;
						}else{
							$_SESSION["invaldAttempts"] = $_SESSION["invaldAttempts"]+1;
						}

						if($_SESSION["invaldAttempts"] >= 3){
							//query to lock user

							$query = "UPDATE staff SET user_lock = '1' WHERE user_name = '$username'";
							$loginQueryResult = mysqli_query($conn, $query);
							
						}
					}

					//another if for chck whether user lock

					
					$_SESSION["username"] = $username;
					$_SESSION["medKnightKey"] = $row[0];
					//$_SESSION["userRole"] = $row[1];
					$_SESSION["fname"] = $row[1];
					$_SESSION["lname"] = $row[2];
					$_SESSION["pic"] = $row[4];

					$roleIds = "";

					//add roles to a session
					$agQuery = "SELECT ag.access_group_id, ag.name FROM user_access ua, access_group ag WHERE ua.staff_id = $row[0] AND ua.access_group_id = ag.access_group_id ORDER BY ag.access_group_id ASC";
					$agQueryResult = mysqli_query($conn, $agQuery);
			
					if(mysqli_num_rows($agQueryResult) > 0){
						$count = 0;
						while($row2 = mysqli_fetch_row($agQueryResult)){
							$count++;
							if($count == 1){
								$_SESSION["defaultRole"] = $row2[1];								
							}
							$roleIds = $roleIds.$row2[0].",";
						}
					}
					$roleIds = $roleIds."0";
					
					//get screens
					$privQuery = "SELECT distinct pv.name, pv.url, pv.screen_id, pv.parent_id, pv.sequence FROM privileges pv, access_rights ar WHERE ar.access_group_id IN ($roleIds) AND ar.screen_id = pv.screen_id ORDER BY pv.sequence ASC";
					$pvQueryResult = mysqli_query($conn, $privQuery);
					
					$mainArr = array();
					if(mysqli_num_rows($pvQueryResult) > 0){
						while($row3 = mysqli_fetch_row($pvQueryResult)){
							$subArr = array();	
							array_push($subArr, $row3[0]);
							array_push($subArr, $row3[1]);
							array_push($subArr, $row3[2]);						
							array_push($subArr, $row3[3]);						
							array_push($subArr, $row3[4]);

							array_push($mainArr, $subArr);	
						}
						
					}
					$_SESSION["screens"] = $mainArr;

				}
				//add redirect path to response
				$response->success = "veiws/dashboard.php";	

			}else{
				//if user does not exist throw exception with error msg
				throw new Exception("Invalid username or password..!");
			}	
		}	
	}catch(Exception $e){
		//if exception thrown set error message to response
		$response -> error = $e -> getMessage();
	}finally {
		//if db connection used close after proper execution or exception to ensure DB connections do not exceed limit
		if($conn){
			mysqli_close($conn);
		}
	}
	//encode response to JSON 
	$JSONresponse = json_encode($response);
	
	//return response JSON as string 
	echo $JSONresponse;
}

//call login function actual logic execution starts here
login();
?>