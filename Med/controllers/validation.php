<?php


//array_push($arr, array("fname", "First Name", "Smith", array("required"))); 
// 0. HTML element unique Id
// 1. Error message input label
// 2. Value of $_POST['']
// 4. Validation list

function validate($inpuArray){ //$toValidate
	$result = Array();
	
	for($x = 0 ; $x<count($inpuArray); $x++){
		$subOne = $inpuArray[$x]; //$subValidate
		
		$id = $subOne[0];
		$lable = $subOne[1]; //$tag
		$value = $subOne[2];
		$validations = explode(",",$subOne[3]);

		
		for($y = 0; $y<count($validations); $y++){
			$subTwo =  Array(); //$subResult

			if($validations[$y] == "required"){
				$subTwo = required($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if(substr($validations[$y],0,4) == "minL"){
				$minVal = (int) substr($validations[$y],4);
				$subTwo = minL($id, $lable, $value, $minVal);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if(substr($validations[$y],0,4) == "maxL"){
				$maxV = (int) substr($validations[$y],4);
				$subTwo= maxL($id, $lable, $value, $maxV);
				if(count($subTwo)> 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y] == "alphabatic"){
				$subTwo = alphabatic($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y]  == "isDate"){
				$subTwo = isDate($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y] == "nicFormat"){
				$subTwo = nicFormat($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y] == "contactFormat"){
				$subTwo = contactFormat($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y] == "firstIndex"){
				$subTwo = firstIndex($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y] == "email"){
				$subTwo = email($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y]  == "isFloat"){
				$subTwo = isFloat($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}

			if($validations[$y]  == "pwFormat"){
				$subTwo = isDate($id, $lable, $value);
				if(count($subTwo) > 0){
					array_push($result , $subTwo);
					break;				
				}
			}
		}
	}
	//var_dump($result);
	return $result;
}

function required($id, $lable, $value){
	$sub = Array();
	if(trim($value) == ""){
		array_push($sub, $id);
		array_push($sub, $lable." is required");
	}
	return $sub;
}

function minL($id, $lable, $value, $min){
	$sub = Array();
	if(strlen($value) < $min){
		array_push($sub, $id);
		array_push($sub, $lable." minimum length is ".$min);
	}
	return $sub;
}

function maxL($id, $lable, $value, $max){
	$sub = Array();
	if(strlen($value) < $min){
		array_push($sub, $id);
		array_push($sub, $lable." maximum length is ".$max);
	}
	return $sub;
}

function alphabatic($id, $lable, $value){
	$sub = Array();
	if(!preg_match("/^[A-Za-z]*$/",(trim($value)))){
		array_push($sub, $id);
		array_push($sub,"Only alphabatics are allowed by ".$lable);
	}
	return $sub;
}

function nicFormat($id, $lable, $value){
	$sub = Array();
	if(!preg_match("/^\d{9}[VvXx]$/", trim($value)) &&  !preg_match("/^\d{12}$/", trim($value))){
		array_push($sub, $id);
		array_push($sub,"Incorrect ".$lable." format ");
	}
	return $sub;
}

function contactFormat($id, $lable, $value){
	$sub = Array();
	if(!preg_match("/^\d{10}[0-9]$/", trim($value))){
		array_push($sub, $id);
		array_push($sub,"Incorrect ".$lable." format ");
	}
	return $sub;
}

// function firstIndex ($id, $label, $value){
// 	$sub2 = array();
// 	if(strpos(trim($value), "@")==0 || strpos(trim($value), "@")==-1){
// 		array_push($sub, $id);
// 		array_push($sub,"Invalid positioning of '@' in ".$lable);
// 	}
// 		return $sub2;
// }		

function email($id, $lable, $value){
	$sub = Array();
	if(!filter_var(trim($value), FILTER_VALIDATE_EMAIL)){
		array_push($sub, $id);
		array_push($sub, "Incorrect email format");
	}
	return $sub;
}

function isDate($id, $lable, $value){
	$sub = Array();
	$values = explode("-",$value);
	if(!checkdate ( (int) $values[1] , (int) $values[2] , (int) $values[0] ) ){
		array_push($sub, $id);
		array_push($sub, $lable." is invalid");
	}
	return $sub;
}

function isFloat($id, $lable, $value){
	$sub = Array();
	if(!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $value)){
		array_push($sub, $id);
		array_push($sub, $lable." is invalid");
	}
	return $sub;
}

function unameFormat($id, $lable, $value){
	$sub = Array();
	if(!preg_match("/^[0-9A-Za-z ]*$/", trim($value))){
		array_push($sub, $id);
		array_push($sub,"Only alphabatics,numbers and white spaces are allowed");
	}
	return $sub;
}

function pwFormat($id, $lable, $value){
	$sub = Array();
	if(!preg_match("/^[!\@\\$\%\^\&\(\)\_\+\.\,\;\:][0-9A-Za-z ]*$/", trim($value))){
		array_push($sub, $id);
		array_push($sub,$lable." must contain at least a special character,an upper case, a small case, a number");
	}
	return $sub;
}
		

	//TEST
	/*$arr = array();
	
	array_push($arr, array("fname", "First Name", "Arosha",array("required"))); 
	array_push($arr, array("nic", "Nic Number","123456789123",array("required", "nic"))); 

	$result = validate($arr);

	var_dump($result)
	*/
?>