<?php
//import db file
require("dbMed.php");




//define save function
function save(){
	//create default php object for AJAX response
	$response = new stdClass();
	try{
			
			//get DB connection instance and execute query
			$conn = getConnection();
			$query = 'INSERT INTO staff (first_name,last_name,role,gender,dob,nic_no,address,contact_no,emergency_no,email,qualifications,joined_date,basic_salary,user_name,password ) VALUES ("aa","CC","Admin",0,NOW(),"123654789V","","1234567890","0123654789","abc@gmail.com","gjjhjh",NOW(),20000,"abcAbc","!1Aaddsfd")';

			$loginQueryResult = mysqli_query($conn, $query);
			
			if($loginQueryResult == true){
				//if query executed successfully show mg
				$response->success = "New Record added Successfully..!!!";	
			}else{
				//if not query executed throw exception with error msg
				throw new Exception("Couldn't executed the query");
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
save();
?>