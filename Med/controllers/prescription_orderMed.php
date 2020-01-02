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
			$query = "SELECT order_no, status FROM prescription_order";

			$loginQueryResult = mysqli_query($conn, $query);
			
			if($loginQueryResult == true){
					$rows=array();
	
					while ($row=mysqli_fetch_array($loginQueryResult)){
						array_push($row, "<button style='background:none; border:none; border-bottom:1px solid blue; color:blue;' id='view'>view</button>");

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