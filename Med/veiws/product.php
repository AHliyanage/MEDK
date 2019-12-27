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
<link rel="stylesheet" href="../resources/css/product.css">
	
<title>Product - MEDKNIGHT</title>

<!----------------- util.js --------------------------------------->
<script type="text/javascript" src="../resources/js/util.js"></script>
<!----------------- util.js --------------------------------------->
	
<!----------------- Toggle sub-menu --------------------------------------->
	<script>
		$(document).ready(function(){
			$('.has-sub').click(function(){
					$(this).toggleClass('tap',500);
			});
		});
	</script>	
<!----------------- Toggle sub-menu --------------------------------------->
	
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
				{"title": "Name"},
				{"title": "Description"},
				{"title": "Batch"},
				{"title": "Purchase Unit"},
				{"title": "Sales Unit" },
				{"title": "ROP"},
				{"title": "Rack No."},
				{"title": "Supplier"},
				{"title": "Company"},
				{"title": "Delete"},
				{"title": "Update"}
				
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
				{"title": "Name"},
				{"title": "Description"},
				{"title": "Batch"},
				{"title": "Purchase Unit"},
				{"title": "Sales Unit" },
				{"title": "ROP"},
				{"title": "Rack No."},
				{"title": "Supplier"},
				{"title": "Company"},
				{"title": "Delete"},
				{"title": "Update"}
		
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
					<li><a href="#"><i class="material-icons">arrow_right_alt</i>Add Member</a></li>
					<li><a href="#"><i class="material-icons">arrow_right_alt</i>Manage Member</a></li>
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
			<h3>PRODUCT</h3>
			<h6>Home / Product</h6>
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
		<h4>PRODUCTS</h4>
	</div>
<!-------------- Topic ---------------->

	<div id="wrapper">
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
	</div>

	<!-- new product -->
	<div class="button">
		<button type="" value="NEW" id="new">NEW</button>
	</div>

	<!--<div class="msg">
		<span id="message">PRODUCT ADDED SUSSCEEFULLY...!!!</span>
	</div>-->
	
</div>	
<!------------------------------------------- TableContainer -------------------------------------------->

<!-- The Modal for supplier data -->
<div id="supModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="user">
  		<h3 id="uname">Cashier</h3>
		<h3 id="name">John Doy</h3>
  	</div>

     <div id="detailSup">
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
<div id="newProModal" class="ProModal">

  <!-- Modal content -->
  <div class="newProModal-content">

  <div id="addProWrap">	

  	<div class="topic2">
		<h4>ADDING NEW PRODUCT</h4>
	</div>

	<div class="form">
			
			<form>
				
				<div class="input">
					<input type="text" name="pro_name" id="pro_name" class="product-details" placeholder="Product Name" onfocus="cleanValErrorInput('pro_name'); cleanDivError('pro_nameError');cleanDivError('otherError');">
					<span class="line"></span><span id="pro_nameError" class="val-error"></span>
				</div>
				
				<div class="input">
					<input type="text" name="discription" id="discription" class="product-details" placeholder="Product Discription" onfocus="cleanValErrorInput('discription'); cleanDivError('discriptionError');cleanDivError('otherError');">
					<span class="line"></span><span id="discriptionError" class="val-error"></span>
				</div>
				
				<div class="input">
					<select name="category"  id="category" class="product-details" placeholder="Category">
  							<?php echo "<option value='$dept_name'>$dept_name</option>"; ?>
					</select>
				</div>

				<div class="input">
					<input type="text" name="batch" id="batch" class="product-details" placeholder="Batch" onfocus="cleanValErrorInput('batch'); cleanDivError('batchError');cleanDivError('otherError');">
					<span class="line"></span><span id="batchError" class="val-error"></span>
				</div>

				<div class="input">
					<input type="text" name="pUnit" id="pUnit" class="product-details" placeholder="Purchase Unit" onfocus="cleanValErrorInput('pUnit'); cleanDivError('pUnitError');cleanDivError('otherError');">
					<span class="line"></span><span id="pUnitError" class="val-error"></span>
				</div>

				<div class="input">
					<input type="text" name="sUnit" id="sUnit" class="product-details" placeholder="Sales Unit" onfocus="cleanValErrorInput('sUnit'); cleanDivError('sUnitError');cleanDivError('otherError');">
					<span class="line"></span><span id="sUnitError" class="val-error"></span>
				</div>

				<div class="input">
					<input type="text" name="rop" id="rop" class="product-details" placeholder="Reorder Point" onfocus="cleanValErrorInput('rop'); cleanDivError('ropError');cleanDivError('otherError');">
					<span class="line"></span><span id="ropError" class="val-error"></span>
				</div>

				<div class="input">
					<input type="text" name="rackNo" id="rackNo" class="product-details" placeholder="Rack No" onfocus="cleanValErrorInput('rackNo'); cleanDivError('rackNoError');cleanDivError('otherError');">
					<span class="line"></span><span id="rackNoError" class="val-error"></span>
				</div>

				<div class="input">
					<select name="compony"  id="compony" class="product-details" placeholder="Compony">
  							<?php echo "<option value='$dept_name'>$dept_name</option>"; ?>
					</select>
				</div>

				<div class="input">
					<select name="supplier" id="supplier" class="product-details" placeholder="Supplier" >
  							<?php echo "<option value='$dept_name'>$dept_name</option>"; ?>
					</select>
				</div>

				<div id="otherError" class="non-val-error"></div>
			</form>		
			
		</div>

		<div class="v-line">
		</div>
		
		<div class="product-profile">
			<div class="pro-profile-pic-boarder">
				<div class="pro-profile-pic">
					<img src="" id="img" src="#"/>
				</div>
			</div>
		
			<div class="product">
				<h3>Profile Picture</h3>
			</div>
		</div>

  		<div class="newProButton">
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
					drawTable("medicine",resp["success"]);
					drawTable("grocery",resp["success"]);
				}else{
					/*unexpected error if none of the above*/
					unexpectedAlertModal("Error", "Unexpected error","bg-danger");
				}
		   }
		};
		xhttp.open("POST","../controllers/productMed.php", true);
		xhttp.send(formData);
	}
	</script>

	<script>
		// supplier data
		// Get modal
		var popup = document.getElementById("proModal");
		var btn = document.getElementById("ok");
		// Get the button that opens the modal
		var clickRow = document.getElementById("");

		// clicks the button, open popup 
		clickRow.onclick = function() {
			$("#proModal,.modal-content").fadeIn();
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
		  $("#proModal,.modal-content").fadeOut();
		}
	</script>
	
	<script>
		// add suplier
		// Get modal
		var popup = document.getElementById("newProModal");
		var btnClose = document.getElementById("add");
		// Get the button that opens the modal
		var btnOpen = document.getElementById("new");

		// clicks the button, open popup 
		btnOpen.onclick = function() {
			$("#newProModal,.newProModal-content").fadeIn();
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
		  $("#newProModal,.newProModal-content").fadeOut();
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