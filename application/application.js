/**
 * Created by Aproximo
 */
// Функція яка очищає вміст прихованого діва після відключення чекбокса
function clean_unchecky()
{

var checkbox_ids = ['add_1_operator_checkbox',
'add_pid_checkbox',
'agree_for_first_company',
'add_1_pid_checkbox',
'add_2_pid_checkbox',
'production_crop_production_checkbox',
'traid_crop_production_checkbox',
'export_crop_production_checkbox',
'crop_production_1_checkbox',
'crop_production_after_checkbox',
'production_wild_collection_checkbox',
'traid_wild_collection_checkbox',
'export_wild_collection_checkbox',
'wild_collection_after_checkbox',
'production_animal_husbandry_checkbox',
'traid_animal_husbandry_checkbox',
'export_animal_husbandry_checkbox',
'vrh_checkbox',
'poultry_checkbox',
'production_beekeeping_checkbox',
'traid_beekeeping_checkbox',
'export_beekeeping_checkbox',
'production_aquaculture_checkbox',
'traid_aquaculture_checkbox',
'export_aquaculture_checkbox',
'production_processing_products_for_use_as_food_checkbox',
'traid_processing_products_for_use_as_food_checkbox',
'export_processing_products_for_use_as_food_checkbox',
'activities_in_food_processing_checkbox',
'wine_industry_checkbox',
'production_processing_products_for_use_as_feed_checkbox',
'traid_processing_products_for_use_as_feed_checkbox',
'export_processing_products_for_use_as_feed_checkbox',
'production_growing_seedlings_and_seed_checkbox',
'traid_growing_seedlings_and_seed_checkbox',
'export_growing_seedlings_and_seed_checkbox',
'growing_seedlings_and_seed_after_checkbox',
'other_2_checkbox',
'other_3_checkbox',
'other_5_checkbox',
'agree_for_first_company'];

         for (var i = 0; i < checkbox_ids.length; i++) 
        {
            
        
                var element = document.getElementById(checkbox_ids[i]); 
                var hid_element = document.getElementById(element.name);


             if(element.checked == false)
            {

                        var elements = hid_element.getElementsByTagName("*");

               for (var j = 0, len = elements.length; j < len; j++)
                {
        
                    if (elements[j].name )
                        {
                        elements[j].value=''; 
                        } 


                 }

            } 
           /* else
            {
                
                var elements1 = hid_element.getElementsByTagName("*");

                for (var z = 0, len = elements1.length; z < len; z++)
                { 
                    if ( elements1[z].nodeName =='OPTION' || elements1[z].nodeName =='BUTTON')
                    {
                        //alert(elements1[z].nodeName);
                    }  
                    
                    else
                    { 
                    elements1[z].style.borderColor = "inherit";
        
                    if (elements1[z].value =='' )

                        { 

                            alert("Будь ласка заповніть всі поля");

                            elements1[z].style.borderColor = "red";
                            elements1[z].scrollIntoView(true);
                            return false;
                        }
                    }
                 }  
            } */
        
        }
       return check_form();
        
        
}


// Функція перевірки на заповнення полів
function check_form(){

var checkbox_ids = ['add_1_operator_checkbox',
'add_pid_checkbox',
'add_1_pid_checkbox',
'add_2_pid_checkbox',
'traid_crop_production_checkbox',
'export_crop_production_checkbox',
'crop_production_1_checkbox',
'crop_production_after_checkbox',
'traid_wild_collection_checkbox',
'export_wild_collection_checkbox',
'wild_collection_after_checkbox',
'traid_animal_husbandry_checkbox',
'export_animal_husbandry_checkbox',
'vrh_checkbox',
'poultry_checkbox',
'traid_beekeeping_checkbox',
'export_beekeeping_checkbox',
'traid_aquaculture_checkbox',
'export_aquaculture_checkbox',
'traid_processing_products_for_use_as_food_checkbox',
'export_processing_products_for_use_as_food_checkbox',
'activities_in_food_processing_checkbox',
'wine_industry_checkbox',
'traid_processing_products_for_use_as_feed_checkbox',
'export_processing_products_for_use_as_feed_checkbox',
'traid_growing_seedlings_and_seed_checkbox',
'export_growing_seedlings_and_seed_checkbox',
'growing_seedlings_and_seed_after_checkbox',
'other_2_checkbox',
'other_3_checkbox',
'other_5_checkbox',
'agree_for_first_company'];

for (var i = 0; i < checkbox_ids.length; i++) 
        {
            
        
                var element = document.getElementById(checkbox_ids[i]); 
                var hid_element = document.getElementById(element.name);

                 if(element.checked == true)
            {
                var elements1 = hid_element.getElementsByTagName("*");

                for (var z = 0, len = elements1.length; z < len; z++)
                { 
                    if ( elements1[z].nodeName =='OPTION' || elements1[z].nodeName =='BUTTON' || elements1[z].title == 'new')
                    {
                       // alert(elements1[z].nodeName);
                    }  
                    
                    else
                    {
                    elements1[z].style.borderColor = "inherit";
        
                    if (elements1[z].value =='' )

                        { 

                            alert("Будь ласка заповніть всі поля");
                            
                            elements1[z].style.borderColor = "red";
                            elements1[z].scrollIntoView(true);
                            return false;
                        }
                       
                       
                            
                    }
                 }  
            } 
        }
        alert ("Дякуємо за заявку \r\n очікуйте на відповідь найблищим часом");
   return true;
}

// функція відкриває input_и в таблицях під час загрузки форми якщо вони були відкриті під час створення  
function show_hiden_input_load(cb)
{  
for (var i = 0, len = cb.length; i < len; i++)
    {

        var element = document.getElementById(cb[i]); 
        var imp_element = document.getElementById(element.name);
        if (element.value=='') 
        { 

            imp_element.className = "hidden";
        
        }
        else
        {
            imp_element.className = "";
        
        
        }
    }
}




// функція відкриває DIV під час загрузки форми, якщо вони були відкриті під час створення
function show_hiden_load(cb)
{ 
    for (var i = 0, len = cb.length; i < len; i++)
    {
        var element = document.getElementById(cb[i]); 
        var hid_element = document.getElementById(element.name);

        if(element.checked == true)
        {
            hid_element.style.display = "block";
        }
        else
        {
            hid_element.style.display = "none";
        }
    }
}
// функця для відображення ДІВ при нажатому чекбоксі (Checkbox.name=div.ID)
function show_hiden(cb)
{ 
    var element = document.getElementById(cb.name); 
    if(cb.checked == true)
    {
        element.style.display = "block";
    }
    else
    {
        element.style.display = "none";
    }
}
// функція яка спрацьовує під час загрузки форми і визиває інші функції, також обнуляє змінну для функції контакту з експорту
function on_application_load(){
sessionStorage.clickcount=0;

var checkbox_ids = ['add_1_operator_checkbox',
'add_pid_checkbox',
'add_1_pid_checkbox',
'add_2_pid_checkbox',
'production_crop_production_checkbox',
'traid_crop_production_checkbox',
'export_crop_production_checkbox',
'crop_production_1_checkbox',
'crop_production_after_checkbox',
'production_wild_collection_checkbox',
'traid_wild_collection_checkbox',
'export_wild_collection_checkbox',
'wild_collection_after_checkbox',
'production_animal_husbandry_checkbox',
'traid_animal_husbandry_checkbox',
'export_animal_husbandry_checkbox',
'vrh_checkbox',
'poultry_checkbox',
'production_beekeeping_checkbox',
'traid_beekeeping_checkbox',
'export_beekeeping_checkbox',
'production_aquaculture_checkbox',
'traid_aquaculture_checkbox',
'export_aquaculture_checkbox',
'production_processing_products_for_use_as_food_checkbox',
'traid_processing_products_for_use_as_food_checkbox',
'export_processing_products_for_use_as_food_checkbox',
'activities_in_food_processing_checkbox',
'wine_industry_checkbox',
'production_processing_products_for_use_as_feed_checkbox',
'traid_processing_products_for_use_as_feed_checkbox',
'export_processing_products_for_use_as_feed_checkbox',
'production_growing_seedlings_and_seed_checkbox',
'traid_growing_seedlings_and_seed_checkbox',
'export_growing_seedlings_and_seed_checkbox',
'growing_seedlings_and_seed_after_checkbox',
'other_2_checkbox',
'other_3_checkbox',
'other_5_checkbox'];
show_hiden_load(checkbox_ids);

var input_ids = ['wild_collection_1_1_input',
'wild_collection_1_2_input',
'wild_collection_1_3_input',
'wild_collection_1_4_input',
'wild_collection_1_5_input',
'wild_collection_1_5_input',
'aquaculture_1_1_1_input',
'aquaculture_1_1_2_input',
'aquaculture_3_1_1_input',
'aquaculture_3_1_2_input'];
show_hiden_input_load (input_ids);
}
// функція для відображення Контакта для експорту при нажатому хочаб 1 чекбоксу з експорту
function show_hidden_export(cb, divID){


var div_element = document.getElementById(divID);

if(cb.checked == true)
{
    if (sessionStorage.clickcount)
    {
        sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
    } 
    else 
    {
         sessionStorage.clickcount = 1;
    }
    
}
else
{ 
    if (sessionStorage.clickcount) 
    {
         sessionStorage.clickcount = Number(sessionStorage.clickcount) - 1;
    } 
    else{
       sessionStorage.clickcount=0; 
    }  
}

if (sessionStorage.clickcount && Number(sessionStorage.clickcount))
{
        div_element.style.display = "block";
}
else
{
        div_element.style.display = "none";
}
show_hiden(cb);

}
 

// функця для відображення нового рядка в таблицях при заповнені попереднього 
function show_hiden_input(cb)
{  element = document.getElementById(cb.name);

    div_element = document.getElementById(cb.name);
   if (element.value=='') 
   { 

        div_element.className = "hidden";
        
    }
    else
    {
        div_element.className = "";
        
        
    }
}

// функція 
function strEndsWith(str, suffix) {
    return str.match(suffix+"$")==suffix;
}
// функція
function get_element_ends_with(my_parent, suffix)
{
    var elements = my_parent.getElementsByTagName("*");
    for (var i = 0, len = elements.length; i < len; i++)
     {
        if (elements[i].name && strEndsWith(elements[i].name, suffix))
            return elements[i]; 

    }
    return false;
}
// функція яка копіює інформацію з одного діва в інший де суфікси інпутів однакові
function copy_from(div_name_from, div_name_to, suffixes)
{
     var legal_div = document.getElementById(div_name_from);
     var post_div = document.getElementById(div_name_to);
    for (var i = 0, len = suffixes.length; i < len; i++)
     {
         var current_suffix = suffixes[i];
         var legal_region = get_element_ends_with(legal_div, current_suffix);
         var post_region = get_element_ends_with(post_div, current_suffix);
         if (legal_region && post_region)
         {
             post_region.value = legal_region.value;
         }
     }

}



