

function load(CompanyName){
	from = document.getElementById('form');
	form.reset();
	form.innerHTML = form.innerHTML.replace(/<!--[\s\S]*?-->/g,'');

	createSelectRegion("");
	// thi is comment - clone_div();	
	// remove_div();
	styleSelect();
	defaultSelect();
	SelectValueYearOfAplication();
	set_tumorrow_date("select_dd", "select_mm", "select_yyyy");
	set_max_year("harvest_year"); //validation.js file
	defaultSelectValue('district', 'Спочатку виберіть область', 'block');
	DropDownText(CompanyName);
}

function checkCompanyID(input ,id){         //this function clear company name, if compane was selected not from list
	var element = document.getElementById(id);
	var input = document.getElementById(input);

	if (element.value.length < 1) {
		input.value = '';
	}
}

function clearValue (id){
	document.getElementById(id).value = '';
}

function SelectCompany(li, idName, value){

	element = document.getElementById(idName);
	if (idName == "MandatorName"){
		hideElement = document.getElementById("Mandator_id");
	}
	if (idName == "OperatorName"){
		hideElement = document.getElementById("Operator_id");	
	}
	
	element.value = li.innerHTML.replace(/<[^>]+>/g,'');;
	hideElement.value = value;
	

}
function DropDownText(dblist){
		var search = document.getElementsByClassName('input');


	var findMatches = function(word, array) {
	  return array.filter(item => {
	    const regex = new RegExp(word, 'gi');
	    return item.name.match(regex) || item.id.toString().match(regex)
	  }).slice(0,6);
	}

	var renderList = function(element) {
		var value = element.value;
		var id = element.id;
		var list = document.getElementById(element.name);
	  var matchArray = findMatches(value, dblist);
	  const html = matchArray.map(item => {
	    const regex = new RegExp(value, 'gi');
	    // const companyName = item.replace(regex, `<span class="hl">${value}</span>`)
	    return `<li class="liClick" onclick = "SelectCompany(this, '${id}', '${item.id.toString()}')"   onselectstart="return false" onmousedown="return false" >${item.name}</li>`;
	  }).join('');
	  list.innerHTML = value ? html : '';
	  
	  
	}

	for (var i = search.length - 1; i >= 0; i--) {
		
	search[i].addEventListener('keyup', function(event){

	  renderList(event.target); 
	})}

	document.addEventListener('click', function(event){

	 var ClassElement = document.getElementsByClassName('liClick');
	 if (ClassElement){
	 	for (var i = ClassElement.length - 1; i >= 0; i--) {
			ClassElement[i].className = "liClickNew";
		}}
		
		
	 })

}

function defaultSelectValue(id, text, flag = "hidden"){ /* створення пункту селект default, hiden */
	var select = document.getElementById(id);
	var opt = document.createElement('option');
	opt.value = "default";
	opt.innerHTML = text;
	opt.setAttribute("disabled", ''); 
	opt.setAttribute("selected", '');
	opt.setAttribute(flag, '');
	select.appendChild(opt);

	
}
function defaultSelect(){ /* після оновлення сторінки всі селекти переключає на default значення */
	var arr = document.getElementsByTagName('select');
	for (var i = arr.length - 1; i >= 0; i--) {
		arr[i].value = "default";
	}
}

function createSelectRegion(pref){ /* Створюємо масив значень для селекта #region, масив значень задано вручну в масиві region */
	if(pref != ""){pref = "_" + pref;}
	defaultSelectValue('region' + pref, 'Виберіть область');
	var select = document.getElementById("region" + pref);
	var region = ['АР Крим', 	
'Донецька',
'Луганська',
'Запорізька',
'Одеська',
'Житомирська',
'Хмельницька',
'Полтавська',
'Івано-Франківська',
'Дніпропетровська',
'Харківська',
'Тернопільська',
'Закарпатська',
'Миколаївська',
'Черкаська',
'Сумська',
'Волинська',
'Кіровоградська',
'Рівненська',
'Вінницька',
'Київська',
'Херсонська',
'Чернігівська',
'Львівська',
'Чернівецька'];
	region = region.sort(function uaSort(s1, s2) {
    return s2.localeCompare(s1);
});
	for (var i = region.length - 1; i >= 0; i--) {
		var opt = document.createElement('option');
	    opt.value = region[i];
	    opt.innerHTML = region[i];
	    opt.setAttribute("style", 'color:black;');
	    opt.setAttribute("font-weight", 'normal;');
	    select.appendChild(opt);
	}
	
}
function createSelectDistrict(obj){  /* Створюємо масив значень для селекта #district, масив значень задано вручну в функції arrays('name') */
	var select_up = obj.id.split('_')
		if (select_up[1] == undefined){
			select_up[1] = ""
		}else{
			select_up[1] = "_" + select_up[1]
		}
	var select = document.getElementById("district" + select_up[1]);
	select.removeAttribute('disabled');
	if (select.options.length !=0){ /* обнуляємо значення селекту #district */
		var length = select.options.length;
		for (i = 0; i < length; i++) {
	  		select.options[0] = null;
		}		
	}
	var array = [];
	switch (obj.value){
		case 'Київська':
		array = arrays('kyiv');
		break;
		case 'Донецька':
		array = arrays('donetsk');
		break;
		case 'Луганська':
		array = arrays('lugansk');
		break;
		case 'Чернівецька':
		array = arrays('chernivtsi');
		break;
		case 'Чернігівська':
		array = arrays('chernihiv');
		break;
		case 'Херсонська':
		array = arrays('kherson');
		break;
		case 'Вінницька':
		array = arrays('vinnitsa');
		break;
		case 'Рівненська':
		array = arrays('rivne');
		break;
		case 'Кіровоградська':
		array = arrays('Kirovograd');
		break;
		case 'Волинська':
		array = arrays('volyn');
		break;
		case 'Сумська':
		array = arrays('sumy');
		break;
		case 'Черкаська':
		array = arrays('cherkassy');
		break;
		case 'Миколаївська':
		array = arrays('nikolaev');
		break;
		case 'Закарпатська':
		array = arrays('transcarpathian');
		break;
		case 'Тернопільська':
		array = arrays('ternopil');
		break;
		case 'Харківська':
		array = arrays('kharkiv');
		break;
		case 'Дніпропетровська':
		array = arrays('dnipropetrovsk');
		break;
		case 'Івано-Франківська':
		array = arrays('ivanoFrankivsk');
		break;
		case 'Полтавська':
		array = arrays('poltava');
		break;
		case 'Хмельницька':
		array = arrays('khmelnitsky');
		break;
		case 'Житомирська':
		array = arrays('zhytomyr');
		break;
		case 'Одеська':
		array = arrays('odessa');
		break;
		case 'Запорізька':
		array = arrays('zaporozhye');
		break;
		case 'АР Крим':
		array = arrays('crimea');
		break;
		case 'Львівська':
		array = arrays('lviv');
		break;
		default:
    	alert ('виникла технічна помилка')
    	break;	
	}

array = array.sort(function(s1, s2) {
return s2.localeCompare(s1);})

for (var i = array.length - 1; i >= 0; i--) {
		var opt = document.createElement('option');
	    opt.value = array[i];
	    opt.innerHTML = array[i];
	    opt.setAttribute("style", 'color:black;');
	    opt.setAttribute("font-weight", 'normal;');
	    select.appendChild(opt);
	}
	defaultSelectValue("district" + select_up[1], 'Виберіть район');

}


function styleSelect(){	/* змінюємо колір default селекту на сірий, та при виборі 1 з пунктів селекту назад на чорний */
	$('select').change(function () { var i = this.selectedIndex;		
    $(this).css('color', i ? 'black' : '');
    $('option', this).css('font-weight', 'normal').eq(i).css('font-weight', i ? 'bold' : 'normal');
	});
	 					
}

function SelectValueYearOfAplication(){ /* створення варіантів для селекту рік відбору*/
	var select = document.getElementById('select_yyyy');
	var today = new Date();
	var year = today.getFullYear();
	for (var i = 0; i < 3; i++) {
		var opt = document.createElement('option');
	    opt.value = year + i;
	    opt.innerHTML = year + i;
	    select.appendChild(opt);
	}	
}

// function clone_div(){ /* Клонування div блоку при натиску на кнопку #btn  */
// 	var calc = change_name();
// 	const btnAd = document.querySelector('#btn');
// 	const container = document.querySelector('.container');
// 	const block = document.querySelector('.inputs');
// 	const blockB = document.querySelector('.inputsBefore');

// 	btnAd.addEventListener('click', function(e) {
// 		e.preventDefault();
// 		let clone = block.cloneNode(true, true);
// 		var pref = calc();
// 		clone.id = block.id + "_" + pref;
// 		container.insertBefore(clone, blockB)
// 		changeCloneId(clone, pref)
// 		changeCloneName(clone, pref)
// 		clear_div_elements(clone);
// 		// createSelectRegion(pref);
// 		styleSelect();
// 		document.getElementById('div_counter' + "_" + pref).value = pref; 
// 		// defaultSelectValue('district' + "_" + pref, 'Спочатку виберіть область');
// 		const btnRm = clone.querySelector('.btnRm'); /* промалювання кнопки "ремув блоку" під час клонування */
// 		document.getElementById("_" + pref).style.display = 'block';
// 		btnRm.addEventListener('click', function(e) {
// 			e.preventDefault();
//         	        reply_click(this);
// 			return false;
// 		});
// 	});
// }


// function reply_click (Button_element){ /* Видалення  клонованого div елементу  */
// 	var id = Button_element.id;
// 		var div_element = document.getElementById('repit_div' + id);
// 	div_element.remove();
// }

// function remove_div() /* Видалення  клонованого div елементу  */
// {
// 	const btnRm = document.querySelector('.btnRm');
// 	btnRm.addEventListener('click', function(e) {
// 		e.preventDefault();
//                 reply_click(this);
// 		return false;

// 	});
// }


// function clear_div_elements(clone){ /* Встановлення значення value пустим після клонування div блоку*/
// 	var elements = clone.getElementsByTagName("*");

//        for (var j = 0, len = elements.length; j < len; j++){
	         
//             if (elements[j].name != 'repit_div' + elements[j].id && elements[j].nodeName != "OPTION" && elements[j].nodeName != "SELECT"){
//             	elements[j].value=''; 
//             } 
	        
//     	}	
// }

// function change_name(){/* лычильник для клонування div блоку  */
// 	count = 0;
// 	return function(){
// 	return count+=1;};
// }

// function changeCloneId(clone, pref){ /* прийсвоєння значення лічильника в склонований DIV блок*/
// 	var elements = clone.getElementsByTagName("*");

//        for (var j = 0, len = elements.length; j < len; j++)
//         { 
//             if (elements[j].name)
//                 {
//             	elements[j].id = elements[j].id + "_" + pref;
//                 } 
//          }
// }
// function changeCloneName(clone, pref){ /* прийсвоєння значення лічильника в склонований DIV блок*/
// 	var elements = clone.getElementsByTagName("*");

//        for (var j = 0, len = elements.length; j < len; j++)
//         { 
//             if (elements[j].name)
//                 {
//             	elements[j].name = elements[j].name + "_" + pref;
//                 } 
//          }
// }

function set_tumorrow_date(dd_ID, mm_ID, yyy_ID){ /* встановлюэмо дату подання заявки завтрашнім числом*/

 var today = new Date();
 today.setDate(today.getDate() + 1); //tomorrow date
 var dd = today.getDate(); 
 var mm = today.getMonth() + 1; //January is 0!
 var yyyy = today.getFullYear();
 
 if(dd < 10) {
     dd ='0'+ dd
 } 
 if(mm < 10) {
     mm ='0'+ mm
 } 
 //tomorrow = dd +'.'+ mm +'.'+ yyyy;
 document.getElementById(dd_ID).value = dd;
 document.getElementById(mm_ID).value = mm;
 document.getElementById(yyy_ID).value = yyyy;
}



function check_uncheck(element_id, f='yes'){ /* ховаємо або показуємо необхідні div елементи, в залежності від пункту в селект select.name == div.id якщо select.value = yes тоді div hide*/
	var element_value = document.getElementById(element_id).value;
	var felement = document.getElementById(element_id);
	
	if (element_value == "yes" || element_value == "other") {
		document.getElementById(felement.name).style.display = 'block';
	}
	else{
		document.getElementById(felement.name).style.display = 'none';
		element = document.getElementById(felement.name);
		element = element.getElementsByTagName("*");
		for (var i = element.length - 1; i >= 0; i--) {
			if(element[i].nodeName != "OPTION" && element[i].nodeName != "SELECT"){
		 	element[i].value = "";
		 } }
	}
	if(f == 'no'){
		if (element_value == "not") {
			var str = felement.name;
		document.getElementById('no_' + felement.name).style.display = 'block';
	}
	else{
		document.getElementById('no_' + felement.name).style.display = 'none';
		element = document.getElementById('no_' + felement.name);
		element = element.getElementsByTagName("*");
		for (var i = element.length - 1; i >= 0; i--) {
			if(element[i].nodeName != "OPTION" && element[i].nodeName != "SELECT"){
		 	element[i].value = "";
		 } }
	}

	}
}
function check_uncheck_modify(div_id){ /* ховаємо або показуємо необхідні div елементи, в залежності від значення в інпуті select.name == div.id якщо select.value = yes тоді div hide*/
	elements = document.getElementsByClassName("hide507");
	units = document.getElementsByClassName("units");
	var hide = false;
	var value = new Array();
	for (var i = elements.length - 1; i >= 0; i--) {
		if (units[i]) {

			switch (units[i].value){
				case '1': value[i] = 1;     // Кілограми
				break;
				case '2': value[i] = 1000;  // тонни
				break; 
				case '3': value[i] = 0;     // літри
				break;
				default: value[i] = 0;
			};
			
			if ((elements[i].value * value[i]) > 508999){
				hide = true; 
				break;			
			}else{hide = false;}
			}
		}
	
	if (hide) {
		document.getElementById(div_id).style.display = 'block'; 
	}
	else{
		document.getElementById(div_id).style.display = 'none';
		element = document.getElementById(div_id);
		element = element.getElementsByTagName("*");
		for (var i = element.length - 1; i >= 0; i--) {
		 	if(element[i].nodeName != "OPTION"){
		 	element[i].value = "";

		 }
		 if(element[i].nodeName == "SELECT"){
		 	element[i].value = "default";
		 }} 
	}
}

function comfirm(){
	check = document.getElementById("agree_pay").checked
	if(check){
		document.getElementById("agree_pay").checked = false;
	} else{ document.getElementById("agree_pay").checked = true; }
}







