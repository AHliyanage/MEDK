var status403 = 403;
//Please read up on jQuery as some jQuery functions are used here. Eg. the ones starting with $ sign
//please change function names when you use them.

//generates errors according to error master array provided as errorList
function buildErrors(errorList){
	//loop master error array
	for(var x=0; x<errorList.length ;x++){
		try{
			//get sub error array from master
			var error = errorList[x];
			//add invalid css class to error input
			$("#"+error[0]).addClass("is-invalid");
			//show error div for error input
			loadValErrorDiv(error[0]+"Error", error[1]);			
		}catch(e){
			console.log(e);
		}
	}
}

//show validation error divs, id is name of error div and msg is validation error message
function loadValErrorDiv(id, msg){
	id = "#"+id;
	$(id).text(msg);
	$(id).show();

}

//show error div for error input, id is name of error input and msg is error message
function displayDivError(id, msg){
	id = "#"+id;
	$(id).text(msg);
	$(id).show();
}

//clear error div and hide it
function cleanDivError(id){
	id = "#"+id;
	$(id).text("");
	$(id).hide();
}

//clears the inner HTML(options) of select tags
/*function clearSelect(selectList){
	for(var x=0 ; x<selectList.length ; x++){
		$("#"+selectList[x]).html("");
		$("#"+selectList[x]).val(null);
	}
}*/

//clears input feilds and errors provided by an array of input ids
/*function clearList(list){
	for(var x=0 ; x<list.length ; x++){
		clearErrorInput(list[x]);
		clearInput(list[x]);
	}
}*/

//clears an input with error styling
function cleanValErrorInput(id){
	try{		
		//remove error css class and inner content
		if($("#"+id).hasClass("is-invalid")){			
			$("#"+id).removeClass("is-invalid");
			$("#"+id).val("");
		}
		clearErrorDiv(id+"Error");
	}catch(e){		
		console.log(e);
	}
}

//clears a text area with error styling
function cleanErrorArea(id){
	try{		
		//remove error css class and inner content
		if($("#"+id).hasClass("is-invalid")){			
			$("#"+id).removeClass("is-invalid");
			$("#"+id).html("");
		}
		clearErrorDiv(id+"Error");
	}catch(e){		
		console.log(e);
	}
}
//almost same as above but for non error cases
function clearArea(id){
	try{		
		$("#"+id).removeClass("is-invalid");
		$("#"+id).html("");
		clearErrorDiv(id+"Error");
	}catch(e){		
		console.log(e);
	}
}

//clears common HTML input when id is provided
function clearInput(id){
	try{
		$("#"+id).val("");
	}catch(e){		
		console.log(e);
	}
}

//JSON stringify
function sfy(obj){
	//converts JSON object to string
	return JSON.stringify(obj);
}

//JSON parse
function jps(str){
	//parses string to JSON object 
	return JSON.parse(str);
}

//scroll to top of page
function goUp(){
	window.parent.scrollTo(0, 0);
}

//converts formatted number(6,123,555.35) to float(6123555.35) rounded to 2 decimal places for calculations
function unformatNo(val){
	if(val.match(/[^\,\.0-9]+/g)){
		return "NaN";
	}else{		
		return parseFloat(parseFloat(val.replace(/,/g ,'')).toFixed(2));
	}
}

//converts number(6123555.3565) to formatted numbers(6,123,555.35) rounded to 2 decimal places for display
function formatNo(val){
	if(isNaN(val)){
		return "NaN";
	}else{
		val = String(val);
		var dot = val.split(".");
		var rhs = "00";
		if(dot.length > 1){
			rhs = dot[1].substring(0,2);
		}
		var newLhs = "";
		var lhs = dot[0];
		if(lhs == ""){
			lhs = "0";
		}
		for(var x = lhs.length ; x>0; x-=3){
			if(x-3 <= 0){
				newLhs = lhs.substring(0,x)+newLhs;
			}else{
				newLhs = ","+lhs.substring(x-3,x)+newLhs;
			}
		}
		return (newLhs+"."+rhs);	
	}
}

//checks if 1D array contains a value
function contains(array,val){
	for(var x = 0 ; x<array.length ; x++){
		if(array[x] == val){
			return true;
		}
	}
	return false;
}

//enables a list of HTML elements by id. Eg button, input
function enableAll(list){
	for(var x=0; x<list.length ;x++){
		$("#"+list[x]).prop("disabled",false);
	}
}

//disables a list of HTML elements by id. Eg button, input
function disableAll(list){
	for(var x=0; x<list.length ;x++){
		$("#"+list[x]).prop("disabled",true);
	}
}

//below functions are not required dont worry about them yet... you may never need them concentrate on the above and jQuery
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function unexpectedAlertModal(title,msg,type){
	$("#alertModalLabel").text(title);
	$("#alertModalHeader").attr('class', '');
	$("#alertModalHeader").addClass("modal-header");
	$("#alertModalHeader").addClass(type);
	$("#alertModalBody").text(msg);
	$("#alertModal").addClass("show");
	$("#alertModal").show();
	$("#alertModal").focus();
	goUp();
}

function sessionModal(msg){
	$("#sessionModalBody").text(msg);
	$("#sessionModal").addClass("show");
	$("#sessionModal").show();
	$("#sessionModal").focus();
	goUp();
}

function closeModal(id){
	$("#"+id).removeClass("show");
	$("#"+id).hide();
}

function confirmModal(msg,okFunction){
	$("#confirmModalBody").text(msg);
	$("#confirmModalBtn").unbind( "click" );
	$("#confirmModalBtn").click(okFunction);
	$("#confirmModalBtn").click(function(){closeModal('confirmModal');});
	$("#confirmModal").addClass("show");
	$("#confirmModal").show();
	$("#confirmModal").focus();
	goUp();
}

function heightAdjust(){
	var docHeight = $(document).height();
	$("#mainFrame", parent.document).attr("height", docHeight+"px");
}

function drawTable(id,data){
	console.log(data);
	$('#'+id).dataTable().fnClearTable();
	if(data != null && data.length>0){		
		$('#'+id).dataTable().fnAddData(data);
		if(id == "table1"){			
			tableSelect = 1;
		}
	}else{
		if(id == "table1"){			
			tableSelect = 0;
		}
	}
	heightAdjust();
}

//accepts url string and returns array of url attributes
function splitUrlFunc(url){
	return url.split("?")[1].split("&");
}

/*
 * Function that returns decodedURI parameter from url
 * page must contain urlSplit which is an array of url params obtained by function splitUrlFunc
 * 
 * */
function getURIComponent(urlSplit,comp){
	for(var x = 0; x<urlSplit.length ; x++){
		subSplit = urlSplit[x].split("=")
		if(subSplit[0] == comp){
			console.log(decodeURI(subSplit[1]));
			return decodeURI(subSplit[1]);
		}
	}
	return null;
}


