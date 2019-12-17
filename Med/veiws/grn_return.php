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

<!----------------- Toggle sub-menu --------------------------------------->
	<script>
		$(document).ready(function(){
			$('.has-sub').click(function(){
					$(this).toggleClass('tap',400);
			});
		});
	</script>	
<!----------------- Toggle sub-menu --------------------------------------->

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
	
<!----------------- Icon Libraries ----------------------------------------
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
--------------- Icon Libraries ---------------------------------------->

</script>

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
  			$("#last-button").mousedown(function() {
				$(this).css({
      				"box-shadow": "1px 1px 8px 1px #ffffff, 1px 1px 8px rgba(51,255,204,1)" ,
    			});
  			});
  			$("#last-button").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none"
    			});
  			});
  	/* ---- onclick button shadow--------*/
  		/*	$("#submit").mousedown(function() {
				$(this).css({
      				"box-shadow": "5px 5px 15px rgba(255,255,255,0.5), 5px 5px 15px rgba(255,255,255,0.5)",
    			});
  			});
  			$("#submit").mouseup(function() {
    			$(this).css({
      			"box-shadow": "none",
    			});
  			});*/
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
  			$("#supplierText").mousedown(function() {
				$("#supplierText").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#supplierText").mouseup(function() {
    			$("#supplierText").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#supplierID").mousedown(function() {
				$("#supplierID").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#supplierID").mouseup(function() {
    			$("#supplierID").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#grnDate").mousedown(function() {
				$("#grnDate").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#grnDate").mouseup(function() {
    			$("#grnDate").css({
      			"box-shadow": "none",
    			});
  			});
  			$("#grnNO").mousedown(function() {
				$("#grnNO").css({
      				"box-shadow": "0 0 3px .5px rgba(255,255,255,1)",//#d3d3d3
    			});
  			});
  			$("#grnNO").mouseup(function() {
    			$("#grnNO").css({
      			"box-shadow": "none",
    			});
  			});

	/* ---- onclick-text-box-shadow --------*/

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
		});
	/* ---- onclick-calendar-shadow --------*/
	</script>

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../resources/css/images/favicon/icons8-m-26.png" />

<link rel="stylesheet" href="../resources/css/dash-board.css">
<link rel="stylesheet" href="../resources/css/side-menu.css">
<link rel="stylesheet" href="../resources/css/grn_return.css">

<title>GRN RETURN - MEDKNIGHT</title>
	
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
			<h3>PURCHASE</h3>
			<h6>Home/ Purchase/ GRN RETURN</h6>
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
			<h4>GRN RETURN</h4>
		</div>
	<!-------------- Topic ---------------->
		<section id="return-bar">
			<div id="return-bar-box">
				<Span id="retutnNo">Return No :</span><!--<input type="text" id="sname-text">-->
				<span id="returnDate">Return Date :</span><input type="text" id="day" placeholder="D" ><input type="text" id="month" placeholder="M" onclick="shadow()"><input type="text" id="year" placeholder="Y" ><img id="calendar" src="../resources/css/Images/Icons/calendar-month-outline.png" alt="GRN-Calendar" onclick="()"><div id="GRN-circle"></div>
			</div>
		</section>

		<section class="grn-box">
			<div id="grn-box-bar">
				<div id="detail-grn">
					<span id="grnNOLbl">GRN NO </span><span id="grnNOColon">:</span><input type="text" id="grnNO"><br>
					<span id="grnDateLbl">GRN Date </span><span id="grnDateColon">:</span><input type="text" id="grnDate">
					<img id="calendarGrn" src="../resources/css/Images/Icons/calendar-month-outline.png" alt="GRN-date">
				</div>
				<div id="detail-supplier">
					<span id="supplierIDLbl">Supplier ID </span><span id="supIdColon">:</span><input type="text" id="supplierID"><br>
					<span id="supplierTextLbl">Supplier </span><span id="supColon">:</span><input type="text" id="supplierText">
				</div>
			</div>
		</section>

		<section id="tableUp">
			<table id="table-grnUp">
				  <tr>
    				<th id="o">Item ID</th>
    				<th id="t">Item</th>
    				<th id="th">Batch No:</th>
    				<th id="f">Mft. Date</th>
    				<th id="fi">Exp. Date</th>
    				<th id="s">Quantity</th>
    				<th id="s">Price</th>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
			</table>
		</section>

		<section>
			<div class="itemsToReturn">
				<h3>ITEMS TO RETURN</h3>
			</div>
		</section>

		<section class="bottom-bar">
			<table id="table-grnBelow">
				  <tr>
    				<th id="o">Item ID</th>
    				<th id="t">Item</th>
    				<th id="th">Batch No:</th>
    				<th id="f">Mft. Date</th>
    				<th id="fi">Exp. Date</th>
    				<th id="s">Quantity</th>
    				<th id="se">Price</th>
    				<th id="e">Option</th>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
			</table>
		</section>

	</div>
<!------------------------------------------- wrapper -------------------------------------------->
	<div class="button-last">
		<button type="submit" value="" id="last-button">Return</button>
	</div>

</section>
	
<!--***************************************************************************************************-->
<!------------------------------------------- Content --------------------------------------------------->

</body>
	
	
</html>