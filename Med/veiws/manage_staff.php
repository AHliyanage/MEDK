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

<!--*************************************** JQery *******************************************-->
	
	
<!--***************************************JQery UI *****************************************--> 

<!--------------------------------------- CDN -------------------------------------------------> 
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!--------------------------------------- CDN -------------------------------------------------> 
	
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
<link rel="stylesheet" href="../resources/css/manage-staff.css">

<title>Manage Staff - MEDKNIGHT</title>

<!----------------- util.js --------------------------------------->
<script type="text/javascript" src="../resources/js/util.js"></script>
<!----------------- util.js --------------------------------------->
	

	<script>
		$(document).ready(function(){

			/*--------------- Toggle sub-menu -------------*/
			$('.has-sub').click(function(){
					$(this).toggleClass('tap',500);
			});

			/*--------------- Collapse Menu ------------->*/
			$('#tabs').tabs({event:"click",disable:false,heightStyle:"auto"});
			$('#tabs2').tabs({event:"click",disable:false,heightStyle:"auto"});
			$('#tabs3').tabs({event:"click",disable:false,heightStyle:"auto"});

			$("#admin").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Delete"}
				],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
        
	   	 		]
			});

			$("#admin2").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Update"}
				],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
        
	   	 		]
			});

			$("#manager").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Delete"}
				],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
        
	   	 		]
			});

			$("#manager2").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Update"}
				],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
        
	   	 		]
			});

		$("#pharmacist").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Delete"}
			],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
	   	 		]	
			});

		$("#pharmacist2").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Update"}
			],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
	   	 		]	
			});

		$("#cashier").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Delete"}
			],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
        		
	   	 		]
			});

		$("#cashier2").DataTable({
			"data":[],
			"columns": [
				{"title": "Staff ID"},
				{"title": "First Name"},
				{"title": "Last Name"},
				{"title": "Gender"},
				{"title": "Age" },
				{"title": "NIC"},
				{"title": "Address"},
				{"title": "Contact No."},
				{"title": "Update"}
			],
			"columnDefs": [
        		{ targets: [0], visible: false},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6},
        		{ width: "15%", targets: 7},
        		{ width: "15%", targets: 8}
        		
	   	 		]
			});
	
			load();

		});

		var userType = "Admin";
		
		// Collapse Menu
		function switchTab(selectedTab){
			var children = $("#tabList").children();
			for(var x = 0; x<children.length ; x++){
				if(children[x].id != selectedTab && $("#"+children[x].id).hasClass("ui-tabs-active")){
					$("#"+children[x].id).removeClass("ui-tabs-active");
				}				
			}	

			$("#"+selectedTab).addClass("ui-tabs-active");

		}

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
			<h3>MEMBER MANAGEMENT</h3>
			<h6>Home / Staff / Manage member</h6>
		</div>
	</section>

<!---------------------------------------------- Box Dashboard ------------------------------------------>
	
<!------------------------------------------- Content --------------------------------------------------->
<!--***************************************************************************************************-->

<section class="content">

<!------------------------------------------- TableContainer -------------------------------------------->
<div class="tableBoxGray">
<!-------------- Topic ---------------->		
	<div class="topic">
		<h4>MANAGE STAFF</h4>
	</div>
<!-------------- Topic ---------------->

	<div id="wrapper">
		<div id="tabs">

			<ul>
				<li id="deleteTab" class="ui-tabs-active"><a href="#Delete">DELETE</a></li>
				<li id="updateTab"><a href="#Update">UPDATE</a></li>
			</ul>
	
			<div id="Delete">
				<span id="del-heading">Delete Member</span>
				
				<div id="tabs2">

					<ul>
						<li id="adminTab" class="ui-tabs-active"><a href="#Admin" onclick="userType='Admin';switchTab('adminTab');load();">ADMIN</a></li>
						<li id="managerTab"><a href="#Manager" onclick="userType='Manager';switchTab('managerTab');load();">MANAGER</a></li>
						<li id="pharmacistTab"><a href="#Pharmacist" onclick="userType='Pharmacist';switchTab('pharmacistTab');load();">PHARMACIST</a></li>
						<li id="cashierTab"><a href="#Cashier" onclick="userType='Cashier';switchTab('cashierTab');load();">CASHIER</a></li>
					</ul>

					<div id="Admin">
						<table id="admin" cellspacing="0" width="100%" class="display cell-border stripe">

						</table>
					</div>
	
					<div id="Manager">
						<table id="manager" cellspacing="0" width="100%" class="display cell-border stripe">

						</table>
					</div>
			
					<div id="Pharmacist">
						<table id="pharmacist" cellspacing="0" width="100%" class="display cell-border stripe">
			
						</table>
					</div>
			
					<div id="Cashier">
						<table id="cashier" cellspacing="0" width="100%" class="display cell-border stripe">
				
						</table>
					</div>
	
				</div>
						
			</div>
			
			<div id="Update">
				<span id="up-heading">Update Member</span>

				<div id="tabs3">

					<ul>
						<li id="adminTab" class="ui-tabs-active"><a href="#Admin2" onclick="userType='Admin';switchTab('adminTab');load();">ADMIN</a></li>
						<li id="managerTab"><a href="#Manager2" onclick="userType='Manager';switchTab('managerTab');load();">MANAGER</a></li>
						<li id="pharmacistTab"><a href="#Pharmacist2" onclick="userType='Pharmacist';switchTab('pharmacistTab');load();">PHARMACIST</a></li>
						<li id="cashierTab"><a href="#Cashier2" onclick="userType='Cashier';switchTab('cashierTab');load();">CASHIER</a></li>
					</ul>
	
					<div id="Admin2">
						<table id="admin2" cellspacing="0" width="100%" class="display cell-border stripe">

						</table>
					</div>

					<div id="Manager2">
						<table id="manager2" cellspacing="0" width="100%" class="display cell-border stripe">

						</table>
					</div>
			
					<div id="Pharmacist2">
						<table id="pharmacist2" cellspacing="0" width="100%" class="display cell-border stripe">
			
						</table>
					</div>
			
					<div id="Cashier2">
						<table id="cashier2" cellspacing="0" width="100%" class="display cell-border stripe">
				
						</table>
					</div>
	
				</div>

			</div>
	
		</div>
	</div>
	
</div>	
<!------------------------------------------- TableContainer -------------------------------------------->
	
</section>
	
<!--***************************************************************************************************-->
<!------------------------------------------- Content --------------------------------------------------->

<script>
		function load(){
		drawTable("admin",[]);
		drawTable("admin2",[]);
		drawTable("manager",[]);
		drawTable("manager2",[]);
		drawTable("pharmacist",[]);
		drawTable("pharmacist2",[]);
		drawTable("cashier",[]);
		drawTable("cashier2",[]);

		var formData = new FormData(); 
		formData.append("type" , userType);

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var resp = jps(this.responseText);         	
				if(resp["success"]){
					/*load data into table*/
					drawTable("admin",resp["success"]);
					drawTable("admin2",resp["success"]);
					drawTable("manager",resp["success"]);
					drawTable("manager2",resp["success"]);
					drawTable("pharmacist",resp["success"]);
					drawTable("pharmacist2",resp["success"]);
					drawTable("cashier",resp["success"]);
					drawTable("cashier2",resp["success"]);
				}else{
					/*unexpected error if none of the above*/
					unexpectedAlertModal("Error", "Unexpected error","bg-danger");
				}
		   }
		};
		xhttp.open("POST","../controllers/manageStaffMed.php", true);
		xhttp.send(formData);
	}
	</script>

</body>
	
</html>

<?php
	}
?>