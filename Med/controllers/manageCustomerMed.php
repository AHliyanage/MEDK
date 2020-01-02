<?php
//import db file
require("dbMed.php");

//define save function
function loadData(){
	//create default php object for AJAX response
	$response = new stdClass();
	try{
			//get DB connection instance and execute query
			$conn = getConnection();
			$query = "SELECT cus_id,first_name,last_name,gender,dob,nic,address,contact_no,email FROM customer";

			$loginQueryResult = mysqli_query($conn, $query);
			
			if($loginQueryResult == true){
					$rows=array();
	
					while ($row=mysqli_fetch_array($loginQueryResult)){
						array_push($row, "<button  style='background-color: rgba(255,255,255,1); outline:none; color:rgba(223,5,5,1.00); padding:3px; border: 1px solid rgba(223,5,5,1.00); width:60px; border-radius: 3px;' onclick='alert()'>Delete</button>","<button  style='background-color: rgba(255,255,255,1); outline:none; color:rgb(30,144,255); padding:3px; border: 1px solid rgb(30,144,255); width:60px; border-radius: 3px;' onclick='alert()'>Update</button>");
						
						array_push($rows,$row);
						//$rows[]=$row;
					}
	
				//if query executed successfully show mg
				$response->success =$rows;	
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

//call login function actula logic execution starts here
loadData();
?>