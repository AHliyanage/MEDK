<?php
//import db file
require("dbMed.php");
require("validation.php");

session_start();

//define save function
function save(){
	//create default php object for AJAX response
	$response = new stdClass();
	try{
			// Parameters
			$firstName=$_POST["fname"];
			$lastName=$_POST["lname"];
			$role=$_POST["role"];
			$gender=$_POST["gender"];
			$dob=$_POST["datepicker"];
			$nicNo=$_POST["NIC"];
			$address=$_POST["address"];
			$contactNo=$_POST["contact"];
			$emergencyNo=$_POST["emg"];
			$email=$_POST["email"];
			$qualifications=$_POST["qualifications"];
			$joinedDate=$_POST["datepicker2"];
			$basicSalary=$_POST["basic"];
			$username = $_POST["uname"];
			//Hash password in Sha256. Use a Salt if you can it is more secure
			$password = hash('sha256', $_POST['pwd']);

			$toValidate = array();

			//set validation data
			array_push($toValidate, array("fname", "First Name", $firstname,"required,minimumLettersFname,alphabatic"));
			array_push($toValidate, array("lname", "Last Name", $lastname,"required,minimumLettersLname,alphabatic"));
			array_push($toValidate, array("datepicker", "Date of Birth", $dob, "required"));
			array_push($toValidate, array("NIC", "Nic No.", $nicNo, "required,minimumLettersNic,maximumLettersNic,nicFormat"));
			array_push($toValidate, array("address", "Address", $address, "required"));
			array_push($toValidate, array("contact", "Contact No. ", $contactNo, "required,numbers,lengthPhone"));
			array_push($toValidate, array("emg","Emergency No.", $emergencyNo, "required,numbers,lengthPhone"));
			array_push($toValidate, array("email", "E-mail", $email, "required,firstIndex"));
			array_push($toValidate, array("qualifications", "Qualifications", $qualifications, "required"));
			array_push($toValidate, array("datepicker2", "Joined Date",$joinedDate, "required"));
			array_push($toValidate, array("basic", "Basic Salary", $basicSalary, "required,salaryFormat"));
			array_push($toValidate, array("uname", "Username", $username, "required,minimumLettersUname,maximumLettersUname,UnameFormat"));
			array_push($toValidate, array("pwd", "Password", $password, "required,minimumLettersPwd,maximumLettersPwd,OneNumber,SmallCase"));
			//validate inputs
			$result = validate($toValidate);
			
		if(count($result) > 0){
			//if data not valid
			$response-> errorList = $result;
		}else{
			//get DB connection instance and execute query
			$conn = getConnection();
			$query = "INSERT INTO staff (first_name,last_name,role,gender,dob,nic_no,address,contact_no,emergency_no,email,qualifications,joined_date,basic_salary,user_name,password ) VALUES ('".$firstName."','".$lastName."','".$role."','".$gender."','".$dob."','".$nicNo."','".$address."','".$contactNo."','".$emergencyNo."','".$email."','".$qualifications."','".$joinedDate."','".$basicSalary."','".$username."','".$password."')";

			$loginQueryResult = mysqli_query($conn, $query);
			
			if($loginQueryResult == true){
				//if query executed successfully show mg
				$response->success = "New Record added Successfully..!!!";	
			}else{
				//if not query executed throw exception with error msg
				throw new Exception("Couldn't executed the query");
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

//call login function actula logic execution starts here
save();
?>