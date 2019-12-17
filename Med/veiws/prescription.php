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

<!--*************************************** JQery UI Theme *********************************--->

<!---------------------------------------------------- CDN -------------------------------------------------------------->

<!-- (base,cupertino,darkhive,flick,humaniy,overcast,redmond,smoothness,ui-dark,pepar-grinder) -->

<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/blitzer/jquery-ui.css">-->
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
<!--<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/dark-hive/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/dot-luv/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/eggplant/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/excite-bike/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/hot-sneaks/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/humanity/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/le-frog/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/mint-choc/jquery-ui.css"> 
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/overcast/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/south-street/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/start/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/sunny/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/swanky-purse/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/trontastic/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/vader/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">-->

<!---------------------------------------------------- CDN -------------------------------------------------------------->
	
<!--------------------------------------- D.ld -------------------------------------------------> 
<!--------------------------------------- D.ld -------------------------------------------------> 

<!--**************************************** JQery UI Theme **********************************-->

<!-------------------------------------- Icon Libraries ---------------------------------------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-------------------------------------- Icon Libraries ---------------------------------------->

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../resources/css/images/favicon/icons8-m-26.png" />

<link rel="stylesheet" href="../resources/css/dash-board.css">
<link rel="stylesheet" href="../resources/css/side-menu.css">
<link rel="stylesheet" href="../resources/css/prescription.css">
	
<title>New Prescription - MEDKNIGHT</title>

<!---------------------------------------------- util.js --------------------------------------->
<script type="text/javascript" src="../resources/js/util.js"></script>
<!---------------------------------------------- util.js --------------------------------------->
	
<!----------------- Toggle sub-menu --------------------------------------->
	<script>
		$(document).ready(function(){
			$('.has-sub').click(function(){
				$(this).toggleClass('tap',400);
			});
		});
	</script>
<!----------------- Toggle sub-menu --------------------------------------->
	
<!----------------- Datepicker --------------------------------------->

	<script>
		$(document).ready(function(){
			$('#datepicker').datepicker({
				dateFormat : 'dd /mm /yy',
				changeMonth :true,													
				changeYear :true,
				maxDate : 'today',
				showAnim : 'clip',
				showOtherMonths: true
					
			})
		});
	</script>
<!----------------- Datepicker --------------------------------------->

<!----------------- Buton Shadow --------------------------------------->
	<script>
		$(document).ready(function() {
  			$("#co").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px rgba(51,255,204,1)" ,
    			});
  			});
  			$("#co").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});
		});
	</script>
	<script>
		$(document).ready(function() {
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
		});
	</script>
		<script>
		$(document).ready(function() {
  			$("#add").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px #ffffff" ,
    			});
  			});
  			$("#add").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});
		});
	</script>
	<script>
		$(document).ready(function() {
  			$("#new").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px #ffffff" ,
    			});
  			});
  			$("#new").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});


  			//image click, show datepicker
  			$('#cal2').click(function() {
      			$('#datepicker').datepicker('show');
			});
		});
	</script>
<!----------------- Buton Shadow --------------------------------------->
	
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
			<h5 class="user">Admin</h5>
		</div>
	</section>
	
	<section class="side-menu-box">
		<div class="profile-pic-boarder">
			<div class="profile-pic">
			</div>
		</div>
		
		<div class="user">
			<h3>John Doy</h3>
		</div>
		
		<div class="menu-container">
		<ul class="side-menu">
			<li><a href="#" class="dashboard">Dashboard</a></li>
			<li class="has-sub"><a href="#" class="main-menu-item">Staff<i class="material-icons main md-20">chevron_right</i></a>
				<ul class="sub-menu-container">
					<li><a href="add_member.html"><i class="material-icons">arrow_right_alt</i>Add Member</a></li>
					<li><a href="#">Manage Member</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#" class="main-menu-item">Supplier<i class="material-icons main md-20">chevron_right</i></a>
				<ul class="sub-menu-container">
					<li><a href="#">Add Supplier</a></li>
					<li><a href="#">Manage Supplier</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#" class="main-menu-item">Customer<i class="material-icons main md-20">chevron_right</i></a>
				<ul class="sub-menu-container">
					<li><a href="#">Add Customer</a></li>
					<li><a href="#">Manage Customer</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#" class="main-menu-item">Products<i class="material-icons main md-20">chevron_right</i></a></li>
			<li class="has-sub"><a href="#" class="main-menu-item">Stock<i class="material-icons main md-20">chevron_right</i></a></li>
			<li class="has-sub"><a href="#" class="main-menu-item">Sales<i class="material-icons main md-20">chevron_right</i></a></li>
			<li class="has-sub"><a href="#" class="main-menu-item">Purchases<i class="material-icons main md-20">chevron_right</i></a></li>				
			<li class="has-sub"><a href="#" class="main-menu-item">Expenses<i class="material-icons main md-20">chevron_right</i></a></li>
			<li class="has-sub"><a href="#" class="main-menu-item">Reports<i class="material-icons main md-20">chevron_right</i></a></li>
		</ul>
	</div>
	</section>
	
	<section class="main-bar">
		<div class="main-bar-box">
			<h3>ADD PRESCRIPTION</h3>
			<h6>Home / Prescription / Add Prescription</h6>
		</div>
	</section>

	<section class="content">
		<div class="topic">
			<h4>ADDING NEW PRESCRIPTION</h4>
		</div>
		<div class="form">
			
			<form>
				
				<div class="input">
					<input type="text" id="cId" class="pre-details" placeholder="Customer ID" onfocus="cleanValErrorInput('cId'); cleanDivError('cIdError');cleanDivError('otherError');">
					<span class="line"></span><span id="cIdError" class="val-error"></span><span id="cIdError"></span>
				</div>
				
				<div class="input">
					<input type="text" id="cname" class="pre-details" placeholder="Customer Name" onfocus="cleanValErrorInput('cname'); cleanDivError('cnameError');cleanDivError('otherError');">
					<span class="line"></span><span id="cnameError" class="val-error"></span><span id="cnameError"></span>
				</div>
				
				<div class="input">
					<input type="text" id="doc" class="pre-details" placeholder="Doctor" onfocus="cleanValErrorInput('doc'); cleanDivError('docError');cleanDivError('otherError');">
					<span class="line"></span><span id="docError" class="val-error"></span><span id="docError"></span>
				</div>
				
				<div class="input">
					<input type="text" id="datepicker" class="pre-details" placeholder="Date & Time                                                                             D                       M                       Y" onfocus="cleanValErrorInput('datepicker'); cleanDivError('datepickerError');cleanDivError('otherError');"><span class="line"></span><span id="datepickerError" class="val-error"></span>
					<img src="../resources/css/Images/Icons/calendar-month-outline.png" alt="icon-calender" id="cal2">
				</div><br><br>

				<div class="input">
					<img src="../resources/css/Images/Icons/magnify.png" alt="icon-search" id="search"><input type="text" id="findMed" onkeyup="myFunction()" placeholder="Search for Drugs.."><span class="lineMed"></span>
				</div>
				
				<div id="otherError" class="non-val-error"></div>
			</form>	

			<div class="buttonAdd">
				<button type="submit" value="add" id="add">Add</button><br>
			</div>	

		</div>

		<section id="tableP">
			<table id="tablePre">
				<tr>
    				<th id="o">Drug</th>
    				<th id="t">Dose</th>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    			</tr>

			</table>

			<div class="button">

				<button type="" value="new" id="new">New Prescription</button>
				<button type="reset" value="CANCEL" id="cancel">CANCEL</button>
				<button type="submit" value="CO" id="co" onclick="save()">Create Order</button>
				
			</div>

		</section>
		
	</section>

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
	
</body>
	
</html>
