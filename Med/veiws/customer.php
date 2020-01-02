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
	
<!--*************************************** JQery *******************************************-->
	
<!------------------------------------- JQery CDN ---------------------------------------------> 
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--->
<!------------------------------------- JQery CDN --------------------------------------------->
	
<!------------------------------------- JQery D.ld --------------------------------------------> 
<script src="../resources/js/lib/jquery-3.4.1.js"></script>
<!------------------------------------- JQery D.ld -------------------------------------------->

<!--************************************JQery *******************************************-->
	
<!--************************************JQery UI *****************************************--> 

<!--------------------------------------CDN -------------------------------------------------> 
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!--------------------------------------CDN -------------------------------------------------> 
	
<!--------------------------------------- D.ld -------------------------------------------------> 	
<link rel="stylesheet" href="../resources/js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.css">
<script src="../resources/js/lib/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
<script src="../resources/js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
<!--------------------------------------- D.ld -------------------------------------------------> 
	
<!--*************************************** JQery UI ***************************************--> 

<!--*************************************** JQery UI Theme *********************************-->

<!--------------------------------------- CDN -------------------------------------------------> 
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
<!--------------------------------------- CDN ------------------------------------------------->
	
<!--------------------------------------- D.ld -------------------------------------------------> 
<!--------------------------------------- D.ld -------------------------------------------------> 

<!--*************************************** JQery UI Theme *********************************-->
	
<!--************************************Data ables *******************************************-->	
<!------------------------------------- CDN-CSS -------------------------------------------->
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<!------------------------------------- CDN-CSS -------------------------------------------->
	
<!------------------------------------- CDN-JS -------------------------------------------->
	<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!------------------------------------- CDN-JS -------------------------------------------->
<!--*************************************** Data ables *******************************************-->

<!----------------- Icon Libraries ---------------------------------------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!----------------- Icon Libraries ---------------------------------------->

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../resources/css/images/favicon/icons8-m-26.png" />

<link rel="stylesheet" href="../resources/css/dash-board.css">
<link rel="stylesheet" href="../resources/css/side-menu.css">
<link rel="stylesheet" href="../resources/css/customer.css">
	
<title>Customer - MEDKNIGHT</title>

<!----------------- util.js --------------------------------------->
<script type="text/javascript" src="../resources/js/util.js"></script>
<!----------------- util.js --------------------------------------->
	

	<script>
		$(document).ready(function(){

			/*----------------- Toggle sub----------------*/
			$('.has-sub').click(function(){
					$(this).toggleClass('tap',500);
			});

			/*----------------- customer-table -----------*/
			$("#customer").DataTable({
			"data":[],
			"columns": [
				{"title": "Customer ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age"},
				{"title": "NIC No."},
				{"title": "Address" },
				{"title": "Contact No"},
				{"title": "E-mail"}
				],
			"columnDefs": [
        		//{ targets: [0], visible: false},
        		{ width: "15%", targets: 0},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "10%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6}
        	]
		});
	
		load();
			// data table row click, show data
			var table = $('#customer').DataTable();
     
   			 $('#customer tbody').on('click', 'tr', function () {
        			var data = table.row( this ).data();
        			alert( 'You clicked on '+data[0]+'\'s row' );
    			} );

			$("#new").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px rgba(51,255,204,1)" ,
    			});
  			});
  			$("#new").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});

  			/*----------- Datepicker ------------*/
			$('#datepicker').datepicker({
				dateFormat : 'dd /mm /yy',
				changeMonth :true,													
				changeYear :true,
				maxDate : 'today',
				showAnim : 'clip',
				showOtherMonths: true
					
			});

  			$('#cldrBox').datepicker({
				dateFormat : 'dd /mm yy',
				showAnim : 'clip',
				showOtherMonths: true,
				selectOtherMonths: true
			
			});

			/*---------- Buton Shadow -------------*/

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
	
  			$("#upload").mousedown(function() {
				$("#browse").css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px #ffffff" ,
    			});
  			});
  			$("#upload").mouseup(function() {
    			$("#browse").css({
      			"box-shadow": "none"
    			});
  			});

  			//image click, show datepicker
  			$('#cldr').click(function() {
      			$('#cldrBox').datepicker('show');
			});

  			$('#cal').click(function() {
      			$('#datepicker').datepicker('show');
			});

			$('#cal2').click(function() {
      			$('#datepicker2').datepicker('show');
			});

			//click arrow, display left menu
			$("#arrow").click(function(e){
    			$("#lftMenu").show();
     			e.stopPropagation();
			});

			$("#lftMenu").click(function(e){
    			e.stopPropagation();
			});

			$(document).click(function(){
    			$("#lftMenu").hide();
			});
	});
	</script>


</head>

<body>
	
<!---------------------------------------------- Side Menu ---------------------------------------------->
	
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

<!---------------------------------------------- Side Menu ---------------------------------------------->
	
<!---------------------------------------------- Box Dashboard ------------------------------------------>
	
	<section class="main-bar">
		<div class="main-bar-box">
			<h3>CUSTOMER</h3>
			<h6>Home / Customer</h6>
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

<!---------------------------------------------- Box Dashboard ------------------------------------------>

<!------------------------------------------- Content --------------------------------------------------->
<!--***************************************************************************************************-->

<section class="content">

<!------------------------------------------- TableContainer -------------------------------------------->
<div class="tableBoxGray">
<!-------------- Topic ---------------->		
	<div class="topic">
		<h4>CUSTOMER</h4>
	</div>
<!-------------- Topic ---------------->
	<div id="wrapper">
			<div id="Customer">
				<table id="customer" cellspacing="0" width="100%" class="display cell-border stripe">

				</table>
			</div>
	</div>

	<!-- new member -->
	<div class="button">
		<button type="" value="NEW" id="new">NEW</button>
	</div>

	<!--<div class="msg">
		<span id="message">MEMBER ADDED SUSSCEEFULLY...!!!</span>
	</div>-->

</div>

<!-- The Modal for customer data -->
<div id="cusModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="user">
  		<h3 id="uname">Cashier</h3>
		<h3 id="name">John Doy</h3>
  	</div>

     <div id="detailCus">
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" ><br>
  		<input type="text" class="box" >
  	 </div>

  	<div class="button">
		<button type="submit" value="ADD" id="add2">OK</button>
	</div>

  </div>
  <!-- Profile pic -->
  <div class="profile-pic-boarder-model">
	<div class="profile-pic-model">
		
	</div>
  </div>

</div>

<!-- The Modal for adding new member -->
<div id="newCusModal" class="CusModal">

  <!-- Modal content -->
  <div class="newCusModal-content">

  <div id="addCusWrap">	

  	<div class="topic2">
		<h4>ADDING NEW CUSTOMER</h4>
	</div>

	<div class="form">
			
			<form>
				
				<!--<div class="input">
					<input type="text" name="ccode" id="ccode" class="customer-details" placeholder="Customer Code" onfocus="cleanValErrorInput('fname'); cleanDivError('fnameError');cleanDivError('otherError');">
					<span class="line"></span><span id="fnameError" class="val-error"></span><span id="fnameError"></span>
				</div>-->
				
				<div class="input">
					<input type="text" name="fname" id="fname" class="customer-details" placeholder="First Name" onfocus="cleanValErrorInput('fname'); cleanDivError('fnameError');cleanDivError('otherError');">
					<span class="line"></span><span id="fnameError" class="val-error"></span><span id="fnameError"></span>
				</div>
				
				<div class="input">
					<input type="text" name="lname" id="lname" class="customer-details" placeholder="Last Name" onfocus="cleanValErrorInput('lname'); cleanDivError('lnameError');cleanDivError('otherError');">
					<span class="line"></span><span id="lnameError" class="val-error"></span><span id="lnameError"></span>
				</div>
				
				<!---------------------- gender Radio ------------------------------------>
				<div class="input">
					<input type="radio" name="gender" class="male" value="M"><lable id="male">Male</lable>
					<input type="radio" name="gender" class="female" value="F"><lable id="female">Female</lable>
				</div>
				<!---------------------- Radio ------------------------------------>
				
				<div class="input">
					<input type="text" name="dob" id="datepicker" class="customer-details" placeholder="Date of Birth                                                                             D                       M                       Y" onfocus="cleanValErrorInput('datepicker'); cleanDivError('datepickerError');cleanDivError('otherError');"><span class="line"></span><span id="datepickerError" class="val-error"></span>
					<img src="../resources/css/Images/Icons/calendar-month-outline.png" alt="icon-calender" id="cal">
				</div>
				
				<div class="input">
					<input type="text" name="NIC" id="NIC" class="customer-details" placeholder="NIC No." onfocus="cleanValErrorInput('NIC'); cleanDivError('NICError');cleanDivError('otherError');">
					<span class="line"></span><span id="NICError" class="val-error"></span><span id="NICError"></span>
				</div>
				
				<div class="input">
					<input type="text" name="address" id="address" class="customer-details" placeholder="Address" onfocus="cleanValErrorInput('address'); cleanDivError('addressError');cleanDivError('otherError');">
					<span class="line"></span><span id="addressError" class="val-error"></span><span id="addressError"></span>
				</div>
				
				<div class="input">
					<input type="text" name="contact" id="contact" class="customer-details" placeholder="Contact No." onfocus="cleanValErrorInput('contact'); cleanDivError('contactError');cleanDivError('otherError');">
					<span class="line"></span><span id="contactError" class="val-error"></span><span id="contactError"></span>
				</div>
				
				<div class="input">
					<input type="text" name="email" id="email" class="customer-details" placeholder="Email" onfocus="cleanValErrorInput('email'); cleanDivError('emailError');cleanDivError('otherError');">
					<span class="line"></span><span id="emailError" class="val-error"></span><span id="emailError"></span>
				</div>

				<div id="otherError" class="non-val-error"></div>
			</form>		
			
		</div>

		<div class="v-line">
		</div>
		
		<div class="customer-profile">
			<div class="cus-profile-pic-boarder">
				<div class="cus-profile-pic">
					<img src="" id="img" src="#"/>
				</div>
			</div>
		
			<div class="customer">
				<h3>Profile Picture</h3>
			</div>
		</div>

  		<div class="newMemButton">

			<input type="file" name="" id="upload" accept="image/gif, image/jpeg, image/png" onchange="readURL(this)";>
			<button type="file" value="Browse" id="browse" on>Browse</button><br>
			<button type="submit" value="ADD" id="add" onclick="save()">ADD</button>
			<button type="reset" value="CANCEL" id="cancel" onclick="reset()">CANCEL</button>
		</div>

	</div>

  </div>
   
</div>

</section>
<!--***************************************************************************************************-->
<!------------------------------------------- Content --------------------------------------------------->

<script>
	function load(){
		drawTable("customer",[]);

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var resp = jps(this.responseText);         	
				if(resp["success"]){
					/*load data into table*/
					drawTable("customer",resp["success"]);
				}else{
					/*unexpected error if none of the above*/
					unexpectedAlertModal("Error", "Unexpected error","bg-danger");
				}
		   }
		};
		xhttp.open("POST","../controllers/customerMed.php", true);
		xhttp.send();
	}
</script>


<script>
		// supplier data
		// Get modal
		var popup = document.getElementById("cusModal");
		var btn = document.getElementById("ok");
		// Get the button that opens the modal
		var clickRow = document.getElementById("");

		// clicks the button, open popup 
		clickRow.onclick = function() {
			$("#cusModal,.modal-content").fadeIn();
		 // popup.style.display = "block";
		}

		// clicks anywhere outside of the popup, close it
		window.onclick = function(event) {
		  if (event.target == popup) {
		    popup.style.display = "none";
		  }
		}

		btn.onclick = function() {
		  //popup.style.display = "none";
		  $("#cusModal,.modal-content").fadeOut();
		}
	</script>
	
	<script>
		// add suplier
		// Get modal
		var popup = document.getElementById("newCusModal");
		var btnClose = document.getElementById("add");
		// Get the button that opens the modal
		var btnOpen = document.getElementById("new");

		// clicks the button, open popup 
		btnOpen.onclick = function() {
			$("#newCusModal,.newCusModal-content").fadeIn();
		 // popup.style.display = "block";
		}

		// clicks anywhere outside of the popup, close it
		window.onclick = function(event) {
		  if (event.target == popup) {
		    popup.style.display = "none";
		  }
		}

		btnClose.onclick = function() {
		  //popup.style.display = "none";
		  $("#newCusModal,.newCusModal-content").fadeOut();
		}

	</script>

<script>
		//upload img
			function readURL(input) {
	        	if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	                $('#img')
	                    .attr('src', e.target.result)
	                    .width(120)
	                    .height(120);
            	};

            		reader.readAsDataURL(input.files[0]);
        		}
    		}
	</script>

	<script>
		function reset(){
			$("form").trigger("reset");
			document.getElementById("img").src = "../resources/css/Images/default/default.png";	
		}
	</script>

</body>
	
</html>

<?php
	}
?>