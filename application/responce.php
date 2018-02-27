<?php

       

if (!isset($_POST))
{
    die("only works from form");
}

// DataBase
$servername = "localhost";
$username = "osreg";
$password = "UE7hm7Rm";
$dbname ="reg";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// Установка кодировки соединения
mysqli_set_charset($conn,"utf8");


// получени ip  и определение страны


    $ip = $_SERVER["REMOTE_ADDR"];
    

// Экранирование входных данных для БД


$array_for_sql = array (
company_status => mysqli_real_escape_string($conn, $_POST[company_status]  ),
company_name_UA  => mysqli_real_escape_string($conn, $_POST[company_name_UA] ),
company_name_EN  => mysqli_real_escape_string($conn, $_POST[company_name_EN] ),
company_id => mysqli_real_escape_string($conn, $_POST[company_id]  ),
general_manager_name  => mysqli_real_escape_string($conn, $_POST[general_manager_name] ),
general_manager_surname  => mysqli_real_escape_string($conn, $_POST[general_manager_surname] ),
general_manager_phone => mysqli_real_escape_string($conn, $_POST[general_manager_phone]),
general_manager_email => mysqli_real_escape_string($conn, $_POST[general_manager_email]),
responsible_manager_name  => mysqli_real_escape_string($conn, $_POST[responsible_manager_name] ),
responsible_manager_surname  => mysqli_real_escape_string($conn, $_POST[responsible_manager_surname] ),
responsible_manager_phone => mysqli_real_escape_string($conn, $_POST[responsible_manager_phone]),
responsible_manager_email => mysqli_real_escape_string($conn, $_POST[responsible_manager_email]),
finance_manager_name  => mysqli_real_escape_string($conn, $_POST[finance_manager_name] ),
finance_manager_surname  => mysqli_real_escape_string($conn, $_POST[finance_manager_surname] ),
finance_manager_phone => mysqli_real_escape_string($conn, $_POST[finance_manager_phone]),
finance_manager_email => mysqli_real_escape_string($conn, $_POST[finance_manager_email]),
legal_address_country => mysqli_real_escape_string($conn, $_POST[legal_address_country]),
legal_address_region  => mysqli_real_escape_string($conn, $_POST[legal_address_region] ),
legal_address_district => mysqli_real_escape_string($conn, $_POST[legal_address_district]  ),
legal_address_city => mysqli_real_escape_string($conn, $_POST[legal_address_city]  ),
legal_address_index  => mysqli_real_escape_string($conn, $_POST[legal_address_index] ),
legal_address_street  => mysqli_real_escape_string($conn, $_POST[legal_address_street] ),
post_address_country  => mysqli_real_escape_string($conn, $_POST[post_address_country] ),
post_address_region  => mysqli_real_escape_string($conn, $_POST[post_address_region] ),
post_address_district => mysqli_real_escape_string($conn, $_POST[post_address_district]),
post_address_city => mysqli_real_escape_string($conn, $_POST[post_address_city]),
post_address_index => mysqli_real_escape_string($conn, $_POST[post_address_index]  ),
post_address_street  => mysqli_real_escape_string($conn, $_POST[post_address_street] ),
production_address_country => mysqli_real_escape_string($conn, $_POST[production_address_country]  ),
production_address_region => mysqli_real_escape_string($conn, $_POST[production_address_region]),
production_address_district  => mysqli_real_escape_string($conn, $_POST[production_address_district] ),
production_address_city  => mysqli_real_escape_string($conn, $_POST[production_address_city] ),
production_address_index  => mysqli_real_escape_string($conn, $_POST[production_address_index] ),
production_address_street => mysqli_real_escape_string($conn, $_POST[production_address_street]),
company_phone => mysqli_real_escape_string($conn, $_POST[company_phone]),
company_email => mysqli_real_escape_string($conn, $_POST[company_email]),
company_web  => mysqli_real_escape_string($conn, $_POST[company_web] ),
company_consultant => mysqli_real_escape_string($conn, $_POST[company_consultant]  ),
company_consultant_phone  => mysqli_real_escape_string($conn, $_POST[company_consultant_phone] ),
company_consultant_email  => mysqli_real_escape_string($conn, $_POST[company_consultant_email] ),
the_same_company  => mysqli_real_escape_string($conn, $_POST[the_same_company] ),
add_1_operator => mysqli_real_escape_string($conn, $_POST[add_1_operator]  ),
operator_company_status  => mysqli_real_escape_string($conn, $_POST[operator_company_status] ),
operator_company_name_UA  => mysqli_real_escape_string($conn, $_POST[operator_company_name_UA] ),
operator_company_name_EN  => mysqli_real_escape_string($conn, $_POST[operator_company_name_EN] ),
operator_company_id  => mysqli_real_escape_string($conn, $_POST[operator_company_id] ),
operator_general_manager_name => mysqli_real_escape_string($conn, $_POST[operator_general_manager_name]),
operator_general_manager_surname  => mysqli_real_escape_string($conn, $_POST[operator_general_manager_surname] ),
operator_general_manager_phone => mysqli_real_escape_string($conn, $_POST[operator_general_manager_phone]  ),
operator_general_manager_email => mysqli_real_escape_string($conn, $_POST[operator_general_manager_email]  ),
operator_responsible_manager_name => mysqli_real_escape_string($conn, $_POST[operator_responsible_manager_name]),
operator_responsible_manager_surname  => mysqli_real_escape_string($conn, $_POST[operator_responsible_manager_surname] ),
operator_responsible_manager_phone => mysqli_real_escape_string($conn, $_POST[operator_responsible_manager_phone]  ),
operator_responsible_manager_email => mysqli_real_escape_string($conn, $_POST[operator_responsible_manager_email]  ),
operator_legal_address_country => mysqli_real_escape_string($conn, $_POST[operator_legal_address_country]  ),
operator_legal_address_region => mysqli_real_escape_string($conn, $_POST[operator_legal_address_region]),
operator_legal_address_district  => mysqli_real_escape_string($conn, $_POST[operator_legal_address_district] ),
operator_legal_address_city  => mysqli_real_escape_string($conn, $_POST[operator_legal_address_city] ),
operator_legal_address_index  => mysqli_real_escape_string($conn, $_POST[operator_legal_address_index] ),
operator_legal_address_street => mysqli_real_escape_string($conn, $_POST[operator_legal_address_street]),
operator_post_address_country => mysqli_real_escape_string($conn, $_POST[operator_post_address_country]),
operator_post_address_region  => mysqli_real_escape_string($conn, $_POST[operator_post_address_region] ),
operator_post_address_district => mysqli_real_escape_string($conn, $_POST[operator_post_address_district]  ),
operator_post_address_city => mysqli_real_escape_string($conn, $_POST[operator_post_address_city]  ),
operator_post_address_index  => mysqli_real_escape_string($conn, $_POST[operator_post_address_index] ),
operator_post_address_street  => mysqli_real_escape_string($conn, $_POST[operator_post_address_street] ),
operator_production_address_country  => mysqli_real_escape_string($conn, $_POST[operator_production_address_country] ),
operator_production_address_region => mysqli_real_escape_string($conn, $_POST[operator_production_address_region]  ),
operator_production_address_district  => mysqli_real_escape_string($conn, $_POST[operator_production_address_district] ),
operator_production_address_city  => mysqli_real_escape_string($conn, $_POST[operator_production_address_city] ),
operator_production_address_index => mysqli_real_escape_string($conn, $_POST[operator_production_address_index]),
operator_production_address_street => mysqli_real_escape_string($conn, $_POST[operator_production_address_street]  ),
operator_company_phone => mysqli_real_escape_string($conn, $_POST[operator_company_phone]  ),
operator_company_email => mysqli_real_escape_string($conn, $_POST[operator_company_email]  ),
operator_company_web  => mysqli_real_escape_string($conn, $_POST[operator_company_web] ),
add_pid  => mysqli_real_escape_string($conn, $_POST[add_pid] ),
pid_company_status => mysqli_real_escape_string($conn, $_POST[pid_company_status]  ),
pid_company_name_UA  => mysqli_real_escape_string($conn, $_POST[pid_company_name_UA] ),
pid_company_name_EN  => mysqli_real_escape_string($conn, $_POST[pid_company_name_EN] ),
pid_company_id => mysqli_real_escape_string($conn, $_POST[pid_company_id]  ),
pid_general_manager_name  => mysqli_real_escape_string($conn, $_POST[pid_general_manager_name] ),
pid_general_manager_surname  => mysqli_real_escape_string($conn, $_POST[pid_general_manager_surname] ),
pid_general_manager_phone => mysqli_real_escape_string($conn, $_POST[pid_general_manager_phone]),
pid_general_manager_email => mysqli_real_escape_string($conn, $_POST[pid_general_manager_email]),
pid_legal_address_country => mysqli_real_escape_string($conn, $_POST[pid_legal_address_country]),
pid_legal_address_region  => mysqli_real_escape_string($conn, $_POST[pid_legal_address_region] ),
pid_legal_address_district => mysqli_real_escape_string($conn, $_POST[pid_legal_address_district]  ),
pid_legal_address_city => mysqli_real_escape_string($conn, $_POST[pid_legal_address_city]  ),
pid_legal_address_index  => mysqli_real_escape_string($conn, $_POST[pid_legal_address_index] ),
pid_legal_address_street  => mysqli_real_escape_string($conn, $_POST[pid_legal_address_street] ),
pid_post_address_country  => mysqli_real_escape_string($conn, $_POST[pid_post_address_country] ),
pid_post_address_region  => mysqli_real_escape_string($conn, $_POST[pid_post_address_region] ),
pid_post_address_district => mysqli_real_escape_string($conn, $_POST[pid_post_address_district]),
pid_post_address_city => mysqli_real_escape_string($conn, $_POST[pid_post_address_city]),
pid_post_address_index => mysqli_real_escape_string($conn, $_POST[pid_post_address_index]  ),
pid_post_address_street  => mysqli_real_escape_string($conn, $_POST[pid_post_address_street] ),
pid_production_address_country => mysqli_real_escape_string($conn, $_POST[pid_production_address_country]  ),
pid_production_address_region => mysqli_real_escape_string($conn, $_POST[pid_production_address_region]),
pid_production_address_district  => mysqli_real_escape_string($conn, $_POST[pid_production_address_district] ),
pid_production_address_city  => mysqli_real_escape_string($conn, $_POST[pid_production_address_city] ),
pid_production_address_index  => mysqli_real_escape_string($conn, $_POST[pid_production_address_index] ),
pid_production_address_street => mysqli_real_escape_string($conn, $_POST[pid_production_address_street]),
pid_company_phone => mysqli_real_escape_string($conn, $_POST[pid_company_phone]),
pid_company_email => mysqli_real_escape_string($conn, $_POST[pid_company_email]),
pid_company_web  => mysqli_real_escape_string($conn, $_POST[pid_company_web] ),
add_pid_1 => mysqli_real_escape_string($conn, $_POST[add_pid_1]),
pid_1_company_status  => mysqli_real_escape_string($conn, $_POST[pid_1_company_status] ),
pid_1_company_name_UA => mysqli_real_escape_string($conn, $_POST[pid_1_company_name_UA]),
pid_1_company_name_EN => mysqli_real_escape_string($conn, $_POST[pid_1_company_name_EN]),
pid_1_company_id  => mysqli_real_escape_string($conn, $_POST[pid_1_company_id] ),
pid_1_general_manager_name => mysqli_real_escape_string($conn, $_POST[pid_1_general_manager_name]  ),
pid_1_general_manager_surname => mysqli_real_escape_string($conn, $_POST[pid_1_general_manager_surname]),
pid_1_general_manager_phone  => mysqli_real_escape_string($conn, $_POST[pid_1_general_manager_phone] ),
pid_1_general_manager_email  => mysqli_real_escape_string($conn, $_POST[pid_1_general_manager_email] ),
pid_1_legal_address_country  => mysqli_real_escape_string($conn, $_POST[pid_1_legal_address_country] ),
pid_1_legal_address_region => mysqli_real_escape_string($conn, $_POST[pid_1_legal_address_region]  ),
pid_1_legal_address_district  => mysqli_real_escape_string($conn, $_POST[pid_1_legal_address_district] ),
pid_1_legal_address_city  => mysqli_real_escape_string($conn, $_POST[pid_1_legal_address_city] ),
pid_1_legal_address_index => mysqli_real_escape_string($conn, $_POST[pid_1_legal_address_index]),
pid_1_legal_address_street => mysqli_real_escape_string($conn, $_POST[pid_1_legal_address_street]  ),
pid_1_post_address_country => mysqli_real_escape_string($conn, $_POST[pid_1_post_address_country]  ),
pid_1_post_address_region => mysqli_real_escape_string($conn, $_POST[pid_1_post_address_region]),
pid_1_post_address_district  => mysqli_real_escape_string($conn, $_POST[pid_1_post_address_district] ),
pid_1_post_address_city  => mysqli_real_escape_string($conn, $_POST[pid_1_post_address_city] ),
pid_1_post_address_index  => mysqli_real_escape_string($conn, $_POST[pid_1_post_address_index] ),
pid_1_post_address_street => mysqli_real_escape_string($conn, $_POST[pid_1_post_address_street]),
pid_1_production_address_country  => mysqli_real_escape_string($conn, $_POST[pid_1_production_address_country] ),
pid_1_production_address_region  => mysqli_real_escape_string($conn, $_POST[pid_1_production_address_region] ),
pid_1_production_address_district => mysqli_real_escape_string($conn, $_POST[pid_1_production_address_district]),
pid_1_production_address_city => mysqli_real_escape_string($conn, $_POST[pid_1_production_address_city]),
pid_1_production_address_index => mysqli_real_escape_string($conn, $_POST[pid_1_production_address_index]  ),
pid_1_production_address_street  => mysqli_real_escape_string($conn, $_POST[pid_1_production_address_street] ),
pid_1_company_phone  => mysqli_real_escape_string($conn, $_POST[pid_1_company_phone] ),
pid_1_company_email  => mysqli_real_escape_string($conn, $_POST[pid_1_company_email] ),
pid_1_company_web => mysqli_real_escape_string($conn, $_POST[pid_1_company_web]),
add_pid_2 => mysqli_real_escape_string($conn, $_POST[add_pid_2]),
pid_2_company_status  => mysqli_real_escape_string($conn, $_POST[pid_2_company_status] ),
pid_2_company_name_UA => mysqli_real_escape_string($conn, $_POST[pid_2_company_name_UA]),
pid_2_company_name_EN => mysqli_real_escape_string($conn, $_POST[pid_2_company_name_EN]),
pid_2_company_id  => mysqli_real_escape_string($conn, $_POST[pid_2_company_id] ),
pid_2_general_manager_name => mysqli_real_escape_string($conn, $_POST[pid_2_general_manager_name]  ),
pid_2_general_manager_surname => mysqli_real_escape_string($conn, $_POST[pid_2_general_manager_surname]),
pid_2_general_manager_phone  => mysqli_real_escape_string($conn, $_POST[pid_2_general_manager_phone] ),
pid_2_general_manager_email  => mysqli_real_escape_string($conn, $_POST[pid_2_general_manager_email] ),
pid_2_legal_address_country  => mysqli_real_escape_string($conn, $_POST[pid_2_legal_address_country] ),
pid_2_legal_address_region => mysqli_real_escape_string($conn, $_POST[pid_2_legal_address_region]  ),
pid_2_legal_address_district  => mysqli_real_escape_string($conn, $_POST[pid_2_legal_address_district] ),
pid_2_legal_address_city  => mysqli_real_escape_string($conn, $_POST[pid_2_legal_address_city] ),
pid_2_legal_address_index => mysqli_real_escape_string($conn, $_POST[pid_2_legal_address_index]),
pid_2_legal_address_street => mysqli_real_escape_string($conn, $_POST[pid_2_legal_address_street]  ),
pid_2_post_address_country => mysqli_real_escape_string($conn, $_POST[pid_2_post_address_country]  ),
pid_2_post_address_region => mysqli_real_escape_string($conn, $_POST[pid_2_post_address_region]),
pid_2_post_address_district  => mysqli_real_escape_string($conn, $_POST[pid_2_post_address_district] ),
pid_2_post_address_city  => mysqli_real_escape_string($conn, $_POST[pid_2_post_address_city] ),
pid_2_post_address_index  => mysqli_real_escape_string($conn, $_POST[pid_2_post_address_index] ),
pid_2_post_address_street => mysqli_real_escape_string($conn, $_POST[pid_2_post_address_street]),
pid_2_production_address_country  => mysqli_real_escape_string($conn, $_POST[pid_2_production_address_country] ),
pid_2_production_address_region  => mysqli_real_escape_string($conn, $_POST[pid_2_production_address_region] ),
pid_2_production_address_district => mysqli_real_escape_string($conn, $_POST[pid_2_production_address_district]),
pid_2_production_address_city => mysqli_real_escape_string($conn, $_POST[pid_2_production_address_city]),
pid_2_production_address_index => mysqli_real_escape_string($conn, $_POST[pid_2_production_address_index]  ),
pid_2_production_address_street  => mysqli_real_escape_string($conn, $_POST[pid_2_production_address_street] ),
pid_2_company_phone  => mysqli_real_escape_string($conn, $_POST[pid_2_company_phone] ),
pid_2_company_email  => mysqli_real_escape_string($conn, $_POST[pid_2_company_email] ),
pid_2_company_web => mysqli_real_escape_string($conn, $_POST[pid_2_company_web]),
production_crop_production => mysqli_real_escape_string($conn, $_POST[production_crop_production]  ),
traid_crop_production => mysqli_real_escape_string($conn, $_POST[traid_crop_production]),
export_crop_production => mysqli_real_escape_string($conn, $_POST[export_crop_production]  ),
crop_production_1 => mysqli_real_escape_string($conn, $_POST[crop_production_1]),
crop_production_size  => mysqli_real_escape_string($conn, $_POST[crop_production_size] ),
crop_production_organic_size  => mysqli_real_escape_string($conn, $_POST[crop_production_organic_size] ),
crop_production_organic_1_size => mysqli_real_escape_string($conn, $_POST[crop_production_organic_1_size]  ),
crop_production_organic_2_size => mysqli_real_escape_string($conn, $_POST[crop_production_organic_2_size]  ),
crop_production_organic_3_size => mysqli_real_escape_string($conn, $_POST[crop_production_organic_3_size]  ),
crop_production_organic_4_size => mysqli_real_escape_string($conn, $_POST[crop_production_organic_4_size]  ),
crop_production_after => mysqli_real_escape_string($conn, $_POST[crop_production_after]),
crop_production_after_about_a => mysqli_real_escape_string($conn, $_POST[crop_production_after_about_a]),
traid_crop_production_b  => mysqli_real_escape_string($conn, $_POST[traid_crop_production_b] ),
traid_crop_production_general => mysqli_real_escape_string($conn, $_POST[traid_crop_production_general]),
export_crop_production_b  => mysqli_real_escape_string($conn, $_POST[export_crop_production_b] ),
export_crop_production_general => mysqli_real_escape_string($conn, $_POST[export_crop_production_general]  ),
export_crop_production_wait  => mysqli_real_escape_string($conn, $_POST[export_crop_production_wait] ),
import_crop_production_wait  => mysqli_real_escape_string($conn, $_POST[import_crop_production_wait] ),
production_wild_collection => mysqli_real_escape_string($conn, $_POST[production_wild_collection]  ),
traid_wild_collection => mysqli_real_escape_string($conn, $_POST[traid_wild_collection]),
export_wild_collection => mysqli_real_escape_string($conn, $_POST[export_wild_collection]  ),
wild_collection_size  => mysqli_real_escape_string($conn, $_POST[wild_collection_size] ),
wild_organic_collection_size  => mysqli_real_escape_string($conn, $_POST[wild_organic_collection_size] ),
wild_collection_1_1  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_1] ),
wild_collection_2_1  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_1] ),
wild_collection_3_1  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_1] ),
wild_collection_4_1  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_1] ),
wild_collection_1_2  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_2] ),
wild_collection_2_2  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_2] ),
wild_collection_3_2  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_2] ),
wild_collection_4_2  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_2] ),
wild_collection_1_3  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_3] ),
wild_collection_2_3  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_3] ),
wild_collection_3_3  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_3] ),
wild_collection_4_3  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_3] ),
wild_collection_1_4  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_4] ),
wild_collection_2_4  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_4] ),
wild_collection_3_4  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_4] ),
wild_collection_4_4  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_4] ),
wild_collection_1_5  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_5] ),
wild_collection_2_5  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_5] ),
wild_collection_3_5  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_5] ),
wild_collection_4_5  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_5] ),
wild_collection_1_6  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_6] ),
wild_collection_2_6  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_6] ),
wild_collection_3_6  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_6] ),
wild_collection_4_6  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_6] ),
wild_collection_1_7  => mysqli_real_escape_string($conn, $_POST[wild_collection_1_7] ),
wild_collection_2_7  => mysqli_real_escape_string($conn, $_POST[wild_collection_2_7] ),
wild_collection_3_7  => mysqli_real_escape_string($conn, $_POST[wild_collection_3_7] ),
wild_collection_4_7  => mysqli_real_escape_string($conn, $_POST[wild_collection_4_7] ),
wild_collection_after => mysqli_real_escape_string($conn, $_POST[wild_collection_after]),
wild_collection_after_about_b => mysqli_real_escape_string($conn, $_POST[wild_collection_after_about_b]),
traid_wild_collection_b  => mysqli_real_escape_string($conn, $_POST[traid_wild_collection_b] ),
traid_wild_collection_general => mysqli_real_escape_string($conn, $_POST[traid_wild_collection_general]),
export_wild_collection_b  => mysqli_real_escape_string($conn, $_POST[export_wild_collection_b] ),
export_wild_collection_general => mysqli_real_escape_string($conn, $_POST[export_wild_collection_general]  ),
export_wild_collection_wait  => mysqli_real_escape_string($conn, $_POST[export_wild_collection_wait] ),
import_wild_collection_wait  => mysqli_real_escape_string($conn, $_POST[import_wild_collection_wait] ),
production_animal_husbandry  => mysqli_real_escape_string($conn, $_POST[production_animal_husbandry] ),
traid_animal_husbandry => mysqli_real_escape_string($conn, $_POST[traid_animal_husbandry]  ),
export_animal_husbandry  => mysqli_real_escape_string($conn, $_POST[export_animal_husbandry] ),
vrh  => mysqli_real_escape_string($conn, $_POST[vrh] ),
vrh_cow  => mysqli_real_escape_string($conn, $_POST[vrh_cow] ),
else_vrh  => mysqli_real_escape_string($conn, $_POST[else_vrh] ),
pinck => mysqli_real_escape_string($conn, $_POST[pinck]),
goat  => mysqli_real_escape_string($conn, $_POST[goat] ),
sheep => mysqli_real_escape_string($conn, $_POST[sheep]),
poultry  => mysqli_real_escape_string($conn, $_POST[poultry] ),
chickens  => mysqli_real_escape_string($conn, $_POST[chickens] ),
turkeys  => mysqli_real_escape_string($conn, $_POST[turkeys] ),
ducks => mysqli_real_escape_string($conn, $_POST[ducks]),
geese => mysqli_real_escape_string($conn, $_POST[geese]),
animal_husbandry_else => mysqli_real_escape_string($conn, $_POST[animal_husbandry_else]),
traid_animal_husbandry_b  => mysqli_real_escape_string($conn, $_POST[traid_animal_husbandry_b] ),
traid_animal_husbandry_general => mysqli_real_escape_string($conn, $_POST[traid_animal_husbandry_general]  ),
export_animal_husbandry_b => mysqli_real_escape_string($conn, $_POST[export_animal_husbandry_b]),
export_animal_husbandry_general  => mysqli_real_escape_string($conn, $_POST[export_animal_husbandry_general] ),
export_animal_husbandry_wait  => mysqli_real_escape_string($conn, $_POST[export_animal_husbandry_wait] ),
import_animal_husbandry_wait  => mysqli_real_escape_string($conn, $_POST[import_animal_husbandry_wait] ),
production_beekeeping => mysqli_real_escape_string($conn, $_POST[production_beekeeping]),
traid_beekeeping  => mysqli_real_escape_string($conn, $_POST[traid_beekeeping] ),
export_beekeeping => mysqli_real_escape_string($conn, $_POST[export_beekeeping]),
beekeeping_all => mysqli_real_escape_string($conn, $_POST[beekeeping_all]  ),
beekeeping_all_local  => mysqli_real_escape_string($conn, $_POST[beekeeping_all_local] ),
beekeeping_all_migratory  => mysqli_real_escape_string($conn, $_POST[beekeeping_all_migratory] ),
beekeeping_all_migratory_1 => mysqli_real_escape_string($conn, $_POST[beekeeping_all_migratory_1]  ),
beekeeping_1_1 => mysqli_real_escape_string($conn, $_POST[beekeeping_1_1]  ),
beekeeping_2_1 => mysqli_real_escape_string($conn, $_POST[beekeeping_2_1]  ),
beekeeping_3_1 => mysqli_real_escape_string($conn, $_POST[beekeeping_3_1]  ),
beekeeping_4_1 => mysqli_real_escape_string($conn, $_POST[beekeeping_4_1]  ),
beekeeping_5_1 => mysqli_real_escape_string($conn, $_POST[beekeeping_5_1]  ),
beekeeping_1_2 => mysqli_real_escape_string($conn, $_POST[beekeeping_1_2]  ),
beekeeping_2_2 => mysqli_real_escape_string($conn, $_POST[beekeeping_2_2]  ),
beekeeping_3_2 => mysqli_real_escape_string($conn, $_POST[beekeeping_3_2]  ),
beekeeping_4_2 => mysqli_real_escape_string($conn, $_POST[beekeeping_4_2]  ),
beekeeping_5_2 => mysqli_real_escape_string($conn, $_POST[beekeeping_5_2]  ),
beekeeping_1_3 => mysqli_real_escape_string($conn, $_POST[beekeeping_1_3]  ),
beekeeping_2_3 => mysqli_real_escape_string($conn, $_POST[beekeeping_2_3]  ),
beekeeping_3_3 => mysqli_real_escape_string($conn, $_POST[beekeeping_3_3]  ),
beekeeping_4_3 => mysqli_real_escape_string($conn, $_POST[beekeeping_4_3]  ),
beekeeping_5_3 => mysqli_real_escape_string($conn, $_POST[beekeeping_5_3]  ),
beekeeping_1_4 => mysqli_real_escape_string($conn, $_POST[beekeeping_1_4]  ),
beekeeping_2_4 => mysqli_real_escape_string($conn, $_POST[beekeeping_2_4]  ),
beekeeping_3_4 => mysqli_real_escape_string($conn, $_POST[beekeeping_3_4]  ),
beekeeping_4_4 => mysqli_real_escape_string($conn, $_POST[beekeeping_4_4]  ),
beekeeping_5_4 => mysqli_real_escape_string($conn, $_POST[beekeeping_5_4]  ),
traid_beekeeping_b => mysqli_real_escape_string($conn, $_POST[traid_beekeeping_b]  ),
traid_beekeeping_general  => mysqli_real_escape_string($conn, $_POST[traid_beekeeping_general] ),
export_beekeeping_b  => mysqli_real_escape_string($conn, $_POST[export_beekeeping_b] ),
export_beekeeping_general => mysqli_real_escape_string($conn, $_POST[export_beekeeping_general]),
export_beekeeping_wait => mysqli_real_escape_string($conn, $_POST[export_beekeeping_wait]  ),
import_beekeeping_wait => mysqli_real_escape_string($conn, $_POST[import_beekeeping_wait]  ),
production_aquaculture => mysqli_real_escape_string($conn, $_POST[production_aquaculture]  ),
traid_aquaculture => mysqli_real_escape_string($conn, $_POST[traid_aquaculture]),
export_aquaculture => mysqli_real_escape_string($conn, $_POST[export_aquaculture]  ),
aquaculture_size  => mysqli_real_escape_string($conn, $_POST[aquaculture_size] ),
aquaculture_organic_size  => mysqli_real_escape_string($conn, $_POST[aquaculture_organic_size] ),
aquaculture_size_around  => mysqli_real_escape_string($conn, $_POST[aquaculture_size_around] ),
aquaculture_1_1_1 => mysqli_real_escape_string($conn, $_POST[aquaculture_1_1_1]),
aquaculture_1_2_1 => mysqli_real_escape_string($conn, $_POST[aquaculture_1_2_1]),
aquaculture_1_1_2 => mysqli_real_escape_string($conn, $_POST[aquaculture_1_1_2]),
aquaculture_1_2_2 => mysqli_real_escape_string($conn, $_POST[aquaculture_1_2_2]),
aquaculture_1_1_3 => mysqli_real_escape_string($conn, $_POST[aquaculture_1_1_3]),
aquaculture_1_2_3 => mysqli_real_escape_string($conn, $_POST[aquaculture_1_2_3]),
aquaculture_3_1_1 => mysqli_real_escape_string($conn, $_POST[aquaculture_3_1_1]),
aquaculture_3_2_1 => mysqli_real_escape_string($conn, $_POST[aquaculture_3_2_1]),
aquaculture_3_1_2 => mysqli_real_escape_string($conn, $_POST[aquaculture_3_1_2]),
aquaculture_3_2_2 => mysqli_real_escape_string($conn, $_POST[aquaculture_3_2_2]),
aquaculture_3_1_3 => mysqli_real_escape_string($conn, $_POST[aquaculture_3_1_3]),
aquaculture_3_2_3 => mysqli_real_escape_string($conn, $_POST[aquaculture_3_2_3]),
traid_aquaculture_b  => mysqli_real_escape_string($conn, $_POST[traid_aquaculture_b] ),
traid_aquaculture_general => mysqli_real_escape_string($conn, $_POST[traid_aquaculture_general]),
export_aquaculture_b  => mysqli_real_escape_string($conn, $_POST[export_aquaculture_b] ),
export_aquaculture_general => mysqli_real_escape_string($conn, $_POST[export_aquaculture_general]  ),
export_aquaculture_wait  => mysqli_real_escape_string($conn, $_POST[export_aquaculture_wait] ),
import_aquaculture_wait  => mysqli_real_escape_string($conn, $_POST[import_aquaculture_wait] ),
production_processing_products_for_use_as_food => mysqli_real_escape_string($conn, $_POST[production_processing_products_for_use_as_food]  ),
traid_processing_products_for_use_as_food => mysqli_real_escape_string($conn, $_POST[traid_processing_products_for_use_as_food]),
export_processing_products_for_use_as_food => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_food]  ),
activities_in_food_processing => mysqli_real_escape_string($conn, $_POST[activities_in_food_processing]),
food_general  => mysqli_real_escape_string($conn, $_POST[food_general] ),
food_for_certificationt  => mysqli_real_escape_string($conn, $_POST[food_for_certificationt] ),
food_emploe  => mysqli_real_escape_string($conn, $_POST[food_emploe] ),
wine_industry => mysqli_real_escape_string($conn, $_POST[wine_industry]),
wine_industry_general => mysqli_real_escape_string($conn, $_POST[wine_industry_general]),
wine_industry_certificationt  => mysqli_real_escape_string($conn, $_POST[wine_industry_certificationt] ),
wine_industry_emploe  => mysqli_real_escape_string($conn, $_POST[wine_industry_emploe] ),
traid_processing_products_for_use_as_food_b  => mysqli_real_escape_string($conn, $_POST[traid_processing_products_for_use_as_food_b] ),
traid_processing_products_for_use_as_food_general => mysqli_real_escape_string($conn, $_POST[traid_processing_products_for_use_as_food_general]),
export_processing_products_for_use_as_food_b  => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_food_b] ),
export_processing_products_for_use_as_food_general => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_food_general]  ),
export_processing_products_for_use_as_food_wait  => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_food_wait] ),
import_processing_products_for_use_as_food_wait  => mysqli_real_escape_string($conn, $_POST[import_processing_products_for_use_as_food_wait] ),
production_processing_products_for_use_as_feed => mysqli_real_escape_string($conn, $_POST[production_processing_products_for_use_as_feed]  ),
traid_processing_products_for_use_as_feed => mysqli_real_escape_string($conn, $_POST[traid_processing_products_for_use_as_feed]),
xport_processing_products_for_use_as_feed => mysqli_real_escape_string($conn, $_POST[xport_processing_products_for_use_as_feed]),
feed_general  => mysqli_real_escape_string($conn, $_POST[feed_general] ),
feed_for_certificationt  => mysqli_real_escape_string($conn, $_POST[feed_for_certificationt] ),
feed_emploe  => mysqli_real_escape_string($conn, $_POST[feed_emploe] ),
traid_processing_products_for_use_as_feed_b  => mysqli_real_escape_string($conn, $_POST[traid_processing_products_for_use_as_feed_b] ),
traid_processing_products_for_use_as_feed_general => mysqli_real_escape_string($conn, $_POST[traid_processing_products_for_use_as_feed_general]),
export_processing_products_for_use_as_feed_b  => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_feed_b] ),
export_processing_products_for_use_as_feed_general => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_feed_general]  ),
export_processing_products_for_use_as_feed_wait  => mysqli_real_escape_string($conn, $_POST[export_processing_products_for_use_as_feed_wait] ),
import_processing_products_for_use_as_feed_wait  => mysqli_real_escape_string($conn, $_POST[import_processing_products_for_use_as_feed_wait] ),
production_growing_seedlings_and_seed => mysqli_real_escape_string($conn, $_POST[production_growing_seedlings_and_seed]),
traid_growing_seedlings_and_seed  => mysqli_real_escape_string($conn, $_POST[traid_growing_seedlings_and_seed] ),
export_growing_seedlings_and_seed => mysqli_real_escape_string($conn, $_POST[export_growing_seedlings_and_seed]),
crop_production_F_size => mysqli_real_escape_string($conn, $_POST[crop_production_F_size]  ),
crop_production_organic_F_size => mysqli_real_escape_string($conn, $_POST[crop_production_organic_F_size]  ),
growing_seedlings_and_seed_after  => mysqli_real_escape_string($conn, $_POST[growing_seedlings_and_seed_after] ),
growing_seedlings_and_seed_after_about_b  => mysqli_real_escape_string($conn, $_POST[growing_seedlings_and_seed_after_about_b] ),
traid_growing_seedlings_and_seed_b => mysqli_real_escape_string($conn, $_POST[traid_growing_seedlings_and_seed_b]  ),
traid_growing_seedlings_and_seed_general  => mysqli_real_escape_string($conn, $_POST[traid_growing_seedlings_and_seed_general] ),
export_growing_seedlings_and_seed_b  => mysqli_real_escape_string($conn, $_POST[export_growing_seedlings_and_seed_b] ),
export_growing_seedlings_and_seed_general => mysqli_real_escape_string($conn, $_POST[export_growing_seedlings_and_seed_general]),
export_growing_seedlings_and_seed_wait => mysqli_real_escape_string($conn, $_POST[export_growing_seedlings_and_seed_wait]  ),
import_growing_seedlings_and_seed_wait => mysqli_real_escape_string($conn, $_POST[import_growing_seedlings_and_seed_wait]  ),
export1_manager_for_all_name  => mysqli_real_escape_string($conn, $_POST[export1_manager_for_all_name] ),
export1_manager_for_all_surname  => mysqli_real_escape_string($conn, $_POST[export1_manager_for_all_surname] ),
export1_manager_for_all_phone => mysqli_real_escape_string($conn, $_POST[export1_manager_for_all_phone]),
export1_manager_for_all_email => mysqli_real_escape_string($conn, $_POST[export1_manager_for_all_email]),
standard_eu  => mysqli_real_escape_string($conn, $_POST[standard_eu] ),
standard_nop  => mysqli_real_escape_string($conn, $_POST[standard_nop] ),
standard_jas  => mysqli_real_escape_string($conn, $_POST[standard_jas] ),
standard_bs  => mysqli_real_escape_string($conn, $_POST[standard_bs] ),
standard_krav => mysqli_real_escape_string($conn, $_POST[standard_krav]),
standard_naturland => mysqli_real_escape_string($conn, $_POST[standard_naturland]  ),
agree_p  => mysqli_real_escape_string($conn, $_POST[agree_p] )
);














// // Экранирование входных данных для формы. htmlspecialchars - Преобразует специальные символы в HTML сущности
$_POST[company_status]= htmlspecialchars ($_POST[company_status]  );
$_POST[company_name_UA]  = htmlspecialchars ($_POST[company_name_UA] );
$_POST[company_name_EN]  = htmlspecialchars ($_POST[company_name_EN] );
$_POST[company_id]= htmlspecialchars ($_POST[company_id]  );
$_POST[general_manager_name]  = htmlspecialchars ($_POST[general_manager_name] );
$_POST[general_manager_surname]  = htmlspecialchars ($_POST[general_manager_surname] );
$_POST[general_manager_phone] = htmlspecialchars ($_POST[general_manager_phone]);
$_POST[general_manager_email] = htmlspecialchars ($_POST[general_manager_email]);
$_POST[responsible_manager_name]  = htmlspecialchars ($_POST[responsible_manager_name] );
$_POST[responsible_manager_surname]  = htmlspecialchars ($_POST[responsible_manager_surname] );
$_POST[responsible_manager_phone] = htmlspecialchars ($_POST[responsible_manager_phone]);
$_POST[responsible_manager_email] = htmlspecialchars ($_POST[responsible_manager_email]);
$_POST[finance_manager_name]  = htmlspecialchars ($_POST[finance_manager_name] );
$_POST[finance_manager_surname]  = htmlspecialchars ($_POST[finance_manager_surname] );
$_POST[finance_manager_phone] = htmlspecialchars ($_POST[finance_manager_phone]);
$_POST[finance_manager_email] = htmlspecialchars ($_POST[finance_manager_email]);
$_POST[legal_address_country] = htmlspecialchars ($_POST[legal_address_country]);
$_POST[legal_address_region]  = htmlspecialchars ($_POST[legal_address_region] );
$_POST[legal_address_district]= htmlspecialchars ($_POST[legal_address_district]  );
$_POST[legal_address_city]= htmlspecialchars ($_POST[legal_address_city]  );
$_POST[legal_address_index]  = htmlspecialchars ($_POST[legal_address_index] );
$_POST[legal_address_street]  = htmlspecialchars ($_POST[legal_address_street] );
$_POST[post_address_country]  = htmlspecialchars ($_POST[post_address_country] );
$_POST[post_address_region]  = htmlspecialchars ($_POST[post_address_region] );
$_POST[post_address_district] = htmlspecialchars ($_POST[post_address_district]);
$_POST[post_address_city] = htmlspecialchars ($_POST[post_address_city]);
$_POST[post_address_index]= htmlspecialchars ($_POST[post_address_index]  );
$_POST[post_address_street]  = htmlspecialchars ($_POST[post_address_street] );
$_POST[production_address_country]= htmlspecialchars ($_POST[production_address_country]  );
$_POST[production_address_region] = htmlspecialchars ($_POST[production_address_region]);
$_POST[production_address_district]  = htmlspecialchars ($_POST[production_address_district] );
$_POST[production_address_city]  = htmlspecialchars ($_POST[production_address_city] );
$_POST[production_address_index]  = htmlspecialchars ($_POST[production_address_index] );
$_POST[production_address_street] = htmlspecialchars ($_POST[production_address_street]);
$_POST[company_phone] = htmlspecialchars ($_POST[company_phone]);
$_POST[company_email] = htmlspecialchars ($_POST[company_email]);
$_POST[company_web]  = htmlspecialchars ($_POST[company_web] );
$_POST[company_consultant]= htmlspecialchars ($_POST[company_consultant]  );
$_POST[company_consultant_phone]  = htmlspecialchars ($_POST[company_consultant_phone] );
$_POST[company_consultant_email]  = htmlspecialchars ($_POST[company_consultant_email] );
$_POST[the_same_company]  = htmlspecialchars ($_POST[the_same_company] );
$_POST[add_1_operator]= htmlspecialchars ($_POST[add_1_operator]  );
$_POST[operator_company_status]  = htmlspecialchars ($_POST[operator_company_status] );
$_POST[operator_company_name_UA]  = htmlspecialchars ($_POST[operator_company_name_UA] );
$_POST[operator_company_name_EN]  = htmlspecialchars ($_POST[operator_company_name_EN] );
$_POST[operator_company_id]  = htmlspecialchars ($_POST[operator_company_id] );
$_POST[operator_general_manager_name] = htmlspecialchars ($_POST[operator_general_manager_name]);
$_POST[operator_general_manager_surname]  = htmlspecialchars ($_POST[operator_general_manager_surname] );
$_POST[operator_general_manager_phone]= htmlspecialchars ($_POST[operator_general_manager_phone]  );
$_POST[operator_general_manager_email]= htmlspecialchars ($_POST[operator_general_manager_email]  );
$_POST[operator_responsible_manager_name] = htmlspecialchars ($_POST[operator_responsible_manager_name]);
$_POST[operator_responsible_manager_surname]  = htmlspecialchars ($_POST[operator_responsible_manager_surname] );
$_POST[operator_responsible_manager_phone]= htmlspecialchars ($_POST[operator_responsible_manager_phone]  );
$_POST[operator_responsible_manager_email]= htmlspecialchars ($_POST[operator_responsible_manager_email]  );
$_POST[operator_legal_address_country]= htmlspecialchars ($_POST[operator_legal_address_country]  );
$_POST[operator_legal_address_region] = htmlspecialchars ($_POST[operator_legal_address_region]);
$_POST[operator_legal_address_district]  = htmlspecialchars ($_POST[operator_legal_address_district] );
$_POST[operator_legal_address_city]  = htmlspecialchars ($_POST[operator_legal_address_city] );
$_POST[operator_legal_address_index]  = htmlspecialchars ($_POST[operator_legal_address_index] );
$_POST[operator_legal_address_street] = htmlspecialchars ($_POST[operator_legal_address_street]);
$_POST[operator_post_address_country] = htmlspecialchars ($_POST[operator_post_address_country]);
$_POST[operator_post_address_region]  = htmlspecialchars ($_POST[operator_post_address_region] );
$_POST[operator_post_address_district]= htmlspecialchars ($_POST[operator_post_address_district]  );
$_POST[operator_post_address_city]= htmlspecialchars ($_POST[operator_post_address_city]  );
$_POST[operator_post_address_index]  = htmlspecialchars ($_POST[operator_post_address_index] );
$_POST[operator_post_address_street]  = htmlspecialchars ($_POST[operator_post_address_street] );
$_POST[operator_production_address_country]  = htmlspecialchars ($_POST[operator_production_address_country] );
$_POST[operator_production_address_region]= htmlspecialchars ($_POST[operator_production_address_region]  );
$_POST[operator_production_address_district]  = htmlspecialchars ($_POST[operator_production_address_district] );
$_POST[operator_production_address_city]  = htmlspecialchars ($_POST[operator_production_address_city] );
$_POST[operator_production_address_index] = htmlspecialchars ($_POST[operator_production_address_index]);
$_POST[operator_production_address_street]= htmlspecialchars ($_POST[operator_production_address_street]  );
$_POST[operator_company_phone]= htmlspecialchars ($_POST[operator_company_phone]  );
$_POST[operator_company_email]= htmlspecialchars ($_POST[operator_company_email]  );
$_POST[operator_company_web]  = htmlspecialchars ($_POST[operator_company_web] );
$_POST[add_pid]  = htmlspecialchars ($_POST[add_pid] );
$_POST[pid_company_status]= htmlspecialchars ($_POST[pid_company_status]  );
$_POST[pid_company_name_UA]  = htmlspecialchars ($_POST[pid_company_name_UA] );
$_POST[pid_company_name_EN]  = htmlspecialchars ($_POST[pid_company_name_EN] );
$_POST[pid_company_id]= htmlspecialchars ($_POST[pid_company_id]  );
$_POST[pid_general_manager_name]  = htmlspecialchars ($_POST[pid_general_manager_name] );
$_POST[pid_general_manager_surname]  = htmlspecialchars ($_POST[pid_general_manager_surname] );
$_POST[pid_general_manager_phone] = htmlspecialchars ($_POST[pid_general_manager_phone]);
$_POST[pid_general_manager_email] = htmlspecialchars ($_POST[pid_general_manager_email]);
$_POST[pid_legal_address_country] = htmlspecialchars ($_POST[pid_legal_address_country]);
$_POST[pid_legal_address_region]  = htmlspecialchars ($_POST[pid_legal_address_region] );
$_POST[pid_legal_address_district]= htmlspecialchars ($_POST[pid_legal_address_district]  );
$_POST[pid_legal_address_city]= htmlspecialchars ($_POST[pid_legal_address_city]  );
$_POST[pid_legal_address_index]  = htmlspecialchars ($_POST[pid_legal_address_index] );
$_POST[pid_legal_address_street]  = htmlspecialchars ($_POST[pid_legal_address_street] );
$_POST[pid_post_address_country]  = htmlspecialchars ($_POST[pid_post_address_country] );
$_POST[pid_post_address_region]  = htmlspecialchars ($_POST[pid_post_address_region] );
$_POST[pid_post_address_district] = htmlspecialchars ($_POST[pid_post_address_district]);
$_POST[pid_post_address_city] = htmlspecialchars ($_POST[pid_post_address_city]);
$_POST[pid_post_address_index]= htmlspecialchars ($_POST[pid_post_address_index]  );
$_POST[pid_post_address_street]  = htmlspecialchars ($_POST[pid_post_address_street] );
$_POST[pid_production_address_country]= htmlspecialchars ($_POST[pid_production_address_country]  );
$_POST[pid_production_address_region] = htmlspecialchars ($_POST[pid_production_address_region]);
$_POST[pid_production_address_district]  = htmlspecialchars ($_POST[pid_production_address_district] );
$_POST[pid_production_address_city]  = htmlspecialchars ($_POST[pid_production_address_city] );
$_POST[pid_production_address_index]  = htmlspecialchars ($_POST[pid_production_address_index] );
$_POST[pid_production_address_street] = htmlspecialchars ($_POST[pid_production_address_street]);
$_POST[pid_company_phone] = htmlspecialchars ($_POST[pid_company_phone]);
$_POST[pid_company_email] = htmlspecialchars ($_POST[pid_company_email]);
$_POST[pid_company_web]  = htmlspecialchars ($_POST[pid_company_web] );
$_POST[add_pid_1] = htmlspecialchars ($_POST[add_pid_1]);
$_POST[pid_1_company_status]  = htmlspecialchars ($_POST[pid_1_company_status] );
$_POST[pid_1_company_name_UA] = htmlspecialchars ($_POST[pid_1_company_name_UA]);
$_POST[pid_1_company_name_EN] = htmlspecialchars ($_POST[pid_1_company_name_EN]);
$_POST[pid_1_company_id]  = htmlspecialchars ($_POST[pid_1_company_id] );
$_POST[pid_1_general_manager_name]= htmlspecialchars ($_POST[pid_1_general_manager_name]  );
$_POST[pid_1_general_manager_surname] = htmlspecialchars ($_POST[pid_1_general_manager_surname]);
$_POST[pid_1_general_manager_phone]  = htmlspecialchars ($_POST[pid_1_general_manager_phone] );
$_POST[pid_1_general_manager_email]  = htmlspecialchars ($_POST[pid_1_general_manager_email] );
$_POST[pid_1_legal_address_country]  = htmlspecialchars ($_POST[pid_1_legal_address_country] );
$_POST[pid_1_legal_address_region]= htmlspecialchars ($_POST[pid_1_legal_address_region]  );
$_POST[pid_1_legal_address_district]  = htmlspecialchars ($_POST[pid_1_legal_address_district] );
$_POST[pid_1_legal_address_city]  = htmlspecialchars ($_POST[pid_1_legal_address_city] );
$_POST[pid_1_legal_address_index] = htmlspecialchars ($_POST[pid_1_legal_address_index]);
$_POST[pid_1_legal_address_street]= htmlspecialchars ($_POST[pid_1_legal_address_street]  );
$_POST[pid_1_post_address_country]= htmlspecialchars ($_POST[pid_1_post_address_country]  );
$_POST[pid_1_post_address_region] = htmlspecialchars ($_POST[pid_1_post_address_region]);
$_POST[pid_1_post_address_district]  = htmlspecialchars ($_POST[pid_1_post_address_district] );
$_POST[pid_1_post_address_city]  = htmlspecialchars ($_POST[pid_1_post_address_city] );
$_POST[pid_1_post_address_index]  = htmlspecialchars ($_POST[pid_1_post_address_index] );
$_POST[pid_1_post_address_street] = htmlspecialchars ($_POST[pid_1_post_address_street]);
$_POST[pid_1_production_address_country]  = htmlspecialchars ($_POST[pid_1_production_address_country] );
$_POST[pid_1_production_address_region]  = htmlspecialchars ($_POST[pid_1_production_address_region] );
$_POST[pid_1_production_address_district] = htmlspecialchars ($_POST[pid_1_production_address_district]);
$_POST[pid_1_production_address_city] = htmlspecialchars ($_POST[pid_1_production_address_city]);
$_POST[pid_1_production_address_index]= htmlspecialchars ($_POST[pid_1_production_address_index]  );
$_POST[pid_1_production_address_street]  = htmlspecialchars ($_POST[pid_1_production_address_street] );
$_POST[pid_1_company_phone]  = htmlspecialchars ($_POST[pid_1_company_phone] );
$_POST[pid_1_company_email]  = htmlspecialchars ($_POST[pid_1_company_email] );
$_POST[pid_1_company_web] = htmlspecialchars ($_POST[pid_1_company_web]);
$_POST[add_pid_2] = htmlspecialchars ($_POST[add_pid_2]);
$_POST[pid_2_company_status]  = htmlspecialchars ($_POST[pid_2_company_status] );
$_POST[pid_2_company_name_UA] = htmlspecialchars ($_POST[pid_2_company_name_UA]);
$_POST[pid_2_company_name_EN] = htmlspecialchars ($_POST[pid_2_company_name_EN]);
$_POST[pid_2_company_id]  = htmlspecialchars ($_POST[pid_2_company_id] );
$_POST[pid_2_general_manager_name]= htmlspecialchars ($_POST[pid_2_general_manager_name]  );
$_POST[pid_2_general_manager_surname] = htmlspecialchars ($_POST[pid_2_general_manager_surname]);
$_POST[pid_2_general_manager_phone]  = htmlspecialchars ($_POST[pid_2_general_manager_phone] );
$_POST[pid_2_general_manager_email]  = htmlspecialchars ($_POST[pid_2_general_manager_email] );
$_POST[pid_2_legal_address_country]  = htmlspecialchars ($_POST[pid_2_legal_address_country] );
$_POST[pid_2_legal_address_region]= htmlspecialchars ($_POST[pid_2_legal_address_region]  );
$_POST[pid_2_legal_address_district]  = htmlspecialchars ($_POST[pid_2_legal_address_district] );
$_POST[pid_2_legal_address_city]  = htmlspecialchars ($_POST[pid_2_legal_address_city] );
$_POST[pid_2_legal_address_index] = htmlspecialchars ($_POST[pid_2_legal_address_index]);
$_POST[pid_2_legal_address_street]= htmlspecialchars ($_POST[pid_2_legal_address_street]  );
$_POST[pid_2_post_address_country]= htmlspecialchars ($_POST[pid_2_post_address_country]  );
$_POST[pid_2_post_address_region] = htmlspecialchars ($_POST[pid_2_post_address_region]);
$_POST[pid_2_post_address_district]  = htmlspecialchars ($_POST[pid_2_post_address_district] );
$_POST[pid_2_post_address_city]  = htmlspecialchars ($_POST[pid_2_post_address_city] );
$_POST[pid_2_post_address_index]  = htmlspecialchars ($_POST[pid_2_post_address_index] );
$_POST[pid_2_post_address_street] = htmlspecialchars ($_POST[pid_2_post_address_street]);
$_POST[pid_2_production_address_country]  = htmlspecialchars ($_POST[pid_2_production_address_country] );
$_POST[pid_2_production_address_region]  = htmlspecialchars ($_POST[pid_2_production_address_region] );
$_POST[pid_2_production_address_district] = htmlspecialchars ($_POST[pid_2_production_address_district]);
$_POST[pid_2_production_address_city] = htmlspecialchars ($_POST[pid_2_production_address_city]);
$_POST[pid_2_production_address_index]= htmlspecialchars ($_POST[pid_2_production_address_index]  );
$_POST[pid_2_production_address_street]  = htmlspecialchars ($_POST[pid_2_production_address_street] );
$_POST[pid_2_company_phone]  = htmlspecialchars ($_POST[pid_2_company_phone] );
$_POST[pid_2_company_email]  = htmlspecialchars ($_POST[pid_2_company_email] );
$_POST[pid_2_company_web] = htmlspecialchars ($_POST[pid_2_company_web]);
$_POST[production_crop_production]= htmlspecialchars ($_POST[production_crop_production]  );
$_POST[traid_crop_production] = htmlspecialchars ($_POST[traid_crop_production]);
$_POST[export_crop_production]= htmlspecialchars ($_POST[export_crop_production]  );
$_POST[crop_production_1] = htmlspecialchars ($_POST[crop_production_1]);
$_POST[crop_production_size]  = htmlspecialchars ($_POST[crop_production_size] );
$_POST[crop_production_organic_size]  = htmlspecialchars ($_POST[crop_production_organic_size] );
$_POST[crop_production_organic_1_size]= htmlspecialchars ($_POST[crop_production_organic_1_size]  );
$_POST[crop_production_organic_2_size]= htmlspecialchars ($_POST[crop_production_organic_2_size]  );
$_POST[crop_production_organic_3_size]= htmlspecialchars ($_POST[crop_production_organic_3_size]  );
$_POST[crop_production_organic_4_size]= htmlspecialchars ($_POST[crop_production_organic_4_size]  );
$_POST[crop_production_after] = htmlspecialchars ($_POST[crop_production_after]);
$_POST[crop_production_after_about_a] = htmlspecialchars ($_POST[crop_production_after_about_a]);
$_POST[traid_crop_production_b]  = htmlspecialchars ($_POST[traid_crop_production_b] );
$_POST[traid_crop_production_general] = htmlspecialchars ($_POST[traid_crop_production_general]);
$_POST[export_crop_production_b]  = htmlspecialchars ($_POST[export_crop_production_b] );
$_POST[export_crop_production_general]= htmlspecialchars ($_POST[export_crop_production_general]  );
$_POST[export_crop_production_wait]  = htmlspecialchars ($_POST[export_crop_production_wait] );
$_POST[import_crop_production_wait]  = htmlspecialchars ($_POST[import_crop_production_wait] );
$_POST[production_wild_collection]= htmlspecialchars ($_POST[production_wild_collection]  );
$_POST[traid_wild_collection] = htmlspecialchars ($_POST[traid_wild_collection]);
$_POST[export_wild_collection]= htmlspecialchars ($_POST[export_wild_collection]  );
$_POST[wild_collection_size]  = htmlspecialchars ($_POST[wild_collection_size] );
$_POST[wild_organic_collection_size]  = htmlspecialchars ($_POST[wild_organic_collection_size] );
$_POST[wild_collection_1_1]  = htmlspecialchars ($_POST[wild_collection_1_1] );
$_POST[wild_collection_2_1]  = htmlspecialchars ($_POST[wild_collection_2_1] );
$_POST[wild_collection_3_1]  = htmlspecialchars ($_POST[wild_collection_3_1] );
$_POST[wild_collection_4_1]  = htmlspecialchars ($_POST[wild_collection_4_1] );
$_POST[wild_collection_1_2]  = htmlspecialchars ($_POST[wild_collection_1_2] );
$_POST[wild_collection_2_2]  = htmlspecialchars ($_POST[wild_collection_2_2] );
$_POST[wild_collection_3_2]  = htmlspecialchars ($_POST[wild_collection_3_2] );
$_POST[wild_collection_4_2]  = htmlspecialchars ($_POST[wild_collection_4_2] );
$_POST[wild_collection_1_3]  = htmlspecialchars ($_POST[wild_collection_1_3] );
$_POST[wild_collection_2_3]  = htmlspecialchars ($_POST[wild_collection_2_3] );
$_POST[wild_collection_3_3]  = htmlspecialchars ($_POST[wild_collection_3_3] );
$_POST[wild_collection_4_3]  = htmlspecialchars ($_POST[wild_collection_4_3] );
$_POST[wild_collection_1_4]  = htmlspecialchars ($_POST[wild_collection_1_4] );
$_POST[wild_collection_2_4]  = htmlspecialchars ($_POST[wild_collection_2_4] );
$_POST[wild_collection_3_4]  = htmlspecialchars ($_POST[wild_collection_3_4] );
$_POST[wild_collection_4_4]  = htmlspecialchars ($_POST[wild_collection_4_4] );
$_POST[wild_collection_1_5]  = htmlspecialchars ($_POST[wild_collection_1_5] );
$_POST[wild_collection_2_5]  = htmlspecialchars ($_POST[wild_collection_2_5] );
$_POST[wild_collection_3_5]  = htmlspecialchars ($_POST[wild_collection_3_5] );
$_POST[wild_collection_4_5]  = htmlspecialchars ($_POST[wild_collection_4_5] );
$_POST[wild_collection_1_6]  = htmlspecialchars ($_POST[wild_collection_1_6] );
$_POST[wild_collection_2_6]  = htmlspecialchars ($_POST[wild_collection_2_6] );
$_POST[wild_collection_3_6]  = htmlspecialchars ($_POST[wild_collection_3_6] );
$_POST[wild_collection_4_6]  = htmlspecialchars ($_POST[wild_collection_4_6] );
$_POST[wild_collection_1_7]  = htmlspecialchars ($_POST[wild_collection_1_7] );
$_POST[wild_collection_2_7]  = htmlspecialchars ($_POST[wild_collection_2_7] );
$_POST[wild_collection_3_7]  = htmlspecialchars ($_POST[wild_collection_3_7] );
$_POST[wild_collection_4_7]  = htmlspecialchars ($_POST[wild_collection_4_7] );
$_POST[wild_collection_after] = htmlspecialchars ($_POST[wild_collection_after]);
$_POST[wild_collection_after_about_b] = htmlspecialchars ($_POST[wild_collection_after_about_b]);
$_POST[traid_wild_collection_b]  = htmlspecialchars ($_POST[traid_wild_collection_b] );
$_POST[traid_wild_collection_general] = htmlspecialchars ($_POST[traid_wild_collection_general]);
$_POST[export_wild_collection_b]  = htmlspecialchars ($_POST[export_wild_collection_b] );
$_POST[export_wild_collection_general]= htmlspecialchars ($_POST[export_wild_collection_general]  );
$_POST[export_wild_collection_wait]  = htmlspecialchars ($_POST[export_wild_collection_wait] );
$_POST[import_wild_collection_wait]  = htmlspecialchars ($_POST[import_wild_collection_wait] );
$_POST[production_animal_husbandry]  = htmlspecialchars ($_POST[production_animal_husbandry] );
$_POST[traid_animal_husbandry]= htmlspecialchars ($_POST[traid_animal_husbandry]  );
$_POST[export_animal_husbandry]  = htmlspecialchars ($_POST[export_animal_husbandry] );
$_POST[vrh]  = htmlspecialchars ($_POST[vrh] );
$_POST[vrh_cow]  = htmlspecialchars ($_POST[vrh_cow] );
$_POST[else_vrh]  = htmlspecialchars ($_POST[else_vrh] );
$_POST[pinck] = htmlspecialchars ($_POST[pinck]);
$_POST[goat]  = htmlspecialchars ($_POST[goat] );
$_POST[sheep] = htmlspecialchars ($_POST[sheep]);
$_POST[poultry]  = htmlspecialchars ($_POST[poultry] );
$_POST[chickens]  = htmlspecialchars ($_POST[chickens] );
$_POST[turkeys]  = htmlspecialchars ($_POST[turkeys] );
$_POST[ducks] = htmlspecialchars ($_POST[ducks]);
$_POST[geese] = htmlspecialchars ($_POST[geese]);
$_POST[animal_husbandry_else] = htmlspecialchars ($_POST[animal_husbandry_else]);
$_POST[traid_animal_husbandry_b]  = htmlspecialchars ($_POST[traid_animal_husbandry_b] );
$_POST[traid_animal_husbandry_general]= htmlspecialchars ($_POST[traid_animal_husbandry_general]  );
$_POST[export_animal_husbandry_b] = htmlspecialchars ($_POST[export_animal_husbandry_b]);
$_POST[export_animal_husbandry_general]  = htmlspecialchars ($_POST[export_animal_husbandry_general] );
$_POST[export_animal_husbandry_wait]  = htmlspecialchars ($_POST[export_animal_husbandry_wait] );
$_POST[import_animal_husbandry_wait]  = htmlspecialchars ($_POST[import_animal_husbandry_wait] );
$_POST[production_beekeeping] = htmlspecialchars ($_POST[production_beekeeping]);
$_POST[traid_beekeeping]  = htmlspecialchars ($_POST[traid_beekeeping] );
$_POST[export_beekeeping] = htmlspecialchars ($_POST[export_beekeeping]);
$_POST[beekeeping_all]= htmlspecialchars ($_POST[beekeeping_all]  );
$_POST[beekeeping_all_local]  = htmlspecialchars ($_POST[beekeeping_all_local] );
$_POST[beekeeping_all_migratory]  = htmlspecialchars ($_POST[beekeeping_all_migratory] );
$_POST[beekeeping_all_migratory_1]= htmlspecialchars ($_POST[beekeeping_all_migratory_1]  );
$_POST[beekeeping_1_1]= htmlspecialchars ($_POST[beekeeping_1_1]  );
$_POST[beekeeping_2_1]= htmlspecialchars ($_POST[beekeeping_2_1]  );
$_POST[beekeeping_3_1]= htmlspecialchars ($_POST[beekeeping_3_1]  );
$_POST[beekeeping_4_1]= htmlspecialchars ($_POST[beekeeping_4_1]  );
$_POST[beekeeping_5_1]= htmlspecialchars ($_POST[beekeeping_5_1]  );
$_POST[beekeeping_1_2]= htmlspecialchars ($_POST[beekeeping_1_2]  );
$_POST[beekeeping_2_2]= htmlspecialchars ($_POST[beekeeping_2_2]  );
$_POST[beekeeping_3_2]= htmlspecialchars ($_POST[beekeeping_3_2]  );
$_POST[beekeeping_4_2]= htmlspecialchars ($_POST[beekeeping_4_2]  );
$_POST[beekeeping_5_2]= htmlspecialchars ($_POST[beekeeping_5_2]  );
$_POST[beekeeping_1_3]= htmlspecialchars ($_POST[beekeeping_1_3]  );
$_POST[beekeeping_2_3]= htmlspecialchars ($_POST[beekeeping_2_3]  );
$_POST[beekeeping_3_3]= htmlspecialchars ($_POST[beekeeping_3_3]  );
$_POST[beekeeping_4_3]= htmlspecialchars ($_POST[beekeeping_4_3]  );
$_POST[beekeeping_5_3]= htmlspecialchars ($_POST[beekeeping_5_3]  );
$_POST[beekeeping_1_4]= htmlspecialchars ($_POST[beekeeping_1_4]  );
$_POST[beekeeping_2_4]= htmlspecialchars ($_POST[beekeeping_2_4]  );
$_POST[beekeeping_3_4]= htmlspecialchars ($_POST[beekeeping_3_4]  );
$_POST[beekeeping_4_4]= htmlspecialchars ($_POST[beekeeping_4_4]  );
$_POST[beekeeping_5_4]= htmlspecialchars ($_POST[beekeeping_5_4]  );
$_POST[traid_beekeeping_b]= htmlspecialchars ($_POST[traid_beekeeping_b]  );
$_POST[traid_beekeeping_general]  = htmlspecialchars ($_POST[traid_beekeeping_general] );
$_POST[export_beekeeping_b]  = htmlspecialchars ($_POST[export_beekeeping_b] );
$_POST[export_beekeeping_general] = htmlspecialchars ($_POST[export_beekeeping_general]);
$_POST[export_beekeeping_wait]= htmlspecialchars ($_POST[export_beekeeping_wait]  );
$_POST[import_beekeeping_wait]= htmlspecialchars ($_POST[import_beekeeping_wait]  );
$_POST[production_aquaculture]= htmlspecialchars ($_POST[production_aquaculture]  );
$_POST[traid_aquaculture] = htmlspecialchars ($_POST[traid_aquaculture]);
$_POST[export_aquaculture]= htmlspecialchars ($_POST[export_aquaculture]  );
$_POST[aquaculture_size]  = htmlspecialchars ($_POST[aquaculture_size] );
$_POST[aquaculture_organic_size]  = htmlspecialchars ($_POST[aquaculture_organic_size] );
$_POST[aquaculture_size_around]  = htmlspecialchars ($_POST[aquaculture_size_around] );
$_POST[aquaculture_1_1_1] = htmlspecialchars ($_POST[aquaculture_1_1_1]);
$_POST[aquaculture_1_2_1] = htmlspecialchars ($_POST[aquaculture_1_2_1]);
$_POST[aquaculture_1_1_2] = htmlspecialchars ($_POST[aquaculture_1_1_2]);
$_POST[aquaculture_1_2_2] = htmlspecialchars ($_POST[aquaculture_1_2_2]);
$_POST[aquaculture_1_1_3] = htmlspecialchars ($_POST[aquaculture_1_1_3]);
$_POST[aquaculture_1_2_3] = htmlspecialchars ($_POST[aquaculture_1_2_3]);
$_POST[aquaculture_3_1_1] = htmlspecialchars ($_POST[aquaculture_3_1_1]);
$_POST[aquaculture_3_2_1] = htmlspecialchars ($_POST[aquaculture_3_2_1]);
$_POST[aquaculture_3_1_2] = htmlspecialchars ($_POST[aquaculture_3_1_2]);
$_POST[aquaculture_3_2_2] = htmlspecialchars ($_POST[aquaculture_3_2_2]);
$_POST[aquaculture_3_1_3] = htmlspecialchars ($_POST[aquaculture_3_1_3]);
$_POST[aquaculture_3_2_3] = htmlspecialchars ($_POST[aquaculture_3_2_3]);
$_POST[traid_aquaculture_b]  = htmlspecialchars ($_POST[traid_aquaculture_b] );
$_POST[traid_aquaculture_general] = htmlspecialchars ($_POST[traid_aquaculture_general]);
$_POST[export_aquaculture_b]  = htmlspecialchars ($_POST[export_aquaculture_b] );
$_POST[export_aquaculture_general]= htmlspecialchars ($_POST[export_aquaculture_general]  );
$_POST[export_aquaculture_wait]  = htmlspecialchars ($_POST[export_aquaculture_wait] );
$_POST[import_aquaculture_wait]  = htmlspecialchars ($_POST[import_aquaculture_wait] );
$_POST[production_processing_products_for_use_as_food]= htmlspecialchars ($_POST[production_processing_products_for_use_as_food]  );
$_POST[traid_processing_products_for_use_as_food] = htmlspecialchars ($_POST[traid_processing_products_for_use_as_food]);
$_POST[export_processing_products_for_use_as_food]= htmlspecialchars ($_POST[export_processing_products_for_use_as_food]  );
$_POST[activities_in_food_processing] = htmlspecialchars ($_POST[activities_in_food_processing]);
$_POST[food_general]  = htmlspecialchars ($_POST[food_general] );
$_POST[food_for_certificationt]  = htmlspecialchars ($_POST[food_for_certificationt] );
$_POST[food_emploe]  = htmlspecialchars ($_POST[food_emploe] );
$_POST[wine_industry] = htmlspecialchars ($_POST[wine_industry]);
$_POST[wine_industry_general] = htmlspecialchars ($_POST[wine_industry_general]);
$_POST[wine_industry_certificationt]  = htmlspecialchars ($_POST[wine_industry_certificationt] );
$_POST[wine_industry_emploe]  = htmlspecialchars ($_POST[wine_industry_emploe] );
$_POST[traid_processing_products_for_use_as_food_b]  = htmlspecialchars ($_POST[traid_processing_products_for_use_as_food_b] );
$_POST[traid_processing_products_for_use_as_food_general] = htmlspecialchars ($_POST[traid_processing_products_for_use_as_food_general]);
$_POST[export_processing_products_for_use_as_food_b]  = htmlspecialchars ($_POST[export_processing_products_for_use_as_food_b] );
$_POST[export_processing_products_for_use_as_food_general]= htmlspecialchars ($_POST[export_processing_products_for_use_as_food_general]  );
$_POST[export_processing_products_for_use_as_food_wait]  = htmlspecialchars ($_POST[export_processing_products_for_use_as_food_wait] );
$_POST[import_processing_products_for_use_as_food_wait]  = htmlspecialchars ($_POST[import_processing_products_for_use_as_food_wait] );
$_POST[production_processing_products_for_use_as_feed]= htmlspecialchars ($_POST[production_processing_products_for_use_as_feed]  );
$_POST[traid_processing_products_for_use_as_feed] = htmlspecialchars ($_POST[traid_processing_products_for_use_as_feed]);
$_POST[xport_processing_products_for_use_as_feed] = htmlspecialchars ($_POST[xport_processing_products_for_use_as_feed]);
$_POST[feed_general]  = htmlspecialchars ($_POST[feed_general] );
$_POST[feed_for_certificationt]  = htmlspecialchars ($_POST[feed_for_certificationt] );
$_POST[feed_emploe]  = htmlspecialchars ($_POST[feed_emploe] );
$_POST[traid_processing_products_for_use_as_feed_b]  = htmlspecialchars ($_POST[traid_processing_products_for_use_as_feed_b] );
$_POST[traid_processing_products_for_use_as_feed_general] = htmlspecialchars ($_POST[traid_processing_products_for_use_as_feed_general]);
$_POST[export_processing_products_for_use_as_feed_b]  = htmlspecialchars ($_POST[export_processing_products_for_use_as_feed_b] );
$_POST[export_processing_products_for_use_as_feed_general]= htmlspecialchars ($_POST[export_processing_products_for_use_as_feed_general]  );
$_POST[export_processing_products_for_use_as_feed_wait]  = htmlspecialchars ($_POST[export_processing_products_for_use_as_feed_wait] );
$_POST[import_processing_products_for_use_as_feed_wait]  = htmlspecialchars ($_POST[import_processing_products_for_use_as_feed_wait] );
$_POST[production_growing_seedlings_and_seed] = htmlspecialchars ($_POST[production_growing_seedlings_and_seed]);
$_POST[traid_growing_seedlings_and_seed]  = htmlspecialchars ($_POST[traid_growing_seedlings_and_seed] );
$_POST[export_growing_seedlings_and_seed] = htmlspecialchars ($_POST[export_growing_seedlings_and_seed]);
$_POST[crop_production_F_size]= htmlspecialchars ($_POST[crop_production_F_size]  );
$_POST[crop_production_organic_F_size]= htmlspecialchars ($_POST[crop_production_organic_F_size]  );
$_POST[growing_seedlings_and_seed_after]  = htmlspecialchars ($_POST[growing_seedlings_and_seed_after] );
$_POST[growing_seedlings_and_seed_after_about_b]  = htmlspecialchars ($_POST[growing_seedlings_and_seed_after_about_b] );
$_POST[traid_growing_seedlings_and_seed_b]= htmlspecialchars ($_POST[traid_growing_seedlings_and_seed_b]  );
$_POST[traid_growing_seedlings_and_seed_general]  = htmlspecialchars ($_POST[traid_growing_seedlings_and_seed_general] );
$_POST[export_growing_seedlings_and_seed_b]  = htmlspecialchars ($_POST[export_growing_seedlings_and_seed_b] );
$_POST[export_growing_seedlings_and_seed_general] = htmlspecialchars ($_POST[export_growing_seedlings_and_seed_general]);
$_POST[export_growing_seedlings_and_seed_wait]= htmlspecialchars ($_POST[export_growing_seedlings_and_seed_wait]  );
$_POST[import_growing_seedlings_and_seed_wait]= htmlspecialchars ($_POST[import_growing_seedlings_and_seed_wait]  );
$_POST[export1_manager_for_all_name]  = htmlspecialchars ($_POST[export1_manager_for_all_name] );
$_POST[export1_manager_for_all_surname]  = htmlspecialchars ($_POST[export1_manager_for_all_surname] );
$_POST[export1_manager_for_all_phone] = htmlspecialchars ($_POST[export1_manager_for_all_phone]);
$_POST[export1_manager_for_all_email] = htmlspecialchars ($_POST[export1_manager_for_all_email]);
$_POST[standard_eu]  = htmlspecialchars ($_POST[standard_eu] );
$_POST[standard_nop]  = htmlspecialchars ($_POST[standard_nop] );
$_POST[standard_jas]  = htmlspecialchars ($_POST[standard_jas] );
$_POST[standard_bs]  = htmlspecialchars ($_POST[standard_bs] );
$_POST[standard_krav] = htmlspecialchars ($_POST[standard_krav]);
$_POST[standard_naturland]= htmlspecialchars ($_POST[standard_naturland]  );
$_POST[agree_p]  = htmlspecialchars ($_POST[agree_p] ); 
$_POST[other_2_who]  = htmlspecialchars ($_POST[other_2_who] ); 
$_POST[other_3_who]  = htmlspecialchars ($_POST[other_3_who] ); 
$_POST[other_5_who]  = htmlspecialchars ($_POST[other_5_who] ); 

// текст и создание фаила для отправки почтой


if (!isset($_POST['questionnaire_id']) || ($_POST['questionnaire_id'] == ""))
{
    $json_string = json_encode($_POST);
    $dir = ('../application/edit/');
    $path = tempnam($dir, "");
    //$file = basename($path);
    //$path = tempnam(getcwd(), "");
    $file = basename($path);
    
$text="
    <html>
    <head>
    <meta http-equiv=\"refresh\" content=\"0;http://reg.organicstandard.com.ua/application/application.php?id=edit/$file\"/>
    </head>
    </html>
";

$tmpfname = "$array_for_sql[company_name_EN]". ".html";

$handle = fopen($tmpfname, "w");
fwrite($handle, $text);
fclose($handle);

 file_put_contents($path, $json_string);
 $to = "dz@organicstandard.com.ua"; //Кому
  $from = 'office@organicstandard.com.ua' . "\r\n" .
        'Cc: or@organicstandard.com.ua' . "\r\n" .
    'X-Mailer: PHP/' . phpversion(); //От кого
  $subject = "$array_for_sql[company_name_EN]" . " - created new  application"; //Тема
  $message = "Company ID = " .$file ."\r\nTo see application click: http://reg.organicstandard.com.ua/application/application.php?id=edit/" . $file . "&readonly\r\n to modify application click: http://reg.organicstandard.com.ua/application/application.php?id=edit/" . $file; //Текст письма
  $boundary = "---"; //Разделитель
  /* Заголовки */
  $headers = "From: $from\nReply-To: $_POST[company_email]\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
  $body = "--$boundary\n";
  /* Присоединяем текстовое сообщение */
  $body .= "Content-type: text/html; charset='utf-8'\n";
  $body .= "Content-Transfer-Encoding: quoted-printablenn";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($tmpfname))."?=\n\n";
  $body .= $message."\r\n";
  $body .= "--$boundary\n";
 
  /* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
  $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode(basename($tmpfname))."?=\n"; 
  $body .= "Content-Transfer-Encoding: base64\n";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($tmpfname))."?=\n\n";
  $body .= chunk_split(base64_encode($text))."\n";
  $body .= "--".$boundary ."--\n";
   //Отправляем письмо
mail($to, $subject, $body, $headers);
   
  /*  $message = "Company ID = " .$file ."\r\nTo see application click: http://reg.organicstandard.com.ua/application/application.php?id=edit/" . $file . "&readonly\r\n to modify application click: http://reg.organicstandard.com.ua/application/application.php?id=edit/" . $file;
    $topic =  "$array_for_sql[company_name_EN]" . " - created new  application";
 $headers = 'From: office@organicstandard.com.ua' . "\r\n" .
    'Reply-To: ' . "$_POST[company_email]" . "\r\n" .
    'Cc: or@organicstandard.com.ua' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

   mail ("dz@organicstandard.com.ua", $topic , $message, $headers);*/
    
//------------------------------------------------------Create Table------------------------------------------

// Цикл по утстановке чекбоксам значения "1" и "0"
$array = array("the_same_company",
"add_1_operator",
"add_pid",
"add_1_pid",
"add_2_pid",
"production_crop_production",
"traid_crop_production",
"export_crop_production",
"crop_production_1",
"crop_production_after",
"production_wild_collection",
"traid_wild_collection",
"export_wild_collection",
"wild_collection_after",
"production_animal_husbandry",
"traid_animal_husbandry",
"export_animal_husbandry",
"vrh",
"poultry",
"production_beekeeping",
"traid_beekeeping",
"export_beekeeping",
"production_aquaculture",
"traid_aquaculture",
"export_aquaculture",
"production_processing_products_for_use_as_food",
"traid_processing_products_for_use_as_food",
"export_processing_products_for_use_as_food",
"activities_in_food_processing",
"wine_industry",
"production_processing_products_for_use_as_feed",
"traid_processing_products_for_use_as_feed",
"export_processing_products_for_use_as_feed",
"production_growing_seedlings_and_seed",
"traid_growing_seedlings_and_seed",
"export_growing_seedlings_and_seed",
"growing_seedlings_and_seed_after",
"standard_eu",
"standard_nop",
"standard_jas",
"standard_bs",
"standard_krav",
"standard_naturland");

foreach ($array as $index => $value) {
  if (($array_for_sql[$value]) == "on")
{
   $array_for_sql[$value] = 1;
}
else
{
   $array_for_sql[$value] = 0;  
}  

}



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "INSERT INTO application (
company_status,
company_name_UA,
company_name_EN,
company_id,
general_manager_name,
general_manager_surname,
general_manager_phone,
general_manager_email,
responsible_manager_name,
responsible_manager_surname,
responsible_manager_phone,
responsible_manager_email,
finance_manager_name,
finance_manager_surname,
finance_manager_phone,
finance_manager_email,
legal_address_country,
legal_address_region,
legal_address_district,
legal_address_city,
legal_address_index,
legal_address_street,
post_address_country,
post_address_region,
post_address_district,
post_address_city,
post_address_index,
post_address_street,
production_address_country,
production_address_region,
production_address_district,
production_address_city,
production_address_index,
production_address_street,
company_phone,
company_email,
company_web,
company_consultant,
company_consultant_phone,
company_consultant_email,
the_same_company,
add_1_operator,
operator_company_status,
operator_company_name_UA,
operator_company_name_EN,
operator_company_id,
operator_general_manager_name,
operator_general_manager_surname,
operator_general_manager_phone,
operator_general_manager_email,
operator_responsible_manager_name,
operator_responsible_manager_surname,
operator_responsible_manager_phone,
operator_responsible_manager_email,
operator_legal_address_country,
operator_legal_address_region,
operator_legal_address_district,
operator_legal_address_city,
operator_legal_address_index,
operator_legal_address_street,
operator_post_address_country,
operator_post_address_region,
operator_post_address_district,
operator_post_address_city,
operator_post_address_index,
operator_post_address_street,
operator_production_address_country,
operator_production_address_region,
operator_production_address_district,
operator_production_address_city,
operator_production_address_index,
operator_production_address_street,
operator_company_phone,
operator_company_email,
operator_company_web,
add_pid,
pid_company_status,
pid_company_name_UA,
pid_company_name_EN,
pid_company_id,
pid_general_manager_name,
pid_general_manager_surname,
pid_general_manager_phone,
pid_general_manager_email,
pid_legal_address_country,
pid_legal_address_region,
pid_legal_address_district,
pid_legal_address_city,
pid_legal_address_index,
pid_legal_address_street,
pid_post_address_country,
pid_post_address_region,
pid_post_address_district,
pid_post_address_city,
pid_post_address_index,
pid_post_address_street,
pid_production_address_country,
pid_production_address_region,
pid_production_address_district,
pid_production_address_city,
pid_production_address_index,
pid_production_address_street,
pid_company_phone,
pid_company_email,
pid_company_web,
add_pid_1,
pid_1_company_status,
pid_1_company_name_UA,
pid_1_company_name_EN,
pid_1_company_id,
pid_1_general_manager_name,
pid_1_general_manager_surname,
pid_1_general_manager_phone,
pid_1_general_manager_email,
pid_1_legal_address_country,
pid_1_legal_address_region,
pid_1_legal_address_district,
pid_1_legal_address_city,
pid_1_legal_address_index,
pid_1_legal_address_street,
pid_1_post_address_country,
pid_1_post_address_region,
pid_1_post_address_district,
pid_1_post_address_city,
pid_1_post_address_index,
pid_1_post_address_street,
pid_1_production_address_country,
pid_1_production_address_region,
pid_1_production_address_district,
pid_1_production_address_city,
pid_1_production_address_index,
pid_1_production_address_street,
pid_1_company_phone,
pid_1_company_email,
pid_1_company_web,
add_pid_2,
pid_2_company_status,
pid_2_company_name_UA,
pid_2_company_name_EN,
pid_2_company_id,
pid_2_general_manager_name,
pid_2_general_manager_surname,
pid_2_general_manager_phone,
pid_2_general_manager_email,
pid_2_legal_address_country,
pid_2_legal_address_region,
pid_2_legal_address_district,
pid_2_legal_address_city,
pid_2_legal_address_index,
pid_2_legal_address_street,
pid_2_post_address_country,
pid_2_post_address_region,
pid_2_post_address_district,
pid_2_post_address_city,
pid_2_post_address_index,
pid_2_post_address_street,
pid_2_production_address_country,
pid_2_production_address_region,
pid_2_production_address_district,
pid_2_production_address_city,
pid_2_production_address_index,
pid_2_production_address_street,
pid_2_company_phone,
pid_2_company_email,
pid_2_company_web,
production_crop_production,
traid_crop_production,
export_crop_production,
crop_production_1,
crop_production_size,
crop_production_organic_size,
crop_production_organic_1_size,
crop_production_organic_2_size,
crop_production_organic_3_size,
crop_production_organic_4_size,
crop_production_after,
crop_production_after_about_a,
traid_crop_production_b,
traid_crop_production_general,
export_crop_production_b,
export_crop_production_general,
export_crop_production_wait,
import_crop_production_wait,
production_wild_collection,
traid_wild_collection,
export_wild_collection,
wild_collection_size,
wild_organic_collection_size,
wild_collection_1_1,
wild_collection_2_1,
wild_collection_3_1,
wild_collection_4_1,
wild_collection_1_2,
wild_collection_2_2,
wild_collection_3_2,
wild_collection_4_2,
wild_collection_1_3,
wild_collection_2_3,
wild_collection_3_3,
wild_collection_4_3,
wild_collection_1_4,
wild_collection_2_4,
wild_collection_3_4,
wild_collection_4_4,
wild_collection_1_5,
wild_collection_2_5,
wild_collection_3_5,
wild_collection_4_5,
wild_collection_1_6,
wild_collection_2_6,
wild_collection_3_6,
wild_collection_4_6,
wild_collection_1_7,
wild_collection_2_7,
wild_collection_3_7,
wild_collection_4_7,
wild_collection_after,
wild_collection_after_about_b,
traid_wild_collection_b,
traid_wild_collection_general,
export_wild_collection_b,
export_wild_collection_general,
export_wild_collection_wait,
import_wild_collection_wait,
production_animal_husbandry,
traid_animal_husbandry,
export_animal_husbandry,
vrh,
vrh_cow,
else_vrh,
pinck,
goat,
sheep,
poultry,
chickens,
turkeys,
ducks,
geese,
animal_husbandry_else,
traid_animal_husbandry_b,
traid_animal_husbandry_general,
export_animal_husbandry_b,
export_animal_husbandry_general,
export_animal_husbandry_wait,
import_animal_husbandry_wait,
production_beekeeping,
traid_beekeeping,
export_beekeeping,
beekeeping_all,
beekeeping_all_local,
beekeeping_all_migratory,
beekeeping_all_migratory_1,
beekeeping_1_1,
beekeeping_2_1,
beekeeping_3_1,
beekeeping_4_1,
beekeeping_5_1,
beekeeping_1_2,
beekeeping_2_2,
beekeeping_3_2,
beekeeping_4_2,
beekeeping_5_2,
beekeeping_1_3,
beekeeping_2_3,
beekeeping_3_3,
beekeeping_4_3,
beekeeping_5_3,
beekeeping_1_4,
beekeeping_2_4,
beekeeping_3_4,
beekeeping_4_4,
beekeeping_5_4,
traid_beekeeping_b,
traid_beekeeping_general,
export_beekeeping_b,
export_beekeeping_general,
export_beekeeping_wait,
import_beekeeping_wait,
production_aquaculture,
traid_aquaculture,
export_aquaculture,
aquaculture_size,
aquaculture_organic_size,
aquaculture_size_around,
aquaculture_1_1_1,
aquaculture_1_2_1,
aquaculture_1_1_2,
aquaculture_1_2_2,
aquaculture_1_1_3,
aquaculture_1_2_3,
aquaculture_3_1_1,
aquaculture_3_2_1,
aquaculture_3_1_2,
aquaculture_3_2_2,
aquaculture_3_1_3,
aquaculture_3_2_3,
traid_aquaculture_b,
traid_aquaculture_general,
export_aquaculture_b,
export_aquaculture_general,
export_aquaculture_wait,
import_aquaculture_wait,
production_processing_products_for_use_as_food,
traid_processing_products_for_use_as_food,
export_processing_products_for_use_as_food,
activities_in_food_processing,
food_general,
food_for_certificationt,
food_emploe,
wine_industry,
wine_industry_general,
wine_industry_certificationt,
wine_industry_emploe,
traid_processing_products_for_use_as_food_b,
traid_processing_products_for_use_as_food_general,
export_processing_products_for_use_as_food_b,
export_processing_products_for_use_as_food_general,
export_processing_products_for_use_as_food_wait,
import_processing_products_for_use_as_food_wait,
production_processing_products_for_use_as_feed,
traid_processing_products_for_use_as_feed,
export_processing_products_for_use_as_feed,
feed_general,
feed_for_certificationt,
feed_emploe,
traid_processing_products_for_use_as_feed_b,
traid_processing_products_for_use_as_feed_general,
export_processing_products_for_use_as_feed_b,
export_processing_products_for_use_as_feed_general,
export_processing_products_for_use_as_feed_wait,
import_processing_products_for_use_as_feed_wait,
production_growing_seedlings_and_seed,
traid_growing_seedlings_and_seed,
export_growing_seedlings_and_seed,
crop_production_F_size,
crop_production_organic_F_size,
growing_seedlings_and_seed_after,
growing_seedlings_and_seed_after_about_b,
traid_growing_seedlings_and_seed_b,
traid_growing_seedlings_and_seed_general,
export_growing_seedlings_and_seed_b,
export_growing_seedlings_and_seed_general,
export_growing_seedlings_and_seed_wait,
import_growing_seedlings_and_seed_wait,
export1_manager_for_all_name,
export1_manager_for_all_surname,
export1_manager_for_all_phone,
export1_manager_for_all_email,
standard_eu,
standard_nop,
standard_jas,
standard_bs,
standard_krav,
standard_naturland,
agree_p,
file_name
)

VALUES (
'$array_for_sql[company_status]',
'$array_for_sql[company_name_UA]',
'$array_for_sql[company_name_EN]',
'$array_for_sql[company_id]',
'$array_for_sql[general_manager_name]',
'$array_for_sql[general_manager_surname]',
'$array_for_sql[general_manager_phone]',
'$array_for_sql[general_manager_email]',
'$array_for_sql[responsible_manager_name]',
'$array_for_sql[responsible_manager_surname]',
'$array_for_sql[responsible_manager_phone]',
'$array_for_sql[responsible_manager_email]',
'$array_for_sql[finance_manager_name]',
'$array_for_sql[finance_manager_surname]',
'$array_for_sql[finance_manager_phone]',
'$array_for_sql[finance_manager_email]',
'$array_for_sql[legal_address_country]',
'$array_for_sql[legal_address_region]',
'$array_for_sql[legal_address_district]',
'$array_for_sql[legal_address_city]',
'$array_for_sql[legal_address_index]',
'$array_for_sql[legal_address_street]',
'$array_for_sql[post_address_country]',
'$array_for_sql[post_address_region]',
'$array_for_sql[post_address_district]',
'$array_for_sql[post_address_city]',
'$array_for_sql[post_address_index]',
'$array_for_sql[post_address_street]',
'$array_for_sql[production_address_country]',
'$array_for_sql[production_address_region]',
'$array_for_sql[production_address_district]',
'$array_for_sql[production_address_city]',
'$array_for_sql[production_address_index]',
'$array_for_sql[production_address_street]',
'$array_for_sql[company_phone]',
'$array_for_sql[company_email]',
'$array_for_sql[company_web]',
'$array_for_sql[company_consultant]',
'$array_for_sql[company_consultant_phone]',
'$array_for_sql[company_consultant_email]',
'$array_for_sql[the_same_company]',
'$array_for_sql[add_1_operator]',
'$array_for_sql[operator_company_status]',
'$array_for_sql[operator_company_name_UA]',
'$array_for_sql[operator_company_name_EN]',
'$array_for_sql[operator_company_id]',
'$array_for_sql[operator_general_manager_name]',
'$array_for_sql[operator_general_manager_surname]',
'$array_for_sql[operator_general_manager_phone]',
'$array_for_sql[operator_general_manager_email]',
'$array_for_sql[operator_responsible_manager_name]',
'$array_for_sql[operator_responsible_manager_surname]',
'$array_for_sql[operator_responsible_manager_phone]',
'$array_for_sql[operator_responsible_manager_email]',
'$array_for_sql[operator_legal_address_country]',
'$array_for_sql[operator_legal_address_region]',
'$array_for_sql[operator_legal_address_district]',
'$array_for_sql[operator_legal_address_city]',
'$array_for_sql[operator_legal_address_index]',
'$array_for_sql[operator_legal_address_street]',
'$array_for_sql[operator_post_address_country]',
'$array_for_sql[operator_post_address_region]',
'$array_for_sql[operator_post_address_district]',
'$array_for_sql[operator_post_address_city]',
'$array_for_sql[operator_post_address_index]',
'$array_for_sql[operator_post_address_street]',
'$array_for_sql[operator_production_address_country]',
'$array_for_sql[operator_production_address_region]',
'$array_for_sql[operator_production_address_district]',
'$array_for_sql[operator_production_address_city]',
'$array_for_sql[operator_production_address_index]',
'$array_for_sql[operator_production_address_street]',
'$array_for_sql[operator_company_phone]',
'$array_for_sql[operator_company_email]',
'$array_for_sql[operator_company_web]',
'$array_for_sql[add_pid]',
'$array_for_sql[pid_company_status]',
'$array_for_sql[pid_company_name_UA]',
'$array_for_sql[pid_company_name_EN]',
'$array_for_sql[pid_company_id]',
'$array_for_sql[pid_general_manager_name]',
'$array_for_sql[pid_general_manager_surname]',
'$array_for_sql[pid_general_manager_phone]',
'$array_for_sql[pid_general_manager_email]',
'$array_for_sql[pid_legal_address_country]',
'$array_for_sql[pid_legal_address_region]',
'$array_for_sql[pid_legal_address_district]',
'$array_for_sql[pid_legal_address_city]',
'$array_for_sql[pid_legal_address_index]',
'$array_for_sql[pid_legal_address_street]',
'$array_for_sql[pid_post_address_country]',
'$array_for_sql[pid_post_address_region]',
'$array_for_sql[pid_post_address_district]',
'$array_for_sql[pid_post_address_city]',
'$array_for_sql[pid_post_address_index]',
'$array_for_sql[pid_post_address_street]',
'$array_for_sql[pid_production_address_country]',
'$array_for_sql[pid_production_address_region]',
'$array_for_sql[pid_production_address_district]',
'$array_for_sql[pid_production_address_city]',
'$array_for_sql[pid_production_address_index]',
'$array_for_sql[pid_production_address_street]',
'$array_for_sql[pid_company_phone]',
'$array_for_sql[pid_company_email]',
'$array_for_sql[pid_company_web]',
'$array_for_sql[add_pid_1]',
'$array_for_sql[pid_1_company_status]',
'$array_for_sql[pid_1_company_name_UA]',
'$array_for_sql[pid_1_company_name_EN]',
'$array_for_sql[pid_1_company_id]',
'$array_for_sql[pid_1_general_manager_name]',
'$array_for_sql[pid_1_general_manager_surname]',
'$array_for_sql[pid_1_general_manager_phone]',
'$array_for_sql[pid_1_general_manager_email]',
'$array_for_sql[pid_1_legal_address_country]',
'$array_for_sql[pid_1_legal_address_region]',
'$array_for_sql[pid_1_legal_address_district]',
'$array_for_sql[pid_1_legal_address_city]',
'$array_for_sql[pid_1_legal_address_index]',
'$array_for_sql[pid_1_legal_address_street]',
'$array_for_sql[pid_1_post_address_country]',
'$array_for_sql[pid_1_post_address_region]',
'$array_for_sql[pid_1_post_address_district]',
'$array_for_sql[pid_1_post_address_city]',
'$array_for_sql[pid_1_post_address_index]',
'$array_for_sql[pid_1_post_address_street]',
'$array_for_sql[pid_1_production_address_country]',
'$array_for_sql[pid_1_production_address_region]',
'$array_for_sql[pid_1_production_address_district]',
'$array_for_sql[pid_1_production_address_city]',
'$array_for_sql[pid_1_production_address_index]',
'$array_for_sql[pid_1_production_address_street]',
'$array_for_sql[pid_1_company_phone]',
'$array_for_sql[pid_1_company_email]',
'$array_for_sql[pid_1_company_web]',
'$array_for_sql[add_pid_2]',
'$array_for_sql[pid_2_company_status]',
'$array_for_sql[pid_2_company_name_UA]',
'$array_for_sql[pid_2_company_name_EN]',
'$array_for_sql[pid_2_company_id]',
'$array_for_sql[pid_2_general_manager_name]',
'$array_for_sql[pid_2_general_manager_surname]',
'$array_for_sql[pid_2_general_manager_phone]',
'$array_for_sql[pid_2_general_manager_email]',
'$array_for_sql[pid_2_legal_address_country]',
'$array_for_sql[pid_2_legal_address_region]',
'$array_for_sql[pid_2_legal_address_district]',
'$array_for_sql[pid_2_legal_address_city]',
'$array_for_sql[pid_2_legal_address_index]',
'$array_for_sql[pid_2_legal_address_street]',
'$array_for_sql[pid_2_post_address_country]',
'$array_for_sql[pid_2_post_address_region]',
'$array_for_sql[pid_2_post_address_district]',
'$array_for_sql[pid_2_post_address_city]',
'$array_for_sql[pid_2_post_address_index]',
'$array_for_sql[pid_2_post_address_street]',
'$array_for_sql[pid_2_production_address_country]',
'$array_for_sql[pid_2_production_address_region]',
'$array_for_sql[pid_2_production_address_district]',
'$array_for_sql[pid_2_production_address_city]',
'$array_for_sql[pid_2_production_address_index]',
'$array_for_sql[pid_2_production_address_street]',
'$array_for_sql[pid_2_company_phone]',
'$array_for_sql[pid_2_company_email]',
'$array_for_sql[pid_2_company_web]',
'$array_for_sql[production_crop_production]',
'$array_for_sql[traid_crop_production]',
'$array_for_sql[export_crop_production]',
'$array_for_sql[crop_production_1]',
'$array_for_sql[crop_production_size]',
'$array_for_sql[crop_production_organic_size]',
'$array_for_sql[crop_production_organic_1_size]',
'$array_for_sql[crop_production_organic_2_size]',
'$array_for_sql[crop_production_organic_3_size]',
'$array_for_sql[crop_production_organic_4_size]',
'$array_for_sql[crop_production_after]',
'$array_for_sql[crop_production_after_about_a]',
'$array_for_sql[traid_crop_production_b]',
'$array_for_sql[traid_crop_production_general]',
'$array_for_sql[export_crop_production_b]',
'$array_for_sql[export_crop_production_general]',
'$array_for_sql[export_crop_production_wait]',
'$array_for_sql[import_crop_production_wait]',
'$array_for_sql[production_wild_collection]',
'$array_for_sql[traid_wild_collection]',
'$array_for_sql[export_wild_collection]',
'$array_for_sql[wild_collection_size]',
'$array_for_sql[wild_organic_collection_size]',
'$array_for_sql[wild_collection_1_1]',
'$array_for_sql[wild_collection_2_1]',
'$array_for_sql[wild_collection_3_1]',
'$array_for_sql[wild_collection_4_1]',
'$array_for_sql[wild_collection_1_2]',
'$array_for_sql[wild_collection_2_2]',
'$array_for_sql[wild_collection_3_2]',
'$array_for_sql[wild_collection_4_2]',
'$array_for_sql[wild_collection_1_3]',
'$array_for_sql[wild_collection_2_3]',
'$array_for_sql[wild_collection_3_3]',
'$array_for_sql[wild_collection_4_3]',
'$array_for_sql[wild_collection_1_4]',
'$array_for_sql[wild_collection_2_4]',
'$array_for_sql[wild_collection_3_4]',
'$array_for_sql[wild_collection_4_4]',
'$array_for_sql[wild_collection_1_5]',
'$array_for_sql[wild_collection_2_5]',
'$array_for_sql[wild_collection_3_5]',
'$array_for_sql[wild_collection_4_5]',
'$array_for_sql[wild_collection_1_6]',
'$array_for_sql[wild_collection_2_6]',
'$array_for_sql[wild_collection_3_6]',
'$array_for_sql[wild_collection_4_6]',
'$array_for_sql[wild_collection_1_7]',
'$array_for_sql[wild_collection_2_7]',
'$array_for_sql[wild_collection_3_7]',
'$array_for_sql[wild_collection_4_7]',
'$array_for_sql[wild_collection_after]',
'$array_for_sql[wild_collection_after_about_b]',
'$array_for_sql[traid_wild_collection_b]',
'$array_for_sql[traid_wild_collection_general]',
'$array_for_sql[export_wild_collection_b]',
'$array_for_sql[export_wild_collection_general]',
'$array_for_sql[export_wild_collection_wait]',
'$array_for_sql[import_wild_collection_wait]',
'$array_for_sql[production_animal_husbandry]',
'$array_for_sql[traid_animal_husbandry]',
'$array_for_sql[export_animal_husbandry]',
'$array_for_sql[vrh]',
'$array_for_sql[vrh_cow]',
'$array_for_sql[else_vrh]',
'$array_for_sql[pinck]',
'$array_for_sql[goat]',
'$array_for_sql[sheep]',
'$array_for_sql[poultry]',
'$array_for_sql[chickens]',
'$array_for_sql[turkeys]',
'$array_for_sql[ducks]',
'$array_for_sql[geese]',
'$array_for_sql[animal_husbandry_else]',
'$array_for_sql[traid_animal_husbandry_b]',
'$array_for_sql[traid_animal_husbandry_general]',
'$array_for_sql[export_animal_husbandry_b]',
'$array_for_sql[export_animal_husbandry_general]',
'$array_for_sql[export_animal_husbandry_wait]',
'$array_for_sql[import_animal_husbandry_wait]',
'$array_for_sql[production_beekeeping]',
'$array_for_sql[traid_beekeeping]',
'$array_for_sql[export_beekeeping]',
'$array_for_sql[beekeeping_all]',
'$array_for_sql[beekeeping_all_local]',
'$array_for_sql[beekeeping_all_migratory]',
'$array_for_sql[beekeeping_all_migratory_1]',
'$array_for_sql[beekeeping_1_1]',
'$array_for_sql[beekeeping_2_1]',
'$array_for_sql[beekeeping_3_1]',
'$array_for_sql[beekeeping_4_1]',
'$array_for_sql[beekeeping_5_1]',
'$array_for_sql[beekeeping_1_2]',
'$array_for_sql[beekeeping_2_2]',
'$array_for_sql[beekeeping_3_2]',
'$array_for_sql[beekeeping_4_2]',
'$array_for_sql[beekeeping_5_2]',
'$array_for_sql[beekeeping_1_3]',
'$array_for_sql[beekeeping_2_3]',
'$array_for_sql[beekeeping_3_3]',
'$array_for_sql[beekeeping_4_3]',
'$array_for_sql[beekeeping_5_3]',
'$array_for_sql[beekeeping_1_4]',
'$array_for_sql[beekeeping_2_4]',
'$array_for_sql[beekeeping_3_4]',
'$array_for_sql[beekeeping_4_4]',
'$array_for_sql[beekeeping_5_4]',
'$array_for_sql[traid_beekeeping_b]',
'$array_for_sql[traid_beekeeping_general]',
'$array_for_sql[export_beekeeping_b]',
'$array_for_sql[export_beekeeping_general]',
'$array_for_sql[export_beekeeping_wait]',
'$array_for_sql[import_beekeeping_wait]',
'$array_for_sql[production_aquaculture]',
'$array_for_sql[traid_aquaculture]',
'$array_for_sql[export_aquaculture]',
'$array_for_sql[aquaculture_size]',
'$array_for_sql[aquaculture_organic_size]',
'$array_for_sql[aquaculture_size_around]',
'$array_for_sql[aquaculture_1_1_1]',
'$array_for_sql[aquaculture_1_2_1]',
'$array_for_sql[aquaculture_1_1_2]',
'$array_for_sql[aquaculture_1_2_2]',
'$array_for_sql[aquaculture_1_1_3]',
'$array_for_sql[aquaculture_1_2_3]',
'$array_for_sql[aquaculture_3_1_1]',
'$array_for_sql[aquaculture_3_2_1]',
'$array_for_sql[aquaculture_3_1_2]',
'$array_for_sql[aquaculture_3_2_2]',
'$array_for_sql[aquaculture_3_1_3]',
'$array_for_sql[aquaculture_3_2_3]',
'$array_for_sql[traid_aquaculture_b]',
'$array_for_sql[traid_aquaculture_general]',
'$array_for_sql[export_aquaculture_b]',
'$array_for_sql[export_aquaculture_general]',
'$array_for_sql[export_aquaculture_wait]',
'$array_for_sql[import_aquaculture_wait]',
'$array_for_sql[production_processing_products_for_use_as_food]',
'$array_for_sql[traid_processing_products_for_use_as_food]',
'$array_for_sql[export_processing_products_for_use_as_food]',
'$array_for_sql[activities_in_food_processing]',
'$array_for_sql[food_general]',
'$array_for_sql[food_for_certificationt]',
'$array_for_sql[food_emploe]',
'$array_for_sql[wine_industry]',
'$array_for_sql[wine_industry_general]',
'$array_for_sql[wine_industry_certificationt]',
'$array_for_sql[wine_industry_emploe]',
'$array_for_sql[traid_processing_products_for_use_as_food_b]',
'$array_for_sql[traid_processing_products_for_use_as_food_general]',
'$array_for_sql[export_processing_products_for_use_as_food_b]',
'$array_for_sql[export_processing_products_for_use_as_food_general]',
'$array_for_sql[export_processing_products_for_use_as_food_wait]',
'$array_for_sql[import_processing_products_for_use_as_food_wait]',
'$array_for_sql[production_processing_products_for_use_as_feed]',
'$array_for_sql[traid_processing_products_for_use_as_feed]',
'$array_for_sql[xport_processing_products_for_use_as_feed]',
'$array_for_sql[feed_general]',
'$array_for_sql[feed_for_certificationt]',
'$array_for_sql[feed_emploe]',
'$array_for_sql[traid_processing_products_for_use_as_feed_b]',
'$array_for_sql[traid_processing_products_for_use_as_feed_general]',
'$array_for_sql[export_processing_products_for_use_as_feed_b]',
'$array_for_sql[export_processing_products_for_use_as_feed_general]',
'$array_for_sql[export_processing_products_for_use_as_feed_wait]',
'$array_for_sql[import_processing_products_for_use_as_feed_wait]',
'$array_for_sql[production_growing_seedlings_and_seed]',
'$array_for_sql[traid_growing_seedlings_and_seed]',
'$array_for_sql[export_growing_seedlings_and_seed]',
'$array_for_sql[crop_production_F_size]',
'$array_for_sql[crop_production_organic_F_size]',
'$array_for_sql[growing_seedlings_and_seed_after]',
'$array_for_sql[growing_seedlings_and_seed_after_about_b]',
'$array_for_sql[traid_growing_seedlings_and_seed_b]',
'$array_for_sql[traid_growing_seedlings_and_seed_general]',
'$array_for_sql[export_growing_seedlings_and_seed_b]',
'$array_for_sql[export_growing_seedlings_and_seed_general]',
'$array_for_sql[export_growing_seedlings_and_seed_wait]',
'$array_for_sql[import_growing_seedlings_and_seed_wait]',
'$array_for_sql[export1_manager_for_all_name]',
'$array_for_sql[export1_manager_for_all_surname]',
'$array_for_sql[export1_manager_for_all_phone]',
'$array_for_sql[export1_manager_for_all_email]',
'$array_for_sql[standard_eu]',
'$array_for_sql[standard_nop]',
'$array_for_sql[standard_jas]',
'$array_for_sql[standard_bs]',
'$array_for_sql[standard_krav]',
'$array_for_sql[standard_naturland]',
'$array_for_sql[agree_p]',
'$file'
)";


// -------------------------------------------------- INSERT to table MANDATOR ----------------------------------------

$sql_mandator = "INSERT INTO Mandator (
company_status,
company_name_UA,
company_name_EN,
company_id,
general_manager_name,
general_manager_surname,
general_manager_phone,
general_manager_email,
responsible_manager_name,
responsible_manager_surname,
responsible_manager_phone,
responsible_manager_email,
finance_manager_name,
finance_manager_surname,
finance_manager_phone,
finance_manager_email,
legal_address_country,
legal_address_region,
legal_address_district,
legal_address_city,
legal_address_index,
legal_address_street,
post_address_country,
post_address_region,
post_address_district,
post_address_city,
post_address_index,
post_address_street,
production_address_country,
production_address_region,
production_address_district,
production_address_city,
production_address_index,
production_address_street,
company_phone,
company_email,
company_web,
company_consultant,
company_consultant_phone,
company_consultant_email,
the_same_company,
file_name
)
VALUES ('$array_for_sql[company_status]',
'$array_for_sql[company_name_UA]',
'$array_for_sql[company_name_EN]',
'$array_for_sql[company_id]',
'$array_for_sql[general_manager_name]',
'$array_for_sql[general_manager_surname]',
'$array_for_sql[general_manager_phone]',
'$array_for_sql[general_manager_email]',
'$array_for_sql[responsible_manager_name]',
'$array_for_sql[responsible_manager_surname]',
'$array_for_sql[responsible_manager_phone]',
'$array_for_sql[responsible_manager_email]',
'$array_for_sql[finance_manager_name]',
'$array_for_sql[finance_manager_surname]',
'$array_for_sql[finance_manager_phone]',
'$array_for_sql[finance_manager_email]',
'$array_for_sql[legal_address_country]',
'$array_for_sql[legal_address_region]',
'$array_for_sql[legal_address_district]',
'$array_for_sql[legal_address_city]',
'$array_for_sql[legal_address_index]',
'$array_for_sql[legal_address_street]',
'$array_for_sql[post_address_country]',
'$array_for_sql[post_address_region]',
'$array_for_sql[post_address_district]',
'$array_for_sql[post_address_city]',
'$array_for_sql[post_address_index]',
'$array_for_sql[post_address_street]',
'$array_for_sql[production_address_country]',
'$array_for_sql[production_address_region]',
'$array_for_sql[production_address_district]',
'$array_for_sql[production_address_city]',
'$array_for_sql[production_address_index]',
'$array_for_sql[production_address_street]',
'$array_for_sql[company_phone]',
'$array_for_sql[company_email]',
'$array_for_sql[company_web]',
'$array_for_sql[company_consultant]',
'$array_for_sql[company_consultant_phone]',
'$array_for_sql[company_consultant_email]',
'$array_for_sql[the_same_company]',
'$file'
)";

// ------------------------------------------------------ add OPERATOR ---------------------------------------------
$sql_operator = "INSERT INTO Operator (ip_addres,
add_1_operator,
operator_company_status,
operator_company_name_UA,
operator_company_name_EN,
operator_company_id,
operator_general_manager_name,
operator_general_manager_surname,
operator_general_manager_phone,
operator_general_manager_email,
operator_responsible_manager_name,
operator_responsible_manager_surname,
operator_responsible_manager_phone,
operator_responsible_manager_email,
operator_legal_address_country,
operator_legal_address_region,
operator_legal_address_district,
operator_legal_address_city,
operator_legal_address_index,
operator_legal_address_street,
operator_post_address_country,
operator_post_address_region,
operator_post_address_district,
operator_post_address_city,
operator_post_address_index,
operator_post_address_street,
operator_production_address_country,
operator_production_address_region,
operator_production_address_district,
operator_production_address_city,
operator_production_address_index,
operator_production_address_street,
operator_company_phone,
operator_company_email,
operator_company_web,
file_name
)
VALUES ('$ip',
'$array_for_sql[add_1_operator]',
'$array_for_sql[operator_company_status]',
'$array_for_sql[operator_company_name_UA]',
'$array_for_sql[operator_company_name_EN]',
'$array_for_sql[operator_company_id]',
'$array_for_sql[operator_general_manager_name]',
'$array_for_sql[operator_general_manager_surname]',
'$array_for_sql[operator_general_manager_phone]',
'$array_for_sql[operator_general_manager_email]',
'$array_for_sql[operator_responsible_manager_name]',
'$array_for_sql[operator_responsible_manager_surname]',
'$array_for_sql[operator_responsible_manager_phone]',
'$array_for_sql[operator_responsible_manager_email]',
'$array_for_sql[operator_legal_address_country]',
'$array_for_sql[operator_legal_address_region]',
'$array_for_sql[operator_legal_address_district]',
'$array_for_sql[operator_legal_address_city]',
'$array_for_sql[operator_legal_address_index]',
'$array_for_sql[operator_legal_address_street]',
'$array_for_sql[operator_post_address_country]',
'$array_for_sql[operator_post_address_region]',
'$array_for_sql[operator_post_address_district]',
'$array_for_sql[operator_post_address_city]',
'$array_for_sql[operator_post_address_index]',
'$array_for_sql[operator_post_address_street]',
'$array_for_sql[operator_production_address_country]',
'$array_for_sql[operator_production_address_region]',
'$array_for_sql[operator_production_address_district]',
'$array_for_sql[operator_production_address_city]',
'$array_for_sql[operator_production_address_index]',
'$array_for_sql[operator_production_address_street]',
'$array_for_sql[operator_company_phone]',
'$array_for_sql[operator_company_email]',
'$array_for_sql[operator_company_web]',
'$file'
)";

//---------------------------------------------- ADD PID---------------------------------------------------------------


$sql_pid = "INSERT INTO pid_company (
add_pid,
pid_company_status,
pid_company_name_UA,
pid_company_name_EN,
pid_company_id,
pid_general_manager_name,
pid_general_manager_surname,
pid_general_manager_phone,
pid_general_manager_email,
pid_legal_address_country,
pid_legal_address_region,
pid_legal_address_district,
pid_legal_address_city,
pid_legal_address_index,
pid_legal_address_street,
pid_post_address_country,
pid_post_address_region,
pid_post_address_district,
pid_post_address_city,
pid_post_address_index,
pid_post_address_street,
pid_production_address_country,
pid_production_address_region,
pid_production_address_district,
pid_production_address_city,
pid_production_address_index,
pid_production_address_street,
pid_company_phone,
pid_company_email,
pid_company_web,
file_name
)
VALUES (
'$array_for_sql[add_pid]',
'$array_for_sql[pid_company_status]',
'$array_for_sql[pid_company_name_UA]',
'$array_for_sql[pid_company_name_EN]',
'$array_for_sql[pid_company_id]',
'$array_for_sql[pid_general_manager_name]',
'$array_for_sql[pid_general_manager_surname]',
'$array_for_sql[pid_general_manager_phone]',
'$array_for_sql[pid_general_manager_email]',
'$array_for_sql[pid_legal_address_country]',
'$array_for_sql[pid_legal_address_region]',
'$array_for_sql[pid_legal_address_district]',
'$array_for_sql[pid_legal_address_city]',
'$array_for_sql[pid_legal_address_index]',
'$array_for_sql[pid_legal_address_street]',
'$array_for_sql[pid_post_address_country]',
'$array_for_sql[pid_post_address_region]',
'$array_for_sql[pid_post_address_district]',
'$array_for_sql[pid_post_address_city]',
'$array_for_sql[pid_post_address_index]',
'$array_for_sql[pid_post_address_street]',
'$array_for_sql[pid_production_address_country]',
'$array_for_sql[pid_production_address_region]',
'$array_for_sql[pid_production_address_district]',
'$array_for_sql[pid_production_address_city]',
'$array_for_sql[pid_production_address_index]',
'$array_for_sql[pid_production_address_street]',
'$array_for_sql[pid_company_phone]',
'$array_for_sql[pid_company_email]',
'$array_for_sql[pid_company_web]',
'$file'
)";

//--------------------------------------------------------ADD PID 1

$sql_pid_1 = "INSERT INTO pid1_company (
add_pid_1,
pid_1_company_status,
pid_1_company_name_UA,
pid_1_company_name_EN,
pid_1_company_id,
pid_1_general_manager_name,
pid_1_general_manager_surname,
pid_1_general_manager_phone,
pid_1_general_manager_email,
pid_1_legal_address_country,
pid_1_legal_address_region,
pid_1_legal_address_district,
pid_1_legal_address_city,
pid_1_legal_address_index,
pid_1_legal_address_street,
pid_1_post_address_country,
pid_1_post_address_region,
pid_1_post_address_district,
pid_1_post_address_city,
pid_1_post_address_index,
pid_1_post_address_street,
pid_1_production_address_country,
pid_1_production_address_region,
pid_1_production_address_district,
pid_1_production_address_city,
pid_1_production_address_index,
pid_1_production_address_street,
pid_1_company_phone,
pid_1_company_email,
pid_1_company_web,
file_name
)
VALUES (
'$array_for_sql[add_pid_1]',
'$array_for_sql[pid_1_company_status]',
'$array_for_sql[pid_1_company_name_UA]',
'$array_for_sql[pid_1_company_name_EN]',
'$array_for_sql[pid_1_company_id]',
'$array_for_sql[pid_1_general_manager_name]',
'$array_for_sql[pid_1_general_manager_surname]',
'$array_for_sql[pid_1_general_manager_phone]',
'$array_for_sql[pid_1_general_manager_email]',
'$array_for_sql[pid_1_legal_address_country]',
'$array_for_sql[pid_1_legal_address_region]',
'$array_for_sql[pid_1_legal_address_district]',
'$array_for_sql[pid_1_legal_address_city]',
'$array_for_sql[pid_1_legal_address_index]',
'$array_for_sql[pid_1_legal_address_street]',
'$array_for_sql[pid_1_post_address_country]',
'$array_for_sql[pid_1_post_address_region]',
'$array_for_sql[pid_1_post_address_district]',
'$array_for_sql[pid_1_post_address_city]',
'$array_for_sql[pid_1_post_address_index]',
'$array_for_sql[pid_1_post_address_street]',
'$array_for_sql[pid_1_production_address_country]',
'$array_for_sql[pid_1_production_address_region]',
'$array_for_sql[pid_1_production_address_district]',
'$array_for_sql[pid_1_production_address_city]',
'$array_for_sql[pid_1_production_address_index]',
'$array_for_sql[pid_1_production_address_street]',
'$array_for_sql[pid_1_company_phone]',
'$array_for_sql[pid_1_company_email]',
'$array_for_sql[pid_1_company_web]',
'$file'
)";

// ------------------------------------------------- ADD pid_2------------------------------------------------

$sql_pid_2 = "INSERT INTO pid_2_company (
add_pid_2,
pid_2_company_status,
pid_2_company_name_UA,
pid_2_company_name_EN,
pid_2_company_id,
pid_2_general_manager_name,
pid_2_general_manager_surname,
pid_2_general_manager_phone,
pid_2_general_manager_email,
pid_2_legal_address_country,
pid_2_legal_address_region,
pid_2_legal_address_district,
pid_2_legal_address_city,
pid_2_legal_address_index,
pid_2_legal_address_street,
pid_2_post_address_country,
pid_2_post_address_region,
pid_2_post_address_district,
pid_2_post_address_city,
pid_2_post_address_index,
pid_2_post_address_street,
pid_2_production_address_country,
pid_2_production_address_region,
pid_2_production_address_district,
pid_2_production_address_city,
pid_2_production_address_index,
pid_2_production_address_street,
pid_2_company_phone,
pid_2_company_email,
pid_2_company_web,
file_name
)
VALUES (
'$array_for_sql[add_pid_2]',
'$array_for_sql[pid_2_company_status]',
'$array_for_sql[pid_2_company_name_UA]',
'$array_for_sql[pid_2_company_name_EN]',
'$array_for_sql[pid_2_company_id]',
'$array_for_sql[pid_2_general_manager_name]',
'$array_for_sql[pid_2_general_manager_surname]',
'$array_for_sql[pid_2_general_manager_phone]',
'$array_for_sql[pid_2_general_manager_email]',
'$array_for_sql[pid_2_legal_address_country]',
'$array_for_sql[pid_2_legal_address_region]',
'$array_for_sql[pid_2_legal_address_district]',
'$array_for_sql[pid_2_legal_address_city]',
'$array_for_sql[pid_2_legal_address_index]',
'$array_for_sql[pid_2_legal_address_street]',
'$array_for_sql[pid_2_post_address_country]',
'$array_for_sql[pid_2_post_address_region]',
'$array_for_sql[pid_2_post_address_district]',
'$array_for_sql[pid_2_post_address_city]',
'$array_for_sql[pid_2_post_address_index]',
'$array_for_sql[pid_2_post_address_street]',
'$array_for_sql[pid_2_production_address_country]',
'$array_for_sql[pid_2_production_address_region]',
'$array_for_sql[pid_2_production_address_district]',
'$array_for_sql[pid_2_production_address_city]',
'$array_for_sql[pid_2_production_address_index]',
'$array_for_sql[pid_2_production_address_street]',
'$array_for_sql[pid_2_company_phone]',
'$array_for_sql[pid_2_company_email]',
'$array_for_sql[pid_2_company_web]',
'$file'
)";


//-------------------------------------------ADD Activity ---------------------------------------------------------

$sql_activity = "INSERT INTO activity (
production_crop_production,
traid_crop_production,
export_crop_production,
crop_production_1,
crop_production_size,
crop_production_organic_size,
crop_production_organic_1_size,
crop_production_organic_2_size,
crop_production_organic_3_size,
crop_production_organic_4_size,
crop_production_after,
crop_production_after_about_a,
traid_crop_production_b,
traid_crop_production_general,
export_crop_production_b,
export_crop_production_general,
export_crop_production_wait,
import_crop_production_wait,
production_wild_collection,
traid_wild_collection,
export_wild_collection,
wild_collection_size,
wild_organic_collection_size,
wild_collection_1_1,
wild_collection_2_1,
wild_collection_3_1,
wild_collection_4_1,
wild_collection_1_2,
wild_collection_2_2,
wild_collection_3_2,
wild_collection_4_2,
wild_collection_1_3,
wild_collection_2_3,
wild_collection_3_3,
wild_collection_4_3,
wild_collection_1_4,
wild_collection_2_4,
wild_collection_3_4,
wild_collection_4_4,
wild_collection_1_5,
wild_collection_2_5,
wild_collection_3_5,
wild_collection_4_5,
wild_collection_1_6,
wild_collection_2_6,
wild_collection_3_6,
wild_collection_4_6,
wild_collection_1_7,
wild_collection_2_7,
wild_collection_3_7,
wild_collection_4_7,
wild_collection_after,
wild_collection_after_about_b,
traid_wild_collection_b,
traid_wild_collection_general,
export_wild_collection_b,
export_wild_collection_general,
export_wild_collection_wait,
import_wild_collection_wait,
production_animal_husbandry,
traid_animal_husbandry,
export_animal_husbandry,
vrh,
vrh_cow,
else_vrh,
pinck,
goat,
sheep,
poultry,
chickens,
turkeys,
ducks,
geese,
animal_husbandry_else,
traid_animal_husbandry_b,
traid_animal_husbandry_general,
export_animal_husbandry_b,
export_animal_husbandry_general,
export_animal_husbandry_wait,
import_animal_husbandry_wait,
production_beekeeping,
traid_beekeeping,
export_beekeeping,
beekeeping_all,
beekeeping_all_local,
beekeeping_all_migratory,
beekeeping_all_migratory_1,
beekeeping_1_1,
beekeeping_2_1,
beekeeping_3_1,
beekeeping_4_1,
beekeeping_5_1,
beekeeping_1_2,
beekeeping_2_2,
beekeeping_3_2,
beekeeping_4_2,
beekeeping_5_2,
beekeeping_1_3,
beekeeping_2_3,
beekeeping_3_3,
beekeeping_4_3,
beekeeping_5_3,
beekeeping_1_4,
beekeeping_2_4,
beekeeping_3_4,
beekeeping_4_4,
beekeeping_5_4,
traid_beekeeping_b,
traid_beekeeping_general,
export_beekeeping_b,
export_beekeeping_general,
export_beekeeping_wait,
import_beekeeping_wait,
production_aquaculture,
traid_aquaculture,
export_aquaculture,
aquaculture_size,
aquaculture_organic_size,
aquaculture_size_around,
aquaculture_1_1_1,
aquaculture_1_2_1,
aquaculture_1_1_2,
aquaculture_1_2_2,
aquaculture_1_1_3,
aquaculture_1_2_3,
aquaculture_3_1_1,
aquaculture_3_2_1,
aquaculture_3_1_2,
aquaculture_3_2_2,
aquaculture_3_1_3,
aquaculture_3_2_3,
traid_aquaculture_b,
traid_aquaculture_general,
export_aquaculture_b,
export_aquaculture_general,
export_aquaculture_wait,
import_aquaculture_wait,
production_processing_products_for_use_as_food,
traid_processing_products_for_use_as_food,
export_processing_products_for_use_as_food,
activities_in_food_processing,
food_general,
food_for_certificationt,
food_emploe,
wine_industry,
wine_industry_general,
wine_industry_certificationt,
wine_industry_emploe,
traid_processing_products_for_use_as_food_b,
traid_processing_products_for_use_as_food_general,
export_processing_products_for_use_as_food_b,
export_processing_products_for_use_as_food_general,
export_processing_products_for_use_as_food_wait,
import_processing_products_for_use_as_food_wait,
production_processing_products_for_use_as_feed,
traid_processing_products_for_use_as_feed,
export_processing_products_for_use_as_feed,
feed_general,
feed_for_certificationt,
feed_emploe,
traid_processing_products_for_use_as_feed_b,
traid_processing_products_for_use_as_feed_general,
export_processing_products_for_use_as_feed_b,
export_processing_products_for_use_as_feed_general,
export_processing_products_for_use_as_feed_wait,
import_processing_products_for_use_as_feed_wait,
production_growing_seedlings_and_seed,
traid_growing_seedlings_and_seed,
export_growing_seedlings_and_seed,
crop_production_F_size,
crop_production_organic_F_size,
growing_seedlings_and_seed_after,
growing_seedlings_and_seed_after_about_b,
traid_growing_seedlings_and_seed_b,
traid_growing_seedlings_and_seed_general,
export_growing_seedlings_and_seed_b,
export_growing_seedlings_and_seed_general,
export_growing_seedlings_and_seed_wait,
import_growing_seedlings_and_seed_wait,
export1_manager_for_all_name,
export1_manager_for_all_surname,
export1_manager_for_all_phone,
export1_manager_for_all_email,
standard_eu,
standard_nop,
standard_jas,
standard_bs,
standard_krav,
standard_naturland,
agree_p,
file_name
)
VALUES (
'$array_for_sql[production_crop_production]',
'$array_for_sql[traid_crop_production]',
'$array_for_sql[export_crop_production]',
'$array_for_sql[crop_production_1]',
'$array_for_sql[crop_production_size]',
'$array_for_sql[crop_production_organic_size]',
'$array_for_sql[crop_production_organic_1_size]',
'$array_for_sql[crop_production_organic_2_size]',
'$array_for_sql[crop_production_organic_3_size]',
'$array_for_sql[crop_production_organic_4_size]',
'$array_for_sql[crop_production_after]',
'$array_for_sql[crop_production_after_about_a]',
'$array_for_sql[traid_crop_production_b]',
'$array_for_sql[traid_crop_production_general]',
'$array_for_sql[export_crop_production_b]',
'$array_for_sql[export_crop_production_general]',
'$array_for_sql[export_crop_production_wait]',
'$array_for_sql[import_crop_production_wait]',
'$array_for_sql[production_wild_collection]',
'$array_for_sql[traid_wild_collection]',
'$array_for_sql[export_wild_collection]',
'$array_for_sql[wild_collection_size]',
'$array_for_sql[wild_organic_collection_size]',
'$array_for_sql[wild_collection_1_1]',
'$array_for_sql[wild_collection_2_1]',
'$array_for_sql[wild_collection_3_1]',
'$array_for_sql[wild_collection_4_1]',
'$array_for_sql[wild_collection_1_2]',
'$array_for_sql[wild_collection_2_2]',
'$array_for_sql[wild_collection_3_2]',
'$array_for_sql[wild_collection_4_2]',
'$array_for_sql[wild_collection_1_3]',
'$array_for_sql[wild_collection_2_3]',
'$array_for_sql[wild_collection_3_3]',
'$array_for_sql[wild_collection_4_3]',
'$array_for_sql[wild_collection_1_4]',
'$array_for_sql[wild_collection_2_4]',
'$array_for_sql[wild_collection_3_4]',
'$array_for_sql[wild_collection_4_4]',
'$array_for_sql[wild_collection_1_5]',
'$array_for_sql[wild_collection_2_5]',
'$array_for_sql[wild_collection_3_5]',
'$array_for_sql[wild_collection_4_5]',
'$array_for_sql[wild_collection_1_6]',
'$array_for_sql[wild_collection_2_6]',
'$array_for_sql[wild_collection_3_6]',
'$array_for_sql[wild_collection_4_6]',
'$array_for_sql[wild_collection_1_7]',
'$array_for_sql[wild_collection_2_7]',
'$array_for_sql[wild_collection_3_7]',
'$array_for_sql[wild_collection_4_7]',
'$array_for_sql[wild_collection_after]',
'$array_for_sql[wild_collection_after_about_b]',
'$array_for_sql[traid_wild_collection_b]',
'$array_for_sql[traid_wild_collection_general]',
'$array_for_sql[export_wild_collection_b]',
'$array_for_sql[export_wild_collection_general]',
'$array_for_sql[export_wild_collection_wait]',
'$array_for_sql[import_wild_collection_wait]',
'$array_for_sql[production_animal_husbandry]',
'$array_for_sql[traid_animal_husbandry]',
'$array_for_sql[export_animal_husbandry]',
'$array_for_sql[vrh]',
'$array_for_sql[vrh_cow]',
'$array_for_sql[else_vrh]',
'$array_for_sql[pinck]',
'$array_for_sql[goat]',
'$array_for_sql[sheep]',
'$array_for_sql[poultry]',
'$array_for_sql[chickens]',
'$array_for_sql[turkeys]',
'$array_for_sql[ducks]',
'$array_for_sql[geese]',
'$array_for_sql[animal_husbandry_else]',
'$array_for_sql[traid_animal_husbandry_b]',
'$array_for_sql[traid_animal_husbandry_general]',
'$array_for_sql[export_animal_husbandry_b]',
'$array_for_sql[export_animal_husbandry_general]',
'$array_for_sql[export_animal_husbandry_wait]',
'$array_for_sql[import_animal_husbandry_wait]',
'$array_for_sql[production_beekeeping]',
'$array_for_sql[traid_beekeeping]',
'$array_for_sql[export_beekeeping]',
'$array_for_sql[beekeeping_all]',
'$array_for_sql[beekeeping_all_local]',
'$array_for_sql[beekeeping_all_migratory]',
'$array_for_sql[beekeeping_all_migratory_1]',
'$array_for_sql[beekeeping_1_1]',
'$array_for_sql[beekeeping_2_1]',
'$array_for_sql[beekeeping_3_1]',
'$array_for_sql[beekeeping_4_1]',
'$array_for_sql[beekeeping_5_1]',
'$array_for_sql[beekeeping_1_2]',
'$array_for_sql[beekeeping_2_2]',
'$array_for_sql[beekeeping_3_2]',
'$array_for_sql[beekeeping_4_2]',
'$array_for_sql[beekeeping_5_2]',
'$array_for_sql[beekeeping_1_3]',
'$array_for_sql[beekeeping_2_3]',
'$array_for_sql[beekeeping_3_3]',
'$array_for_sql[beekeeping_4_3]',
'$array_for_sql[beekeeping_5_3]',
'$array_for_sql[beekeeping_1_4]',
'$array_for_sql[beekeeping_2_4]',
'$array_for_sql[beekeeping_3_4]',
'$array_for_sql[beekeeping_4_4]',
'$array_for_sql[beekeeping_5_4]',
'$array_for_sql[traid_beekeeping_b]',
'$array_for_sql[traid_beekeeping_general]',
'$array_for_sql[export_beekeeping_b]',
'$array_for_sql[export_beekeeping_general]',
'$array_for_sql[export_beekeeping_wait]',
'$array_for_sql[import_beekeeping_wait]',
'$array_for_sql[production_aquaculture]',
'$array_for_sql[traid_aquaculture]',
'$array_for_sql[export_aquaculture]',
'$array_for_sql[aquaculture_size]',
'$array_for_sql[aquaculture_organic_size]',
'$array_for_sql[aquaculture_size_around]',
'$array_for_sql[aquaculture_1_1_1]',
'$array_for_sql[aquaculture_1_2_1]',
'$array_for_sql[aquaculture_1_1_2]',
'$array_for_sql[aquaculture_1_2_2]',
'$array_for_sql[aquaculture_1_1_3]',
'$array_for_sql[aquaculture_1_2_3]',
'$array_for_sql[aquaculture_3_1_1]',
'$array_for_sql[aquaculture_3_2_1]',
'$array_for_sql[aquaculture_3_1_2]',
'$array_for_sql[aquaculture_3_2_2]',
'$array_for_sql[aquaculture_3_1_3]',
'$array_for_sql[aquaculture_3_2_3]',
'$array_for_sql[traid_aquaculture_b]',
'$array_for_sql[traid_aquaculture_general]',
'$array_for_sql[export_aquaculture_b]',
'$array_for_sql[export_aquaculture_general]',
'$array_for_sql[export_aquaculture_wait]',
'$array_for_sql[import_aquaculture_wait]',
'$array_for_sql[production_processing_products_for_use_as_food]',
'$array_for_sql[traid_processing_products_for_use_as_food]',
'$array_for_sql[export_processing_products_for_use_as_food]',
'$array_for_sql[activities_in_food_processing]',
'$array_for_sql[food_general]',
'$array_for_sql[food_for_certificationt]',
'$array_for_sql[food_emploe]',
'$array_for_sql[wine_industry]',
'$array_for_sql[wine_industry_general]',
'$array_for_sql[wine_industry_certificationt]',
'$array_for_sql[wine_industry_emploe]',
'$array_for_sql[traid_processing_products_for_use_as_food_b]',
'$array_for_sql[traid_processing_products_for_use_as_food_general]',
'$array_for_sql[export_processing_products_for_use_as_food_b]',
'$array_for_sql[export_processing_products_for_use_as_food_general]',
'$array_for_sql[export_processing_products_for_use_as_food_wait]',
'$array_for_sql[import_processing_products_for_use_as_food_wait]',
'$array_for_sql[production_processing_products_for_use_as_feed]',
'$array_for_sql[traid_processing_products_for_use_as_feed]',
'$array_for_sql[xport_processing_products_for_use_as_feed]',
'$array_for_sql[feed_general]',
'$array_for_sql[feed_for_certificationt]',
'$array_for_sql[feed_emploe]',
'$array_for_sql[traid_processing_products_for_use_as_feed_b]',
'$array_for_sql[traid_processing_products_for_use_as_feed_general]',
'$array_for_sql[export_processing_products_for_use_as_feed_b]',
'$array_for_sql[export_processing_products_for_use_as_feed_general]',
'$array_for_sql[export_processing_products_for_use_as_feed_wait]',
'$array_for_sql[import_processing_products_for_use_as_feed_wait]',
'$array_for_sql[production_growing_seedlings_and_seed]',
'$array_for_sql[traid_growing_seedlings_and_seed]',
'$array_for_sql[export_growing_seedlings_and_seed]',
'$array_for_sql[crop_production_F_size]',
'$array_for_sql[crop_production_organic_F_size]',
'$array_for_sql[growing_seedlings_and_seed_after]',
'$array_for_sql[growing_seedlings_and_seed_after_about_b]',
'$array_for_sql[traid_growing_seedlings_and_seed_b]',
'$array_for_sql[traid_growing_seedlings_and_seed_general]',
'$array_for_sql[export_growing_seedlings_and_seed_b]',
'$array_for_sql[export_growing_seedlings_and_seed_general]',
'$array_for_sql[export_growing_seedlings_and_seed_wait]',
'$array_for_sql[import_growing_seedlings_and_seed_wait]',
'$array_for_sql[export1_manager_for_all_name]',
'$array_for_sql[export1_manager_for_all_surname]',
'$array_for_sql[export1_manager_for_all_phone]',
'$array_for_sql[export1_manager_for_all_email]',
'$array_for_sql[standard_eu]',
'$array_for_sql[standard_nop]',
'$array_for_sql[standard_jas]',
'$array_for_sql[standard_bs]',
'$array_for_sql[standard_krav]',
'$array_for_sql[standard_naturland]',
'$array_for_sql[agree_p]',
'$file'
)";





if ($conn->query($sql) == TRUE)  
{
    //echo "New record created successfully in application";
} else 
{
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql_mandator) == TRUE)  
{
    //echo "New record created successfully in mandator";
} else 
{
    //echo "Error: " . $sql_mandator . "<br>" . $conn->error;
}
if ($conn->query($sql_operator) == TRUE)
{
    //echo "New record created successfully in operator";
} else 
{
    //echo "Error: " . $sql_operator . "<br>" . $conn->error;
}
if ($conn->query($sql_pid) == TRUE)
{
    //echo "New record created successfully in pid_company";
} else 
{
    //echo "Error: " . $sql_pid . "<br>" . $conn->error;
}
if ($conn->query($sql_pid_1) == TRUE)
{
    //echo "New record created successfully in pid1_company";
} else 
{
    //echo "Error: " . $sql_pid_1 . "<br>" . $conn->error;
}
if  ($conn->query($sql_pid_2) == TRUE) 
{
    //echo "New record created successfully in pid_2_company";
}
else 
{
    //echo "Error: " . $sql_pid_2 . "<br>" . $conn->error;
}
if  ($conn->query($sql_activity) == TRUE) 
{
    //echo "New record created successfully in activity";
} else 
{
    //echo "Error: " . $sql_activity . "<br>" . $conn->error;
}

$conn->close();
unlink($tmpfname);
}
else{





    $json_string = json_encode($_POST);

     $path = ('../application/' . $_POST[questionnaire_id]);
    
    $_POST[questionnaire_id] = basename($_POST[questionnaire_id]);

    file_put_contents($path, $json_string);

$to = "dz@organicstandard.com.ua"; //Кому
      $message = "id = ". $_POST[questionnaire_id] . "\r\nTo see application click: http://reg.organicstandard.com.ua/application/application.php?id=edit/" . "$_POST[questionnaire_id]" . "&readonly\r\n to modify application click: http://reg.organicstandard.com.ua/application/application.php?id=edit/" . "$_POST[questionnaire_id]";
    $topic = "$array_for_sql[company_name_EN]" . " - modified application" ;

    $headers = 'From: office@organicstandard.com.ua' . "\r\n" .
    'Cc: or@organicstandard.com.ua' . "\r\n" .
    'Reply-To: ' . "$_POST[company_email]" . "\r\n" .
    //'Cc: or@organicstandard.com.ua' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail ($to, $topic , $message, $headers);

 

//-------------------------------UPDATE table---------------------------------



  // Цикл по утстановке чекбоксам значения "1" и "0"
$array = array("the_same_company",
"add_1_operator",
"add_pid",
"add_1_pid",
"add_2_pid",
"production_crop_production",
"traid_crop_production",
"export_crop_production",
"crop_production_1",
"crop_production_after",
"production_wild_collection",
"traid_wild_collection",
"export_wild_collection",
"wild_collection_after",
"production_animal_husbandry",
"traid_animal_husbandry",
"export_animal_husbandry",
"vrh",
"poultry",
"production_beekeeping",
"traid_beekeeping",
"export_beekeeping",
"production_aquaculture",
"traid_aquaculture",
"export_aquaculture",
"production_processing_products_for_use_as_food",
"traid_processing_products_for_use_as_food",
"export_processing_products_for_use_as_food",
"activities_in_food_processing",
"wine_industry",
"production_processing_products_for_use_as_feed",
"traid_processing_products_for_use_as_feed",
"export_processing_products_for_use_as_feed",
"production_growing_seedlings_and_seed",
"traid_growing_seedlings_and_seed",
"export_growing_seedlings_and_seed",
"growing_seedlings_and_seed_after",
"standard_eu",
"standard_nop",
"standard_jas",
"standard_bs",
"standard_krav",
"standard_naturland");

foreach ($array as $index => $value) {
  if (($array_for_sql[$value]) == "on")
{
   $array_for_sql[$value] = 1;
}
else
{
   $array_for_sql[$value] = 0;  
}  

}




// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$sql = "UPDATE application 

SET

company_status = '$array_for_sql[company_status]',
company_name_UA =   '$array_for_sql[company_name_UA]',
company_name_EN =   '$array_for_sql[company_name_EN]',
company_id =    '$array_for_sql[company_id]',
general_manager_name =  '$array_for_sql[general_manager_name]',
general_manager_surname =   '$array_for_sql[general_manager_surname]',
general_manager_phone = '$array_for_sql[general_manager_phone]',
general_manager_email = '$array_for_sql[general_manager_email]',
responsible_manager_name =  '$array_for_sql[responsible_manager_name]',
responsible_manager_surname =   '$array_for_sql[responsible_manager_surname]',
responsible_manager_phone = '$array_for_sql[responsible_manager_phone]',
responsible_manager_email = '$array_for_sql[responsible_manager_email]',
finance_manager_name =  '$array_for_sql[finance_manager_name]',
finance_manager_surname =   '$array_for_sql[finance_manager_surname]',
finance_manager_phone = '$array_for_sql[finance_manager_phone]',
finance_manager_email = '$array_for_sql[finance_manager_email]',
legal_address_country = '$array_for_sql[legal_address_country]',
legal_address_region =  '$array_for_sql[legal_address_region]',
legal_address_district =    '$array_for_sql[legal_address_district]',
legal_address_city =    '$array_for_sql[legal_address_city]',
legal_address_index =   '$array_for_sql[legal_address_index]',
legal_address_street =  '$array_for_sql[legal_address_street]',
post_address_country =  '$array_for_sql[post_address_country]',
post_address_region =   '$array_for_sql[post_address_region]',
post_address_district = '$array_for_sql[post_address_district]',
post_address_city = '$array_for_sql[post_address_city]',
post_address_index =    '$array_for_sql[post_address_index]',
post_address_street =   '$array_for_sql[post_address_street]',
production_address_country =    '$array_for_sql[production_address_country]',
production_address_region = '$array_for_sql[production_address_region]',
production_address_district =   '$array_for_sql[production_address_district]',
production_address_city =   '$array_for_sql[production_address_city]',
production_address_index =  '$array_for_sql[production_address_index]',
production_address_street = '$array_for_sql[production_address_street]',
company_phone = '$array_for_sql[company_phone]',
company_email = '$array_for_sql[company_email]',
company_web =   '$array_for_sql[company_web]',
company_consultant =    '$array_for_sql[company_consultant]',
company_consultant_phone = '$array_for_sql[company_consultant_phone]',
company_consultant_email = '$array_for_sql[company_consultant_email]',
the_same_company =  '$array_for_sql[the_same_company]',
add_1_operator =    '$array_for_sql[add_1_operator]',
operator_company_status =   '$array_for_sql[operator_company_status]',
operator_company_name_UA =  '$array_for_sql[operator_company_name_UA]',
operator_company_name_EN =  '$array_for_sql[operator_company_name_EN]',
operator_company_id =   '$array_for_sql[operator_company_id]',
operator_general_manager_name = '$array_for_sql[operator_general_manager_name]',
operator_general_manager_surname =  '$array_for_sql[operator_general_manager_surname]',
operator_general_manager_phone =    '$array_for_sql[operator_general_manager_phone]',
operator_general_manager_email =    '$array_for_sql[operator_general_manager_email]',
operator_responsible_manager_name = '$array_for_sql[operator_responsible_manager_name]',
operator_responsible_manager_surname =  '$array_for_sql[operator_responsible_manager_surname]',
operator_responsible_manager_phone =    '$array_for_sql[operator_responsible_manager_phone]',
operator_responsible_manager_email =    '$array_for_sql[operator_responsible_manager_email]',
operator_legal_address_country =    '$array_for_sql[operator_legal_address_country]',
operator_legal_address_region = '$array_for_sql[operator_legal_address_region]',
operator_legal_address_district =   '$array_for_sql[operator_legal_address_district]',
operator_legal_address_city =   '$array_for_sql[operator_legal_address_city]',
operator_legal_address_index =  '$array_for_sql[operator_legal_address_index]',
operator_legal_address_street = '$array_for_sql[operator_legal_address_street]',
operator_post_address_country = '$array_for_sql[operator_post_address_country]',
operator_post_address_region =  '$array_for_sql[operator_post_address_region]',
operator_post_address_district =    '$array_for_sql[operator_post_address_district]',
operator_post_address_city =    '$array_for_sql[operator_post_address_city]',
operator_post_address_index =   '$array_for_sql[operator_post_address_index]',
operator_post_address_street =  '$array_for_sql[operator_post_address_street]',
operator_production_address_country =   '$array_for_sql[operator_production_address_country]',
operator_production_address_region =    '$array_for_sql[operator_production_address_region]',
operator_production_address_district =  '$array_for_sql[operator_production_address_district]',
operator_production_address_city =  '$array_for_sql[operator_production_address_city]',
operator_production_address_index = '$array_for_sql[operator_production_address_index]',
operator_production_address_street =    '$array_for_sql[operator_production_address_street]',
operator_company_phone =    '$array_for_sql[operator_company_phone]',
operator_company_email =    '$array_for_sql[operator_company_email]',
operator_company_web =  '$array_for_sql[operator_company_web]',
add_pid =   '$array_for_sql[add_pid]',
pid_company_status =    '$array_for_sql[pid_company_status]',
pid_company_name_UA =   '$array_for_sql[pid_company_name_UA]',
pid_company_name_EN =   '$array_for_sql[pid_company_name_EN]',
pid_company_id =    '$array_for_sql[pid_company_id]',
pid_general_manager_name =  '$array_for_sql[pid_general_manager_name]',
pid_general_manager_surname =   '$array_for_sql[pid_general_manager_surname]',
pid_general_manager_phone = '$array_for_sql[pid_general_manager_phone]',
pid_general_manager_email = '$array_for_sql[pid_general_manager_email]',
pid_legal_address_country = '$array_for_sql[pid_legal_address_country]',
pid_legal_address_region =  '$array_for_sql[pid_legal_address_region]',
pid_legal_address_district =    '$array_for_sql[pid_legal_address_district]',
pid_legal_address_city =    '$array_for_sql[pid_legal_address_city]',
pid_legal_address_index =   '$array_for_sql[pid_legal_address_index]',
pid_legal_address_street =  '$array_for_sql[pid_legal_address_street]',
pid_post_address_country =  '$array_for_sql[pid_post_address_country]',
pid_post_address_region =   '$array_for_sql[pid_post_address_region]',
pid_post_address_district = '$array_for_sql[pid_post_address_district]',
pid_post_address_city = '$array_for_sql[pid_post_address_city]',
pid_post_address_index =    '$array_for_sql[pid_post_address_index]',
pid_post_address_street =   '$array_for_sql[pid_post_address_street]',
pid_production_address_country =    '$array_for_sql[pid_production_address_country]',
pid_production_address_region = '$array_for_sql[pid_production_address_region]',
pid_production_address_district =   '$array_for_sql[pid_production_address_district]',
pid_production_address_city =   '$array_for_sql[pid_production_address_city]',
pid_production_address_index =  '$array_for_sql[pid_production_address_index]',
pid_production_address_street = '$array_for_sql[pid_production_address_street]',
pid_company_phone = '$array_for_sql[pid_company_phone]',
pid_company_email = '$array_for_sql[pid_company_email]',
pid_company_web =   '$array_for_sql[pid_company_web]',
add_pid_1 = '$array_for_sql[add_pid_1]',
pid_1_company_status =  '$array_for_sql[pid_1_company_status]',
pid_1_company_name_UA = '$array_for_sql[pid_1_company_name_UA]',
pid_1_company_name_EN = '$array_for_sql[pid_1_company_name_EN]',
pid_1_company_id =  '$array_for_sql[pid_1_company_id]',
pid_1_general_manager_name =    '$array_for_sql[pid_1_general_manager_name]',
pid_1_general_manager_surname = '$array_for_sql[pid_1_general_manager_surname]',
pid_1_general_manager_phone =   '$array_for_sql[pid_1_general_manager_phone]',
pid_1_general_manager_email =   '$array_for_sql[pid_1_general_manager_email]',
pid_1_legal_address_country =   '$array_for_sql[pid_1_legal_address_country]',
pid_1_legal_address_region =    '$array_for_sql[pid_1_legal_address_region]',
pid_1_legal_address_district =  '$array_for_sql[pid_1_legal_address_district]',
pid_1_legal_address_city =  '$array_for_sql[pid_1_legal_address_city]',
pid_1_legal_address_index = '$array_for_sql[pid_1_legal_address_index]',
pid_1_legal_address_street =    '$array_for_sql[pid_1_legal_address_street]',
pid_1_post_address_country =    '$array_for_sql[pid_1_post_address_country]',
pid_1_post_address_region = '$array_for_sql[pid_1_post_address_region]',
pid_1_post_address_district =   '$array_for_sql[pid_1_post_address_district]',
pid_1_post_address_city =   '$array_for_sql[pid_1_post_address_city]',
pid_1_post_address_index =  '$array_for_sql[pid_1_post_address_index]',
pid_1_post_address_street = '$array_for_sql[pid_1_post_address_street]',
pid_1_production_address_country =  '$array_for_sql[pid_1_production_address_country]',
pid_1_production_address_region =   '$array_for_sql[pid_1_production_address_region]',
pid_1_production_address_district = '$array_for_sql[pid_1_production_address_district]',
pid_1_production_address_city = '$array_for_sql[pid_1_production_address_city]',
pid_1_production_address_index =    '$array_for_sql[pid_1_production_address_index]',
pid_1_production_address_street =   '$array_for_sql[pid_1_production_address_street]',
pid_1_company_phone =   '$array_for_sql[pid_1_company_phone]',
pid_1_company_email =   '$array_for_sql[pid_1_company_email]',
pid_1_company_web = '$array_for_sql[pid_1_company_web]',
add_pid_2 = '$array_for_sql[add_pid_2]',
pid_2_company_status =  '$array_for_sql[pid_2_company_status]',
pid_2_company_name_UA = '$array_for_sql[pid_2_company_name_UA]',
pid_2_company_name_EN = '$array_for_sql[pid_2_company_name_EN]',
pid_2_company_id =  '$array_for_sql[pid_2_company_id]',
pid_2_general_manager_name =    '$array_for_sql[pid_2_general_manager_name]',
pid_2_general_manager_surname = '$array_for_sql[pid_2_general_manager_surname]',
pid_2_general_manager_phone =   '$array_for_sql[pid_2_general_manager_phone]',
pid_2_general_manager_email =   '$array_for_sql[pid_2_general_manager_email]',
pid_2_legal_address_country =   '$array_for_sql[pid_2_legal_address_country]',
pid_2_legal_address_region =    '$array_for_sql[pid_2_legal_address_region]',
pid_2_legal_address_district =  '$array_for_sql[pid_2_legal_address_district]',
pid_2_legal_address_city =  '$array_for_sql[pid_2_legal_address_city]',
pid_2_legal_address_index = '$array_for_sql[pid_2_legal_address_index]',
pid_2_legal_address_street =    '$array_for_sql[pid_2_legal_address_street]',
pid_2_post_address_country =    '$array_for_sql[pid_2_post_address_country]',
pid_2_post_address_region = '$array_for_sql[pid_2_post_address_region]',
pid_2_post_address_district =   '$array_for_sql[pid_2_post_address_district]',
pid_2_post_address_city =   '$array_for_sql[pid_2_post_address_city]',
pid_2_post_address_index =  '$array_for_sql[pid_2_post_address_index]',
pid_2_post_address_street = '$array_for_sql[pid_2_post_address_street]',
pid_2_production_address_country =  '$array_for_sql[pid_2_production_address_country]',
pid_2_production_address_region =   '$array_for_sql[pid_2_production_address_region]',
pid_2_production_address_district = '$array_for_sql[pid_2_production_address_district]',
pid_2_production_address_city = '$array_for_sql[pid_2_production_address_city]',
pid_2_production_address_index =    '$array_for_sql[pid_2_production_address_index]',
pid_2_production_address_street =   '$array_for_sql[pid_2_production_address_street]',
pid_2_company_phone =   '$array_for_sql[pid_2_company_phone]',
pid_2_company_email =   '$array_for_sql[pid_2_company_email]',
pid_2_company_web = '$array_for_sql[pid_2_company_web]',
production_crop_production =    '$array_for_sql[production_crop_production]',
traid_crop_production = '$array_for_sql[traid_crop_production]',
export_crop_production =    '$array_for_sql[export_crop_production]',
crop_production_1 = '$array_for_sql[crop_production_1]',
crop_production_size =  '$array_for_sql[crop_production_size]',
crop_production_organic_size =  '$array_for_sql[crop_production_organic_size]',
crop_production_organic_1_size =    '$array_for_sql[crop_production_organic_1_size]',
crop_production_organic_2_size =    '$array_for_sql[crop_production_organic_2_size]',
crop_production_organic_3_size =    '$array_for_sql[crop_production_organic_3_size]',
crop_production_organic_4_size =    '$array_for_sql[crop_production_organic_4_size]',
crop_production_after = '$array_for_sql[crop_production_after]',
crop_production_after_about_a = '$array_for_sql[crop_production_after_about_a]',
traid_crop_production_b =   '$array_for_sql[traid_crop_production_b]',
traid_crop_production_general = '$array_for_sql[traid_crop_production_general]',
export_crop_production_b =  '$array_for_sql[export_crop_production_b]',
export_crop_production_general =    '$array_for_sql[export_crop_production_general]',
export_crop_production_wait =   '$array_for_sql[export_crop_production_wait]',
import_crop_production_wait =   '$array_for_sql[import_crop_production_wait]',
production_wild_collection =    '$array_for_sql[production_wild_collection]',
traid_wild_collection = '$array_for_sql[traid_wild_collection]',
export_wild_collection =    '$array_for_sql[export_wild_collection]',
wild_collection_size =  '$array_for_sql[wild_collection_size]',
wild_organic_collection_size =  '$array_for_sql[wild_organic_collection_size]',
wild_collection_1_1 =   '$array_for_sql[wild_collection_1_1]',
wild_collection_2_1 =   '$array_for_sql[wild_collection_2_1]',
wild_collection_3_1 =   '$array_for_sql[wild_collection_3_1]',
wild_collection_4_1 =   '$array_for_sql[wild_collection_4_1]',
wild_collection_1_2 =   '$array_for_sql[wild_collection_1_2]',
wild_collection_2_2 =   '$array_for_sql[wild_collection_2_2]',
wild_collection_3_2 =   '$array_for_sql[wild_collection_3_2]',
wild_collection_4_2 =   '$array_for_sql[wild_collection_4_2]',
wild_collection_1_3 =   '$array_for_sql[wild_collection_1_3]',
wild_collection_2_3 =   '$array_for_sql[wild_collection_2_3]',
wild_collection_3_3 =   '$array_for_sql[wild_collection_3_3]',
wild_collection_4_3 =   '$array_for_sql[wild_collection_4_3]',
wild_collection_1_4 =   '$array_for_sql[wild_collection_1_4]',
wild_collection_2_4 =   '$array_for_sql[wild_collection_2_4]',
wild_collection_3_4 =   '$array_for_sql[wild_collection_3_4]',
wild_collection_4_4 =   '$array_for_sql[wild_collection_4_4]',
wild_collection_1_5 =   '$array_for_sql[wild_collection_1_5]',
wild_collection_2_5 =   '$array_for_sql[wild_collection_2_5]',
wild_collection_3_5 =   '$array_for_sql[wild_collection_3_5]',
wild_collection_4_5 =   '$array_for_sql[wild_collection_4_5]',
wild_collection_1_6 =   '$array_for_sql[wild_collection_1_6]',
wild_collection_2_6 =   '$array_for_sql[wild_collection_2_6]',
wild_collection_3_6 =   '$array_for_sql[wild_collection_3_6]',
wild_collection_4_6 =   '$array_for_sql[wild_collection_4_6]',
wild_collection_1_7 =   '$array_for_sql[wild_collection_1_7]',
wild_collection_2_7 =   '$array_for_sql[wild_collection_2_7]',
wild_collection_3_7 =   '$array_for_sql[wild_collection_3_7]',
wild_collection_4_7 =   '$array_for_sql[wild_collection_4_7]',
wild_collection_after = '$array_for_sql[wild_collection_after]',
wild_collection_after_about_b = '$array_for_sql[wild_collection_after_about_b]',
traid_wild_collection_b =   '$array_for_sql[traid_wild_collection_b]',
traid_wild_collection_general = '$array_for_sql[traid_wild_collection_general]',
export_wild_collection_b =  '$array_for_sql[export_wild_collection_b]',
export_wild_collection_general =    '$array_for_sql[export_wild_collection_general]',
export_wild_collection_wait =   '$array_for_sql[export_wild_collection_wait]',
import_wild_collection_wait =   '$array_for_sql[import_wild_collection_wait]',
production_animal_husbandry =   '$array_for_sql[production_animal_husbandry]',
traid_animal_husbandry =    '$array_for_sql[traid_animal_husbandry]',
export_animal_husbandry =   '$array_for_sql[export_animal_husbandry]',
vrh =   '$array_for_sql[vrh]',
vrh_cow =   '$array_for_sql[vrh_cow]',
else_vrh =  '$array_for_sql[else_vrh]',
pinck = '$array_for_sql[pinck]',
goat =  '$array_for_sql[goat]',
sheep = '$array_for_sql[sheep]',
poultry =   '$array_for_sql[poultry]',
chickens =  '$array_for_sql[chickens]',
turkeys =   '$array_for_sql[turkeys]',
ducks = '$array_for_sql[ducks]',
geese = '$array_for_sql[geese]',
animal_husbandry_else = '$array_for_sql[animal_husbandry_else]',
traid_animal_husbandry_b =  '$array_for_sql[traid_animal_husbandry_b]',
traid_animal_husbandry_general =    '$array_for_sql[traid_animal_husbandry_general]',
export_animal_husbandry_b = '$array_for_sql[export_animal_husbandry_b]',
export_animal_husbandry_general =   '$array_for_sql[export_animal_husbandry_general]',
export_animal_husbandry_wait =  '$array_for_sql[export_animal_husbandry_wait]',
import_animal_husbandry_wait =  '$array_for_sql[import_animal_husbandry_wait]',
production_beekeeping = '$array_for_sql[production_beekeeping]',
traid_beekeeping =  '$array_for_sql[traid_beekeeping]',
export_beekeeping = '$array_for_sql[export_beekeeping]',
beekeeping_all =    '$array_for_sql[beekeeping_all]',
beekeeping_all_local =  '$array_for_sql[beekeeping_all_local]',
beekeeping_all_migratory =  '$array_for_sql[beekeeping_all_migratory]',
beekeeping_all_migratory_1 =    '$array_for_sql[beekeeping_all_migratory_1]',
beekeeping_1_1 =    '$array_for_sql[beekeeping_1_1]',
beekeeping_2_1 =    '$array_for_sql[beekeeping_2_1]',
beekeeping_3_1 =    '$array_for_sql[beekeeping_3_1]',
beekeeping_4_1 =    '$array_for_sql[beekeeping_4_1]',
beekeeping_5_1 =    '$array_for_sql[beekeeping_5_1]',
beekeeping_1_2 =    '$array_for_sql[beekeeping_1_2]',
beekeeping_2_2 =    '$array_for_sql[beekeeping_2_2]',
beekeeping_3_2 =    '$array_for_sql[beekeeping_3_2]',
beekeeping_4_2 =    '$array_for_sql[beekeeping_4_2]',
beekeeping_5_2 =    '$array_for_sql[beekeeping_5_2]',
beekeeping_1_3 =    '$array_for_sql[beekeeping_1_3]',
beekeeping_2_3 =    '$array_for_sql[beekeeping_2_3]',
beekeeping_3_3 =    '$array_for_sql[beekeeping_3_3]',
beekeeping_4_3 =    '$array_for_sql[beekeeping_4_3]',
beekeeping_5_3 =    '$array_for_sql[beekeeping_5_3]',
beekeeping_1_4 =    '$array_for_sql[beekeeping_1_4]',
beekeeping_2_4 =    '$array_for_sql[beekeeping_2_4]',
beekeeping_3_4 =    '$array_for_sql[beekeeping_3_4]',
beekeeping_4_4 =    '$array_for_sql[beekeeping_4_4]',
beekeeping_5_4 =    '$array_for_sql[beekeeping_5_4]',
traid_beekeeping_b =    '$array_for_sql[traid_beekeeping_b]',
traid_beekeeping_general =  '$array_for_sql[traid_beekeeping_general]',
export_beekeeping_b =   '$array_for_sql[export_beekeeping_b]',
export_beekeeping_general = '$array_for_sql[export_beekeeping_general]',
export_beekeeping_wait =    '$array_for_sql[export_beekeeping_wait]',
import_beekeeping_wait =    '$array_for_sql[import_beekeeping_wait]',
production_aquaculture =    '$array_for_sql[production_aquaculture]',
traid_aquaculture = '$array_for_sql[traid_aquaculture]',
export_aquaculture =    '$array_for_sql[export_aquaculture]',
aquaculture_size =  '$array_for_sql[aquaculture_size]',
aquaculture_organic_size =  '$array_for_sql[aquaculture_organic_size]',
aquaculture_size_around =   '$array_for_sql[aquaculture_size_around]',
aquaculture_1_1_1 = '$array_for_sql[aquaculture_1_1_1]', 
aquaculture_1_2_1 = '$array_for_sql[aquaculture_1_2_1]',
aquaculture_1_1_2 = '$array_for_sql[aquaculture_1_1_2]',
aquaculture_1_2_2 = '$array_for_sql[aquaculture_1_2_2]',
aquaculture_1_1_3 = '$array_for_sql[aquaculture_1_1_3]',
aquaculture_1_2_3 = '$array_for_sql[aquaculture_1_2_3]',
aquaculture_3_1_1 = '$array_for_sql[aquaculture_3_1_1]',
aquaculture_3_2_1 = '$array_for_sql[aquaculture_3_2_1]',
aquaculture_3_1_2 = '$array_for_sql[aquaculture_3_1_2]',
aquaculture_3_2_2 = '$array_for_sql[aquaculture_3_2_2]',
aquaculture_3_1_3 = '$array_for_sql[aquaculture_3_1_3]',
aquaculture_3_2_3 = '$array_for_sql[aquaculture_3_2_3]',
traid_aquaculture_b =   '$array_for_sql[traid_aquaculture_b]',
traid_aquaculture_general = '$array_for_sql[traid_aquaculture_general]',
export_aquaculture_b =  '$array_for_sql[export_aquaculture_b]',
export_aquaculture_general =    '$array_for_sql[export_aquaculture_general]',
export_aquaculture_wait =   '$array_for_sql[export_aquaculture_wait]',
import_aquaculture_wait =   '$array_for_sql[import_aquaculture_wait]',
production_processing_products_for_use_as_food =    '$array_for_sql[production_processing_products_for_use_as_food]',
traid_processing_products_for_use_as_food = '$array_for_sql[traid_processing_products_for_use_as_food]',
export_processing_products_for_use_as_food =    '$array_for_sql[export_processing_products_for_use_as_food]',
activities_in_food_processing = '$array_for_sql[activities_in_food_processing]',
food_general =  '$array_for_sql[food_general]',
food_for_certificationt =   '$array_for_sql[food_for_certificationt]',
food_emploe =   '$array_for_sql[food_emploe]',
wine_industry = '$array_for_sql[wine_industry]',
wine_industry_general = '$array_for_sql[wine_industry_general]',
wine_industry_certificationt =  '$array_for_sql[wine_industry_certificationt]',
wine_industry_emploe =  '$array_for_sql[wine_industry_emploe]',
traid_processing_products_for_use_as_food_b =   '$array_for_sql[traid_processing_products_for_use_as_food_b]',
traid_processing_products_for_use_as_food_general = '$array_for_sql[traid_processing_products_for_use_as_food_general]',
export_processing_products_for_use_as_food_b =  '$array_for_sql[export_processing_products_for_use_as_food_b]',
export_processing_products_for_use_as_food_general =    '$array_for_sql[export_processing_products_for_use_as_food_general]',
export_processing_products_for_use_as_food_wait =   '$array_for_sql[export_processing_products_for_use_as_food_wait]',
import_processing_products_for_use_as_food_wait =   '$array_for_sql[import_processing_products_for_use_as_food_wait]',
production_processing_products_for_use_as_feed =    '$array_for_sql[production_processing_products_for_use_as_feed]',
traid_processing_products_for_use_as_feed = '$array_for_sql[traid_processing_products_for_use_as_feed]',
export_processing_products_for_use_as_feed =    '$array_for_sql[xport_processing_products_for_use_as_feed]',
feed_general =  '$array_for_sql[feed_general]',
feed_for_certificationt =   '$array_for_sql[feed_for_certificationt]',
feed_emploe =   '$array_for_sql[feed_emploe]',
traid_processing_products_for_use_as_feed_b =   '$array_for_sql[traid_processing_products_for_use_as_feed_b]',
traid_processing_products_for_use_as_feed_general = '$array_for_sql[traid_processing_products_for_use_as_feed_general]',
export_processing_products_for_use_as_feed_b =  '$array_for_sql[export_processing_products_for_use_as_feed_b]',
export_processing_products_for_use_as_feed_general =    '$array_for_sql[export_processing_products_for_use_as_feed_general]',
export_processing_products_for_use_as_feed_wait =   '$array_for_sql[export_processing_products_for_use_as_feed_wait]',
import_processing_products_for_use_as_feed_wait =   '$array_for_sql[import_processing_products_for_use_as_feed_wait]',
production_growing_seedlings_and_seed = '$array_for_sql[production_growing_seedlings_and_seed]',
traid_growing_seedlings_and_seed =  '$array_for_sql[traid_growing_seedlings_and_seed]',
export_growing_seedlings_and_seed = '$array_for_sql[export_growing_seedlings_and_seed]',
crop_production_F_size =    '$array_for_sql[crop_production_F_size]',
crop_production_organic_F_size =    '$array_for_sql[crop_production_organic_F_size]',
growing_seedlings_and_seed_after =  '$array_for_sql[growing_seedlings_and_seed_after]',
growing_seedlings_and_seed_after_about_b =  '$array_for_sql[growing_seedlings_and_seed_after_about_b]',
traid_growing_seedlings_and_seed_b =    '$array_for_sql[traid_growing_seedlings_and_seed_b]',
traid_growing_seedlings_and_seed_general =  '$array_for_sql[traid_growing_seedlings_and_seed_general]',
export_growing_seedlings_and_seed_b =   '$array_for_sql[export_growing_seedlings_and_seed_b]',
export_growing_seedlings_and_seed_general = '$array_for_sql[export_growing_seedlings_and_seed_general]',
export_growing_seedlings_and_seed_wait =    '$array_for_sql[export_growing_seedlings_and_seed_wait]',
import_growing_seedlings_and_seed_wait =    '$array_for_sql[import_growing_seedlings_and_seed_wait]',
export1_manager_for_all_name =  '$array_for_sql[export1_manager_for_all_name]',
export1_manager_for_all_surname =   '$array_for_sql[export1_manager_for_all_surname]',
export1_manager_for_all_phone = '$array_for_sql[export1_manager_for_all_phone]',
export1_manager_for_all_email = '$array_for_sql[export1_manager_for_all_email]',
standard_eu =   '$array_for_sql[standard_eu]',
standard_nop =  '$array_for_sql[standard_nop]',
standard_jas =  '$array_for_sql[standard_jas]',
standard_bs =   '$array_for_sql[standard_bs]',
standard_krav = '$array_for_sql[standard_krav]',
standard_naturland = '$array_for_sql[standard_naturland]',
agree_p = '$array_for_sql[agree_p]'
where file_name = '$_POST[questionnaire_id]' ";



//----------------------------------Update Mandator ----------------------------------------------------------------

$sql_mandator = "UPDATE Mandator 

SET

company_status = '$array_for_sql[company_status]',
company_name_UA =   '$array_for_sql[company_name_UA]',
company_name_EN =   '$array_for_sql[company_name_EN]',
company_id =    '$array_for_sql[company_id]',
general_manager_name =  '$array_for_sql[general_manager_name]',
general_manager_surname =   '$array_for_sql[general_manager_surname]',
general_manager_phone = '$array_for_sql[general_manager_phone]',
general_manager_email = '$array_for_sql[general_manager_email]',
responsible_manager_name =  '$array_for_sql[responsible_manager_name]',
responsible_manager_surname =   '$array_for_sql[responsible_manager_surname]',
responsible_manager_phone = '$array_for_sql[responsible_manager_phone]',
responsible_manager_email = '$array_for_sql[responsible_manager_email]',
finance_manager_name =  '$array_for_sql[finance_manager_name]',
finance_manager_surname =   '$array_for_sql[finance_manager_surname]',
finance_manager_phone = '$array_for_sql[finance_manager_phone]',
finance_manager_email = '$array_for_sql[finance_manager_email]',
legal_address_country = '$array_for_sql[legal_address_country]',
legal_address_region =  '$array_for_sql[legal_address_region]',
legal_address_district =    '$array_for_sql[legal_address_district]',
legal_address_city =    '$array_for_sql[legal_address_city]',
legal_address_index =   '$array_for_sql[legal_address_index]',
legal_address_street =  '$array_for_sql[legal_address_street]',
post_address_country =  '$array_for_sql[post_address_country]',
post_address_region =   '$array_for_sql[post_address_region]',
post_address_district = '$array_for_sql[post_address_district]',
post_address_city = '$array_for_sql[post_address_city]',
post_address_index =    '$array_for_sql[post_address_index]',
post_address_street =   '$array_for_sql[post_address_street]',
production_address_country =    '$array_for_sql[production_address_country]',
production_address_region = '$array_for_sql[production_address_region]',
production_address_district =   '$array_for_sql[production_address_district]',
production_address_city =   '$array_for_sql[production_address_city]',
production_address_index =  '$array_for_sql[production_address_index]',
production_address_street = '$array_for_sql[production_address_street]',
company_phone = '$array_for_sql[company_phone]',
company_email = '$array_for_sql[company_email]',
company_web =   '$array_for_sql[company_web]',
company_consultant =    '$array_for_sql[company_consultant]',
company_consultant_phone = '$array_for_sql[company_consultant_phone]',
company_consultant_email = '$array_for_sql[company_consultant_email]',
the_same_company =  '$array_for_sql[the_same_company]'
where file_name = '$_POST[questionnaire_id]' ";



// --------------------------------------------- Update Operator ---------------------------------------------------

$sql_operator = "UPDATE Operator 

SET
add_1_operator =    '$_POST[add_1_operator]',
operator_company_status =   '$_POST[operator_company_status]',
operator_company_name_UA =  '$_POST[operator_company_name_UA]',
operator_company_name_EN =  '$_POST[operator_company_name_EN]',
operator_company_id =   '$_POST[operator_company_id]',
operator_general_manager_name = '$_POST[operator_general_manager_name]',
operator_general_manager_surname =  '$_POST[operator_general_manager_surname]',
operator_general_manager_phone =    '$_POST[operator_general_manager_phone]',
operator_general_manager_email =    '$_POST[operator_general_manager_email]',
operator_responsible_manager_name = '$_POST[operator_responsible_manager_name]',
operator_responsible_manager_surname =  '$_POST[operator_responsible_manager_surname]',
operator_responsible_manager_phone =    '$_POST[operator_responsible_manager_phone]',
operator_responsible_manager_email =    '$_POST[operator_responsible_manager_email]',
operator_legal_address_country =    '$_POST[operator_legal_address_country]',
operator_legal_address_region = '$_POST[operator_legal_address_region]',
operator_legal_address_district =   '$_POST[operator_legal_address_district]',
operator_legal_address_city =   '$_POST[operator_legal_address_city]',
operator_legal_address_index =  '$_POST[operator_legal_address_index]',
operator_legal_address_street = '$_POST[operator_legal_address_street]',
operator_post_address_country = '$_POST[operator_post_address_country]',
operator_post_address_region =  '$_POST[operator_post_address_region]',
operator_post_address_district =    '$_POST[operator_post_address_district]',
operator_post_address_city =    '$_POST[operator_post_address_city]',
operator_post_address_index =   '$_POST[operator_post_address_index]',
operator_post_address_street =  '$_POST[operator_post_address_street]',
operator_production_address_country =   '$_POST[operator_production_address_country]',
operator_production_address_region =    '$_POST[operator_production_address_region]',
operator_production_address_district =  '$_POST[operator_production_address_district]',
operator_production_address_city =  '$_POST[operator_production_address_city]',
operator_production_address_index = '$_POST[operator_production_address_index]',
operator_production_address_street =    '$_POST[operator_production_address_street]',
operator_company_phone =    '$_POST[operator_company_phone]',
operator_company_email =    '$_POST[operator_company_email]',
operator_company_web =  '$_POST[operator_company_web]'
where file_name = '$_POST[questionnaire_id]' ";

//-------------------------------------------------------Update Pid --------------------------------------

$sql_pid = "UPDATE pid_company 

SET
add_pid =   '$array_for_sql[add_pid]',
pid_company_status =    '$array_for_sql[pid_company_status]',
pid_company_name_UA =   '$array_for_sql[pid_company_name_UA]',
pid_company_name_EN =   '$array_for_sql[pid_company_name_EN]',
pid_company_id =    '$array_for_sql[pid_company_id]',
pid_general_manager_name =  '$array_for_sql[pid_general_manager_name]',
pid_general_manager_surname =   '$array_for_sql[pid_general_manager_surname]',
pid_general_manager_phone = '$array_for_sql[pid_general_manager_phone]',
pid_general_manager_email = '$array_for_sql[pid_general_manager_email]',
pid_legal_address_country = '$array_for_sql[pid_legal_address_country]',
pid_legal_address_region =  '$array_for_sql[pid_legal_address_region]',
pid_legal_address_district =    '$array_for_sql[pid_legal_address_district]',
pid_legal_address_city =    '$array_for_sql[pid_legal_address_city]',
pid_legal_address_index =   '$array_for_sql[pid_legal_address_index]',
pid_legal_address_street =  '$array_for_sql[pid_legal_address_street]',
pid_post_address_country =  '$array_for_sql[pid_post_address_country]',
pid_post_address_region =   '$array_for_sql[pid_post_address_region]',
pid_post_address_district = '$array_for_sql[pid_post_address_district]',
pid_post_address_city = '$array_for_sql[pid_post_address_city]',
pid_post_address_index =    '$array_for_sql[pid_post_address_index]',
pid_post_address_street =   '$array_for_sql[pid_post_address_street]',
pid_production_address_country =    '$array_for_sql[pid_production_address_country]',
pid_production_address_region = '$array_for_sql[pid_production_address_region]',
pid_production_address_district =   '$array_for_sql[pid_production_address_district]',
pid_production_address_city =   '$array_for_sql[pid_production_address_city]',
pid_production_address_index =  '$array_for_sql[pid_production_address_index]',
pid_production_address_street = '$array_for_sql[pid_production_address_street]',
pid_company_phone = '$array_for_sql[pid_company_phone]',
pid_company_email = '$array_for_sql[pid_company_email]',
pid_company_web =   '$array_for_sql[pid_company_web]'
where file_name = '$_POST[questionnaire_id]' ";


// ------------------------------------ Update PID_1--------------------------

$sql_pid_1 = "UPDATE pid1_company 

SET
add_pid_1 = '$array_for_sql[add_pid_1]',
pid_1_company_status =  '$array_for_sql[pid_1_company_status]',
pid_1_company_name_UA = '$array_for_sql[pid_1_company_name_UA]',
pid_1_company_name_EN = '$array_for_sql[pid_1_company_name_EN]',
pid_1_company_id =  '$array_for_sql[pid_1_company_id]',
pid_1_general_manager_name =    '$array_for_sql[pid_1_general_manager_name]',
pid_1_general_manager_surname = '$array_for_sql[pid_1_general_manager_surname]',
pid_1_general_manager_phone =   '$array_for_sql[pid_1_general_manager_phone]',
pid_1_general_manager_email =   '$array_for_sql[pid_1_general_manager_email]',
pid_1_legal_address_country =   '$array_for_sql[pid_1_legal_address_country]',
pid_1_legal_address_region =    '$array_for_sql[pid_1_legal_address_region]',
pid_1_legal_address_district =  '$array_for_sql[pid_1_legal_address_district]',
pid_1_legal_address_city =  '$array_for_sql[pid_1_legal_address_city]',
pid_1_legal_address_index = '$array_for_sql[pid_1_legal_address_index]',
pid_1_legal_address_street =    '$array_for_sql[pid_1_legal_address_street]',
pid_1_post_address_country =    '$array_for_sql[pid_1_post_address_country]',
pid_1_post_address_region = '$array_for_sql[pid_1_post_address_region]',
pid_1_post_address_district =   '$array_for_sql[pid_1_post_address_district]',
pid_1_post_address_city =   '$array_for_sql[pid_1_post_address_city]',
pid_1_post_address_index =  '$array_for_sql[pid_1_post_address_index]',
pid_1_post_address_street = '$array_for_sql[pid_1_post_address_street]',
pid_1_production_address_country =  '$array_for_sql[pid_1_production_address_country]',
pid_1_production_address_region =   '$array_for_sql[pid_1_production_address_region]',
pid_1_production_address_district = '$array_for_sql[pid_1_production_address_district]',
pid_1_production_address_city = '$array_for_sql[pid_1_production_address_city]',
pid_1_production_address_index =    '$array_for_sql[pid_1_production_address_index]',
pid_1_production_address_street =   '$array_for_sql[pid_1_production_address_street]',
pid_1_company_phone =   '$array_for_sql[pid_1_company_phone]',
pid_1_company_email =   '$array_for_sql[pid_1_company_email]',
pid_1_company_web = '$array_for_sql[pid_1_company_web]'
where file_name = '$_POST[questionnaire_id]' ";



// ----------------------------------- UpDate PID_2 -----------------------------------------------


$sql_pid_2 = "UPDATE pid_2_company 

SET
add_pid_2 = '$array_for_sql[add_pid_2]',
pid_2_company_status =  '$array_for_sql[pid_2_company_status]',
pid_2_company_name_UA = '$array_for_sql[pid_2_company_name_UA]',
pid_2_company_name_EN = '$array_for_sql[pid_2_company_name_EN]',
pid_2_company_id =  '$array_for_sql[pid_2_company_id]',
pid_2_general_manager_name =    '$array_for_sql[pid_2_general_manager_name]',
pid_2_general_manager_surname = '$array_for_sql[pid_2_general_manager_surname]',
pid_2_general_manager_phone =   '$array_for_sql[pid_2_general_manager_phone]',
pid_2_general_manager_email =   '$array_for_sql[pid_2_general_manager_email]',
pid_2_legal_address_country =   '$array_for_sql[pid_2_legal_address_country]',
pid_2_legal_address_region =    '$array_for_sql[pid_2_legal_address_region]',
pid_2_legal_address_district =  '$array_for_sql[pid_2_legal_address_district]',
pid_2_legal_address_city =  '$array_for_sql[pid_2_legal_address_city]',
pid_2_legal_address_index = '$array_for_sql[pid_2_legal_address_index]',
pid_2_legal_address_street =    '$array_for_sql[pid_2_legal_address_street]',
pid_2_post_address_country =    '$array_for_sql[pid_2_post_address_country]',
pid_2_post_address_region = '$array_for_sql[pid_2_post_address_region]',
pid_2_post_address_district =   '$array_for_sql[pid_2_post_address_district]',
pid_2_post_address_city =   '$array_for_sql[pid_2_post_address_city]',
pid_2_post_address_index =  '$array_for_sql[pid_2_post_address_index]',
pid_2_post_address_street = '$array_for_sql[pid_2_post_address_street]',
pid_2_production_address_country =  '$array_for_sql[pid_2_production_address_country]',
pid_2_production_address_region =   '$array_for_sql[pid_2_production_address_region]',
pid_2_production_address_district = '$array_for_sql[pid_2_production_address_district]',
pid_2_production_address_city = '$array_for_sql[pid_2_production_address_city]',
pid_2_production_address_index =    '$array_for_sql[pid_2_production_address_index]',
pid_2_production_address_street =   '$array_for_sql[pid_2_production_address_street]',
pid_2_company_phone =   '$array_for_sql[pid_2_company_phone]',
pid_2_company_email =   '$array_for_sql[pid_2_company_email]',
pid_2_company_web = '$array_for_sql[pid_2_company_web]'
where file_name = '$_POST[questionnaire_id]' ";



// ------------------------------------- UPdate Activity -------------------------------------------


$sql_activity = "UPDATE activity 

SET
production_crop_production =    '$array_for_sql[production_crop_production]',
traid_crop_production = '$array_for_sql[traid_crop_production]',
export_crop_production =    '$array_for_sql[export_crop_production]',
crop_production_1 = '$array_for_sql[crop_production_1]',
crop_production_size =  '$array_for_sql[crop_production_size]',
crop_production_organic_size =  '$array_for_sql[crop_production_organic_size]',
crop_production_organic_1_size =    '$array_for_sql[crop_production_organic_1_size]',
crop_production_organic_2_size =    '$array_for_sql[crop_production_organic_2_size]',
crop_production_organic_3_size =    '$array_for_sql[crop_production_organic_3_size]',
crop_production_organic_4_size =    '$array_for_sql[crop_production_organic_4_size]',
crop_production_after = '$array_for_sql[crop_production_after]',
crop_production_after_about_a = '$array_for_sql[crop_production_after_about_a]',
traid_crop_production_b =   '$array_for_sql[traid_crop_production_b]',
traid_crop_production_general = '$array_for_sql[traid_crop_production_general]',
export_crop_production_b =  '$array_for_sql[export_crop_production_b]',
export_crop_production_general =    '$array_for_sql[export_crop_production_general]',
export_crop_production_wait =   '$array_for_sql[export_crop_production_wait]',
import_crop_production_wait =   '$array_for_sql[import_crop_production_wait]',
production_wild_collection =    '$array_for_sql[production_wild_collection]',
traid_wild_collection = '$array_for_sql[traid_wild_collection]',
export_wild_collection =    '$array_for_sql[export_wild_collection]',
wild_collection_size =  '$array_for_sql[wild_collection_size]',
wild_organic_collection_size =  '$array_for_sql[wild_organic_collection_size]',
wild_collection_1_1 =   '$array_for_sql[wild_collection_1_1]',
wild_collection_2_1 =   '$array_for_sql[wild_collection_2_1]',
wild_collection_3_1 =   '$array_for_sql[wild_collection_3_1]',
wild_collection_4_1 =   '$array_for_sql[wild_collection_4_1]',
wild_collection_1_2 =   '$array_for_sql[wild_collection_1_2]',
wild_collection_2_2 =   '$array_for_sql[wild_collection_2_2]',
wild_collection_3_2 =   '$array_for_sql[wild_collection_3_2]',
wild_collection_4_2 =   '$array_for_sql[wild_collection_4_2]',
wild_collection_1_3 =   '$array_for_sql[wild_collection_1_3]',
wild_collection_2_3 =   '$array_for_sql[wild_collection_2_3]',
wild_collection_3_3 =   '$array_for_sql[wild_collection_3_3]',
wild_collection_4_3 =   '$array_for_sql[wild_collection_4_3]',
wild_collection_1_4 =   '$array_for_sql[wild_collection_1_4]',
wild_collection_2_4 =   '$array_for_sql[wild_collection_2_4]',
wild_collection_3_4 =   '$array_for_sql[wild_collection_3_4]',
wild_collection_4_4 =   '$array_for_sql[wild_collection_4_4]',
wild_collection_1_5 =   '$array_for_sql[wild_collection_1_5]',
wild_collection_2_5 =   '$array_for_sql[wild_collection_2_5]',
wild_collection_3_5 =   '$array_for_sql[wild_collection_3_5]',
wild_collection_4_5 =   '$array_for_sql[wild_collection_4_5]',
wild_collection_1_6 =   '$array_for_sql[wild_collection_1_6]',
wild_collection_2_6 =   '$array_for_sql[wild_collection_2_6]',
wild_collection_3_6 =   '$array_for_sql[wild_collection_3_6]',
wild_collection_4_6 =   '$array_for_sql[wild_collection_4_6]',
wild_collection_1_7 =   '$array_for_sql[wild_collection_1_7]',
wild_collection_2_7 =   '$array_for_sql[wild_collection_2_7]',
wild_collection_3_7 =   '$array_for_sql[wild_collection_3_7]',
wild_collection_4_7 =   '$array_for_sql[wild_collection_4_7]',
wild_collection_after = '$array_for_sql[wild_collection_after]',
wild_collection_after_about_b = '$array_for_sql[wild_collection_after_about_b]',
traid_wild_collection_b =   '$array_for_sql[traid_wild_collection_b]',
traid_wild_collection_general = '$array_for_sql[traid_wild_collection_general]',
export_wild_collection_b =  '$array_for_sql[export_wild_collection_b]',
export_wild_collection_general =    '$array_for_sql[export_wild_collection_general]',
export_wild_collection_wait =   '$array_for_sql[export_wild_collection_wait]',
import_wild_collection_wait =   '$array_for_sql[import_wild_collection_wait]',
production_animal_husbandry =   '$array_for_sql[production_animal_husbandry]',
traid_animal_husbandry =    '$array_for_sql[traid_animal_husbandry]',
export_animal_husbandry =   '$array_for_sql[export_animal_husbandry]',
vrh =   '$array_for_sql[vrh]',
vrh_cow =   '$array_for_sql[vrh_cow]',
else_vrh =  '$array_for_sql[else_vrh]',
pinck = '$array_for_sql[pinck]',
goat =  '$array_for_sql[goat]',
sheep = '$array_for_sql[sheep]',
poultry =   '$array_for_sql[poultry]',
chickens =  '$array_for_sql[chickens]',
turkeys =   '$array_for_sql[turkeys]',
ducks = '$array_for_sql[ducks]',
geese = '$array_for_sql[geese]',
animal_husbandry_else = '$array_for_sql[animal_husbandry_else]',
traid_animal_husbandry_b =  '$array_for_sql[traid_animal_husbandry_b]',
traid_animal_husbandry_general =    '$array_for_sql[traid_animal_husbandry_general]',
export_animal_husbandry_b = '$array_for_sql[export_animal_husbandry_b]',
export_animal_husbandry_general =   '$array_for_sql[export_animal_husbandry_general]',
export_animal_husbandry_wait =  '$array_for_sql[export_animal_husbandry_wait]',
import_animal_husbandry_wait =  '$array_for_sql[import_animal_husbandry_wait]',
production_beekeeping = '$array_for_sql[production_beekeeping]',
traid_beekeeping =  '$array_for_sql[traid_beekeeping]',
export_beekeeping = '$array_for_sql[export_beekeeping]',
beekeeping_all =    '$array_for_sql[beekeeping_all]',
beekeeping_all_local =  '$array_for_sql[beekeeping_all_local]',
beekeeping_all_migratory =  '$array_for_sql[beekeeping_all_migratory]',
beekeeping_all_migratory_1 =    '$array_for_sql[beekeeping_all_migratory_1]',
beekeeping_1_1 =    '$array_for_sql[beekeeping_1_1]',
beekeeping_2_1 =    '$array_for_sql[beekeeping_2_1]',
beekeeping_3_1 =    '$array_for_sql[beekeeping_3_1]',
beekeeping_4_1 =    '$array_for_sql[beekeeping_4_1]',
beekeeping_5_1 =    '$array_for_sql[beekeeping_5_1]',
beekeeping_1_2 =    '$array_for_sql[beekeeping_1_2]',
beekeeping_2_2 =    '$array_for_sql[beekeeping_2_2]',
beekeeping_3_2 =    '$array_for_sql[beekeeping_3_2]',
beekeeping_4_2 =    '$array_for_sql[beekeeping_4_2]',
beekeeping_5_2 =    '$array_for_sql[beekeeping_5_2]',
beekeeping_1_3 =    '$array_for_sql[beekeeping_1_3]',
beekeeping_2_3 =    '$array_for_sql[beekeeping_2_3]',
beekeeping_3_3 =    '$array_for_sql[beekeeping_3_3]',
beekeeping_4_3 =    '$array_for_sql[beekeeping_4_3]',
beekeeping_5_3 =    '$array_for_sql[beekeeping_5_3]',
beekeeping_1_4 =    '$array_for_sql[beekeeping_1_4]',
beekeeping_2_4 =    '$array_for_sql[beekeeping_2_4]',
beekeeping_3_4 =    '$array_for_sql[beekeeping_3_4]',
beekeeping_4_4 =    '$array_for_sql[beekeeping_4_4]',
beekeeping_5_4 =    '$array_for_sql[beekeeping_5_4]',
traid_beekeeping_b =    '$array_for_sql[traid_beekeeping_b]',
traid_beekeeping_general =  '$array_for_sql[traid_beekeeping_general]',
export_beekeeping_b =   '$array_for_sql[export_beekeeping_b]',
export_beekeeping_general = '$array_for_sql[export_beekeeping_general]',
export_beekeeping_wait =    '$array_for_sql[export_beekeeping_wait]',
import_beekeeping_wait =    '$array_for_sql[import_beekeeping_wait]',
production_aquaculture =    '$array_for_sql[production_aquaculture]',
traid_aquaculture = '$array_for_sql[traid_aquaculture]',
export_aquaculture =    '$array_for_sql[export_aquaculture]',
aquaculture_size =  '$array_for_sql[aquaculture_size]',
aquaculture_organic_size =  '$array_for_sql[aquaculture_organic_size]',
aquaculture_size_around =   '$array_for_sql[aquaculture_size_around]',
aquaculture_1_1_1 = '$array_for_sql[aquaculture_1_1_1]', 
aquaculture_1_2_1 = '$array_for_sql[aquaculture_1_2_1]',
aquaculture_1_1_2 = '$array_for_sql[aquaculture_1_1_2]',
aquaculture_1_2_2 = '$array_for_sql[aquaculture_1_2_2]',
aquaculture_1_1_3 = '$array_for_sql[aquaculture_1_1_3]',
aquaculture_1_2_3 = '$array_for_sql[aquaculture_1_2_3]',
aquaculture_3_1_1 = '$array_for_sql[aquaculture_3_1_1]',
aquaculture_3_2_1 = '$array_for_sql[aquaculture_3_2_1]',
aquaculture_3_1_2 = '$array_for_sql[aquaculture_3_1_2]',
aquaculture_3_2_2 = '$array_for_sql[aquaculture_3_2_2]',
aquaculture_3_1_3 = '$array_for_sql[aquaculture_3_1_3]',
aquaculture_3_2_3 = '$array_for_sql[aquaculture_3_2_3]',
traid_aquaculture_b =   '$array_for_sql[traid_aquaculture_b]',
traid_aquaculture_general = '$array_for_sql[traid_aquaculture_general]',
export_aquaculture_b =  '$array_for_sql[export_aquaculture_b]',
export_aquaculture_general =    '$array_for_sql[export_aquaculture_general]',
export_aquaculture_wait =   '$array_for_sql[export_aquaculture_wait]',
import_aquaculture_wait =   '$array_for_sql[import_aquaculture_wait]',
production_processing_products_for_use_as_food =    '$array_for_sql[production_processing_products_for_use_as_food]',
traid_processing_products_for_use_as_food = '$array_for_sql[traid_processing_products_for_use_as_food]',
export_processing_products_for_use_as_food =    '$array_for_sql[export_processing_products_for_use_as_food]',
activities_in_food_processing = '$array_for_sql[activities_in_food_processing]',
food_general =  '$array_for_sql[food_general]',
food_for_certificationt =   '$array_for_sql[food_for_certificationt]',
food_emploe =   '$array_for_sql[food_emploe]',
wine_industry = '$array_for_sql[wine_industry]',
wine_industry_general = '$array_for_sql[wine_industry_general]',
wine_industry_certificationt =  '$array_for_sql[wine_industry_certificationt]',
wine_industry_emploe =  '$array_for_sql[wine_industry_emploe]',
traid_processing_products_for_use_as_food_b =   '$array_for_sql[traid_processing_products_for_use_as_food_b]',
traid_processing_products_for_use_as_food_general = '$array_for_sql[traid_processing_products_for_use_as_food_general]',
export_processing_products_for_use_as_food_b =  '$array_for_sql[export_processing_products_for_use_as_food_b]',
export_processing_products_for_use_as_food_general =    '$array_for_sql[export_processing_products_for_use_as_food_general]',
export_processing_products_for_use_as_food_wait =   '$array_for_sql[export_processing_products_for_use_as_food_wait]',
import_processing_products_for_use_as_food_wait =   '$array_for_sql[import_processing_products_for_use_as_food_wait]',
production_processing_products_for_use_as_feed =    '$array_for_sql[production_processing_products_for_use_as_feed]',
traid_processing_products_for_use_as_feed = '$array_for_sql[traid_processing_products_for_use_as_feed]',
export_processing_products_for_use_as_feed =    '$array_for_sql[xport_processing_products_for_use_as_feed]',
feed_general =  '$array_for_sql[feed_general]',
feed_for_certificationt =   '$array_for_sql[feed_for_certificationt]',
feed_emploe =   '$array_for_sql[feed_emploe]',
traid_processing_products_for_use_as_feed_b =   '$array_for_sql[traid_processing_products_for_use_as_feed_b]',
traid_processing_products_for_use_as_feed_general = '$array_for_sql[traid_processing_products_for_use_as_feed_general]',
export_processing_products_for_use_as_feed_b =  '$array_for_sql[export_processing_products_for_use_as_feed_b]',
export_processing_products_for_use_as_feed_general =    '$array_for_sql[export_processing_products_for_use_as_feed_general]',
export_processing_products_for_use_as_feed_wait =   '$array_for_sql[export_processing_products_for_use_as_feed_wait]',
import_processing_products_for_use_as_feed_wait =   '$array_for_sql[import_processing_products_for_use_as_feed_wait]',
production_growing_seedlings_and_seed = '$array_for_sql[production_growing_seedlings_and_seed]',
traid_growing_seedlings_and_seed =  '$array_for_sql[traid_growing_seedlings_and_seed]',
export_growing_seedlings_and_seed = '$array_for_sql[export_growing_seedlings_and_seed]',
crop_production_F_size =    '$array_for_sql[crop_production_F_size]',
crop_production_organic_F_size =    '$array_for_sql[crop_production_organic_F_size]',
growing_seedlings_and_seed_after =  '$array_for_sql[growing_seedlings_and_seed_after]',
growing_seedlings_and_seed_after_about_b =  '$array_for_sql[growing_seedlings_and_seed_after_about_b]',
traid_growing_seedlings_and_seed_b =    '$array_for_sql[traid_growing_seedlings_and_seed_b]',
traid_growing_seedlings_and_seed_general =  '$array_for_sql[traid_growing_seedlings_and_seed_general]',
export_growing_seedlings_and_seed_b =   '$array_for_sql[export_growing_seedlings_and_seed_b]',
export_growing_seedlings_and_seed_general = '$array_for_sql[export_growing_seedlings_and_seed_general]',
export_growing_seedlings_and_seed_wait =    '$array_for_sql[export_growing_seedlings_and_seed_wait]',
import_growing_seedlings_and_seed_wait =    '$array_for_sql[import_growing_seedlings_and_seed_wait]',
export1_manager_for_all_name =  '$array_for_sql[export1_manager_for_all_name]',
export1_manager_for_all_surname =   '$array_for_sql[export1_manager_for_all_surname]',
export1_manager_for_all_phone = '$array_for_sql[export1_manager_for_all_phone]',
export1_manager_for_all_email = '$array_for_sql[export1_manager_for_all_email]',
standard_eu =   '$array_for_sql[standard_eu]',
standard_nop =  '$array_for_sql[standard_nop]',
standard_jas =  '$array_for_sql[standard_jas]',
standard_bs =   '$array_for_sql[standard_bs]',
standard_krav = '$array_for_sql[standard_krav]',
standard_naturland = '$array_for_sql[standard_naturland]',
agree_p = '$array_for_sql[agree_p]'
where file_name = '$_POST[questionnaire_id]' ";



if ($conn->query($sql) == TRUE)  
{
    //echo "Record update successfully in application";
} else 
{
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql_mandator) == TRUE)  
{
    //echo "Record update successfully in mandator";
} else 
{
    //echo "Error: " . $sql_mandator . "<br>" . $conn->error;
}
if ($conn->query($sql_operator) == TRUE)
{
    //echo "Record update successfully in operator";
} else 
{
    //echo "Error: " . $sql_operator . "<br>" . $conn->error;
}
if ($conn->query($sql_pid) == TRUE)
{
    //echo "Record update successfully in pid_company";
} else 
{
   //echo "Error: " . $sql_pid . "<br>" . $conn->error;
}
if ($conn->query($sql_pid_1) == TRUE)
{
   //echo "Record update successfully in pid_1_company";
} else 
{
   //echo "Error: " . $sql_pid_1 . "<br>" . $conn->error;
}
if  ($conn->query($sql_pid_2) == TRUE) {
   //echo "Record update successfully in pid_2_company";
}
else 
{
    //echo "Error: " . $sql_pid_2 . "<br>" . $conn->error;
}
if  ($conn->query($sql_activity) == TRUE) 
{
    //echo "Record update successfully in activity";
} else 
{
   //echo "Error: " . $sql_activity . "<br>" . $conn->error;
}

$conn->close();




}

   









header("location: application.php"); 




?>
