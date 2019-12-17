<html>
<body>
<?php
	$arr = array();
	array_push($arr, array("AAAA","4545",3,1));
	array_push($arr, array("BBBB","",1,0));
	array_push($arr, array("CCCC","",6,0));
	array_push($arr, array("DDDD","aaaaa",4,6));
	array_push($arr, array("EEEE","",5,1));


	function prt($id, $indent, $arr){
		for($x = 0 ; $x<count($arr) ; $x++){
			if($id == $arr[$x][3]){
				if($arr[$x][1] == ""){
					echo $indent."Folder : ".$arr[$x][0]."<br>";
					prt($arr[$x][2], $indent."----", $arr);
					
				}else{
					echo $indent."File : ".$arr[$x][0]."<br>";
				}
			}
		}
	}

	prt(0, "", $arr);
?>
</body>
</html>