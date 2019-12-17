<?php 
	session_start();

	if(!isset($_SESSION['medKnightKey'])){
		header("Location:../login.html");
	}else{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<!----------------- JQery CDN ---------------------------------------------> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!----------------- JQery CDN --------------------------------------------->
	
<!----------------- JQery D.ld --------------------------------------------> 
	<script src="../resources/js/lib/jquery-3.4.1.js"></script>
<!----------------- JQery D.ld -------------------------------------------->

	



	<script>
		$(document).ready(function(){

		/*-- Toggle sub-menu --*/
			$('.has-sub').click(function(){
					$(this).toggleClass('tap',400);
			});
		
		/*-- Button Shaow --*/

		$("#arrow").mouseenter(function() {
				$(".arrow").css({
      				"display": "block",
    			});
  			});
  			$("#arrow").mouseout(function() {
				$(".arrow").css({					
      				"display": "none",
    			});
  			});

  			$("#arrow").mousedown(function() {
				$(".arrow").css({
      				"box-shadow": "1px 1px 8px 1px Teal, 1px 1px 8px rgba(34,22,10, 0.8)" ,//#d3d3d3
    			});
  			});
  			$("#arrow").mouseup(function() {
    			$(".arrow").css({
      			"box-shadow": "none",
    			});
  			});


  			$("#noti").mouseenter(function() {
				$(".noti").css({
      				"display": "block",
    			});
  			});
  			$("#noti").mouseout(function() {
				$(".noti").css({					
      				"display": "none",
    			});
  			});

  			$("#noti").mousedown(function() {
				$(".noti").css({
      				"box-shadow": "1px 1px 8px 1px Teal, 1px 1px 8px rgba(34,22,10, 0.8)" ,//#d3d3d3
    			});
  			});
  			$("#noti").mouseup(function() {
    			$(".noti").css({
      			"box-shadow": "none",
    			});
  			});


  			$("#ccultr").mouseenter(function() {
				$(".cal").css({
      				"display": "block",
    			});
  			});
  			$("#ccultr").mouseout(function() {
				$(".cal").css({					
      				"display": "none",
    			});
  			});

  			$("#ccultr").mousedown(function() {
				$(".cal").css({
      				"box-shadow": "1px 1px 8px 1px Teal, 1px 1px 8px rgba(34,22,10, 0.8)" ,//#d3d3d3
    			});
  			});
  			$("#ccultr").mouseup(function() {
    			$(".cal").css({
      			"box-shadow": "none",
    			});
  			});


  			$("#cldr").mouseenter(function() {
				$(".calendar").css({
      				"display": "block",
    			});
  			});
  			$("#cldr").mouseout(function() {
				$(".calendar").css({					
      				"display": "none",
    			});
  			});

  			$("#cldr").mousedown(function() {
				$(".calendar").css({
      				"box-shadow": "1px 1px 8px 1px Teal, 1px 1px 8px rgba(34,22,10, 0.8)" ,//#d3d3d3
    			});
  			});
  			$("#cldr").mouseup(function() {
    			$(".calendar").css({
      			"box-shadow": "none",
    			});
  			});

  			//datepicker
  			$('#cldrBox').datepicker({
				dateFormat : 'dd /mm yy',
				showAnim : 'clip',
				showOtherMonths: true,
				selectOtherMonths: true
			
			});

  			//image click, show datepicker
  			$('#cldr').click(function() {
      			$('#cldrBox').datepicker('show');
			});

			//image click, show calculator
  			$("#ccultr").click(function() {
				/*$(".mkCal").css({
      				"display": "block",
    			});*/

		  		$(".mkCal").fadeIn();
  			});

  		});
/*
  		// display left menu onclick arrow
			var menulft = document.getElementById("lftMenu");

			// Get the button that opens the modal
			var arow = document.getElementById("arrow");

			// When the user clicks the button, open the modal 
			arow.onclick = function() {
			  menulft.style.display = "block";
			}
			//licks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == menulft) {
			    menulft.style.display = "none";
			  }
			}*/
	</script>	



<!--***************************************JQery UI *****************************************--> 

<!--------------------------------------- CDN -------------------------------------------------> 
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!--------------------------------------- CDN -------------------------------------------------> 
	
<!--------------------------------------- D.ld ------------------------------------------------	>
<link rel="stylesheet" href="../resources/js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.css">
<script src="../resources/js/lib/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
<script src="../resources/js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
<!--------------------------------------- D.ld ------------------------------------------------> 

<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
	
<!--*************************************** JQery UI ***************************************---> 
	
<!----------------- Icon Libraries ---------------------------------------->
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!----------------- Icon Libraries ---------------------------------------->

<!-- Fade In - OnLoad -->
	<script>
		$(document).ready(function(){
		$('body').css('display', 'none');			
		$('body').fadeIn(1000);
		});
	</script>
<!-- Fade In - OnLoad -->

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../resources/css/images/favicon/icons8-m-26.png" />

<link rel="stylesheet" href="../resources/css/dash-board.css">
<link rel="stylesheet" href="../resources/css/side-menu.css">

<title>Welcome to siteMEDKNIGHT</title>	
	
</head>

<body>
	<div class="body-layer"></div>
	<section class="header">
		<div class="header-box">
			<figure>
				<div class="logo-layer"></div>
				<img src="../resources/css/Images/Logo.png" alt="logo" id="logoimg">
			</figure>
			<h5 class="logged">Logged In As: </h5>
			<h5 class="user"><?php echo $_SESSION["defaultRole"];?></h5>
			<div id="arrow-container"><img src="../resources/css/Images/Icons/38294.png" id="arrow"></div>
			<div id="noti-container"><img src="../resources/css/Images/Icons/Nitification.png" id="noti"></div>
			<div id="calendar-container"><img src="../resources/css/Images/Icons/calendar.png" id="cldr"></div>
			<div id="cal-container"><img src="../resources/css/Images/Icons/calculator.png" id="ccultr"></div>
			<input type="text" name="calendar-box" id="cldrBox">
		</div>
	</section>
	
	<div class="circle arrow"></div>
	<div class="circle noti"></div>
	<div class="circle calendar"></div>
	<div class="circle cal"></div>

	<section class="side-menu-box">
		<div class="profile-pic-boarder">
			<div class="profile-pic">
				<img src="" id="img" src="#"/>
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
			<h3>DASHBOARD</h3>
			<h6 id="breadcrumb">Breadcrumb</h6>
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
	<section class="mkCal">
		<div class = title >MedKnight Calculator</div> 
	      <table border="1" id="mkCalTbl"> 
	         <tr> 
	            <td colspan="3"><input type="text" id="result"/></td> 
	            <!-- clr() function will call clr to clear all value -->
	            <td><input type="button" value="c" onclick="clr()"/> </td> 
	         </tr> 
	         <tr> 
	            <!-- create button and assign value to each button -->
	            <!-- dis("1") will call function dis to display value -->
	            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
	            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
	            <td><input type="button" value="3" onclick="dis('3')"/> </td> 
	            <td><input type="button" value="/" onclick="dis('/')"/> </td> 
	         </tr> 
	         <tr> 
	            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
	            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
	            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
	            <td><input type="button" value="-" onclick="dis('-')"  id="operator"/> </td> 
	         </tr> 
	         <tr> 
	            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
	            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
	            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
	            <td><input type="button" value="+" onclick="dis('+')" /> </td> 
	         </tr> 
	         <tr> 
	            <td><input type="button" value="." onclick="dis('.')"/> </td> 
	            <td><input type="button" value="0" onclick="dis('0')"/> </td> 
	            <!-- solve function call function solve to evaluate value -->
	            <td><input type="button" value="=" onclick="solve()"/> </td> 
	            <td><input type="button" value="*" onclick="dis('*')"/> </td> 
	         </tr> 
	      </table>
	     </section>
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

		//cal function

	    function dis(val) 
	    { 
	        document.getElementById("result").value+=val 
	    } 
	           
	    //function that evaluates the digit and return result 
	    function solve() 
	    { 
	        let x = document.getElementById("result").value 
	        let y = eval(x) 
	        document.getElementById("result").value = y 
	    } 
	           
	    //function that clear the display 
	    function clr() 
	    { 
	        document.getElementById("result").value = "" 
	    }
	</script>	

</body>
	
	
</html>
<?php
	}
?>