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
		
<!----------------- Icon Libraries ----------------------------------------
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</script>
--------------- Icon Libraries ---------------------------------------->

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../resources/css/images/favicon/icons8-m-26.png" />

<link rel="stylesheet" href="../resources/css/dash-board.css">
<link rel="stylesheet" href="../resources/css/side-menu.css">
<link rel="stylesheet" href="../resources/css/invoice.css">

<title>INVOICE - MEDKNIGHT</title>

<!----------------- util.js --------------------------------------->
<script type="text/javascript" src="../resources/js/util.js"></script>
<!----------------- util.js --------------------------------------->

<!----------------- Toggle sub-menu --------------------------------------->
	<script>
		$(document).ready(function(){
			$('.has-sub').click(function(){
					$(this).toggleClass('tap',400);
			});
		});
	</script>	
<!----------------- Toggle sub-menu --------------------------------------->

<!-- Fade In - OnLoad -->
	<script>
		$(document).ready(function(){
		$('body').css('display', 'none');			
		$('body').fadeIn(1000);
		});
	</script>
<!-- Fade In - OnLoad -->

<!-- Merge last raw -->
	<script>
		/*var lastRow = $('#table-grnUp tr td').last();$('table tr').find('td:last').attr('colspan',999);
		lastRow.Add.att*/
		$('#table-grnUp tr').find('td:last').attr('colspan',5);
	</script>
<!-- Merge last raw -->

	<script>
		$(document).ready(function() {
	/* ---- onclick button shadow --------*/
  			$("#pos").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px rgba(51,255,204,1)" ,
    			});
  			});
  			$("#pos").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});

  			$("#pay").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px rgba(51,255,204,1)" ,
    			});
  			});
  			$("#pay").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});

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
  
  	/* ---- hover-GRN-circle-show --------*/
  			$("#calendar").mouseenter(function() {
				$("#GRN-circle").css({
      				"display": "block",
    			});
  			});
  			$("#calendar").mouseout(function() {
				$("#GRN-circle").css({					
      				"display": "none",
    			});
  			});
  	/* ---- hover-GRN-circle-show --------*/

  	/* ---- onclick-calendar-shadow --------*/
  			$("#calendar").mousedown(function() {
				$("#GRN-circle").css({
      				"box-shadow": "0 0 5px  rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#calendar").mouseup(function() {
    			$("#GRN-circle").css({
      			"box-shadow": "none",
    			});
  			});
  	  	/* ---- onclick-text-box-shadow --------*/

  			$("#day").mousedown(function() {
				$("#day").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#day").mouseup(function() {
    			$("#day").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#month").mousedown(function() {
				$("#month").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#month").mouseup(function() {
    			$("#month").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#year").mousedown(function() {
				$("#year").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#year").mouseup(function() {
    			$("#year").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#contactText").mousedown(function() {
				$("#contactText").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#contactText").mouseup(function() {
    			$("#contactText").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#customer").mousedown(function() {
				$("#customer").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#customer").mouseup(function() {
    			$("#customer").css({
      			"box-shadow": "none",
    			});
  			});

	/* ---- onclick-text-box-shadow --------*/
		});
	
	</script>

	<!----------------- Collapse Menu --------------------------------------->
	<script>
		$(document).ready(function(){
			$('#tabs').tabs({event:"click",disable:false,heightStyle:"auto"});
		});
	</script>	
<!----------------- Collapse Menu --------------------------------------->

<!----------------- Collapse Menu --------------------------------------->
	<script>
		$(document).ready(function(){
			$('#tabs').tabs({event:"click",disable:false,heightStyle:"auto"});
		});
	</script>	
<!----------------- Collapse Menu --------------------------------------->

	<script>
		var proType = "Medicine";
		
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

		$(document).ready(function(){
			$("#medicine").DataTable({
			"data":[],
			"columns": [
				{"title": "Medicine"},
				{"title": "Generic Name"},
				{"title": "Category"},
				{"title": "Price"},
				{"title": "Qty" },
				{"title": "Rack No."},
				{"title": "Status"}
				],
			"columnDefs": [
        		{ width: "15%", targets: 0},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6}
   	 		]
		});

		$("#grocery").DataTable({
			"data":[],
			"columns": [
				{"title": "Medicine"},
				{"title": "Generic Name"},
				{"title": "Category"},
				{"title": "Price"},
				{"title": "Qty" },
				{"title": "Rack No."},
				{"title": "Status"}
			],
			"columnDefs": [
        		{ width: "15%", targets: 0},
        		{ width: "15%", targets: 1},
        		{ width: "15%", targets: 2},
        		{ width: "10%", targets: 3},
        		{ width: "12%", targets: 4},
        		{ width: "15%", targets: 5},
        		{ width: "20%", targets: 6}
   	 		]	
		});
	
		load();

		});
	</script>
	
</head>

<!---------------------------------------------- Side Menu ---------------------------------------------->

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
					<li><a href="#"><span><img id="dbl-chevron" src="../resources/css/Images/Icons/sidemenu/dots-horizontal.png" alt="icon-sub-menu"></span>      View Members</a></li>
					<li><a href="#"><span><img id="icon-add" src="../resources/css/Images/Icons/sidemenu/dots-horizontal.png" alt="icon-sub-menu"></span>      Add Member</a></li>
					<li><a href="#"><span><img id="icon-add" src="../resources/css/Images/Icons/sidemenu/icons8-down-right-24.png" alt="icon-sub-menu"></span>      Manage Member</a></li>
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

<!---------------------------------------------- Side Menu ---------------------------------------------->

<!---------------------------------------------- Box Dashboard ------------------------------------------>
	<section class="main-bar">
		<div class="main-bar-box">
			<h3>SALES</h3>
			<h6>Home/ Sales/ Invoicing</h6>
		</div>
	</section>
<!---------------------------------------------- Box Dashboard ------------------------------------------>

<!------------------------------------------- Content --------------------------------------------------->
<!--***************************************************************************************************-->

<section class="content">

<!------------------------------------------- wrapper -------------------------------------------->
	<div class="tableBoxGray">
	<!-------------- Topic ---------------->		
		<div class="topic">
			<h4>INVOICE</h4>
		</div>
	<!-------------- Topic ---------------->
		<section id="invoice-bar">
			<div id="invoice-bar-box">
				<span id="invoiceNo">Invoice No :</span><!--<input type="text" id="sname-text">-->
				<span id="invoiceDate">Invoice Date :</span><input type="text" id="day" placeholder="D" ><input type="text" id="month" placeholder="M" onclick="shadow()"><input type="text" id="year" placeholder="Y" ><img id="calendar" src="../resources/css/Images/Icons/calendar-month-outline.png" alt="GRN-Calendar" onclick="()"><div id="GRN-circle"></div>
			</div>
		</section>

		<section class="cus-box">
			<div id="cus-box-bar">
				<div id="detail-customer">
					<span id="customerLbl">Customer</span><span id="cusColon">:</span><input type="text" id="customer"><br>
					<span id="contactTextLbl">Contact No.</span><span id="conColon">:</span><input type="text" id="contactText">
				</div>
			</div>
		</section>

		<section id="tableInvoice">
			<table id="tableIn">
				  <tr>
    				<th id="o">Product</th>
    				<th id="t">Quantity</th>
    				<th id="th">Price</th>
    				<th id="f">Option</th>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
			</table>
		</section>

		<div class="btn">
			<button type="" value="" id="new">New Invoice</button>
			<button type="" value="" id="pos">POS</button>
			<button type="" value="" id="pay">Payment</button>
		</div>

		<div class="tableBoxGrayTwo">
			<!--<div id="wrapper">-->
				<div id="tabs">

					<ul id="tabList">
						<li id="medicineTab" class="ui-tabs-active"><a href="#Medicine" onclick="proType='Medicine';switchTab('medicineTab');load();">MEDICINE</a></li>
						<li id="groceryTab"><a href="#Grocery" onclick="proType='Grocery';switchTab('groceryTab');load();">GROCERY</a></li>
					</ul>
	
					<div id="Medicine">
						<table id="medicine" cellspacing="0" width="100%" class="display cell-border stripe">

						</table>
					</div>
			
					<div id="Grocery">
						<table id="grocery" cellspacing="0" width="100%" class="display cell-border stripe">
			
						</table>
					</div>
	
				</div>
			<!--</div>-->
		</div>
	</div>
<!------------------------------------------- wrapper -------------------------------------------->

</section>

<!--***************************************************************************************************-->
<!------------------------------------------- Content --------------------------------------------------->

<script>
		function load(){
		drawTable("medicine",[]);
		drawTable("grocery",[]);
		
		var formData = new FormData(); 
		formData.append("type" , proType);

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var resp = jps(this.responseText);         	
				if(resp["success"]){
					/*load data into table*/
					drawTable("manager",resp["success"]);
					drawTable("pharmacist",resp["success"]);
				}else{
					/*unexpected error if none of the above*/
					unexpectedAlertModal("Error", "Unexpected error","bg-danger");
				}
		   }
		};
		xhttp.open("POST","../controllers/stockMed.php", true);
		xhttp.send(formData);
	}
	</script>

</body>
	
	
</html>