function validation(){



	// if(!validateEmail()){return false;}
	if(!DynamicPart()){  return false;}
	if(!NotEmptyImputsStatic()){  return false;}

	return false;
		
 
}

// function validateEmail() {
//     var x = document.querySelectorAll("#form input[type=email]");

//     for (var i = x.length - 1; i >= 0; i--) {
    	
//     	var atpos = x[i].value.indexOf("@");
//     	var dotpos = x[i].value.lastIndexOf(".");
//     	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x[i].length) {
//     		x[i].style.borderBottom = "2px solid red";
//     		x[i].scrollIntoView(true);
// 	        return false;
//    		} else {return true;}
//   	}    
// }
// function validateEmail() {
// 	var email = document.getElementById('contact_email');
//     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     if(!re.test(email.value)){
//     email.style.borderBottom = "2px solid red";
// 	email.scrollIntoView(true);
// 	return false;
// 	}
// 	return true;
// }


function DynamicPart(){
	// container = document.querySelector("#container");
	// container = container.getElementsByTagName("*");
	container = document.getElementsByClassName("validation");
	
	
	firstElement = 0;
	for (var i = container.length - 1; i >= 0; i--) {
		element = container[i];
		if (element.value == "" || element.value == "default" || element.value == "no") {
			element.style.borderBottom = "2px solid red";
			firstElement = element;
		}	else {element.style.borderBottom = "inherit";}
	}
	if (firstElement){
		firstElement.scrollIntoView(true);
		return false;
	}
		return true;
}

function clearUndefindIds (array){

	for (var i = 0; i < array.length; i++) {
		var element = document.getElementById(array[i]);
		if(element == null){
			array.splice(i, 1);
			i--;
		}
	}
	return array;
}

function NotEmptyImputsStatic (){
// 	notEmptyImputsIDs = [
// 'MandatorName',
// 'OperatorName',
// 'equipment',
// 'for_who',
// 'laboratory_yes_no',
// 'sealing_yes_no',
// 'Loading_inspection',
// 'contact_FIO',
// 'contact_phone',
// 'contact_email',
// 'agree_pay'
// ];

hide500Ids = ['sur_company',
'laboratory',
'count_of_samplings',
'Big_bags',
'storeg_n',
'plombs'
];

hide500Ids = clearUndefindIds(notEmptyImputsIDs);


	for (var i = hide500Ids.length - 1; i >= 0; i--) {
		element = document.getElementById(hide500Ids[i]);
		if (element.style.display == 'block' && (element.value == "" || element.value == "default")) {
			element.style.borderBottom = "2px solid red";
			firstElement = element;
		}else {element.style.borderBottom = "inherit";}
	}

	// for (var i = notEmptyImputsIDs.length - 1; i >= 0; i--) {
	// 	element = document.getElementById(notEmptyImputsIDs[i]);
	// 	if ( element.value == "" || element.value == "default" || element.value == "no"){	
	// 		element.style.borderBottom = "2px solid red";
	// 		var firstElement = element;
	// 	}else {element.style.borderBottom = "inherit";}
	// }

	if (firstElement){
		firstElement.scrollIntoView(true);
		return false;
	}
		return true;

}

function set_max_year(id){  /* Встановлюэмо максимальний рік по сьогоднішній даті  Визиваэться в Scripts.js*/
	
	var select = document.getElementById(id);
	var today = new Date();
	var year = today.getFullYear();
	var text = "Рік урожаю"

	defaultSelectValue(id, text);

	for (var i = 0; i < 4; i++) {
		var opt = document.createElement('option');
	    opt.value = year - i;
	    opt.innerHTML = year - i;
	    select.appendChild(opt);
	}	

	// var today = new Date();
	// var year = today.getFullYear();
	// document.getElementById(id).setAttribute("max", year);
}
