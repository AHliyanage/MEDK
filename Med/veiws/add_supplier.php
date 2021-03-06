<?php 
	session_start();

	if(!isset($_SESSION['medKnightKey'])){
		header("Location:../login.html");
	}else{
?>

<!doctype html>
<html><head>
<meta charset="utf-8">

<!--*************************************** JQery *******************************************-->
	
<!------------------------------------- JQery CDN ---------------------------------------------> 
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--->
<!------------------------------------- JQery CDN --------------------------------------------->
	
<!------------------------------------- JQery D.ld --------------------------------------------> 
<script src="../resources/js/lib/jquery-3.4.1.js"></script>
<!------------------------------------- JQery D.ld -------------------------------------------->

<!--*************************************** JQery *******************************************-->
	
	
<!--***************************************JQery UI *****************************************--> 

<!--------------------------------------- CDN -------------------------------------------------> 
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!--------------------------------------- CDN -------------------------------------------------> 
	
<!--------------------------------------- D.ld ------------------------------------------------> 	
<link rel="stylesheet" href="../resources/js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.css">
<script src="../resources/js/lib/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
<script src="../resources/js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
<!--------------------------------------- D.ld ------------------------------------------------> 
	
<!--*************************************** JQery UI ***************************************---> 

<!-------------------------------------- Icon Libraries ---------------------------------------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-------------------------------------- Icon Libraries ---------------------------------------->

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../resources/css/images/favicon/icons8-m-26.png" />

<link rel="stylesheet" href="../resources/css/dash-board.css">
<link rel="stylesheet" href="../resources/css/side-menu.css">
<link rel="stylesheet" href="../resources/css/add_supplier.css">
	
<title>Add Supplier - MEDKNIGHT</title>

<!---------------------------------------------- util.js --------------------------------------->
<script type="text/javascript" src="../resources/js/util.js"></script>
<!---------------------------------------------- util.js --------------------------------------->
	

	<script>
		$(document).ready(function(){

			/*--------- Toggle sub-menu -------------*/
			$('.has-sub').click(function(){
				$(this).toggleClass('tap',400);
			});

			/*--------- Buton Shadow -------------*/

  			$("#add").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px rgba(51,255,204,1)" ,
    			});
  			});
  			$("#add").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});
	
  			$("#cancel").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px red, 1px 1px 8px rgba(255,0,4,0.5)" ,
    			});
  			});
  			$("#cancel").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});
	
  			$("#browse").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px #ffffff" ,
    			});
  			});
  			$("#browse").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});
		});
	</script>
	
</head>

<body>
	
	<div class="body-layer"></div>
	<section class="header">
		<div class="header-box">
			<figure>
				<div class="logo-layer"></div>
				<img src="../resources/css/Images/Logo.png" alt="logo">
			</figure>
			<h5 class="logged">Logged In As: </h5>
			<h5 class="user"><?php echo $_SESSION["defaultRole"];?></h5>
			<div id="arrow-container"><img src="../resources/css/Images/Icons/38294.png" id="arrow"></div>
			<div id="noti-container"><img src="../resources/css/Images/Icons/Nitification.png" id="noti"></div>
			<div id="calendar-container"><img src="../resources/css/Images/Icons/calendar.png" id="cldr"></div>
			<div id="cal-container"><img src="../resources/css/Images/Icons/calculator.png" id="ccultr"></div>
		</div>
	</section>

	<div class="circle arrow"></div>
	<div class="circle noti"></div>
	<div class="circle calendar"></div>
	<div class="circle cal"></div>
	
	<section class="side-menu-box">
		<div class="profile-pic-boarder">
			<div class="profile-pic">
			</div>
		</div>
		
		<div class="user">
			<h3 id="name"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
			<h3 id="uname"><?php echo "( ".$_SESSION['username']." )"; ?></h3>
		</div>
		
		<div class="menu-container">
		<ul class="side-menu">

			<?php

			$arr = $_SESSION["screens"];

			function prt($id, $arr){
				for($x = 0 ; $x<count($arr) ; $x++){
					if($id == $arr[$x][3]){
						if($arr[$x][1] == ""){
							echo "<li class='has-sub'><a href='#' class='main-menu-item'>".$arr[$x][0]."<i class='material-icons main md-20'>chevron_right</i></a>";
							echo "<ul class='sub-menu-container'>";		
							prt($arr[$x][2], $arr);
							echo "</ul>";
							echo "</li>";

						}else{
							if($arr[$x][3] == 0){
								echo "<img src='../resources/css/Images/Icons/Dashboard.png' id='dashbrd'><li><a href='".$arr[$x][1]."' class='dashboard'>".$arr[$x][0]."</a></li>";
							}else{
								echo "<li><a href='".$arr[$x][1]."' class='dashboard'><i class='material-icons'>arrow_right_alt</i>".$arr[$x][0]."</a></li>";	
							}
							
						}
					}
				}
			}
			
			prt(0, $arr);

			?>
			
		</ul>
	</div>
	</section>
	
	<section class="main-bar">
		<div class="main-bar-box">
			<h3>ADD SUPPLIER</h3>
			<h6>Home / Staff / Add supplier</h6>
		</div>
	</section>

	<div class="left-menu" id="lftMenu">
		<div class="menu">

			<li class="item">
				<a href="#" class="link first">System Log</a>
			</li>

			<li class="item">
				<a href="../controllers/logOutMed.php" class="link">Logout</a>
			</li>

		</div>
	</div>

	<section class="content">
		<div class="topic">
			<h4>ADDING NEW SUPPLIER</h4>
		</div>
		<div class="form">
			
			

			<form>

				<div class="input">
					<input type="text" name="s_code" id="s_code" class="supplier-details" placeholder="Supplier Code" onfocus="cleanValErrorInput('s_code'); cleanDivError('s_codeError');cleanDivError('otherError');">
					<span class="line"></span><span id="s_codeError" class="val-error"></span>
				</div>
				
				<div class="input">
					<input type="text" name="f_name" id="f_name" class="supplier-details" placeholder="First Name" onfocus="cleanValErrorInput('f_name'); cleanDivError('f_nameError');cleanDivError('otherError');">
					<span class="line"></span><span id="f_nameError" class="val-error"></span><span id="msg"></span>
				</div>
				
				<div class="input">
					<input type="text" name="l_name" id="l_name" class="supplier-details" placeholder="Last Name" onfocus="cleanValErrorInput('l_name'); cleanDivError('l_nameError');cleanDivError('otherError');">
					<span class="line"></span><span id="l_nameError" class="val-error"></span>
				</div>
				
				<div class="input">
					<input type="text" name="contact" id="contact" class="supplier-details" placeholder="Contact No." onfocus="cleanValErrorInput('contact'); cleanDivError('contactError');cleanDivError('otherError');">
					<span class="line"></span><span id="contactError" class="val-error"></span>
				</div>

				<div class="input">
					<input type="text" name="address" id="address" class="supplier-details" placeholder="Address" onfocus="cleanValErrorInput('address'); cleanDivError('addressError');cleanDivError('otherError');">
					<span class="line"></span><span id="addressError" class="val-error"></span>
				</div>

				<div class="input">
					<input type="text" name="email" id="email" class="supplier-details" placeholder="Email" onfocus="cleanValErrorInput('email'); cleanDivError('emailError');cleanDivError('otherError');">
					<span class="line"></span><span id="emailError" class="val-error"></span>
				</div>

				<div class="input">
					<select name="compony"  id="compony" class="supplier-details-compony" placeholder="Compony">
  							<?php echo "<option value='$dept_name'>$dept_name</option>"; ?>
					</select>
				</div>

				<div class="input">
					<select name="product" id="product" class="supplier-details-product" placeholder="Products" >
  							
					</select>
				</div>

			</form>	
		</div>
		
		<div class="v-line">
		</div>
		
		<div class="member-profile">
			<div class="mem-profile-pic-boarder">
				<div class="mem-profile-pic">
				</div>
			</div>
		
			<div class="member">
				<h3>Profile Picture</h3>
			</div>
		</div>
		
		<div class="button">
			<button type="file" value="Browse" id="browse" on>Browse</button><br>
			<button type="submit" value="ADD" id="add" onclick="save()">ADD</button>
			<button type="reset" value="CANCEL" id="cancel">CANCEL</button>
		</div>
		
	</section>
	
	
	<script>
		function save(){
		var f_name = $("#fname").val();
		var l_name = $("#lname").val();
		var role = $("input[name='role']:checked").val();
		var gender = $("input[name='gender']:checked").val();
		var dob = $("#datepicker").val();
		var nic = $("#NIC").val();
		var address = $("#address").val();
		var contact_no = $("#contact").val();
		var emg_no = $("#emg").val();
		var email = $("#email").val();
		var qualifications = $("#qualifications").val();
		var j_date = $("#datepicker2").val();
		var basic_sal = $("#basic").val();
		var username = $("#uname").val();
		var password = $("#pwd").val();
		
		
		var formData = new FormData(); 
		formData.append("fname" , f_name);
		formData.append("lname" , l_name);
		formData.append("role" , role);
		formData.append("gender" , gender);
		formData.append("datepicker" , dob);
		formData.append("NIC" , nic);
		formData.append("address" , address);
		formData.append("contact" , contact_no);
		formData.append("emg" , emg_no);
		formData.append("email" , email);
		formData.append("qualifications" , qualifications);
		formData.append("datepicker2" ,j_date);
		formData.append("basic" , basic_sal);
		formData.append("uname" , username);
		formData.append("pwd" , password);
		 
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var resp = jps(this.responseText);
				if(resp["error"]){
					/*show non-valerror msg from exception*/
					displayDivError("otherError", resp["error"]);			            	
				}else if(resp["success"]){
					/*show success msg*/
					window.alert(resp["success"]);
				}else if(resp["errorList"]){
					/*load val error list from validation*/
					buildErrors(resp["errorList"]);
				}else{
					/*unexpected error if none of the above*/
					unexpectedAlertModal("Error", "Unexpected error","bg-danger");
				}
		   }
		};
		xhttp.open("POST","../controllers/add_supplierMed.php", true);
		xhttp.send(formData);
	}
	</script>

	<script type="text/javascript">
		/*function cancel(){
			  document.getElementById("fname").reset();
			  document.getElementById("lname").reset();
			  document.getElemensByClassName("role").reset();
			  document.getElementByClassName("gender").reset();
			  document.getElementById("datepicker").reset();
			  document.getElementById("NIC").reset();
			  document.getElementById("address").reset();
			  document.getElementById("contact").reset();
			  document.getElementById("emg").reset();
			  document.getElementById("email").reset();
			  document.getElementById("qualifications").reset();
			  document.getElementById("datepicker2").reset();
			  document.getElementById("basic").reset();
			  document.getElementById("uname").reset();
			  document.getElementById("pwd").reset();
			  document.getElementById("staff_id").reset();
		}*/
	</script>

	<script>
		// Get the menu
		var menuLeft = document.getElementById("lftMenu");

		// Get the arrow that opens the modal
		var arow = document.getElementById("arrow");

		// clicks the arrow, open menu 
		arow.onclick = function() {
		  //menuLeft.style.display = "block";
		  $("#lftMenu").fadeIn();
		}

		// clicks anywhere outside menu close it
		window.onclick = function(event) {
		  if (event.target == menuLeft) {
		    menuLeft.style.display = "none";
		  }
		}
	</script>
	
</body>
	
</html>

<?php
 } 
 ?>