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
				if(count($subTwo) > 0){
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

?>