<html>


<head id="header_green_main_container">

	<meta charset="utf-8">
	
	<link rel="stylesheet" href="template.css" />
	<title>Organic Standard application </title>
<link rel="shortcut icon" href="favicon.ico" type="ico" />

	
	<script type="text/javascript" src="application.js"></script>


</head>
	<body   onload="on_application_load ();">



<?php
$questionnaire = array();
if (isset($_GET['id']))
{
	if (file_exists($_GET['id']))
	{
		$file = file_get_contents($_GET['id']);
		$questionnaire = json_decode($file, true);
	}
}
?>
	<input type="hidden" id="hide_item" value="" />
	<input type="hidden" id="hide_color" value="" />
	<div id ="wrapper">
		<div id="header_black_line">&nbsp;</div>
		<div id="header_green_main_container">
			<div id="header_green_container">
				<div id="logo"><a href="http://www.organicstandard.com.ua/"><img id="logo_img" alt="logo" src="/templates/organic/images/logo_uk-UA.png" /></a></div>
				<a href="http://www.organicstandard.com.ua/"><img id="slogan_img" alt="logo" src="/templates/organic/images/slogan_uk-UA.png" /></a>
				<jdoc:include type="modules" name="user4" />
				<div id="menu_uk-UA">
					<jdoc:include type="modules" name="hornav" style="none" />
				</div>
			</div>
		</div>
		<div id="main">
			<div id="bg_top">
				<jdoc:include type="modules" name="top" />
				<img src="/templates/organic/images/flower.png" alt="flower" id="bg_flower" />
				
				
				
				
			</div>
			<div id="bg_center">
				<div id="content">
				
<!-- --------------------------------Початок Форми-------------------------------------------------- -->
			<div class="inner">
		<form id="main_form" action="responce.php" method="post" onsubmit="return clean_unchecky();">
			<?php if (isset($_GET['id'])) : ?>
				<input type="hidden" name="questionnaire_id" value=<?php echo $_GET['id'] ?>>
			<?php else : ?>
				<input type="hidden" name="questionnaire_id" value="">
			<?php endif; ?>
			<H1>Заявка</H1>
			<h2>на проведення інспекційних та сертифікаційних робіт</h2>

<!-- --------------------------------Додавання Замовника------------------------------------------ -->
		<div id="agree">
			<div id="own_1">

				<h3>Замовник (платник) <a class="tooltip" href="#"><img src="/templates/organic/images/Help_logo.png"><span class="custom help"><img class="move"  src="/templates/organic/images/info.png" alt="Информация" height="48" width="48" /><em>Замовник</em>Замовник - компанія, яка робить і оплачує замовлення.</span></a> </h3>


				
				
				<label for="company_name_UA" class="pair_class"  >Назва організації або назва фізичної особи</label>
				
				<!-- <div  class="pair_class" >

				<select  name="company_status"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_status']) ? $questionnaire['company_status'] : '' ?>">
					<option value="emp" <?php if($questionnaire['company_status'] == 'emp') {echo 'selected="selected"';} ?>></option>
					<option	value="status0"	<?php	if($questionnaire['company_status']	== 'status0')	{echo	'selected="selected"';}	?>>	АПХ	</option>
					<option	value="status1"	<?php	if($questionnaire['company_status']	== 'status1')	{echo	'selected="selected"';}	?>>	АТ	</option>
					<option	value="status2"	<?php	if($questionnaire['company_status']	== 'status2')	{echo	'selected="selected"';}	?>>	АТЗТ	</option>
					<option	value="status3"	<?php	if($questionnaire['company_status']	== 'status3')	{echo	'selected="selected"';}	?>>	ВАТ	</option>
					<option	value="status4"	<?php	if($questionnaire['company_status']	== 'status4')	{echo	'selected="selected"';}	?>>	ВКПФ	</option>
					<option	value="status5"	<?php	if($questionnaire['company_status']	== 'status5')	{echo	'selected="selected"';}	?>>	ДП	</option>
					<option	value="status6"	<?php	if($questionnaire['company_status']	== 'status6')	{echo	'selected="selected"';}	?>>	ЗЕ	</option>
					<option	value="status7"	<?php	if($questionnaire['company_status']	== 'status7')	{echo	'selected="selected"';}	?>>	ИООО	</option>
					<option	value="status8"	<?php	if($questionnaire['company_status']	== 'status8')	{echo	'selected="selected"';}	?>>	ИП	</option>
					<option	value="status9"	<?php	if($questionnaire['company_status']	== 'status9')	{echo	'selected="selected"';}	?>>	ИСЧУ	</option>
					<option	value="status10"	<?php	if($questionnaire['company_status']	== 'status10')	{echo	'selected="selected"';}	?>>	ИЧУП	</option>
					<option	value="status11"	<?php	if($questionnaire['company_status']	== 'status11')	{echo	'selected="selected"';}	?>>	КФХ	</option>
					<option	value="status12"	<?php	if($questionnaire['company_status']	== 'status12')	{echo	'selected="selected"';}	?>>	КХ	</option>
					<option	value="status13"	<?php	if($questionnaire['company_status']	== 'status13')	{echo	'selected="selected"';}	?>>	ЛМГО	</option>
					<option	value="status14"	<?php	if($questionnaire['company_status']	== 'status14')	{echo	'selected="selected"';}	?>>	ЛПХ	</option>
					<option	value="status15"	<?php	if($questionnaire['company_status']	== 'status15')	{echo	'selected="selected"';}	?>>	МБО	</option>
					<option	value="status16"	<?php	if($questionnaire['company_status']	== 'status16')	{echo	'selected="selected"';}	?>>	МЕФ	</option>
					<option	value="status17"	<?php	if($questionnaire['company_status']	== 'status17')	{echo	'selected="selected"';}	?>>	МООЖ	</option>
					<option	value="status18"	<?php	if($questionnaire['company_status']	== 'status18')	{echo	'selected="selected"';}	?>>	МПП	</option>
					<option	value="status19"	<?php	if($questionnaire['company_status']	== 'status19')	{echo	'selected="selected"';}	?>>	МСОК	</option>
					<option	value="status20"	<?php	if($questionnaire['company_status']	== 'status20')	{echo	'selected="selected"';}	?>>	НВ	</option>
					<option	value="status21"	<?php	if($questionnaire['company_status']	== 'status21')	{echo	'selected="selected"';}	?>>	НВП	</option>
					<option	value="status22"	<?php	if($questionnaire['company_status']	== 'status22')	{echo	'selected="selected"';}	?>>	НДВП	</option>
					<option	value="status23"	<?php	if($questionnaire['company_status']	== 'status23')	{echo	'selected="selected"';}	?>>	ОДО	</option>
					<option	value="status24"	<?php	if($questionnaire['company_status']	== 'status24')	{echo	'selected="selected"';}	?>>	ООО	</option>
					<option	value="status25"	<?php	if($questionnaire['company_status']	== 'status25')	{echo	'selected="selected"';}	?>>	ОСГ	</option>
					<option	value="status26"	<?php	if($questionnaire['company_status']	== 'status26')	{echo	'selected="selected"';}	?>>	ПАСТ	</option>
					<option	value="status27"	<?php	if($questionnaire['company_status']	== 'status27')	{echo	'selected="selected"';}	?>>	ПАТ	</option>
					<option	value="status28"	<?php	if($questionnaire['company_status']	== 'status28')	{echo	'selected="selected"';}	?>>	ПАФ	</option>
					<option	value="status29"	<?php	if($questionnaire['company_status']	== 'status29')	{echo	'selected="selected"';}	?>>	ПОП	</option>
					<option	value="status30"	<?php	if($questionnaire['company_status']	== 'status30')	{echo	'selected="selected"';}	?>>	ПП	</option>
					<option	value="status31"	<?php	if($questionnaire['company_status']	== 'status31')	{echo	'selected="selected"';}	?>>	ППОА	</option>
					<option	value="status32"	<?php	if($questionnaire['company_status']	== 'status32')	{echo	'selected="selected"';}	?>>	ПрАТ	</option>
					<option	value="status33"	<?php	if($questionnaire['company_status']	== 'status33')	{echo	'selected="selected"';}	?>>	ПСП	</option>
					<option	value="status34"	<?php	if($questionnaire['company_status']	== 'status34')	{echo	'selected="selected"';}	?>>	ПСПО	</option>
					<option	value="status35"	<?php	if($questionnaire['company_status']	== 'status35')	{echo	'selected="selected"';}	?>>	ПТ	</option>
					<option	value="status36"	<?php	if($questionnaire['company_status']	== 'status36')	{echo	'selected="selected"';}	?>>	СБК	</option>
					<option	value="status37"	<?php	if($questionnaire['company_status']	== 'status37')	{echo	'selected="selected"';}	?>>	СВК	</option>
					<option	value="status38"	<?php	if($questionnaire['company_status']	== 'status38')	{echo	'selected="selected"';}	?>>	СОК	</option>
					<option	value="status39"	<?php	if($questionnaire['company_status']	== 'status39')	{echo	'selected="selected"';}	?>>	СООО	</option>
					<option	value="status40"	<?php	if($questionnaire['company_status']	== 'status40')	{echo	'selected="selected"';}	?>>	СП	</option>
					<option	value="status41"	<?php	if($questionnaire['company_status']	== 'status41')	{echo	'selected="selected"';}	?>>	СПД	</option>
					<option	value="status42"	<?php	if($questionnaire['company_status']	== 'status42')	{echo	'selected="selected"';}	?>>	СТОВ	</option>
					<option	value="status43"	<?php	if($questionnaire['company_status']	== 'status43')	{echo	'selected="selected"';}	?>>	СФГ	</option>
					<option	value="status44"	<?php	if($questionnaire['company_status']	== 'status44')	{echo	'selected="selected"';}	?>>	ТДВ	</option>
					<option	value="status45"	<?php	if($questionnaire['company_status']	== 'status45')	{echo	'selected="selected"';}	?>>	ТОВ	</option>
					<option	value="status46"	<?php	if($questionnaire['company_status']	== 'status46')	{echo	'selected="selected"';}	?>>	ТОО	</option>
					<option	value="status47"	<?php	if($questionnaire['company_status']	== 'status47')	{echo	'selected="selected"';}	?>>	УП	</option>
					<option	value="status48"	<?php	if($questionnaire['company_status']	== 'status48')	{echo	'selected="selected"';}	?>>	ФГ	</option>
					<option	value="status49"	<?php	if($questionnaire['company_status']	== 'status49')	{echo	'selected="selected"';}	?>>	ФО	</option>
					<option	value="status50"	<?php	if($questionnaire['company_status']	== 'status50')	{echo	'selected="selected"';}	?>>	ФОП	</option>
					<option	value="status51"	<?php	if($questionnaire['company_status']	== 'status51')	{echo	'selected="selected"';}	?>>	ФСГ	</option>
					<option	value="status52"	<?php	if($questionnaire['company_status']	== 'status52')	{echo	'selected="selected"';}	?>>	ФХ	</option>

					</select> -->

					





				<input class="pair_class" type="text"  name="company_name_UA" id="demo-name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value= "<?php echo isset($questionnaire['company_name_UA']) ? $questionnaire['company_name_UA'] : '' ?>" placeholder="Назва Компанії"  />
				
				<!-- </div> -->

				<label for="company_name_EN" class="pair_class">Назва (англійською мовою)</label>
				<input type="text" name="company_name_EN" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_name_EN']) ? $questionnaire['company_name_EN'] : '' ?>" placeholder="Company Name"   class="pair_class"/>
				<label for="company_id" class="pair_class">ЄДРПОУ (для юридичних осіб) або ІПН (для фізичних осіб)</label>
				<input type="number" name="company_id" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_id']) ? $questionnaire['company_id'] : '' ?>" placeholder="ЄДРПОУ"   class="pair_class"/>
			</div>

			<div id="own_2">
				<h3>Керівник</h3>
				<label for="general_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="general_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['general_manager_name']) ? $questionnaire['general_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="general_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="general_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['general_manager_surname']) ? $questionnaire['general_manager_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

				<label for="general_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="general_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['general_manager_phone']) ? $questionnaire['general_manager_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="general_manager_email" class="pair_class">Email</label>
				<input type="email" name="general_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['general_manager_email']) ? $questionnaire['general_manager_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>
			</div>

			<div id="own_3">
			<div class="pair_class">
				<h3>Особа, відповідальна за органічну сертифікацію</h3>
				<p>(основна контактна особа для Органік Стандарт)</p>
				</div>
				<button formnovalidate type="button" name="copy_to_production" class="pair_class" onclick="var suffixes = ['_name', '_surname', '_phone', '_email']; copy_from('own_2', 'own_3', suffixes);">Копіювати дані керівника (якщо співпадають)</button>
				<label for="responsible_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="responsible_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['responsible_manager_name']) ? $questionnaire['responsible_manager_name'] : '' ?>"  placeholder="Ім'я"   class="pair_class"/><br>

				<label for="responsible_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="responsible_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['responsible_manager_surname']) ? $questionnaire['responsible_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="responsible_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="responsible_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['responsible_manager_phone']) ? $questionnaire['responsible_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="responsible_manager_email" class="pair_class">Email</label>
				<input type="email" name="responsible_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['responsible_manager_email']) ? $questionnaire['responsible_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			</div>

			<div id="own_4">
				<h3 class="pair_class">Особа, відповідальна за фінансові питання</h3>
				<button formnovalidate type="button" name="copy_to_production" class="pair_class" onclick="var suffixes = ['_name', '_surname', '_phone', '_email']; copy_from('own_2', 'own_4', suffixes);">Копіювати дані керівника (якщо співпадають)</button>
				<label for="finance_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="finance_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['finance_manager_name']) ? $questionnaire['finance_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="finance_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="finance_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['finance_manager_surname']) ? $questionnaire['finance_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="finance_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="finance_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['finance_manager_phone']) ? $questionnaire['finance_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="finance_manager_email" class="pair_class">Email</label>
				<input type="email" name="finance_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['finance_manager_email']) ? $questionnaire['finance_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			
			</div>
			<div id="legal">
				<h3>Юридична адреса</h3>
				<label for="legal_address_country" class="pair_class">Країна</label>
				<select name="legal_address_country"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['legal_address_country']) ? $questionnaire['legal_address_country'] : '' ?>" class="pair_class">
					<option value="" <?php if($questionnaire['legal_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AB"<?php if($questionnaire['legal_address_country'] == 'AB') {echo 'selected=selected';} ?> >Абхазія</option>
					<option value="AU"<?php if($questionnaire['legal_address_country'] == 'AU') {echo 'selected=selected';} ?> >Австралія</option>
					<option value="AT"<?php if($questionnaire['legal_address_country'] == 'AT') {echo 'selected=selected';} ?> >Австрія</option>
					<option value="AZ"<?php if($questionnaire['legal_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="AL"<?php if($questionnaire['legal_address_country'] == 'AL') {echo 'selected=selected';} ?> >Албанія</option>
					<option value="DZ"<?php if($questionnaire['legal_address_country'] == 'DZ') {echo 'selected=selected';} ?> >Алжир</option>
					<option value="AS"<?php if($questionnaire['legal_address_country'] == 'AS') {echo 'selected=selected';} ?> >американське Самоа</option>
					<option value="AI"<?php if($questionnaire['legal_address_country'] == 'AI') {echo 'selected=selected';} ?> >Ангілья</option>
					<option value="AO"<?php if($questionnaire['legal_address_country'] == 'AO') {echo 'selected=selected';} ?> >Ангола</option>
					<option value="AD"<?php if($questionnaire['legal_address_country'] == 'AD') {echo 'selected=selected';} ?> >Андорра</option>
					<option value="AQ"<?php if($questionnaire['legal_address_country'] == 'AQ') {echo 'selected=selected';} ?> >Антарктида</option>
					<option value="AG"<?php if($questionnaire['legal_address_country'] == 'AG') {echo 'selected=selected';} ?> >Антигуа і Барбуда</option>
					<option value="AR"<?php if($questionnaire['legal_address_country'] == 'AR') {echo 'selected=selected';} ?> >Аргентина</option>
					<option value="AW"<?php if($questionnaire['legal_address_country'] == 'AW') {echo 'selected=selected';} ?> >Аруба</option>
					<option value="AF"<?php if($questionnaire['legal_address_country'] == 'AF') {echo 'selected=selected';} ?> >Афганістан</option>
					<option value="BS"<?php if($questionnaire['legal_address_country'] == 'BS') {echo 'selected=selected';} ?> >Багами</option>
					<option value="BD"<?php if($questionnaire['legal_address_country'] == 'BD') {echo 'selected=selected';} ?> >Бангладеш</option>
					<option value="BB"<?php if($questionnaire['legal_address_country'] == 'BB') {echo 'selected=selected';} ?> >Барбадос</option>
					<option value="BH"<?php if($questionnaire['legal_address_country'] == 'BH') {echo 'selected=selected';} ?> >Бахрейн</option>
					<option value="BZ"<?php if($questionnaire['legal_address_country'] == 'BZ') {echo 'selected=selected';} ?> >Беліз</option>
					<option value="BE"<?php if($questionnaire['legal_address_country'] == 'BE') {echo 'selected=selected';} ?> >Бельгія</option>
					<option value="BJ"<?php if($questionnaire['legal_address_country'] == 'BJ') {echo 'selected=selected';} ?> >Бенін</option>
					<option value="BM"<?php if($questionnaire['legal_address_country'] == 'BM') {echo 'selected=selected';} ?> >Бермуди</option>
					<option value="BY"<?php if($questionnaire['legal_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="BG"<?php if($questionnaire['legal_address_country'] == 'BG') {echo 'selected=selected';} ?> >Болгарія</option>
					<option value="BO"<?php if($questionnaire['legal_address_country'] == 'BO') {echo 'selected=selected';} ?> >Болівія, Багатонаціональна Держава</option>
					<option value="BQ"<?php if($questionnaire['legal_address_country'] == 'BQ') {echo 'selected=selected';} ?> >Бонайре, Саба і Сінт-Естатіус</option>
					<option value="BA"<?php if($questionnaire['legal_address_country'] == 'BA') {echo 'selected=selected';} ?> >Боснія і Герцеговина</option>
					<option value="BW"<?php if($questionnaire['legal_address_country'] == 'BW') {echo 'selected=selected';} ?> >Ботсвана</option>
					<option value="BR"<?php if($questionnaire['legal_address_country'] == 'BR') {echo 'selected=selected';} ?> >Бразилія</option>
					<option value="IO"<?php if($questionnaire['legal_address_country'] == 'IO') {echo 'selected=selected';} ?> >Британська територія в Індійському океані</option>
					<option value="BN"<?php if($questionnaire['legal_address_country'] == 'BN') {echo 'selected=selected';} ?> >Бруней-Даруссалам</option>
					<option value="BF"<?php if($questionnaire['legal_address_country'] == 'BF') {echo 'selected=selected';} ?> >Буркіна-Фасо</option>
					<option value="BI"<?php if($questionnaire['legal_address_country'] == 'BI') {echo 'selected=selected';} ?> >Бурунді</option>
					<option value="BT"<?php if($questionnaire['legal_address_country'] == 'BT') {echo 'selected=selected';} ?> >Бутан</option>
					<option value="VU"<?php if($questionnaire['legal_address_country'] == 'VU') {echo 'selected=selected';} ?> >Вануату</option>
					<option value="VE"<?php if($questionnaire['legal_address_country'] == 'VE') {echo 'selected=selected';} ?> >Венесуела боліваріанської Республіка</option>
					<option value="VN"<?php if($questionnaire['legal_address_country'] == 'VN') {echo 'selected=selected';} ?> >В'єтнам</option>
					<option value="VG"<?php if($questionnaire['legal_address_country'] == 'VG') {echo 'selected=selected';} ?> >Віргінські острови, Британські</option>
					<option value="VI"<?php if($questionnaire['legal_address_country'] == 'VI') {echo 'selected=selected';} ?> >Віргінські острови, США</option>
					<option value="AM"<?php if($questionnaire['legal_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GA"<?php if($questionnaire['legal_address_country'] == 'GA') {echo 'selected=selected';} ?> >Габон</option>
					<option value="HT"<?php if($questionnaire['legal_address_country'] == 'HT') {echo 'selected=selected';} ?> >Гайана</option>
					<option value="GY"<?php if($questionnaire['legal_address_country'] == 'GY') {echo 'selected=selected';} ?> >Гаїті</option>
					<option value="GM"<?php if($questionnaire['legal_address_country'] == 'GM') {echo 'selected=selected';} ?> >Гамбія</option>
					<option value="GH"<?php if($questionnaire['legal_address_country'] == 'GH') {echo 'selected=selected';} ?> >Гана</option>
					<option value="GP"<?php if($questionnaire['legal_address_country'] == 'GP') {echo 'selected=selected';} ?> >Гваделупа</option>
					<option value="GT"<?php if($questionnaire['legal_address_country'] == 'GT') {echo 'selected=selected';} ?> >Гватемала</option>
					<option value="GN"<?php if($questionnaire['legal_address_country'] == 'GN') {echo 'selected=selected';} ?> >Гвінея</option>
					<option value="GW"<?php if($questionnaire['legal_address_country'] == 'GW') {echo 'selected=selected';} ?> >Гвінея-Бісау</option>
					<option value="GG"<?php if($questionnaire['legal_address_country'] == 'GG') {echo 'selected=selected';} ?> >Гернсі</option>
					<option value="GI"<?php if($questionnaire['legal_address_country'] == 'GI') {echo 'selected=selected';} ?> >Гібралтар</option>
					<option value="HN"<?php if($questionnaire['legal_address_country'] == 'HN') {echo 'selected=selected';} ?> >Гондурас</option>
					<option value="HK"<?php if($questionnaire['legal_address_country'] == 'HK') {echo 'selected=selected';} ?> >Гонконг</option>
					<option value="GD"<?php if($questionnaire['legal_address_country'] == 'GD') {echo 'selected=selected';} ?> >Гренада</option>
					<option value="GL"<?php if($questionnaire['legal_address_country'] == 'GL') {echo 'selected=selected';} ?> >Гренландія</option>
					<option value="GR"<?php if($questionnaire['legal_address_country'] == 'GR') {echo 'selected=selected';} ?> >Греція</option>
					<option value="GE"<?php if($questionnaire['legal_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="GU"<?php if($questionnaire['legal_address_country'] == 'GU') {echo 'selected=selected';} ?> >Гуам</option>
					<option value="DK"<?php if($questionnaire['legal_address_country'] == 'DK') {echo 'selected=selected';} ?> >Данія</option>
					<option value="JE"<?php if($questionnaire['legal_address_country'] == 'JE') {echo 'selected=selected';} ?> >Джерсі</option>
					<option value="DJ"<?php if($questionnaire['legal_address_country'] == 'DJ') {echo 'selected=selected';} ?> >Джібуті</option>
					<option value="DM"<?php if($questionnaire['legal_address_country'] == 'DM') {echo 'selected=selected';} ?> >Домініка</option>
					<option value="DO"<?php if($questionnaire['legal_address_country'] == 'DO') {echo 'selected=selected';} ?> >Домініканська республіка</option>
					<option value="EC"<?php if($questionnaire['legal_address_country'] == 'EC') {echo 'selected=selected';} ?> >Еквадор</option>
					<option value="GQ"<?php if($questionnaire['legal_address_country'] == 'GQ') {echo 'selected=selected';} ?> >Екваторіальна Гвінея</option>
					<option value="AX"<?php if($questionnaire['legal_address_country'] == 'AX') {echo 'selected=selected';} ?> >Еландском острова</option>
					<option value="SV"<?php if($questionnaire['legal_address_country'] == 'SV') {echo 'selected=selected';} ?> >Ель-Сальвадор</option>
					<option value="ER"<?php if($questionnaire['legal_address_country'] == 'ER') {echo 'selected=selected';} ?> >Еритрея</option>
					<option value="EE"<?php if($questionnaire['legal_address_country'] == 'EE') {echo 'selected=selected';} ?> >Естонія</option>
					<option value="ET"<?php if($questionnaire['legal_address_country'] == 'ET') {echo 'selected=selected';} ?> >Ефіопія</option>
					<option value="EG"<?php if($questionnaire['legal_address_country'] == 'EG') {echo 'selected=selected';} ?> >Єгипет</option>
					<option value="IL"<?php if($questionnaire['legal_address_country'] == 'IL') {echo 'selected=selected';} ?> >Ємен</option>
					<option value="ZM"<?php if($questionnaire['legal_address_country'] == 'ZM') {echo 'selected=selected';} ?> >Замбія</option>
					<option value="EH"<?php if($questionnaire['legal_address_country'] == 'EH') {echo 'selected=selected';} ?> >Західна Сахара</option>
					<option value="US"<?php if($questionnaire['legal_address_country'] == 'US') {echo 'selected=selected';} ?> >з'єднані Штати</option>
					<option value="ZW"<?php if($questionnaire['legal_address_country'] == 'ZW') {echo 'selected=selected';} ?> >Зімбабве</option>
					<option value="IQ"<?php if($questionnaire['legal_address_country'] == 'IQ') {echo 'selected=selected';} ?> >Йорданія</option>
					<option value="IN"<?php if($questionnaire['legal_address_country'] == 'IN') {echo 'selected=selected';} ?> >Ізраїль</option>
					<option value="ID"<?php if($questionnaire['legal_address_country'] == 'ID') {echo 'selected=selected';} ?> >Індія</option>
					<option value="JO"<?php if($questionnaire['legal_address_country'] == 'JO') {echo 'selected=selected';} ?> >Індонезія</option>
					<option value="IR"<?php if($questionnaire['legal_address_country'] == 'IR') {echo 'selected=selected';} ?> >Ірак</option>
					<option value="IE"<?php if($questionnaire['legal_address_country'] == 'IE') {echo 'selected=selected';} ?> >Іран, Ісламська Республіка</option>
					<option value="IS"<?php if($questionnaire['legal_address_country'] == 'IS') {echo 'selected=selected';} ?> >Ірландія</option>
					<option value="ES"<?php if($questionnaire['legal_address_country'] == 'ES') {echo 'selected=selected';} ?> >Ісландія</option>
					<option value="IT"<?php if($questionnaire['legal_address_country'] == 'IT') {echo 'selected=selected';} ?> >Іспанія</option>
					<option value="YE"<?php if($questionnaire['legal_address_country'] == 'YE') {echo 'selected=selected';} ?> >Італія</option>
					<option value="CV"<?php if($questionnaire['legal_address_country'] == 'CV') {echo 'selected=selected';} ?> >Кабо-Верде</option>
					<option value="KZ"<?php if($questionnaire['legal_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KY"<?php if($questionnaire['legal_address_country'] == 'KY') {echo 'selected=selected';} ?> >Кайманові острови</option>
					<option value="KH"<?php if($questionnaire['legal_address_country'] == 'KH') {echo 'selected=selected';} ?> >Камбоджа</option>
					<option value="CM"<?php if($questionnaire['legal_address_country'] == 'CM') {echo 'selected=selected';} ?> >Камерун</option>
					<option value="CA"<?php if($questionnaire['legal_address_country'] == 'CA') {echo 'selected=selected';} ?> >Канада</option>
					<option value="QA"<?php if($questionnaire['legal_address_country'] == 'QA') {echo 'selected=selected';} ?> >Катар</option>
					<option value="KE"<?php if($questionnaire['legal_address_country'] == 'KE') {echo 'selected=selected';} ?> >Кенія</option>
					<option value="KG"<?php if($questionnaire['legal_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="CN"<?php if($questionnaire['legal_address_country'] == 'CN') {echo 'selected=selected';} ?> >Китай</option>
					<option value="CY"<?php if($questionnaire['legal_address_country'] == 'CY') {echo 'selected=selected';} ?> >Кіпр</option>
					<option value="KI"<?php if($questionnaire['legal_address_country'] == 'KI') {echo 'selected=selected';} ?> >Кірібаті</option>
					<option value="CC"<?php if($questionnaire['legal_address_country'] == 'CC') {echo 'selected=selected';} ?> >Кокосові (Кілінг) острови</option>
					<option value="CO"<?php if($questionnaire['legal_address_country'] == 'CO') {echo 'selected=selected';} ?> >Колумбія</option>
					<option value="KM"<?php if($questionnaire['legal_address_country'] == 'KM') {echo 'selected=selected';} ?> >Комори</option>
					<option value="CD"<?php if($questionnaire['legal_address_country'] == 'CD') {echo 'selected=selected';} ?> >Конго</option>
					<option value="CG"<?php if($questionnaire['legal_address_country'] == 'CG') {echo 'selected=selected';} ?> >Конго, Демократична Республіка</option>
					<option value="KP"<?php if($questionnaire['legal_address_country'] == 'KP') {echo 'selected=selected';} ?> >Корея, Народно-Демократична Республіка</option>
					<option value="KR"<?php if($questionnaire['legal_address_country'] == 'KR') {echo 'selected=selected';} ?> >Корея, Республіка</option>
					<option value="CR"<?php if($questionnaire['legal_address_country'] == 'CR') {echo 'selected=selected';} ?> >Коста-Ріка</option>
					<option value="CI"<?php if($questionnaire['legal_address_country'] == 'CI') {echo 'selected=selected';} ?> >Кот д'Івуар</option>
					<option value="CU"<?php if($questionnaire['legal_address_country'] == 'CU') {echo 'selected=selected';} ?> >Куба</option>
					<option value="KW"<?php if($questionnaire['legal_address_country'] == 'KW') {echo 'selected=selected';} ?> >Кувейт</option>
					<option value="CW"<?php if($questionnaire['legal_address_country'] == 'CW') {echo 'selected=selected';} ?> >Кюрасао</option>
					<option value="LA"<?php if($questionnaire['legal_address_country'] == 'LA') {echo 'selected=selected';} ?> >Лаос</option>
					<option value="LV"<?php if($questionnaire['legal_address_country'] == 'LV') {echo 'selected=selected';} ?> >Латвія</option>
					<option value="LS"<?php if($questionnaire['legal_address_country'] == 'LS') {echo 'selected=selected';} ?> >Лесото</option>
					<option value="LI"<?php if($questionnaire['legal_address_country'] == 'LI') {echo 'selected=selected';} ?> >Литва</option>
					<option value="LB"<?php if($questionnaire['legal_address_country'] == 'LB') {echo 'selected=selected';} ?> >Ліберія</option>
					<option value="LY"<?php if($questionnaire['legal_address_country'] == 'LY') {echo 'selected=selected';} ?> >Ліван</option>
					<option value="LR"<?php if($questionnaire['legal_address_country'] == 'LR') {echo 'selected=selected';} ?> >Лівійська Арабська Джамахірія</option>
					<option value="LT"<?php if($questionnaire['legal_address_country'] == 'LT') {echo 'selected=selected';} ?> >Ліхтенштейн</option>
					<option value="LU"<?php if($questionnaire['legal_address_country'] == 'LU') {echo 'selected=selected';} ?> >Люксембург</option>
					<option value="MU"<?php if($questionnaire['legal_address_country'] == 'MU') {echo 'selected=selected';} ?> >Маврикій</option>
					<option value="MR"<?php if($questionnaire['legal_address_country'] == 'MR') {echo 'selected=selected';} ?> >Мавританія</option>
					<option value="MG"<?php if($questionnaire['legal_address_country'] == 'MG') {echo 'selected=selected';} ?> >Мадагаскар</option>
					<option value="YT"<?php if($questionnaire['legal_address_country'] == 'YT') {echo 'selected=selected';} ?> >Майотта</option>
					<option value="MO"<?php if($questionnaire['legal_address_country'] == 'MO') {echo 'selected=selected';} ?> >Макао</option>
					<option value="MW"<?php if($questionnaire['legal_address_country'] == 'MW') {echo 'selected=selected';} ?> >Малаві</option>
					<option value="MY"<?php if($questionnaire['legal_address_country'] == 'MY') {echo 'selected=selected';} ?> >Малайзія</option>
					<option value="ML"<?php if($questionnaire['legal_address_country'] == 'ML') {echo 'selected=selected';} ?> >Малі</option>
					<option value="MV"<?php if($questionnaire['legal_address_country'] == 'MV') {echo 'selected=selected';} ?> >Мальдіви</option>
					<option value="MT"<?php if($questionnaire['legal_address_country'] == 'MT') {echo 'selected=selected';} ?> >Мальта</option>
					<option value="MA"<?php if($questionnaire['legal_address_country'] == 'MA') {echo 'selected=selected';} ?> >Марокко</option>
					<option value="MQ"<?php if($questionnaire['legal_address_country'] == 'MQ') {echo 'selected=selected';} ?> >Мартинюк</option>
					<option value="MH"<?php if($questionnaire['legal_address_country'] == 'MH') {echo 'selected=selected';} ?> >Маршаллові острови</option>
					<option value="MX"<?php if($questionnaire['legal_address_country'] == 'MX') {echo 'selected=selected';} ?> >Мексика</option>
					<option value="FM"<?php if($questionnaire['legal_address_country'] == 'FM') {echo 'selected=selected';} ?> >Мікронезія, Федеративні Штати</option>
					<option value="MZ"<?php if($questionnaire['legal_address_country'] == 'MZ') {echo 'selected=selected';} ?> >Мозамбік</option>
					<option value="MD"<?php if($questionnaire['legal_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="MC"<?php if($questionnaire['legal_address_country'] == 'MC') {echo 'selected=selected';} ?> >Монако</option>
					<option value="MN"<?php if($questionnaire['legal_address_country'] == 'MN') {echo 'selected=selected';} ?> >Монголія</option>
					<option value="MS"<?php if($questionnaire['legal_address_country'] == 'MS') {echo 'selected=selected';} ?> >Монтсеррат</option>
					<option value="MM"<?php if($questionnaire['legal_address_country'] == 'MM') {echo 'selected=selected';} ?> >М'янма</option>
					<option value="NA"<?php if($questionnaire['legal_address_country'] == 'NA') {echo 'selected=selected';} ?> >Намібія</option>
					<option value="NR"<?php if($questionnaire['legal_address_country'] == 'NR') {echo 'selected=selected';} ?> >Науру</option>
					<option value="NP"<?php if($questionnaire['legal_address_country'] == 'NP') {echo 'selected=selected';} ?> >Непал</option>
					<option value="NE"<?php if($questionnaire['legal_address_country'] == 'NE') {echo 'selected=selected';} ?> >Нігер</option>
					<option value="NG"<?php if($questionnaire['legal_address_country'] == 'NG') {echo 'selected=selected';} ?> >Нігерія</option>
					<option value="NL"<?php if($questionnaire['legal_address_country'] == 'NL') {echo 'selected=selected';} ?> >Нідерланди</option>
					<option value="NI"<?php if($questionnaire['legal_address_country'] == 'NI') {echo 'selected=selected';} ?> >Нікарагуа</option>
					<option value="DE"<?php if($questionnaire['legal_address_country'] == 'DE') {echo 'selected=selected';} ?> >Німеччина</option>
					<option value="NU"<?php if($questionnaire['legal_address_country'] == 'NU') {echo 'selected=selected';} ?> >Ніуе</option>
					<option value="NZ"<?php if($questionnaire['legal_address_country'] == 'NZ') {echo 'selected=selected';} ?> >Нова Зеландія</option>
					<option value="NC"<?php if($questionnaire['legal_address_country'] == 'NC') {echo 'selected=selected';} ?> >Нова Каледонія</option>
					<option value="NO"<?php if($questionnaire['legal_address_country'] == 'NO') {echo 'selected=selected';} ?> >Норвегія</option>
					<option value="GB"<?php if($questionnaire['legal_address_country'] == 'GB') {echo 'selected=selected';} ?> >Об'єднане Королівство</option>
					<option value="AE"<?php if($questionnaire['legal_address_country'] == 'AE') {echo 'selected=selected';} ?> >Об'єднані Арабські Емірати</option>
					<option value="OM"<?php if($questionnaire['legal_address_country'] == 'OM') {echo 'selected=selected';} ?> >Оман</option>
					<option value="BV"<?php if($questionnaire['legal_address_country'] == 'BV') {echo 'selected=selected';} ?> >острів Буве</option>
					<option value="IM"<?php if($questionnaire['legal_address_country'] == 'IM') {echo 'selected=selected';} ?> >острів Мен</option>
					<option value="NF"<?php if($questionnaire['legal_address_country'] == 'NF') {echo 'selected=selected';} ?> >острів Норфолк</option>
					<option value="CX"<?php if($questionnaire['legal_address_country'] == 'CX') {echo 'selected=selected';} ?> >острів Різдва</option>
					<option value="HM"<?php if($questionnaire['legal_address_country'] == 'HM') {echo 'selected=selected';} ?> >Острів Херд і острови Макдональд</option>
					<option value="CK"<?php if($questionnaire['legal_address_country'] == 'CK') {echo 'selected=selected';} ?> >Острови Кука</option>
					<option value="TC"<?php if($questionnaire['legal_address_country'] == 'TC') {echo 'selected=selected';} ?> >Острови Теркс і Кайкос</option>
					<option value="PK"<?php if($questionnaire['legal_address_country'] == 'PK') {echo 'selected=selected';} ?> >Пакистан</option>
					<option value="PW"<?php if($questionnaire['legal_address_country'] == 'PW') {echo 'selected=selected';} ?> >Палау</option>
					<option value="PS"<?php if($questionnaire['legal_address_country'] == 'PS') {echo 'selected=selected';} ?> >Палестинська територія, окупована</option>
					<option value="PA"<?php if($questionnaire['legal_address_country'] == 'PA') {echo 'selected=selected';} ?> >Панама</option>
					<option value="VA"<?php if($questionnaire['legal_address_country'] == 'VA') {echo 'selected=selected';} ?> >Папський Престол (Держава - місто Ватикан)</option>
					<option value="PG"<?php if($questionnaire['legal_address_country'] == 'PG') {echo 'selected=selected';} ?> >Папуа Нова Гвінея</option>
					<option value="PY"<?php if($questionnaire['legal_address_country'] == 'PY') {echo 'selected=selected';} ?> >Парагвай</option>
					<option value="PE"<?php if($questionnaire['legal_address_country'] == 'PE') {echo 'selected=selected';} ?> >Перу</option>
					<option value="ZA"<?php if($questionnaire['legal_address_country'] == 'ZA') {echo 'selected=selected';} ?> >Південна Африка</option>
					<option value="GS"<?php if($questionnaire['legal_address_country'] == 'GS') {echo 'selected=selected';} ?> >Південна Джорджія та Південні Сандвічеві острови</option>
					<option value="OS"<?php if($questionnaire['legal_address_country'] == 'OS') {echo 'selected=selected';} ?> >Південна Осетія</option>
					<option value="SS"<?php if($questionnaire['legal_address_country'] == 'SS') {echo 'selected=selected';} ?> >південний Судан</option>
					<option value="MP"<?php if($questionnaire['legal_address_country'] == 'MP') {echo 'selected=selected';} ?> >Північні Маріанські острови</option>
					<option value="PN"<?php if($questionnaire['legal_address_country'] == 'PN') {echo 'selected=selected';} ?> >Піткерн</option>
					<option value="PL"<?php if($questionnaire['legal_address_country'] == 'PL') {echo 'selected=selected';} ?> >Польща</option>
					<option value="PT"<?php if($questionnaire['legal_address_country'] == 'PT') {echo 'selected=selected';} ?> >Португалія</option>
					<option value="PR"<?php if($questionnaire['legal_address_country'] == 'PR') {echo 'selected=selected';} ?> >Пуерто-Ріко</option>
					<option value="MK"<?php if($questionnaire['legal_address_country'] == 'MK') {echo 'selected=selected';} ?> >Республіка Македонія</option>
					<option value="RE"<?php if($questionnaire['legal_address_country'] == 'RE') {echo 'selected=selected';} ?> >Реюньйон</option>
					<option value="RU"<?php if($questionnaire['legal_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="RW"<?php if($questionnaire['legal_address_country'] == 'RW') {echo 'selected=selected';} ?> >Руанда</option>
					<option value="RO"<?php if($questionnaire['legal_address_country'] == 'RO') {echo 'selected=selected';} ?> >Румунія</option>
					<option value="WS"<?php if($questionnaire['legal_address_country'] == 'WS') {echo 'selected=selected';} ?> >Самоа</option>
					<option value="SM"<?php if($questionnaire['legal_address_country'] == 'SM') {echo 'selected=selected';} ?> >Сан-Марино</option>
					<option value="ST"<?php if($questionnaire['legal_address_country'] == 'ST') {echo 'selected=selected';} ?> >Сан-Томе і Прінсіпі</option>
					<option value="SA"<?php if($questionnaire['legal_address_country'] == 'SA') {echo 'selected=selected';} ?> >Саудівська Аравія</option>
					<option value="SZ"<?php if($questionnaire['legal_address_country'] == 'SZ') {echo 'selected=selected';} ?> >Свазіленд</option>
					<option value="SH"<?php if($questionnaire['legal_address_country'] == 'SH') {echo 'selected=selected';} ?> >Свята Єлена, Острів Вознесіння, Трістан-да-Кунья</option>
					<option value="BL"<?php if($questionnaire['legal_address_country'] == 'BL') {echo 'selected=selected';} ?> >Сейшели</option>
					<option value="MF"<?php if($questionnaire['legal_address_country'] == 'MF') {echo 'selected=selected';} ?> >Сен-Бартельмі</option>
					<option value="SN"<?php if($questionnaire['legal_address_country'] == 'SN') {echo 'selected=selected';} ?> >Сенегал</option>
					<option value="VC"<?php if($questionnaire['legal_address_country'] == 'VC') {echo 'selected=selected';} ?> >Сен-Мартен</option>
					<option value="LC"<?php if($questionnaire['legal_address_country'] == 'LC') {echo 'selected=selected';} ?> >Сент-Вінсент і Гренадіни</option>
					<option value="KN"<?php if($questionnaire['legal_address_country'] == 'KN') {echo 'selected=selected';} ?> >Сент-Кітс і Невіс</option>
					<option value="PM"<?php if($questionnaire['legal_address_country'] == 'PM') {echo 'selected=selected';} ?> >Сент-Люсія</option>
					<option value="RS"<?php if($questionnaire['legal_address_country'] == 'RS') {echo 'selected=selected';} ?> >Сент-П'єр і Мікелон</option>
					<option value="SC"<?php if($questionnaire['legal_address_country'] == 'SC') {echo 'selected=selected';} ?> >Сербія</option>
					<option value="SY"<?php if($questionnaire['legal_address_country'] == 'SY') {echo 'selected=selected';} ?> >Сирійська Арабська Республіка</option>
					<option value="SG"<?php if($questionnaire['legal_address_country'] == 'SG') {echo 'selected=selected';} ?> >Сінгапур</option>
					<option value="SX"<?php if($questionnaire['legal_address_country'] == 'SX') {echo 'selected=selected';} ?> >Сінт-Мартен</option>
					<option value="SK"<?php if($questionnaire['legal_address_country'] == 'SK') {echo 'selected=selected';} ?> >Словаччина</option>
					<option value="SI"<?php if($questionnaire['legal_address_country'] == 'SI') {echo 'selected=selected';} ?> >Словенія</option>
					<option value="SB"<?php if($questionnaire['legal_address_country'] == 'SB') {echo 'selected=selected';} ?> >Соломонові острови</option>
					<option value="SO"<?php if($questionnaire['legal_address_country'] == 'SO') {echo 'selected=selected';} ?> >Сомалі</option>
					<option value="SD"<?php if($questionnaire['legal_address_country'] == 'SD') {echo 'selected=selected';} ?> >Судан</option>
					<option value="SR"<?php if($questionnaire['legal_address_country'] == 'SR') {echo 'selected=selected';} ?> >Суринам</option>
					<option value="SL"<?php if($questionnaire['legal_address_country'] == 'SL') {echo 'selected=selected';} ?> >Сьєрра-Леоне</option>
					<option value="TJ"<?php if($questionnaire['legal_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="TH"<?php if($questionnaire['legal_address_country'] == 'TH') {echo 'selected=selected';} ?> >Тайвань (Китай)</option>
					<option value="TW"<?php if($questionnaire['legal_address_country'] == 'TW') {echo 'selected=selected';} ?> >Таїланд</option>
					<option value="TZ"<?php if($questionnaire['legal_address_country'] == 'TZ') {echo 'selected=selected';} ?> >Танзанія, Об'єднана Республіка</option>
					<option value="TL"<?php if($questionnaire['legal_address_country'] == 'TL') {echo 'selected=selected';} ?> >Тимор-Лешті</option>
					<option value="TG"<?php if($questionnaire['legal_address_country'] == 'TG') {echo 'selected=selected';} ?> >того</option>
					<option value="TK"<?php if($questionnaire['legal_address_country'] == 'TK') {echo 'selected=selected';} ?> >Токелау</option>
					<option value="TO"<?php if($questionnaire['legal_address_country'] == 'TO') {echo 'selected=selected';} ?> >Тонга</option>
					<option value="TT"<?php if($questionnaire['legal_address_country'] == 'TT') {echo 'selected=selected';} ?> >Трінідад і Тобаго</option>
					<option value="TV"<?php if($questionnaire['legal_address_country'] == 'TV') {echo 'selected=selected';} ?> >Тувалу</option>
					<option value="TN"<?php if($questionnaire['legal_address_country'] == 'TN') {echo 'selected=selected';} ?> >Туніс</option>
					<option value="TR"<?php if($questionnaire['legal_address_country'] == 'TR') {echo 'selected=selected';} ?> >Туреччина</option>
					<option value="TM"<?php if($questionnaire['legal_address_country'] == 'TM') {echo 'selected=selected';} ?> >Туркменія</option>
					<option value="UG"<?php if($questionnaire['legal_address_country'] == 'UG') {echo 'selected=selected';} ?> >Уганда</option>
					<option value="HU"<?php if($questionnaire['legal_address_country'] == 'HU') {echo 'selected=selected';} ?> >Угорщина</option>
					<option value="UZ"<?php if($questionnaire['legal_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['legal_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>
					<option value="WF"<?php if($questionnaire['legal_address_country'] == 'WF') {echo 'selected=selected';} ?> >Уолліс і Футуна</option>
					<option value="UY"<?php if($questionnaire['legal_address_country'] == 'UY') {echo 'selected=selected';} ?> >Уругвай</option>
					<option value="FO"<?php if($questionnaire['legal_address_country'] == 'FO') {echo 'selected=selected';} ?> >Фарерські острови</option>
					<option value="FJ"<?php if($questionnaire['legal_address_country'] == 'FJ') {echo 'selected=selected';} ?> >Фіджі</option>
					<option value="PH"<?php if($questionnaire['legal_address_country'] == 'PH') {echo 'selected=selected';} ?> >Філіппіни</option>
					<option value="FI"<?php if($questionnaire['legal_address_country'] == 'FI') {echo 'selected=selected';} ?> >Фінляндія</option>
					<option value="FK"<?php if($questionnaire['legal_address_country'] == 'FK') {echo 'selected=selected';} ?> >Фолклендські острови (Мальвінські)</option>
					<option value="FR"<?php if($questionnaire['legal_address_country'] == 'FR') {echo 'selected=selected';} ?> >Франція</option>
					<option value="GF"<?php if($questionnaire['legal_address_country'] == 'GF') {echo 'selected=selected';} ?> >Французька Гвіана</option>
					<option value="PF"<?php if($questionnaire['legal_address_country'] == 'PF') {echo 'selected=selected';} ?> >Французька Полінезія</option>
					<option value="TF"<?php if($questionnaire['legal_address_country'] == 'TF') {echo 'selected=selected';} ?> >Французькі Південні території</option>
					<option value="HR"<?php if($questionnaire['legal_address_country'] == 'HR') {echo 'selected=selected';} ?> >Хорватія</option>
					<option value="CF"<?php if($questionnaire['legal_address_country'] == 'CF') {echo 'selected=selected';} ?> >Центрально-Африканська Республіка</option>
					<option value="TD"<?php if($questionnaire['legal_address_country'] == 'TD') {echo 'selected=selected';} ?> >Чад</option>
					<option value="CZ"<?php if($questionnaire['legal_address_country'] == 'CZ') {echo 'selected=selected';} ?> >Чеська Республіка</option>
					<option value="CL"<?php if($questionnaire['legal_address_country'] == 'CL') {echo 'selected=selected';} ?> >Чилі</option>
					<option value="ME"<?php if($questionnaire['legal_address_country'] == 'ME') {echo 'selected=selected';} ?> >Чорногорія</option>
					<option value="CH"<?php if($questionnaire['legal_address_country'] == 'CH') {echo 'selected=selected';} ?> >Швейцарія</option>
					<option value="SE"<?php if($questionnaire['legal_address_country'] == 'SE') {echo 'selected=selected';} ?> >Швеція</option>
					<option value="SJ"<?php if($questionnaire['legal_address_country'] == 'SJ') {echo 'selected=selected';} ?> >Шпіцберген і Ян-Маєн</option>
					<option value="LK"<?php if($questionnaire['legal_address_country'] == 'LK') {echo 'selected=selected';} ?> >Шрі Ланка</option>
					<option value="JM"<?php if($questionnaire['legal_address_country'] == 'JM') {echo 'selected=selected';} ?> >Ямайка</option>
					<option value="JP"<?php if($questionnaire['legal_address_country'] == 'JP') {echo 'selected=selected';} ?> >Японія</option>
				</select>

				<label for="legal_address_region" class="pair_class">Область</label>
				<input type="text" name="legal_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['legal_address_region']) ? $questionnaire['legal_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="legal_address_district" class="pair_class">Район</label>
				<input type="text" name="legal_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['legal_address_district']) ? $questionnaire['legal_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="legal_address_city" class="pair_class">Місто</label>
				<input type="text" name="legal_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['legal_address_city']) ? $questionnaire['legal_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="legal_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="legal_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['legal_address_index']) ? $questionnaire['legal_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="legal_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="legal_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['legal_address_street']) ? $questionnaire['legal_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="post">
				<h3 class="pair_class">Поштова адреса</h3>
				<button formnovalidate type="button" name="copy_to_post" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal', 'post', suffixes);">Копіювати з юр. адреси</button>

				<label for="post_address_country" class="pair_class">Країна</label>
				<select name="post_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['post_address_country']) ? $questionnaire['post_address_country'] : '' ?>"  class="pair_class">
						<option value="" <?php if($questionnaire['post_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AB"<?php if($questionnaire['post_address_country'] == 'AB') {echo 'selected=selected';} ?> >Абхазія</option>
					<option value="AU"<?php if($questionnaire['post_address_country'] == 'AU') {echo 'selected=selected';} ?> >Австралія</option>
					<option value="AT"<?php if($questionnaire['post_address_country'] == 'AT') {echo 'selected=selected';} ?> >Австрія</option>
					<option value="AZ"<?php if($questionnaire['post_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="AL"<?php if($questionnaire['post_address_country'] == 'AL') {echo 'selected=selected';} ?> >Албанія</option>
					<option value="DZ"<?php if($questionnaire['post_address_country'] == 'DZ') {echo 'selected=selected';} ?> >Алжир</option>
					<option value="AS"<?php if($questionnaire['post_address_country'] == 'AS') {echo 'selected=selected';} ?> >американське Самоа</option>
					<option value="AI"<?php if($questionnaire['post_address_country'] == 'AI') {echo 'selected=selected';} ?> >Ангілья</option>
					<option value="AO"<?php if($questionnaire['post_address_country'] == 'AO') {echo 'selected=selected';} ?> >Ангола</option>
					<option value="AD"<?php if($questionnaire['post_address_country'] == 'AD') {echo 'selected=selected';} ?> >Андорра</option>
					<option value="AQ"<?php if($questionnaire['post_address_country'] == 'AQ') {echo 'selected=selected';} ?> >Антарктида</option>
					<option value="AG"<?php if($questionnaire['post_address_country'] == 'AG') {echo 'selected=selected';} ?> >Антигуа і Барбуда</option>
					<option value="AR"<?php if($questionnaire['post_address_country'] == 'AR') {echo 'selected=selected';} ?> >Аргентина</option>
					<option value="AW"<?php if($questionnaire['post_address_country'] == 'AW') {echo 'selected=selected';} ?> >Аруба</option>
					<option value="AF"<?php if($questionnaire['post_address_country'] == 'AF') {echo 'selected=selected';} ?> >Афганістан</option>
					<option value="BS"<?php if($questionnaire['post_address_country'] == 'BS') {echo 'selected=selected';} ?> >Багами</option>
					<option value="BD"<?php if($questionnaire['post_address_country'] == 'BD') {echo 'selected=selected';} ?> >Бангладеш</option>
					<option value="BB"<?php if($questionnaire['post_address_country'] == 'BB') {echo 'selected=selected';} ?> >Барбадос</option>
					<option value="BH"<?php if($questionnaire['post_address_country'] == 'BH') {echo 'selected=selected';} ?> >Бахрейн</option>
					<option value="BZ"<?php if($questionnaire['post_address_country'] == 'BZ') {echo 'selected=selected';} ?> >Беліз</option>
					<option value="BE"<?php if($questionnaire['post_address_country'] == 'BE') {echo 'selected=selected';} ?> >Бельгія</option>
					<option value="BJ"<?php if($questionnaire['post_address_country'] == 'BJ') {echo 'selected=selected';} ?> >Бенін</option>
					<option value="BM"<?php if($questionnaire['post_address_country'] == 'BM') {echo 'selected=selected';} ?> >Бермуди</option>
					<option value="BY"<?php if($questionnaire['post_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="BG"<?php if($questionnaire['post_address_country'] == 'BG') {echo 'selected=selected';} ?> >Болгарія</option>
					<option value="BO"<?php if($questionnaire['post_address_country'] == 'BO') {echo 'selected=selected';} ?> >Болівія, Багатонаціональна Держава</option>
					<option value="BQ"<?php if($questionnaire['post_address_country'] == 'BQ') {echo 'selected=selected';} ?> >Бонайре, Саба і Сінт-Естатіус</option>
					<option value="BA"<?php if($questionnaire['post_address_country'] == 'BA') {echo 'selected=selected';} ?> >Боснія і Герцеговина</option>
					<option value="BW"<?php if($questionnaire['post_address_country'] == 'BW') {echo 'selected=selected';} ?> >Ботсвана</option>
					<option value="BR"<?php if($questionnaire['post_address_country'] == 'BR') {echo 'selected=selected';} ?> >Бразилія</option>
					<option value="IO"<?php if($questionnaire['post_address_country'] == 'IO') {echo 'selected=selected';} ?> >Британська територія в Індійському океані</option>
					<option value="BN"<?php if($questionnaire['post_address_country'] == 'BN') {echo 'selected=selected';} ?> >Бруней-Даруссалам</option>
					<option value="BF"<?php if($questionnaire['post_address_country'] == 'BF') {echo 'selected=selected';} ?> >Буркіна-Фасо</option>
					<option value="BI"<?php if($questionnaire['post_address_country'] == 'BI') {echo 'selected=selected';} ?> >Бурунді</option>
					<option value="BT"<?php if($questionnaire['post_address_country'] == 'BT') {echo 'selected=selected';} ?> >Бутан</option>
					<option value="VU"<?php if($questionnaire['post_address_country'] == 'VU') {echo 'selected=selected';} ?> >Вануату</option>
					<option value="VE"<?php if($questionnaire['post_address_country'] == 'VE') {echo 'selected=selected';} ?> >Венесуела боліваріанської Республіка</option>
					<option value="VN"<?php if($questionnaire['post_address_country'] == 'VN') {echo 'selected=selected';} ?> >В'єтнам</option>
					<option value="VG"<?php if($questionnaire['post_address_country'] == 'VG') {echo 'selected=selected';} ?> >Віргінські острови, Британські</option>
					<option value="VI"<?php if($questionnaire['post_address_country'] == 'VI') {echo 'selected=selected';} ?> >Віргінські острови, США</option>
					<option value="AM"<?php if($questionnaire['post_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GA"<?php if($questionnaire['post_address_country'] == 'GA') {echo 'selected=selected';} ?> >Габон</option>
					<option value="HT"<?php if($questionnaire['post_address_country'] == 'HT') {echo 'selected=selected';} ?> >Гайана</option>
					<option value="GY"<?php if($questionnaire['post_address_country'] == 'GY') {echo 'selected=selected';} ?> >Гаїті</option>
					<option value="GM"<?php if($questionnaire['post_address_country'] == 'GM') {echo 'selected=selected';} ?> >Гамбія</option>
					<option value="GH"<?php if($questionnaire['post_address_country'] == 'GH') {echo 'selected=selected';} ?> >Гана</option>
					<option value="GP"<?php if($questionnaire['post_address_country'] == 'GP') {echo 'selected=selected';} ?> >Гваделупа</option>
					<option value="GT"<?php if($questionnaire['post_address_country'] == 'GT') {echo 'selected=selected';} ?> >Гватемала</option>
					<option value="GN"<?php if($questionnaire['post_address_country'] == 'GN') {echo 'selected=selected';} ?> >Гвінея</option>
					<option value="GW"<?php if($questionnaire['post_address_country'] == 'GW') {echo 'selected=selected';} ?> >Гвінея-Бісау</option>
					<option value="GG"<?php if($questionnaire['post_address_country'] == 'GG') {echo 'selected=selected';} ?> >Гернсі</option>
					<option value="GI"<?php if($questionnaire['post_address_country'] == 'GI') {echo 'selected=selected';} ?> >Гібралтар</option>
					<option value="HN"<?php if($questionnaire['post_address_country'] == 'HN') {echo 'selected=selected';} ?> >Гондурас</option>
					<option value="HK"<?php if($questionnaire['post_address_country'] == 'HK') {echo 'selected=selected';} ?> >Гонконг</option>
					<option value="GD"<?php if($questionnaire['post_address_country'] == 'GD') {echo 'selected=selected';} ?> >Гренада</option>
					<option value="GL"<?php if($questionnaire['post_address_country'] == 'GL') {echo 'selected=selected';} ?> >Гренландія</option>
					<option value="GR"<?php if($questionnaire['post_address_country'] == 'GR') {echo 'selected=selected';} ?> >Греція</option>
					<option value="GE"<?php if($questionnaire['post_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="GU"<?php if($questionnaire['post_address_country'] == 'GU') {echo 'selected=selected';} ?> >Гуам</option>
					<option value="DK"<?php if($questionnaire['post_address_country'] == 'DK') {echo 'selected=selected';} ?> >Данія</option>
					<option value="JE"<?php if($questionnaire['post_address_country'] == 'JE') {echo 'selected=selected';} ?> >Джерсі</option>
					<option value="DJ"<?php if($questionnaire['post_address_country'] == 'DJ') {echo 'selected=selected';} ?> >Джібуті</option>
					<option value="DM"<?php if($questionnaire['post_address_country'] == 'DM') {echo 'selected=selected';} ?> >Домініка</option>
					<option value="DO"<?php if($questionnaire['post_address_country'] == 'DO') {echo 'selected=selected';} ?> >Домініканська республіка</option>
					<option value="EC"<?php if($questionnaire['post_address_country'] == 'EC') {echo 'selected=selected';} ?> >Еквадор</option>
					<option value="GQ"<?php if($questionnaire['post_address_country'] == 'GQ') {echo 'selected=selected';} ?> >Екваторіальна Гвінея</option>
					<option value="AX"<?php if($questionnaire['post_address_country'] == 'AX') {echo 'selected=selected';} ?> >Еландском острова</option>
					<option value="SV"<?php if($questionnaire['post_address_country'] == 'SV') {echo 'selected=selected';} ?> >Ель-Сальвадор</option>
					<option value="ER"<?php if($questionnaire['post_address_country'] == 'ER') {echo 'selected=selected';} ?> >Еритрея</option>
					<option value="EE"<?php if($questionnaire['post_address_country'] == 'EE') {echo 'selected=selected';} ?> >Естонія</option>
					<option value="ET"<?php if($questionnaire['post_address_country'] == 'ET') {echo 'selected=selected';} ?> >Ефіопія</option>
					<option value="EG"<?php if($questionnaire['post_address_country'] == 'EG') {echo 'selected=selected';} ?> >Єгипет</option>
					<option value="IL"<?php if($questionnaire['post_address_country'] == 'IL') {echo 'selected=selected';} ?> >Ємен</option>
					<option value="ZM"<?php if($questionnaire['post_address_country'] == 'ZM') {echo 'selected=selected';} ?> >Замбія</option>
					<option value="EH"<?php if($questionnaire['post_address_country'] == 'EH') {echo 'selected=selected';} ?> >Західна Сахара</option>
					<option value="US"<?php if($questionnaire['post_address_country'] == 'US') {echo 'selected=selected';} ?> >з'єднані Штати</option>
					<option value="ZW"<?php if($questionnaire['post_address_country'] == 'ZW') {echo 'selected=selected';} ?> >Зімбабве</option>
					<option value="IQ"<?php if($questionnaire['post_address_country'] == 'IQ') {echo 'selected=selected';} ?> >Йорданія</option>
					<option value="IN"<?php if($questionnaire['post_address_country'] == 'IN') {echo 'selected=selected';} ?> >Ізраїль</option>
					<option value="ID"<?php if($questionnaire['post_address_country'] == 'ID') {echo 'selected=selected';} ?> >Індія</option>
					<option value="JO"<?php if($questionnaire['post_address_country'] == 'JO') {echo 'selected=selected';} ?> >Індонезія</option>
					<option value="IR"<?php if($questionnaire['post_address_country'] == 'IR') {echo 'selected=selected';} ?> >Ірак</option>
					<option value="IE"<?php if($questionnaire['post_address_country'] == 'IE') {echo 'selected=selected';} ?> >Іран, Ісламська Республіка</option>
					<option value="IS"<?php if($questionnaire['post_address_country'] == 'IS') {echo 'selected=selected';} ?> >Ірландія</option>
					<option value="ES"<?php if($questionnaire['post_address_country'] == 'ES') {echo 'selected=selected';} ?> >Ісландія</option>
					<option value="IT"<?php if($questionnaire['post_address_country'] == 'IT') {echo 'selected=selected';} ?> >Іспанія</option>
					<option value="YE"<?php if($questionnaire['post_address_country'] == 'YE') {echo 'selected=selected';} ?> >Італія</option>
					<option value="CV"<?php if($questionnaire['post_address_country'] == 'CV') {echo 'selected=selected';} ?> >Кабо-Верде</option>
					<option value="KZ"<?php if($questionnaire['post_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KY"<?php if($questionnaire['post_address_country'] == 'KY') {echo 'selected=selected';} ?> >Кайманові острови</option>
					<option value="KH"<?php if($questionnaire['post_address_country'] == 'KH') {echo 'selected=selected';} ?> >Камбоджа</option>
					<option value="CM"<?php if($questionnaire['post_address_country'] == 'CM') {echo 'selected=selected';} ?> >Камерун</option>
					<option value="CA"<?php if($questionnaire['post_address_country'] == 'CA') {echo 'selected=selected';} ?> >Канада</option>
					<option value="QA"<?php if($questionnaire['post_address_country'] == 'QA') {echo 'selected=selected';} ?> >Катар</option>
					<option value="KE"<?php if($questionnaire['post_address_country'] == 'KE') {echo 'selected=selected';} ?> >Кенія</option>
					<option value="KG"<?php if($questionnaire['post_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="CN"<?php if($questionnaire['post_address_country'] == 'CN') {echo 'selected=selected';} ?> >Китай</option>
					<option value="CY"<?php if($questionnaire['post_address_country'] == 'CY') {echo 'selected=selected';} ?> >Кіпр</option>
					<option value="KI"<?php if($questionnaire['post_address_country'] == 'KI') {echo 'selected=selected';} ?> >Кірібаті</option>
					<option value="CC"<?php if($questionnaire['post_address_country'] == 'CC') {echo 'selected=selected';} ?> >Кокосові (Кілінг) острови</option>
					<option value="CO"<?php if($questionnaire['post_address_country'] == 'CO') {echo 'selected=selected';} ?> >Колумбія</option>
					<option value="KM"<?php if($questionnaire['post_address_country'] == 'KM') {echo 'selected=selected';} ?> >Комори</option>
					<option value="CD"<?php if($questionnaire['post_address_country'] == 'CD') {echo 'selected=selected';} ?> >Конго</option>
					<option value="CG"<?php if($questionnaire['post_address_country'] == 'CG') {echo 'selected=selected';} ?> >Конго, Демократична Республіка</option>
					<option value="KP"<?php if($questionnaire['post_address_country'] == 'KP') {echo 'selected=selected';} ?> >Корея, Народно-Демократична Республіка</option>
					<option value="KR"<?php if($questionnaire['post_address_country'] == 'KR') {echo 'selected=selected';} ?> >Корея, Республіка</option>
					<option value="CR"<?php if($questionnaire['post_address_country'] == 'CR') {echo 'selected=selected';} ?> >Коста-Ріка</option>
					<option value="CI"<?php if($questionnaire['post_address_country'] == 'CI') {echo 'selected=selected';} ?> >Кот д'Івуар</option>
					<option value="CU"<?php if($questionnaire['post_address_country'] == 'CU') {echo 'selected=selected';} ?> >Куба</option>
					<option value="KW"<?php if($questionnaire['post_address_country'] == 'KW') {echo 'selected=selected';} ?> >Кувейт</option>
					<option value="CW"<?php if($questionnaire['post_address_country'] == 'CW') {echo 'selected=selected';} ?> >Кюрасао</option>
					<option value="LA"<?php if($questionnaire['post_address_country'] == 'LA') {echo 'selected=selected';} ?> >Лаос</option>
					<option value="LV"<?php if($questionnaire['post_address_country'] == 'LV') {echo 'selected=selected';} ?> >Латвія</option>
					<option value="LS"<?php if($questionnaire['post_address_country'] == 'LS') {echo 'selected=selected';} ?> >Лесото</option>
					<option value="LI"<?php if($questionnaire['post_address_country'] == 'LI') {echo 'selected=selected';} ?> >Литва</option>
					<option value="LB"<?php if($questionnaire['post_address_country'] == 'LB') {echo 'selected=selected';} ?> >Ліберія</option>
					<option value="LY"<?php if($questionnaire['post_address_country'] == 'LY') {echo 'selected=selected';} ?> >Ліван</option>
					<option value="LR"<?php if($questionnaire['post_address_country'] == 'LR') {echo 'selected=selected';} ?> >Лівійська Арабська Джамахірія</option>
					<option value="LT"<?php if($questionnaire['post_address_country'] == 'LT') {echo 'selected=selected';} ?> >Ліхтенштейн</option>
					<option value="LU"<?php if($questionnaire['post_address_country'] == 'LU') {echo 'selected=selected';} ?> >Люксембург</option>
					<option value="MU"<?php if($questionnaire['post_address_country'] == 'MU') {echo 'selected=selected';} ?> >Маврикій</option>
					<option value="MR"<?php if($questionnaire['post_address_country'] == 'MR') {echo 'selected=selected';} ?> >Мавританія</option>
					<option value="MG"<?php if($questionnaire['post_address_country'] == 'MG') {echo 'selected=selected';} ?> >Мадагаскар</option>
					<option value="YT"<?php if($questionnaire['post_address_country'] == 'YT') {echo 'selected=selected';} ?> >Майотта</option>
					<option value="MO"<?php if($questionnaire['post_address_country'] == 'MO') {echo 'selected=selected';} ?> >Макао</option>
					<option value="MW"<?php if($questionnaire['post_address_country'] == 'MW') {echo 'selected=selected';} ?> >Малаві</option>
					<option value="MY"<?php if($questionnaire['post_address_country'] == 'MY') {echo 'selected=selected';} ?> >Малайзія</option>
					<option value="ML"<?php if($questionnaire['post_address_country'] == 'ML') {echo 'selected=selected';} ?> >Малі</option>
					<option value="MV"<?php if($questionnaire['post_address_country'] == 'MV') {echo 'selected=selected';} ?> >Мальдіви</option>
					<option value="MT"<?php if($questionnaire['post_address_country'] == 'MT') {echo 'selected=selected';} ?> >Мальта</option>
					<option value="MA"<?php if($questionnaire['post_address_country'] == 'MA') {echo 'selected=selected';} ?> >Марокко</option>
					<option value="MQ"<?php if($questionnaire['post_address_country'] == 'MQ') {echo 'selected=selected';} ?> >Мартинюк</option>
					<option value="MH"<?php if($questionnaire['post_address_country'] == 'MH') {echo 'selected=selected';} ?> >Маршаллові острови</option>
					<option value="MX"<?php if($questionnaire['post_address_country'] == 'MX') {echo 'selected=selected';} ?> >Мексика</option>
					<option value="FM"<?php if($questionnaire['post_address_country'] == 'FM') {echo 'selected=selected';} ?> >Мікронезія, Федеративні Штати</option>
					<option value="MZ"<?php if($questionnaire['post_address_country'] == 'MZ') {echo 'selected=selected';} ?> >Мозамбік</option>
					<option value="MD"<?php if($questionnaire['post_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="MC"<?php if($questionnaire['post_address_country'] == 'MC') {echo 'selected=selected';} ?> >Монако</option>
					<option value="MN"<?php if($questionnaire['post_address_country'] == 'MN') {echo 'selected=selected';} ?> >Монголія</option>
					<option value="MS"<?php if($questionnaire['post_address_country'] == 'MS') {echo 'selected=selected';} ?> >Монтсеррат</option>
					<option value="MM"<?php if($questionnaire['post_address_country'] == 'MM') {echo 'selected=selected';} ?> >М'янма</option>
					<option value="NA"<?php if($questionnaire['post_address_country'] == 'NA') {echo 'selected=selected';} ?> >Намібія</option>
					<option value="NR"<?php if($questionnaire['post_address_country'] == 'NR') {echo 'selected=selected';} ?> >Науру</option>
					<option value="NP"<?php if($questionnaire['post_address_country'] == 'NP') {echo 'selected=selected';} ?> >Непал</option>
					<option value="NE"<?php if($questionnaire['post_address_country'] == 'NE') {echo 'selected=selected';} ?> >Нігер</option>
					<option value="NG"<?php if($questionnaire['post_address_country'] == 'NG') {echo 'selected=selected';} ?> >Нігерія</option>
					<option value="NL"<?php if($questionnaire['post_address_country'] == 'NL') {echo 'selected=selected';} ?> >Нідерланди</option>
					<option value="NI"<?php if($questionnaire['post_address_country'] == 'NI') {echo 'selected=selected';} ?> >Нікарагуа</option>
					<option value="DE"<?php if($questionnaire['post_address_country'] == 'DE') {echo 'selected=selected';} ?> >Німеччина</option>
					<option value="NU"<?php if($questionnaire['post_address_country'] == 'NU') {echo 'selected=selected';} ?> >Ніуе</option>
					<option value="NZ"<?php if($questionnaire['post_address_country'] == 'NZ') {echo 'selected=selected';} ?> >Нова Зеландія</option>
					<option value="NC"<?php if($questionnaire['post_address_country'] == 'NC') {echo 'selected=selected';} ?> >Нова Каледонія</option>
					<option value="NO"<?php if($questionnaire['post_address_country'] == 'NO') {echo 'selected=selected';} ?> >Норвегія</option>
					<option value="GB"<?php if($questionnaire['post_address_country'] == 'GB') {echo 'selected=selected';} ?> >Об'єднане Королівство</option>
					<option value="AE"<?php if($questionnaire['post_address_country'] == 'AE') {echo 'selected=selected';} ?> >Об'єднані Арабські Емірати</option>
					<option value="OM"<?php if($questionnaire['post_address_country'] == 'OM') {echo 'selected=selected';} ?> >Оман</option>
					<option value="BV"<?php if($questionnaire['post_address_country'] == 'BV') {echo 'selected=selected';} ?> >острів Буве</option>
					<option value="IM"<?php if($questionnaire['post_address_country'] == 'IM') {echo 'selected=selected';} ?> >острів Мен</option>
					<option value="NF"<?php if($questionnaire['post_address_country'] == 'NF') {echo 'selected=selected';} ?> >острів Норфолк</option>
					<option value="CX"<?php if($questionnaire['post_address_country'] == 'CX') {echo 'selected=selected';} ?> >острів Різдва</option>
					<option value="HM"<?php if($questionnaire['post_address_country'] == 'HM') {echo 'selected=selected';} ?> >Острів Херд і острови Макдональд</option>
					<option value="CK"<?php if($questionnaire['post_address_country'] == 'CK') {echo 'selected=selected';} ?> >Острови Кука</option>
					<option value="TC"<?php if($questionnaire['post_address_country'] == 'TC') {echo 'selected=selected';} ?> >Острови Теркс і Кайкос</option>
					<option value="PK"<?php if($questionnaire['post_address_country'] == 'PK') {echo 'selected=selected';} ?> >Пакистан</option>
					<option value="PW"<?php if($questionnaire['post_address_country'] == 'PW') {echo 'selected=selected';} ?> >Палау</option>
					<option value="PS"<?php if($questionnaire['post_address_country'] == 'PS') {echo 'selected=selected';} ?> >Палестинська територія, окупована</option>
					<option value="PA"<?php if($questionnaire['post_address_country'] == 'PA') {echo 'selected=selected';} ?> >Панама</option>
					<option value="VA"<?php if($questionnaire['post_address_country'] == 'VA') {echo 'selected=selected';} ?> >Папський Престол (Держава - місто Ватикан)</option>
					<option value="PG"<?php if($questionnaire['post_address_country'] == 'PG') {echo 'selected=selected';} ?> >Папуа Нова Гвінея</option>
					<option value="PY"<?php if($questionnaire['post_address_country'] == 'PY') {echo 'selected=selected';} ?> >Парагвай</option>
					<option value="PE"<?php if($questionnaire['post_address_country'] == 'PE') {echo 'selected=selected';} ?> >Перу</option>
					<option value="ZA"<?php if($questionnaire['post_address_country'] == 'ZA') {echo 'selected=selected';} ?> >Південна Африка</option>
					<option value="GS"<?php if($questionnaire['post_address_country'] == 'GS') {echo 'selected=selected';} ?> >Південна Джорджія та Південні Сандвічеві острови</option>
					<option value="OS"<?php if($questionnaire['post_address_country'] == 'OS') {echo 'selected=selected';} ?> >Південна Осетія</option>
					<option value="SS"<?php if($questionnaire['post_address_country'] == 'SS') {echo 'selected=selected';} ?> >південний Судан</option>
					<option value="MP"<?php if($questionnaire['post_address_country'] == 'MP') {echo 'selected=selected';} ?> >Північні Маріанські острови</option>
					<option value="PN"<?php if($questionnaire['post_address_country'] == 'PN') {echo 'selected=selected';} ?> >Піткерн</option>
					<option value="PL"<?php if($questionnaire['post_address_country'] == 'PL') {echo 'selected=selected';} ?> >Польща</option>
					<option value="PT"<?php if($questionnaire['post_address_country'] == 'PT') {echo 'selected=selected';} ?> >Португалія</option>
					<option value="PR"<?php if($questionnaire['post_address_country'] == 'PR') {echo 'selected=selected';} ?> >Пуерто-Ріко</option>
					<option value="MK"<?php if($questionnaire['post_address_country'] == 'MK') {echo 'selected=selected';} ?> >Республіка Македонія</option>
					<option value="RE"<?php if($questionnaire['post_address_country'] == 'RE') {echo 'selected=selected';} ?> >Реюньйон</option>
					<option value="RU"<?php if($questionnaire['post_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="RW"<?php if($questionnaire['post_address_country'] == 'RW') {echo 'selected=selected';} ?> >Руанда</option>
					<option value="RO"<?php if($questionnaire['post_address_country'] == 'RO') {echo 'selected=selected';} ?> >Румунія</option>
					<option value="WS"<?php if($questionnaire['post_address_country'] == 'WS') {echo 'selected=selected';} ?> >Самоа</option>
					<option value="SM"<?php if($questionnaire['post_address_country'] == 'SM') {echo 'selected=selected';} ?> >Сан-Марино</option>
					<option value="ST"<?php if($questionnaire['post_address_country'] == 'ST') {echo 'selected=selected';} ?> >Сан-Томе і Прінсіпі</option>
					<option value="SA"<?php if($questionnaire['post_address_country'] == 'SA') {echo 'selected=selected';} ?> >Саудівська Аравія</option>
					<option value="SZ"<?php if($questionnaire['post_address_country'] == 'SZ') {echo 'selected=selected';} ?> >Свазіленд</option>
					<option value="SH"<?php if($questionnaire['post_address_country'] == 'SH') {echo 'selected=selected';} ?> >Свята Єлена, Острів Вознесіння, Трістан-да-Кунья</option>
					<option value="BL"<?php if($questionnaire['post_address_country'] == 'BL') {echo 'selected=selected';} ?> >Сейшели</option>
					<option value="MF"<?php if($questionnaire['post_address_country'] == 'MF') {echo 'selected=selected';} ?> >Сен-Бартельмі</option>
					<option value="SN"<?php if($questionnaire['post_address_country'] == 'SN') {echo 'selected=selected';} ?> >Сенегал</option>
					<option value="VC"<?php if($questionnaire['post_address_country'] == 'VC') {echo 'selected=selected';} ?> >Сен-Мартен</option>
					<option value="LC"<?php if($questionnaire['post_address_country'] == 'LC') {echo 'selected=selected';} ?> >Сент-Вінсент і Гренадіни</option>
					<option value="KN"<?php if($questionnaire['post_address_country'] == 'KN') {echo 'selected=selected';} ?> >Сент-Кітс і Невіс</option>
					<option value="PM"<?php if($questionnaire['post_address_country'] == 'PM') {echo 'selected=selected';} ?> >Сент-Люсія</option>
					<option value="RS"<?php if($questionnaire['post_address_country'] == 'RS') {echo 'selected=selected';} ?> >Сент-П'єр і Мікелон</option>
					<option value="SC"<?php if($questionnaire['post_address_country'] == 'SC') {echo 'selected=selected';} ?> >Сербія</option>
					<option value="SY"<?php if($questionnaire['post_address_country'] == 'SY') {echo 'selected=selected';} ?> >Сирійська Арабська Республіка</option>
					<option value="SG"<?php if($questionnaire['post_address_country'] == 'SG') {echo 'selected=selected';} ?> >Сінгапур</option>
					<option value="SX"<?php if($questionnaire['post_address_country'] == 'SX') {echo 'selected=selected';} ?> >Сінт-Мартен</option>
					<option value="SK"<?php if($questionnaire['post_address_country'] == 'SK') {echo 'selected=selected';} ?> >Словаччина</option>
					<option value="SI"<?php if($questionnaire['post_address_country'] == 'SI') {echo 'selected=selected';} ?> >Словенія</option>
					<option value="SB"<?php if($questionnaire['post_address_country'] == 'SB') {echo 'selected=selected';} ?> >Соломонові острови</option>
					<option value="SO"<?php if($questionnaire['post_address_country'] == 'SO') {echo 'selected=selected';} ?> >Сомалі</option>
					<option value="SD"<?php if($questionnaire['post_address_country'] == 'SD') {echo 'selected=selected';} ?> >Судан</option>
					<option value="SR"<?php if($questionnaire['post_address_country'] == 'SR') {echo 'selected=selected';} ?> >Суринам</option>
					<option value="SL"<?php if($questionnaire['post_address_country'] == 'SL') {echo 'selected=selected';} ?> >Сьєрра-Леоне</option>
					<option value="TJ"<?php if($questionnaire['post_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="TH"<?php if($questionnaire['post_address_country'] == 'TH') {echo 'selected=selected';} ?> >Тайвань (Китай)</option>
					<option value="TW"<?php if($questionnaire['post_address_country'] == 'TW') {echo 'selected=selected';} ?> >Таїланд</option>
					<option value="TZ"<?php if($questionnaire['post_address_country'] == 'TZ') {echo 'selected=selected';} ?> >Танзанія, Об'єднана Республіка</option>
					<option value="TL"<?php if($questionnaire['post_address_country'] == 'TL') {echo 'selected=selected';} ?> >Тимор-Лешті</option>
					<option value="TG"<?php if($questionnaire['post_address_country'] == 'TG') {echo 'selected=selected';} ?> >того</option>
					<option value="TK"<?php if($questionnaire['post_address_country'] == 'TK') {echo 'selected=selected';} ?> >Токелау</option>
					<option value="TO"<?php if($questionnaire['post_address_country'] == 'TO') {echo 'selected=selected';} ?> >Тонга</option>
					<option value="TT"<?php if($questionnaire['post_address_country'] == 'TT') {echo 'selected=selected';} ?> >Трінідад і Тобаго</option>
					<option value="TV"<?php if($questionnaire['post_address_country'] == 'TV') {echo 'selected=selected';} ?> >Тувалу</option>
					<option value="TN"<?php if($questionnaire['post_address_country'] == 'TN') {echo 'selected=selected';} ?> >Туніс</option>
					<option value="TR"<?php if($questionnaire['post_address_country'] == 'TR') {echo 'selected=selected';} ?> >Туреччина</option>
					<option value="TM"<?php if($questionnaire['post_address_country'] == 'TM') {echo 'selected=selected';} ?> >Туркменія</option>
					<option value="UG"<?php if($questionnaire['post_address_country'] == 'UG') {echo 'selected=selected';} ?> >Уганда</option>
					<option value="HU"<?php if($questionnaire['post_address_country'] == 'HU') {echo 'selected=selected';} ?> >Угорщина</option>
					<option value="UZ"<?php if($questionnaire['post_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['post_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>
					<option value="WF"<?php if($questionnaire['post_address_country'] == 'WF') {echo 'selected=selected';} ?> >Уолліс і Футуна</option>
					<option value="UY"<?php if($questionnaire['post_address_country'] == 'UY') {echo 'selected=selected';} ?> >Уругвай</option>
					<option value="FO"<?php if($questionnaire['post_address_country'] == 'FO') {echo 'selected=selected';} ?> >Фарерські острови</option>
					<option value="FJ"<?php if($questionnaire['post_address_country'] == 'FJ') {echo 'selected=selected';} ?> >Фіджі</option>
					<option value="PH"<?php if($questionnaire['post_address_country'] == 'PH') {echo 'selected=selected';} ?> >Філіппіни</option>
					<option value="FI"<?php if($questionnaire['post_address_country'] == 'FI') {echo 'selected=selected';} ?> >Фінляндія</option>
					<option value="FK"<?php if($questionnaire['post_address_country'] == 'FK') {echo 'selected=selected';} ?> >Фолклендські острови (Мальвінські)</option>
					<option value="FR"<?php if($questionnaire['post_address_country'] == 'FR') {echo 'selected=selected';} ?> >Франція</option>
					<option value="GF"<?php if($questionnaire['post_address_country'] == 'GF') {echo 'selected=selected';} ?> >Французька Гвіана</option>
					<option value="PF"<?php if($questionnaire['post_address_country'] == 'PF') {echo 'selected=selected';} ?> >Французька Полінезія</option>
					<option value="TF"<?php if($questionnaire['post_address_country'] == 'TF') {echo 'selected=selected';} ?> >Французькі Південні території</option>
					<option value="HR"<?php if($questionnaire['post_address_country'] == 'HR') {echo 'selected=selected';} ?> >Хорватія</option>
					<option value="CF"<?php if($questionnaire['post_address_country'] == 'CF') {echo 'selected=selected';} ?> >Центрально-Африканська Республіка</option>
					<option value="TD"<?php if($questionnaire['post_address_country'] == 'TD') {echo 'selected=selected';} ?> >Чад</option>
					<option value="CZ"<?php if($questionnaire['post_address_country'] == 'CZ') {echo 'selected=selected';} ?> >Чеська Республіка</option>
					<option value="CL"<?php if($questionnaire['post_address_country'] == 'CL') {echo 'selected=selected';} ?> >Чилі</option>
					<option value="ME"<?php if($questionnaire['post_address_country'] == 'ME') {echo 'selected=selected';} ?> >Чорногорія</option>
					<option value="CH"<?php if($questionnaire['post_address_country'] == 'CH') {echo 'selected=selected';} ?> >Швейцарія</option>
					<option value="SE"<?php if($questionnaire['post_address_country'] == 'SE') {echo 'selected=selected';} ?> >Швеція</option>
					<option value="SJ"<?php if($questionnaire['post_address_country'] == 'SJ') {echo 'selected=selected';} ?> >Шпіцберген і Ян-Маєн</option>
					<option value="LK"<?php if($questionnaire['post_address_country'] == 'LK') {echo 'selected=selected';} ?> >Шрі Ланка</option>
					<option value="JM"<?php if($questionnaire['post_address_country'] == 'JM') {echo 'selected=selected';} ?> >Ямайка</option>
					<option value="JP"<?php if($questionnaire['post_address_country'] == 'JP') {echo 'selected=selected';} ?> >Японія</option>


				</select>

				<label for="post_address_region" class="pair_class">Область</label>
				<input type="text" name="post_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['post_address_region']) ? $questionnaire['post_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="post_address_district" class="pair_class">Район</label>
				<input type="text" name="post_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['post_address_district']) ? $questionnaire['post_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="post_address_city" class="pair_class">Місто</label>
				<input type="text" name="post_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['post_address_city']) ? $questionnaire['post_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>
				
				<label for="post_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="post_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['post_address_index']) ? $questionnaire['post_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="post_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="post_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['post_address_street']) ? $questionnaire['post_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="production">
				<h3 class="pair_class">Адреса місцезнаходження виробництва або виробничих потужностей</h3>
				<button formnovalidate type="button" name="copy_to_production" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal', 'production', suffixes);">Копіювати з юр. адреси</button>

				<label for="production_address_country" class="pair_class">Країна</label>
				<select name="production_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['production_address_country']) ? $questionnaire['production_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['production_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AB"<?php if($questionnaire['production_address_country'] == 'AB') {echo 'selected=selected';} ?> >Абхазія</option>
					<option value="AU"<?php if($questionnaire['production_address_country'] == 'AU') {echo 'selected=selected';} ?> >Австралія</option>
					<option value="AT"<?php if($questionnaire['production_address_country'] == 'AT') {echo 'selected=selected';} ?> >Австрія</option>
					<option value="AZ"<?php if($questionnaire['production_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="AL"<?php if($questionnaire['production_address_country'] == 'AL') {echo 'selected=selected';} ?> >Албанія</option>
					<option value="DZ"<?php if($questionnaire['production_address_country'] == 'DZ') {echo 'selected=selected';} ?> >Алжир</option>
					<option value="AS"<?php if($questionnaire['production_address_country'] == 'AS') {echo 'selected=selected';} ?> >американське Самоа</option>
					<option value="AI"<?php if($questionnaire['production_address_country'] == 'AI') {echo 'selected=selected';} ?> >Ангілья</option>
					<option value="AO"<?php if($questionnaire['production_address_country'] == 'AO') {echo 'selected=selected';} ?> >Ангола</option>
					<option value="AD"<?php if($questionnaire['production_address_country'] == 'AD') {echo 'selected=selected';} ?> >Андорра</option>
					<option value="AQ"<?php if($questionnaire['production_address_country'] == 'AQ') {echo 'selected=selected';} ?> >Антарктида</option>
					<option value="AG"<?php if($questionnaire['production_address_country'] == 'AG') {echo 'selected=selected';} ?> >Антигуа і Барбуда</option>
					<option value="AR"<?php if($questionnaire['production_address_country'] == 'AR') {echo 'selected=selected';} ?> >Аргентина</option>
					<option value="AW"<?php if($questionnaire['production_address_country'] == 'AW') {echo 'selected=selected';} ?> >Аруба</option>
					<option value="AF"<?php if($questionnaire['production_address_country'] == 'AF') {echo 'selected=selected';} ?> >Афганістан</option>
					<option value="BS"<?php if($questionnaire['production_address_country'] == 'BS') {echo 'selected=selected';} ?> >Багами</option>
					<option value="BD"<?php if($questionnaire['production_address_country'] == 'BD') {echo 'selected=selected';} ?> >Бангладеш</option>
					<option value="BB"<?php if($questionnaire['production_address_country'] == 'BB') {echo 'selected=selected';} ?> >Барбадос</option>
					<option value="BH"<?php if($questionnaire['production_address_country'] == 'BH') {echo 'selected=selected';} ?> >Бахрейн</option>
					<option value="BZ"<?php if($questionnaire['production_address_country'] == 'BZ') {echo 'selected=selected';} ?> >Беліз</option>
					<option value="BE"<?php if($questionnaire['production_address_country'] == 'BE') {echo 'selected=selected';} ?> >Бельгія</option>
					<option value="BJ"<?php if($questionnaire['production_address_country'] == 'BJ') {echo 'selected=selected';} ?> >Бенін</option>
					<option value="BM"<?php if($questionnaire['production_address_country'] == 'BM') {echo 'selected=selected';} ?> >Бермуди</option>
					<option value="BY"<?php if($questionnaire['production_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="BG"<?php if($questionnaire['production_address_country'] == 'BG') {echo 'selected=selected';} ?> >Болгарія</option>
					<option value="BO"<?php if($questionnaire['production_address_country'] == 'BO') {echo 'selected=selected';} ?> >Болівія, Багатонаціональна Держава</option>
					<option value="BQ"<?php if($questionnaire['production_address_country'] == 'BQ') {echo 'selected=selected';} ?> >Бонайре, Саба і Сінт-Естатіус</option>
					<option value="BA"<?php if($questionnaire['production_address_country'] == 'BA') {echo 'selected=selected';} ?> >Боснія і Герцеговина</option>
					<option value="BW"<?php if($questionnaire['production_address_country'] == 'BW') {echo 'selected=selected';} ?> >Ботсвана</option>
					<option value="BR"<?php if($questionnaire['production_address_country'] == 'BR') {echo 'selected=selected';} ?> >Бразилія</option>
					<option value="IO"<?php if($questionnaire['production_address_country'] == 'IO') {echo 'selected=selected';} ?> >Британська територія в Індійському океані</option>
					<option value="BN"<?php if($questionnaire['production_address_country'] == 'BN') {echo 'selected=selected';} ?> >Бруней-Даруссалам</option>
					<option value="BF"<?php if($questionnaire['production_address_country'] == 'BF') {echo 'selected=selected';} ?> >Буркіна-Фасо</option>
					<option value="BI"<?php if($questionnaire['production_address_country'] == 'BI') {echo 'selected=selected';} ?> >Бурунді</option>
					<option value="BT"<?php if($questionnaire['production_address_country'] == 'BT') {echo 'selected=selected';} ?> >Бутан</option>
					<option value="VU"<?php if($questionnaire['production_address_country'] == 'VU') {echo 'selected=selected';} ?> >Вануату</option>
					<option value="VE"<?php if($questionnaire['production_address_country'] == 'VE') {echo 'selected=selected';} ?> >Венесуела боліваріанської Республіка</option>
					<option value="VN"<?php if($questionnaire['production_address_country'] == 'VN') {echo 'selected=selected';} ?> >В'єтнам</option>
					<option value="VG"<?php if($questionnaire['production_address_country'] == 'VG') {echo 'selected=selected';} ?> >Віргінські острови, Британські</option>
					<option value="VI"<?php if($questionnaire['production_address_country'] == 'VI') {echo 'selected=selected';} ?> >Віргінські острови, США</option>
					<option value="AM"<?php if($questionnaire['production_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GA"<?php if($questionnaire['production_address_country'] == 'GA') {echo 'selected=selected';} ?> >Габон</option>
					<option value="HT"<?php if($questionnaire['production_address_country'] == 'HT') {echo 'selected=selected';} ?> >Гайана</option>
					<option value="GY"<?php if($questionnaire['production_address_country'] == 'GY') {echo 'selected=selected';} ?> >Гаїті</option>
					<option value="GM"<?php if($questionnaire['production_address_country'] == 'GM') {echo 'selected=selected';} ?> >Гамбія</option>
					<option value="GH"<?php if($questionnaire['production_address_country'] == 'GH') {echo 'selected=selected';} ?> >Гана</option>
					<option value="GP"<?php if($questionnaire['production_address_country'] == 'GP') {echo 'selected=selected';} ?> >Гваделупа</option>
					<option value="GT"<?php if($questionnaire['production_address_country'] == 'GT') {echo 'selected=selected';} ?> >Гватемала</option>
					<option value="GN"<?php if($questionnaire['production_address_country'] == 'GN') {echo 'selected=selected';} ?> >Гвінея</option>
					<option value="GW"<?php if($questionnaire['production_address_country'] == 'GW') {echo 'selected=selected';} ?> >Гвінея-Бісау</option>
					<option value="GG"<?php if($questionnaire['production_address_country'] == 'GG') {echo 'selected=selected';} ?> >Гернсі</option>
					<option value="GI"<?php if($questionnaire['production_address_country'] == 'GI') {echo 'selected=selected';} ?> >Гібралтар</option>
					<option value="HN"<?php if($questionnaire['production_address_country'] == 'HN') {echo 'selected=selected';} ?> >Гондурас</option>
					<option value="HK"<?php if($questionnaire['production_address_country'] == 'HK') {echo 'selected=selected';} ?> >Гонконг</option>
					<option value="GD"<?php if($questionnaire['production_address_country'] == 'GD') {echo 'selected=selected';} ?> >Гренада</option>
					<option value="GL"<?php if($questionnaire['production_address_country'] == 'GL') {echo 'selected=selected';} ?> >Гренландія</option>
					<option value="GR"<?php if($questionnaire['production_address_country'] == 'GR') {echo 'selected=selected';} ?> >Греція</option>
					<option value="GE"<?php if($questionnaire['production_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="GU"<?php if($questionnaire['production_address_country'] == 'GU') {echo 'selected=selected';} ?> >Гуам</option>
					<option value="DK"<?php if($questionnaire['production_address_country'] == 'DK') {echo 'selected=selected';} ?> >Данія</option>
					<option value="JE"<?php if($questionnaire['production_address_country'] == 'JE') {echo 'selected=selected';} ?> >Джерсі</option>
					<option value="DJ"<?php if($questionnaire['production_address_country'] == 'DJ') {echo 'selected=selected';} ?> >Джібуті</option>
					<option value="DM"<?php if($questionnaire['production_address_country'] == 'DM') {echo 'selected=selected';} ?> >Домініка</option>
					<option value="DO"<?php if($questionnaire['production_address_country'] == 'DO') {echo 'selected=selected';} ?> >Домініканська республіка</option>
					<option value="EC"<?php if($questionnaire['production_address_country'] == 'EC') {echo 'selected=selected';} ?> >Еквадор</option>
					<option value="GQ"<?php if($questionnaire['production_address_country'] == 'GQ') {echo 'selected=selected';} ?> >Екваторіальна Гвінея</option>
					<option value="AX"<?php if($questionnaire['production_address_country'] == 'AX') {echo 'selected=selected';} ?> >Еландском острова</option>
					<option value="SV"<?php if($questionnaire['production_address_country'] == 'SV') {echo 'selected=selected';} ?> >Ель-Сальвадор</option>
					<option value="ER"<?php if($questionnaire['production_address_country'] == 'ER') {echo 'selected=selected';} ?> >Еритрея</option>
					<option value="EE"<?php if($questionnaire['production_address_country'] == 'EE') {echo 'selected=selected';} ?> >Естонія</option>
					<option value="ET"<?php if($questionnaire['production_address_country'] == 'ET') {echo 'selected=selected';} ?> >Ефіопія</option>
					<option value="EG"<?php if($questionnaire['production_address_country'] == 'EG') {echo 'selected=selected';} ?> >Єгипет</option>
					<option value="IL"<?php if($questionnaire['production_address_country'] == 'IL') {echo 'selected=selected';} ?> >Ємен</option>
					<option value="ZM"<?php if($questionnaire['production_address_country'] == 'ZM') {echo 'selected=selected';} ?> >Замбія</option>
					<option value="EH"<?php if($questionnaire['production_address_country'] == 'EH') {echo 'selected=selected';} ?> >Західна Сахара</option>
					<option value="US"<?php if($questionnaire['production_address_country'] == 'US') {echo 'selected=selected';} ?> >з'єднані Штати</option>
					<option value="ZW"<?php if($questionnaire['production_address_country'] == 'ZW') {echo 'selected=selected';} ?> >Зімбабве</option>
					<option value="IQ"<?php if($questionnaire['production_address_country'] == 'IQ') {echo 'selected=selected';} ?> >Йорданія</option>
					<option value="IN"<?php if($questionnaire['production_address_country'] == 'IN') {echo 'selected=selected';} ?> >Ізраїль</option>
					<option value="ID"<?php if($questionnaire['production_address_country'] == 'ID') {echo 'selected=selected';} ?> >Індія</option>
					<option value="JO"<?php if($questionnaire['production_address_country'] == 'JO') {echo 'selected=selected';} ?> >Індонезія</option>
					<option value="IR"<?php if($questionnaire['production_address_country'] == 'IR') {echo 'selected=selected';} ?> >Ірак</option>
					<option value="IE"<?php if($questionnaire['production_address_country'] == 'IE') {echo 'selected=selected';} ?> >Іран, Ісламська Республіка</option>
					<option value="IS"<?php if($questionnaire['production_address_country'] == 'IS') {echo 'selected=selected';} ?> >Ірландія</option>
					<option value="ES"<?php if($questionnaire['production_address_country'] == 'ES') {echo 'selected=selected';} ?> >Ісландія</option>
					<option value="IT"<?php if($questionnaire['production_address_country'] == 'IT') {echo 'selected=selected';} ?> >Іспанія</option>
					<option value="YE"<?php if($questionnaire['production_address_country'] == 'YE') {echo 'selected=selected';} ?> >Італія</option>
					<option value="CV"<?php if($questionnaire['production_address_country'] == 'CV') {echo 'selected=selected';} ?> >Кабо-Верде</option>
					<option value="KZ"<?php if($questionnaire['production_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KY"<?php if($questionnaire['production_address_country'] == 'KY') {echo 'selected=selected';} ?> >Кайманові острови</option>
					<option value="KH"<?php if($questionnaire['production_address_country'] == 'KH') {echo 'selected=selected';} ?> >Камбоджа</option>
					<option value="CM"<?php if($questionnaire['production_address_country'] == 'CM') {echo 'selected=selected';} ?> >Камерун</option>
					<option value="CA"<?php if($questionnaire['production_address_country'] == 'CA') {echo 'selected=selected';} ?> >Канада</option>
					<option value="QA"<?php if($questionnaire['production_address_country'] == 'QA') {echo 'selected=selected';} ?> >Катар</option>
					<option value="KE"<?php if($questionnaire['production_address_country'] == 'KE') {echo 'selected=selected';} ?> >Кенія</option>
					<option value="KG"<?php if($questionnaire['production_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="CN"<?php if($questionnaire['production_address_country'] == 'CN') {echo 'selected=selected';} ?> >Китай</option>
					<option value="CY"<?php if($questionnaire['production_address_country'] == 'CY') {echo 'selected=selected';} ?> >Кіпр</option>
					<option value="KI"<?php if($questionnaire['production_address_country'] == 'KI') {echo 'selected=selected';} ?> >Кірібаті</option>
					<option value="CC"<?php if($questionnaire['production_address_country'] == 'CC') {echo 'selected=selected';} ?> >Кокосові (Кілінг) острови</option>
					<option value="CO"<?php if($questionnaire['production_address_country'] == 'CO') {echo 'selected=selected';} ?> >Колумбія</option>
					<option value="KM"<?php if($questionnaire['production_address_country'] == 'KM') {echo 'selected=selected';} ?> >Комори</option>
					<option value="CD"<?php if($questionnaire['production_address_country'] == 'CD') {echo 'selected=selected';} ?> >Конго</option>
					<option value="CG"<?php if($questionnaire['production_address_country'] == 'CG') {echo 'selected=selected';} ?> >Конго, Демократична Республіка</option>
					<option value="KP"<?php if($questionnaire['production_address_country'] == 'KP') {echo 'selected=selected';} ?> >Корея, Народно-Демократична Республіка</option>
					<option value="KR"<?php if($questionnaire['production_address_country'] == 'KR') {echo 'selected=selected';} ?> >Корея, Республіка</option>
					<option value="CR"<?php if($questionnaire['production_address_country'] == 'CR') {echo 'selected=selected';} ?> >Коста-Ріка</option>
					<option value="CI"<?php if($questionnaire['production_address_country'] == 'CI') {echo 'selected=selected';} ?> >Кот д'Івуар</option>
					<option value="CU"<?php if($questionnaire['production_address_country'] == 'CU') {echo 'selected=selected';} ?> >Куба</option>
					<option value="KW"<?php if($questionnaire['production_address_country'] == 'KW') {echo 'selected=selected';} ?> >Кувейт</option>
					<option value="CW"<?php if($questionnaire['production_address_country'] == 'CW') {echo 'selected=selected';} ?> >Кюрасао</option>
					<option value="LA"<?php if($questionnaire['production_address_country'] == 'LA') {echo 'selected=selected';} ?> >Лаос</option>
					<option value="LV"<?php if($questionnaire['production_address_country'] == 'LV') {echo 'selected=selected';} ?> >Латвія</option>
					<option value="LS"<?php if($questionnaire['production_address_country'] == 'LS') {echo 'selected=selected';} ?> >Лесото</option>
					<option value="LI"<?php if($questionnaire['production_address_country'] == 'LI') {echo 'selected=selected';} ?> >Литва</option>
					<option value="LB"<?php if($questionnaire['production_address_country'] == 'LB') {echo 'selected=selected';} ?> >Ліберія</option>
					<option value="LY"<?php if($questionnaire['production_address_country'] == 'LY') {echo 'selected=selected';} ?> >Ліван</option>
					<option value="LR"<?php if($questionnaire['production_address_country'] == 'LR') {echo 'selected=selected';} ?> >Лівійська Арабська Джамахірія</option>
					<option value="LT"<?php if($questionnaire['production_address_country'] == 'LT') {echo 'selected=selected';} ?> >Ліхтенштейн</option>
					<option value="LU"<?php if($questionnaire['production_address_country'] == 'LU') {echo 'selected=selected';} ?> >Люксембург</option>
					<option value="MU"<?php if($questionnaire['production_address_country'] == 'MU') {echo 'selected=selected';} ?> >Маврикій</option>
					<option value="MR"<?php if($questionnaire['production_address_country'] == 'MR') {echo 'selected=selected';} ?> >Мавританія</option>
					<option value="MG"<?php if($questionnaire['production_address_country'] == 'MG') {echo 'selected=selected';} ?> >Мадагаскар</option>
					<option value="YT"<?php if($questionnaire['production_address_country'] == 'YT') {echo 'selected=selected';} ?> >Майотта</option>
					<option value="MO"<?php if($questionnaire['production_address_country'] == 'MO') {echo 'selected=selected';} ?> >Макао</option>
					<option value="MW"<?php if($questionnaire['production_address_country'] == 'MW') {echo 'selected=selected';} ?> >Малаві</option>
					<option value="MY"<?php if($questionnaire['production_address_country'] == 'MY') {echo 'selected=selected';} ?> >Малайзія</option>
					<option value="ML"<?php if($questionnaire['production_address_country'] == 'ML') {echo 'selected=selected';} ?> >Малі</option>
					<option value="MV"<?php if($questionnaire['production_address_country'] == 'MV') {echo 'selected=selected';} ?> >Мальдіви</option>
					<option value="MT"<?php if($questionnaire['production_address_country'] == 'MT') {echo 'selected=selected';} ?> >Мальта</option>
					<option value="MA"<?php if($questionnaire['production_address_country'] == 'MA') {echo 'selected=selected';} ?> >Марокко</option>
					<option value="MQ"<?php if($questionnaire['production_address_country'] == 'MQ') {echo 'selected=selected';} ?> >Мартинюк</option>
					<option value="MH"<?php if($questionnaire['production_address_country'] == 'MH') {echo 'selected=selected';} ?> >Маршаллові острови</option>
					<option value="MX"<?php if($questionnaire['production_address_country'] == 'MX') {echo 'selected=selected';} ?> >Мексика</option>
					<option value="FM"<?php if($questionnaire['production_address_country'] == 'FM') {echo 'selected=selected';} ?> >Мікронезія, Федеративні Штати</option>
					<option value="MZ"<?php if($questionnaire['production_address_country'] == 'MZ') {echo 'selected=selected';} ?> >Мозамбік</option>
					<option value="MD"<?php if($questionnaire['production_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="MC"<?php if($questionnaire['production_address_country'] == 'MC') {echo 'selected=selected';} ?> >Монако</option>
					<option value="MN"<?php if($questionnaire['production_address_country'] == 'MN') {echo 'selected=selected';} ?> >Монголія</option>
					<option value="MS"<?php if($questionnaire['production_address_country'] == 'MS') {echo 'selected=selected';} ?> >Монтсеррат</option>
					<option value="MM"<?php if($questionnaire['production_address_country'] == 'MM') {echo 'selected=selected';} ?> >М'янма</option>
					<option value="NA"<?php if($questionnaire['production_address_country'] == 'NA') {echo 'selected=selected';} ?> >Намібія</option>
					<option value="NR"<?php if($questionnaire['production_address_country'] == 'NR') {echo 'selected=selected';} ?> >Науру</option>
					<option value="NP"<?php if($questionnaire['production_address_country'] == 'NP') {echo 'selected=selected';} ?> >Непал</option>
					<option value="NE"<?php if($questionnaire['production_address_country'] == 'NE') {echo 'selected=selected';} ?> >Нігер</option>
					<option value="NG"<?php if($questionnaire['production_address_country'] == 'NG') {echo 'selected=selected';} ?> >Нігерія</option>
					<option value="NL"<?php if($questionnaire['production_address_country'] == 'NL') {echo 'selected=selected';} ?> >Нідерланди</option>
					<option value="NI"<?php if($questionnaire['production_address_country'] == 'NI') {echo 'selected=selected';} ?> >Нікарагуа</option>
					<option value="DE"<?php if($questionnaire['production_address_country'] == 'DE') {echo 'selected=selected';} ?> >Німеччина</option>
					<option value="NU"<?php if($questionnaire['production_address_country'] == 'NU') {echo 'selected=selected';} ?> >Ніуе</option>
					<option value="NZ"<?php if($questionnaire['production_address_country'] == 'NZ') {echo 'selected=selected';} ?> >Нова Зеландія</option>
					<option value="NC"<?php if($questionnaire['production_address_country'] == 'NC') {echo 'selected=selected';} ?> >Нова Каледонія</option>
					<option value="NO"<?php if($questionnaire['production_address_country'] == 'NO') {echo 'selected=selected';} ?> >Норвегія</option>
					<option value="GB"<?php if($questionnaire['production_address_country'] == 'GB') {echo 'selected=selected';} ?> >Об'єднане Королівство</option>
					<option value="AE"<?php if($questionnaire['production_address_country'] == 'AE') {echo 'selected=selected';} ?> >Об'єднані Арабські Емірати</option>
					<option value="OM"<?php if($questionnaire['production_address_country'] == 'OM') {echo 'selected=selected';} ?> >Оман</option>
					<option value="BV"<?php if($questionnaire['production_address_country'] == 'BV') {echo 'selected=selected';} ?> >острів Буве</option>
					<option value="IM"<?php if($questionnaire['production_address_country'] == 'IM') {echo 'selected=selected';} ?> >острів Мен</option>
					<option value="NF"<?php if($questionnaire['production_address_country'] == 'NF') {echo 'selected=selected';} ?> >острів Норфолк</option>
					<option value="CX"<?php if($questionnaire['production_address_country'] == 'CX') {echo 'selected=selected';} ?> >острів Різдва</option>
					<option value="HM"<?php if($questionnaire['production_address_country'] == 'HM') {echo 'selected=selected';} ?> >Острів Херд і острови Макдональд</option>
					<option value="CK"<?php if($questionnaire['production_address_country'] == 'CK') {echo 'selected=selected';} ?> >Острови Кука</option>
					<option value="TC"<?php if($questionnaire['production_address_country'] == 'TC') {echo 'selected=selected';} ?> >Острови Теркс і Кайкос</option>
					<option value="PK"<?php if($questionnaire['production_address_country'] == 'PK') {echo 'selected=selected';} ?> >Пакистан</option>
					<option value="PW"<?php if($questionnaire['production_address_country'] == 'PW') {echo 'selected=selected';} ?> >Палау</option>
					<option value="PS"<?php if($questionnaire['production_address_country'] == 'PS') {echo 'selected=selected';} ?> >Палестинська територія, окупована</option>
					<option value="PA"<?php if($questionnaire['production_address_country'] == 'PA') {echo 'selected=selected';} ?> >Панама</option>
					<option value="VA"<?php if($questionnaire['production_address_country'] == 'VA') {echo 'selected=selected';} ?> >Папський Престол (Держава - місто Ватикан)</option>
					<option value="PG"<?php if($questionnaire['production_address_country'] == 'PG') {echo 'selected=selected';} ?> >Папуа Нова Гвінея</option>
					<option value="PY"<?php if($questionnaire['production_address_country'] == 'PY') {echo 'selected=selected';} ?> >Парагвай</option>
					<option value="PE"<?php if($questionnaire['production_address_country'] == 'PE') {echo 'selected=selected';} ?> >Перу</option>
					<option value="ZA"<?php if($questionnaire['production_address_country'] == 'ZA') {echo 'selected=selected';} ?> >Південна Африка</option>
					<option value="GS"<?php if($questionnaire['production_address_country'] == 'GS') {echo 'selected=selected';} ?> >Південна Джорджія та Південні Сандвічеві острови</option>
					<option value="OS"<?php if($questionnaire['production_address_country'] == 'OS') {echo 'selected=selected';} ?> >Південна Осетія</option>
					<option value="SS"<?php if($questionnaire['production_address_country'] == 'SS') {echo 'selected=selected';} ?> >південний Судан</option>
					<option value="MP"<?php if($questionnaire['production_address_country'] == 'MP') {echo 'selected=selected';} ?> >Північні Маріанські острови</option>
					<option value="PN"<?php if($questionnaire['production_address_country'] == 'PN') {echo 'selected=selected';} ?> >Піткерн</option>
					<option value="PL"<?php if($questionnaire['production_address_country'] == 'PL') {echo 'selected=selected';} ?> >Польща</option>
					<option value="PT"<?php if($questionnaire['production_address_country'] == 'PT') {echo 'selected=selected';} ?> >Португалія</option>
					<option value="PR"<?php if($questionnaire['production_address_country'] == 'PR') {echo 'selected=selected';} ?> >Пуерто-Ріко</option>
					<option value="MK"<?php if($questionnaire['production_address_country'] == 'MK') {echo 'selected=selected';} ?> >Республіка Македонія</option>
					<option value="RE"<?php if($questionnaire['production_address_country'] == 'RE') {echo 'selected=selected';} ?> >Реюньйон</option>
					<option value="RU"<?php if($questionnaire['production_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="RW"<?php if($questionnaire['production_address_country'] == 'RW') {echo 'selected=selected';} ?> >Руанда</option>
					<option value="RO"<?php if($questionnaire['production_address_country'] == 'RO') {echo 'selected=selected';} ?> >Румунія</option>
					<option value="WS"<?php if($questionnaire['production_address_country'] == 'WS') {echo 'selected=selected';} ?> >Самоа</option>
					<option value="SM"<?php if($questionnaire['production_address_country'] == 'SM') {echo 'selected=selected';} ?> >Сан-Марино</option>
					<option value="ST"<?php if($questionnaire['production_address_country'] == 'ST') {echo 'selected=selected';} ?> >Сан-Томе і Прінсіпі</option>
					<option value="SA"<?php if($questionnaire['production_address_country'] == 'SA') {echo 'selected=selected';} ?> >Саудівська Аравія</option>
					<option value="SZ"<?php if($questionnaire['production_address_country'] == 'SZ') {echo 'selected=selected';} ?> >Свазіленд</option>
					<option value="SH"<?php if($questionnaire['production_address_country'] == 'SH') {echo 'selected=selected';} ?> >Свята Єлена, Острів Вознесіння, Трістан-да-Кунья</option>
					<option value="BL"<?php if($questionnaire['production_address_country'] == 'BL') {echo 'selected=selected';} ?> >Сейшели</option>
					<option value="MF"<?php if($questionnaire['production_address_country'] == 'MF') {echo 'selected=selected';} ?> >Сен-Бартельмі</option>
					<option value="SN"<?php if($questionnaire['production_address_country'] == 'SN') {echo 'selected=selected';} ?> >Сенегал</option>
					<option value="VC"<?php if($questionnaire['production_address_country'] == 'VC') {echo 'selected=selected';} ?> >Сен-Мартен</option>
					<option value="LC"<?php if($questionnaire['production_address_country'] == 'LC') {echo 'selected=selected';} ?> >Сент-Вінсент і Гренадіни</option>
					<option value="KN"<?php if($questionnaire['production_address_country'] == 'KN') {echo 'selected=selected';} ?> >Сент-Кітс і Невіс</option>
					<option value="PM"<?php if($questionnaire['production_address_country'] == 'PM') {echo 'selected=selected';} ?> >Сент-Люсія</option>
					<option value="RS"<?php if($questionnaire['production_address_country'] == 'RS') {echo 'selected=selected';} ?> >Сент-П'єр і Мікелон</option>
					<option value="SC"<?php if($questionnaire['production_address_country'] == 'SC') {echo 'selected=selected';} ?> >Сербія</option>
					<option value="SY"<?php if($questionnaire['production_address_country'] == 'SY') {echo 'selected=selected';} ?> >Сирійська Арабська Республіка</option>
					<option value="SG"<?php if($questionnaire['production_address_country'] == 'SG') {echo 'selected=selected';} ?> >Сінгапур</option>
					<option value="SX"<?php if($questionnaire['production_address_country'] == 'SX') {echo 'selected=selected';} ?> >Сінт-Мартен</option>
					<option value="SK"<?php if($questionnaire['production_address_country'] == 'SK') {echo 'selected=selected';} ?> >Словаччина</option>
					<option value="SI"<?php if($questionnaire['production_address_country'] == 'SI') {echo 'selected=selected';} ?> >Словенія</option>
					<option value="SB"<?php if($questionnaire['production_address_country'] == 'SB') {echo 'selected=selected';} ?> >Соломонові острови</option>
					<option value="SO"<?php if($questionnaire['production_address_country'] == 'SO') {echo 'selected=selected';} ?> >Сомалі</option>
					<option value="SD"<?php if($questionnaire['production_address_country'] == 'SD') {echo 'selected=selected';} ?> >Судан</option>
					<option value="SR"<?php if($questionnaire['production_address_country'] == 'SR') {echo 'selected=selected';} ?> >Суринам</option>
					<option value="SL"<?php if($questionnaire['production_address_country'] == 'SL') {echo 'selected=selected';} ?> >Сьєрра-Леоне</option>
					<option value="TJ"<?php if($questionnaire['production_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="TH"<?php if($questionnaire['production_address_country'] == 'TH') {echo 'selected=selected';} ?> >Тайвань (Китай)</option>
					<option value="TW"<?php if($questionnaire['production_address_country'] == 'TW') {echo 'selected=selected';} ?> >Таїланд</option>
					<option value="TZ"<?php if($questionnaire['production_address_country'] == 'TZ') {echo 'selected=selected';} ?> >Танзанія, Об'єднана Республіка</option>
					<option value="TL"<?php if($questionnaire['production_address_country'] == 'TL') {echo 'selected=selected';} ?> >Тимор-Лешті</option>
					<option value="TG"<?php if($questionnaire['production_address_country'] == 'TG') {echo 'selected=selected';} ?> >того</option>
					<option value="TK"<?php if($questionnaire['production_address_country'] == 'TK') {echo 'selected=selected';} ?> >Токелау</option>
					<option value="TO"<?php if($questionnaire['production_address_country'] == 'TO') {echo 'selected=selected';} ?> >Тонга</option>
					<option value="TT"<?php if($questionnaire['production_address_country'] == 'TT') {echo 'selected=selected';} ?> >Трінідад і Тобаго</option>
					<option value="TV"<?php if($questionnaire['production_address_country'] == 'TV') {echo 'selected=selected';} ?> >Тувалу</option>
					<option value="TN"<?php if($questionnaire['production_address_country'] == 'TN') {echo 'selected=selected';} ?> >Туніс</option>
					<option value="TR"<?php if($questionnaire['production_address_country'] == 'TR') {echo 'selected=selected';} ?> >Туреччина</option>
					<option value="TM"<?php if($questionnaire['production_address_country'] == 'TM') {echo 'selected=selected';} ?> >Туркменія</option>
					<option value="UG"<?php if($questionnaire['production_address_country'] == 'UG') {echo 'selected=selected';} ?> >Уганда</option>
					<option value="HU"<?php if($questionnaire['production_address_country'] == 'HU') {echo 'selected=selected';} ?> >Угорщина</option>
					<option value="UZ"<?php if($questionnaire['production_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['production_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>
					<option value="WF"<?php if($questionnaire['production_address_country'] == 'WF') {echo 'selected=selected';} ?> >Уолліс і Футуна</option>
					<option value="UY"<?php if($questionnaire['production_address_country'] == 'UY') {echo 'selected=selected';} ?> >Уругвай</option>
					<option value="FO"<?php if($questionnaire['production_address_country'] == 'FO') {echo 'selected=selected';} ?> >Фарерські острови</option>
					<option value="FJ"<?php if($questionnaire['production_address_country'] == 'FJ') {echo 'selected=selected';} ?> >Фіджі</option>
					<option value="PH"<?php if($questionnaire['production_address_country'] == 'PH') {echo 'selected=selected';} ?> >Філіппіни</option>
					<option value="FI"<?php if($questionnaire['production_address_country'] == 'FI') {echo 'selected=selected';} ?> >Фінляндія</option>
					<option value="FK"<?php if($questionnaire['production_address_country'] == 'FK') {echo 'selected=selected';} ?> >Фолклендські острови (Мальвінські)</option>
					<option value="FR"<?php if($questionnaire['production_address_country'] == 'FR') {echo 'selected=selected';} ?> >Франція</option>
					<option value="GF"<?php if($questionnaire['production_address_country'] == 'GF') {echo 'selected=selected';} ?> >Французька Гвіана</option>
					<option value="PF"<?php if($questionnaire['production_address_country'] == 'PF') {echo 'selected=selected';} ?> >Французька Полінезія</option>
					<option value="TF"<?php if($questionnaire['production_address_country'] == 'TF') {echo 'selected=selected';} ?> >Французькі Південні території</option>
					<option value="HR"<?php if($questionnaire['production_address_country'] == 'HR') {echo 'selected=selected';} ?> >Хорватія</option>
					<option value="CF"<?php if($questionnaire['production_address_country'] == 'CF') {echo 'selected=selected';} ?> >Центрально-Африканська Республіка</option>
					<option value="TD"<?php if($questionnaire['production_address_country'] == 'TD') {echo 'selected=selected';} ?> >Чад</option>
					<option value="CZ"<?php if($questionnaire['production_address_country'] == 'CZ') {echo 'selected=selected';} ?> >Чеська Республіка</option>
					<option value="CL"<?php if($questionnaire['production_address_country'] == 'CL') {echo 'selected=selected';} ?> >Чилі</option>
					<option value="ME"<?php if($questionnaire['production_address_country'] == 'ME') {echo 'selected=selected';} ?> >Чорногорія</option>
					<option value="CH"<?php if($questionnaire['production_address_country'] == 'CH') {echo 'selected=selected';} ?> >Швейцарія</option>
					<option value="SE"<?php if($questionnaire['production_address_country'] == 'SE') {echo 'selected=selected';} ?> >Швеція</option>
					<option value="SJ"<?php if($questionnaire['production_address_country'] == 'SJ') {echo 'selected=selected';} ?> >Шпіцберген і Ян-Маєн</option>
					<option value="LK"<?php if($questionnaire['production_address_country'] == 'LK') {echo 'selected=selected';} ?> >Шрі Ланка</option>
					<option value="JM"<?php if($questionnaire['production_address_country'] == 'JM') {echo 'selected=selected';} ?> >Ямайка</option>
					<option value="JP"<?php if($questionnaire['production_address_country'] == 'JP') {echo 'selected=selected';} ?> >Японія</option>

				</select>

				<label for="production_address_region" class="pair_class">Область</label>
				<input type="text" name="production_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['production_address_region']) ? $questionnaire['production_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="production_address_district" class="pair_class">Район</label>
				<input type="text" name="production_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['production_address_district']) ? $questionnaire['production_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="production_address_city" class="pair_class">Місто</label>
				<input type="text" name="production_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['production_address_city']) ? $questionnaire['production_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="production_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="production_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['production_address_index']) ? $questionnaire['production_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="production_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="production_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['production_address_street']) ? $questionnaire['production_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>




			<div>
				<h3>Контакти компанії</h3>
				<label for="company_phone" class="pair_class">Номер телефону <br>(основний, який буде вказаний на сайті ОС)</label>
				<input type="tel" name="company_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_phone']) ? $questionnaire['company_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="company_email" class="pair_class">Е-пошта організації <br>(основна, яка буде вказана на сайті ОС)</label>
				<input type="email" name="company_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_email']) ? $questionnaire['company_email'] : '' ?>" placeholder="email"  class="pair_class"/><br>

				
			</div>
</div>
<label for="company_web" class="pair_class">Веб-сайт</label>
				<input type="text" name="company_web" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_web']) ? $questionnaire['company_web'] : '' ?>" 
				placeholder="WWW.organicstandard.com.ua"  class="pair_class"/>
			<div>
				<h3> Вкажіть консультанта</h3><p>(якщо є)</p>
				<label for="company_consultant" class="pair_class">ПІБ</label>
				
				<input type="text" name="company_consultant" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_consultant']) ? $questionnaire['company_consultant'] : '' ?>" 
				placeholder="ПІБ"  class="pair_class"/><br> 

				
				<label for="company_consultant_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="company_consultant_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_consultantr_phone']) ? $questionnaire['company_consultant_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="company_consultant_email" class="pair_class">Email</label>
				<input type="email" name="company_consultant_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['company_consultant_email']) ? $questionnaire['company_consultant_email'] : '' ?>" placeholder="Email"  class="pair_class"/>

			</div>
		

		
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- -----------------------------------------------------------------Додавання оператора------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

				<label for="the_same_company" class="pair_class">Замовник і є оператором</label>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="the_same_company" class="pair_class"  <?php if($questionnaire[the_same_company] == 'on') {echo ' checked';} ?>/>
				
				<label for="add_1_operator" class="pair_class">Додати Оператора  <a class="tooltip" href="#"><img src="/templates/organic/images/Help_logo.png"><span class="custom help"><img class="move"  src="/templates/organic/images/info.png" alt="Информация" height="48" width="48" /><em>Оператор</em>Оператор – суб’єкт підприємницької діяльності або особисте селянське (чи підсобне) господарство, що підлягатиме сертифікації Виконавцем</span></a></label>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="add_1_operator" id="add_1_operator_checkbox" onchange="show_hiden(this);" class="pair_class" <?php if($questionnaire[add_1_operator] == 'on') {echo ' checked';} ?>/>


		<div id="add_1_operator" style="display: none">

			<div >
				<h3>Оператор</h3>
				<label for="operator_company_name_UA" class="pair_class">Назва організації або назва фізичної особи</label>

				

			<!--	<select  name="operator_company_status"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_status']) ? $questionnaire['operator_company_status'] : '' ?>">
					<option value="emp" <?php if($questionnaire['operator_company_status'] == 'emp') {echo 'selected="selected"';} ?>></option>
					<option	value="status0"	<?php	if($questionnaire['operator_company_status']	== 'status0')	{echo	'selected="selected"';}	?>>	АПХ	</option>
					<option	value="status1"	<?php	if($questionnaire['operator_company_status']	== 'status1')	{echo	'selected="selected"';}	?>>	АТ	</option>
					<option	value="status2"	<?php	if($questionnaire['operator_company_status']	== 'status2')	{echo	'selected="selected"';}	?>>	АТЗТ	</option>
					<option	value="status3"	<?php	if($questionnaire['operator_company_status']	== 'status3')	{echo	'selected="selected"';}	?>>	ВАТ	</option>
					<option	value="status4"	<?php	if($questionnaire['operator_company_status']	== 'status4')	{echo	'selected="selected"';}	?>>	ВКПФ	</option>
					<option	value="status5"	<?php	if($questionnaire['operator_company_status']	== 'status5')	{echo	'selected="selected"';}	?>>	ДП	</option>
					<option	value="status6"	<?php	if($questionnaire['operator_company_status']	== 'status6')	{echo	'selected="selected"';}	?>>	ЗЕ	</option>
					<option	value="status7"	<?php	if($questionnaire['operator_company_status']	== 'status7')	{echo	'selected="selected"';}	?>>	ИООО	</option>
					<option	value="status8"	<?php	if($questionnaire['operator_company_status']	== 'status8')	{echo	'selected="selected"';}	?>>	ИП	</option>
					<option	value="status9"	<?php	if($questionnaire['operator_company_status']	== 'status9')	{echo	'selected="selected"';}	?>>	ИСЧУ	</option>
					<option	value="status10"	<?php	if($questionnaire['operator_company_status']	== 'status10')	{echo	'selected="selected"';}	?>>	ИЧУП	</option>
					<option	value="status11"	<?php	if($questionnaire['operator_company_status']	== 'status11')	{echo	'selected="selected"';}	?>>	КФХ	</option>
					<option	value="status12"	<?php	if($questionnaire['operator_company_status']	== 'status12')	{echo	'selected="selected"';}	?>>	КХ	</option>
					<option	value="status13"	<?php	if($questionnaire['operator_company_status']	== 'status13')	{echo	'selected="selected"';}	?>>	ЛМГО	</option>
					<option	value="status14"	<?php	if($questionnaire['operator_company_status']	== 'status14')	{echo	'selected="selected"';}	?>>	ЛПХ	</option>
					<option	value="status15"	<?php	if($questionnaire['operator_company_status']	== 'status15')	{echo	'selected="selected"';}	?>>	МБО	</option>
					<option	value="status16"	<?php	if($questionnaire['operator_company_status']	== 'status16')	{echo	'selected="selected"';}	?>>	МЕФ	</option>
					<option	value="status17"	<?php	if($questionnaire['operator_company_status']	== 'status17')	{echo	'selected="selected"';}	?>>	МООЖ	</option>
					<option	value="status18"	<?php	if($questionnaire['operator_company_status']	== 'status18')	{echo	'selected="selected"';}	?>>	МПП	</option>
					<option	value="status19"	<?php	if($questionnaire['operator_company_status']	== 'status19')	{echo	'selected="selected"';}	?>>	МСОК	</option>
					<option	value="status20"	<?php	if($questionnaire['operator_company_status']	== 'status20')	{echo	'selected="selected"';}	?>>	НВ	</option>
					<option	value="status21"	<?php	if($questionnaire['operator_company_status']	== 'status21')	{echo	'selected="selected"';}	?>>	НВП	</option>
					<option	value="status22"	<?php	if($questionnaire['operator_company_status']	== 'status22')	{echo	'selected="selected"';}	?>>	НДВП	</option>
					<option	value="status23"	<?php	if($questionnaire['operator_company_status']	== 'status23')	{echo	'selected="selected"';}	?>>	ОДО	</option>
					<option	value="status24"	<?php	if($questionnaire['operator_company_status']	== 'status24')	{echo	'selected="selected"';}	?>>	ООО	</option>
					<option	value="status25"	<?php	if($questionnaire['operator_company_status']	== 'status25')	{echo	'selected="selected"';}	?>>	ОСГ	</option>
					<option	value="status26"	<?php	if($questionnaire['operator_company_status']	== 'status26')	{echo	'selected="selected"';}	?>>	ПАСТ	</option>
					<option	value="status27"	<?php	if($questionnaire['operator_company_status']	== 'status27')	{echo	'selected="selected"';}	?>>	ПАТ	</option>
					<option	value="status28"	<?php	if($questionnaire['operator_company_status']	== 'status28')	{echo	'selected="selected"';}	?>>	ПАФ	</option>
					<option	value="status29"	<?php	if($questionnaire['operator_company_status']	== 'status29')	{echo	'selected="selected"';}	?>>	ПОП	</option>
					<option	value="status30"	<?php	if($questionnaire['operator_company_status']	== 'status30')	{echo	'selected="selected"';}	?>>	ПП	</option>
					<option	value="status31"	<?php	if($questionnaire['operator_company_status']	== 'status31')	{echo	'selected="selected"';}	?>>	ППОА	</option>
					<option	value="status32"	<?php	if($questionnaire['operator_company_status']	== 'status32')	{echo	'selected="selected"';}	?>>	ПрАТ	</option>
					<option	value="status33"	<?php	if($questionnaire['operator_company_status']	== 'status33')	{echo	'selected="selected"';}	?>>	ПСП	</option>
					<option	value="status34"	<?php	if($questionnaire['operator_company_status']	== 'status34')	{echo	'selected="selected"';}	?>>	ПСПО	</option>
					<option	value="status35"	<?php	if($questionnaire['operator_company_status']	== 'status35')	{echo	'selected="selected"';}	?>>	ПТ	</option>
					<option	value="status36"	<?php	if($questionnaire['operator_company_status']	== 'status36')	{echo	'selected="selected"';}	?>>	СБК	</option>
					<option	value="status37"	<?php	if($questionnaire['operator_company_status']	== 'status37')	{echo	'selected="selected"';}	?>>	СВК	</option>
					<option	value="status38"	<?php	if($questionnaire['operator_company_status']	== 'status38')	{echo	'selected="selected"';}	?>>	СОК	</option>
					<option	value="status39"	<?php	if($questionnaire['operator_company_status']	== 'status39')	{echo	'selected="selected"';}	?>>	СООО	</option>
					<option	value="status40"	<?php	if($questionnaire['operator_company_status']	== 'status40')	{echo	'selected="selected"';}	?>>	СП	</option>
					<option	value="status41"	<?php	if($questionnaire['operator_company_status']	== 'status41')	{echo	'selected="selected"';}	?>>	СПД	</option>
					<option	value="status42"	<?php	if($questionnaire['operator_company_status']	== 'status42')	{echo	'selected="selected"';}	?>>	СТОВ	</option>
					<option	value="status43"	<?php	if($questionnaire['operator_company_status']	== 'status43')	{echo	'selected="selected"';}	?>>	СФГ	</option>
					<option	value="status44"	<?php	if($questionnaire['operator_company_status']	== 'status44')	{echo	'selected="selected"';}	?>>	ТДВ	</option>
					<option	value="status45"	<?php	if($questionnaire['operator_company_status']	== 'status45')	{echo	'selected="selected"';}	?>>	ТОВ	</option>
					<option	value="status46"	<?php	if($questionnaire['operator_company_status']	== 'status46')	{echo	'selected="selected"';}	?>>	ТОО	</option>
					<option	value="status47"	<?php	if($questionnaire['operator_company_status']	== 'status47')	{echo	'selected="selected"';}	?>>	УП	</option>
					<option	value="status48"	<?php	if($questionnaire['operator_company_status']	== 'status48')	{echo	'selected="selected"';}	?>>	ФГ	</option>
					<option	value="status49"	<?php	if($questionnaire['operator_company_status']	== 'status49')	{echo	'selected="selected"';}	?>>	ФО	</option>
					<option	value="status50"	<?php	if($questionnaire['operator_company_status']	== 'status50')	{echo	'selected="selected"';}	?>>	ФОП	</option>
					<option	value="status51"	<?php	if($questionnaire['operator_company_status']	== 'status51')	{echo	'selected="selected"';}	?>>	ФСГ	</option>
					<option	value="status52"	<?php	if($questionnaire['operator_company_status']	== 'status52')	{echo	'selected="selected"';}	?>>	ФХ	</option>

					</select>	-->	


				<input type="text"  name="operator_company_name_UA" id="demo-name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_name_UA']) ? $questionnaire['operator_company_name_UA'] : '' ?>" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> placeholder="Назва Компанії"  class="pair_class"/>
				
				

				

				<label for="operator_company_name_EN" class="pair_class">Назва (англійською мовою)</label>
				<input type="text" name="operator_company_name_EN" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_name_EN']) ? $questionnaire['operator_company_name_EN'] : '' ?>" placeholder="Company Name"   class="pair_class"/>
				<label for="operator_company_id" class="pair_class">ЄДРПОУ (для юридичних осіб) або ДРФО (для фізичних осіб)</label>
				<input type="number" name="operator_company_id" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_id']) ? $questionnaire['operator_company_id'] : '' ?>" placeholder="ЄДРПОУ"   class="pair_class"/>
			</div>

			<div id="op_1">
				<h3>Керівник</h3>
				<label for="operator_general_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="operator_general_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_general_manager_name']) ? $questionnaire['operator_general_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="operator_general_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="operator_general_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_general_manager_surname']) ? $questionnaire['operator_general_manager_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

				<label for="operator_general_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="operator_general_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_general_manager_phone']) ? $questionnaire['operator_general_manager_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="operator_general_manager_email" class="pair_class">Email</label>
				<input type="email" name="operator_general_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_general_manager_email']) ? $questionnaire['operator_general_manager_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>
			</div>

			<div id="op_2">
				<h3 class="pair_class">Особа, відповідальна за органічне виробництво ти сертифікацію</h3>

				<button formnovalidate type="button" name="copy_to_production" class="pair_class" onclick="var suffixes = ['_name', '_surname', '_phone', '_email']; copy_from('op_1', 'op_2', suffixes);">Копіювати дані керівника (якщо співпадають)</button>
				<label for="operator_responsible_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="operator_responsible_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_responsible_manager_name']) ? $questionnaire['operator_responsible_manager_name'] : '' ?>"  placeholder="Ім'я"   class="pair_class"/><br>

				<label for="operator_responsible_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="operator_responsible_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_responsible_manager_surname']) ? $questionnaire['operator_responsible_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="operator_responsible_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="operator_responsible_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_responsible_manager_phone']) ? $questionnaire['operator_responsible_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="operator_responsible_manager_email" class="pair_class">Email</label>
				<input type="email" name="operator_responsible_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_responsible_manager_email']) ? $questionnaire['operator_responsible_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			</div>

		<!--	<div>
				<h3>Особа, відповідальна за фінансові питання</h3>
				<label for="operator_finance_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="operator_finance_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_finance_manager_name']) ? $questionnaire['operator_finance_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="operator_finance_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="operator_finance_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_finance_manager_surname']) ? $questionnaire['operator_finance_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="operator_finance_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="operator_finance_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_finance_manager_phone']) ? $questionnaire['operator_finance_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="operator_finance_manager_email" class="pair_class">Email</label>
				<input type="email" name="operator_finance_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_finance_manager_email']) ? $questionnaire['operator_finance_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			
			</div> -->
			<div id="legal_1">
				<h3>Юридична адреса</h3>
				<label for="operator_legal_address_country" class="pair_class">Країна</label>
				<select name="operator_legal_address_country"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_legal_address_country']) ? $questionnaire['operator_legal_address_country'] : '' ?>" class="pair_class">
					<option value="" <?php if($questionnaire['operator_legal_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AZ"<?php if($questionnaire['operator_legal_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="BY"<?php if($questionnaire['operator_legal_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="AM"<?php if($questionnaire['operator_legal_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GE"<?php if($questionnaire['operator_legal_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="KZ"<?php if($questionnaire['operator_legal_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KG"<?php if($questionnaire['operator_legal_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="MD"<?php if($questionnaire['operator_legal_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="RU"<?php if($questionnaire['operator_legal_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="TJ"<?php if($questionnaire['operator_legal_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="UZ"<?php if($questionnaire['operator_legal_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['operator_legal_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>
					

</select>
				

				<label for="operator_legal_address_region" class="pair_class">Область</label>
				<input type="text" name="operator_legal_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_legal_address_region']) ? $questionnaire['operator_legal_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_legal_address_district" title ="new" class="pair_class">Район</label>
				<input type="text" name="operator_legal_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_legal_address_district']) ? $questionnaire['operator_legal_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_legal_address_city" class="pair_class">Місто</label>
				<input type="text" name="operator_legal_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_legal_address_city']) ? $questionnaire['operator_legal_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_legal_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="operator_legal_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_legal_address_index']) ? $questionnaire['operator_legal_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_legal_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="operator_legal_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_legal_address_street']) ? $questionnaire['operator_legal_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="post_1">
				<h3 class="pair_class">Поштова адреса</h3>
				

				<button formnovalidate type="button" name="operator_copy_to_post" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_1', 'post_1', suffixes);">Копіювати з юр. адреси</button>


				<label for="operator_post_address_country" class="pair_class">Країна</label>
				<select name="operator_post_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_post_address_country']) ? $questionnaire['operator_post_address_country'] : '' ?>"  class="pair_class">
						<option value="" <?php if($questionnaire['operator_post_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AZ"<?php if($questionnaire['operator_post_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="BY"<?php if($questionnaire['operator_post_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="AM"<?php if($questionnaire['operator_post_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GE"<?php if($questionnaire['operator_post_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="KZ"<?php if($questionnaire['operator_post_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KG"<?php if($questionnaire['operator_post_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="MD"<?php if($questionnaire['operator_post_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="RU"<?php if($questionnaire['operator_post_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="TJ"<?php if($questionnaire['operator_post_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="UZ"<?php if($questionnaire['operator_post_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['operator_post_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>
				</select>

				<label for="operator_post_address_region" class="pair_class">Область</label>
				<input type="text" name="operator_post_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_post_address_region']) ? $questionnaire['operator_post_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_post_address_district" class="pair_class">Район</label>
				<input type="text" name="operator_post_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_post_address_district']) ? $questionnaire['operator_post_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_post_address_city" class="pair_class">Місто</label>
				<input type="text" name="operator_post_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_post_address_city']) ? $questionnaire['operator_post_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>
				
				<label for="operator_post_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="operator_post_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_post_address_index']) ? $questionnaire['operator_post_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_post_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="operator_post_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_post_address_street']) ? $questionnaire['operator_post_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="production_1">
				<h3 class="pair_class">Адреса місцезнаходження виробництва або виробничих потужностей</h3>
				<button formnovalidate type="button" name="operator_copy_to_production" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_1', 'production_1', suffixes);">Копіювати з юр. адреси</button>

				<label for="operator_production_address_country" class="pair_class">Країна</label>
				<select name="operator_production_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_production_address_country']) ? $questionnaire['operator_production_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['operator_production_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AZ"<?php if($questionnaire['operator_production_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="BY"<?php if($questionnaire['operator_production_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="AM"<?php if($questionnaire['operator_production_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GE"<?php if($questionnaire['operator_production_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="KZ"<?php if($questionnaire['operator_production_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KG"<?php if($questionnaire['operator_production_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="MD"<?php if($questionnaire['operator_production_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="RU"<?php if($questionnaire['operator_production_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="TJ"<?php if($questionnaire['operator_production_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="UZ"<?php if($questionnaire['operator_production_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['operator_production_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="operator_production_address_region" class="pair_class">Область</label>
				<input type="text" name="operator_production_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_production_address_region']) ? $questionnaire['operator_production_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_production_address_district" class="pair_class">Район</label>
				<input type="text" name="operator_production_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_production_address_district']) ? $questionnaire['operator_production_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_production_address_city" class="pair_class">Місто</label>
				<input type="text" name="operator_production_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_production_address_city']) ? $questionnaire['operator_production_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_production_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="operator_production_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_production_address_index']) ? $questionnaire['operator_production_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="operator_production_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="operator_production_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_production_address_street']) ? $questionnaire['operator_production_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>




			<div>
				<h3>Контакти компанії</h3>
				<label for="operator_company_phone" class="pair_class">Номер телефону <br>(основний, який буде вказаний на сайті ОС)</label>
				<input type="tel" name="operator_company_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_phone']) ? $questionnaire['operator_company_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="operator_company_email" class="pair_class">Е-пошта організації <br>(основна, яка буде вказана на сайті ОС)</label>
				<input type="email" name="operator_company_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_email']) ? $questionnaire['operator_company_email'] : '' ?>" placeholder="email"  class="pair_class"/><br>

				<!--<label for="operator_company_web" class="pair_class">Веб-сайт</label>
				<input type="text" name="operator_company_web" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['operator_company_web']) ? $questionnaire['operator_company_web'] : '' ?>" 
				placeholder="WWW.organicstandard.com.ua"  class="pair_class"/><br> -->
			</div>
					
		</div>

<!----------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------Підрядник номер 1---------------------------------------------------------- -->
<!----------------------------------------------------------------------------------------------------------------------------------------------- -->
		
				<label for="add_pid" class="pair_class">Додати підрядну організацію <a class="tooltip" href="#"><img src="/templates/organic/images/Help_logo.png"><span class="custom help"><img class="move"  src="/templates/organic/images/info.png" alt="Информация" height="48" width="48" /><em>Підрядна організація</em>Підрядний виробник –  фізична або юридична особа, з якою заключає Договір про надання певних видів підрядних (давальницьких) послуг Оператор; при цьому власником сировини та готового продукту є сам Оператор.</span></a></label>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="add_pid" id="add_pid_checkbox" onchange="show_hiden(this);" class="pair_class"
				<?php if($questionnaire[add_pid] == 'on') {echo ' checked';} ?>/>

		<div id="add_pid" style="display: none">

			<div >
				<h3>Підрядна організація</h3>
				<label for="pid_company_name_UA" class="pair_class">Назва організації або назва фізичної особи</label>

				

				<!-- <select  name="pid_company_status"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_status']) ? $questionnaire['pid_company_status'] : '' ?>">
					<option value="emp" <?php if($questionnaire['pid_company_status'] == 'emp') {echo 'selected="selected"';} ?>></option>
					<option	value="status0"	<?php	if($questionnaire['pid_company_status']	== 'status0')	{echo	'selected="selected"';}	?>>	АПХ	</option>
					<option	value="status1"	<?php	if($questionnaire['pid_company_status']	== 'status1')	{echo	'selected="selected"';}	?>>	АТ	</option>
					<option	value="status2"	<?php	if($questionnaire['pid_company_status']	== 'status2')	{echo	'selected="selected"';}	?>>	АТЗТ	</option>
					<option	value="status3"	<?php	if($questionnaire['pid_company_status']	== 'status3')	{echo	'selected="selected"';}	?>>	ВАТ	</option>
					<option	value="status4"	<?php	if($questionnaire['pid_company_status']	== 'status4')	{echo	'selected="selected"';}	?>>	ВКПФ	</option>
					<option	value="status5"	<?php	if($questionnaire['pid_company_status']	== 'status5')	{echo	'selected="selected"';}	?>>	ДП	</option>
					<option	value="status6"	<?php	if($questionnaire['pid_company_status']	== 'status6')	{echo	'selected="selected"';}	?>>	ЗЕ	</option>
					<option	value="status7"	<?php	if($questionnaire['pid_company_status']	== 'status7')	{echo	'selected="selected"';}	?>>	ИООО	</option>
					<option	value="status8"	<?php	if($questionnaire['pid_company_status']	== 'status8')	{echo	'selected="selected"';}	?>>	ИП	</option>
					<option	value="status9"	<?php	if($questionnaire['pid_company_status']	== 'status9')	{echo	'selected="selected"';}	?>>	ИСЧУ	</option>
					<option	value="status10"	<?php	if($questionnaire['pid_company_status']	== 'status10')	{echo	'selected="selected"';}	?>>	ИЧУП	</option>
					<option	value="status11"	<?php	if($questionnaire['pid_company_status']	== 'status11')	{echo	'selected="selected"';}	?>>	КФХ	</option>
					<option	value="status12"	<?php	if($questionnaire['pid_company_status']	== 'status12')	{echo	'selected="selected"';}	?>>	КХ	</option>
					<option	value="status13"	<?php	if($questionnaire['pid_company_status']	== 'status13')	{echo	'selected="selected"';}	?>>	ЛМГО	</option>
					<option	value="status14"	<?php	if($questionnaire['pid_company_status']	== 'status14')	{echo	'selected="selected"';}	?>>	ЛПХ	</option>
					<option	value="status15"	<?php	if($questionnaire['pid_company_status']	== 'status15')	{echo	'selected="selected"';}	?>>	МБО	</option>
					<option	value="status16"	<?php	if($questionnaire['pid_company_status']	== 'status16')	{echo	'selected="selected"';}	?>>	МЕФ	</option>
					<option	value="status17"	<?php	if($questionnaire['pid_company_status']	== 'status17')	{echo	'selected="selected"';}	?>>	МООЖ	</option>
					<option	value="status18"	<?php	if($questionnaire['pid_company_status']	== 'status18')	{echo	'selected="selected"';}	?>>	МПП	</option>
					<option	value="status19"	<?php	if($questionnaire['pid_company_status']	== 'status19')	{echo	'selected="selected"';}	?>>	МСОК	</option>
					<option	value="status20"	<?php	if($questionnaire['pid_company_status']	== 'status20')	{echo	'selected="selected"';}	?>>	НВ	</option>
					<option	value="status21"	<?php	if($questionnaire['pid_company_status']	== 'status21')	{echo	'selected="selected"';}	?>>	НВП	</option>
					<option	value="status22"	<?php	if($questionnaire['pid_company_status']	== 'status22')	{echo	'selected="selected"';}	?>>	НДВП	</option>
					<option	value="status23"	<?php	if($questionnaire['pid_company_status']	== 'status23')	{echo	'selected="selected"';}	?>>	ОДО	</option>
					<option	value="status24"	<?php	if($questionnaire['pid_company_status']	== 'status24')	{echo	'selected="selected"';}	?>>	ООО	</option>
					<option	value="status25"	<?php	if($questionnaire['pid_company_status']	== 'status25')	{echo	'selected="selected"';}	?>>	ОСГ	</option>
					<option	value="status26"	<?php	if($questionnaire['pid_company_status']	== 'status26')	{echo	'selected="selected"';}	?>>	ПАСТ	</option>
					<option	value="status27"	<?php	if($questionnaire['pid_company_status']	== 'status27')	{echo	'selected="selected"';}	?>>	ПАТ	</option>
					<option	value="status28"	<?php	if($questionnaire['pid_company_status']	== 'status28')	{echo	'selected="selected"';}	?>>	ПАФ	</option>
					<option	value="status29"	<?php	if($questionnaire['pid_company_status']	== 'status29')	{echo	'selected="selected"';}	?>>	ПОП	</option>
					<option	value="status30"	<?php	if($questionnaire['pid_company_status']	== 'status30')	{echo	'selected="selected"';}	?>>	ПП	</option>
					<option	value="status31"	<?php	if($questionnaire['pid_company_status']	== 'status31')	{echo	'selected="selected"';}	?>>	ППОА	</option>
					<option	value="status32"	<?php	if($questionnaire['pid_company_status']	== 'status32')	{echo	'selected="selected"';}	?>>	ПрАТ	</option>
					<option	value="status33"	<?php	if($questionnaire['pid_company_status']	== 'status33')	{echo	'selected="selected"';}	?>>	ПСП	</option>
					<option	value="status34"	<?php	if($questionnaire['pid_company_status']	== 'status34')	{echo	'selected="selected"';}	?>>	ПСПО	</option>
					<option	value="status35"	<?php	if($questionnaire['pid_company_status']	== 'status35')	{echo	'selected="selected"';}	?>>	ПТ	</option>
					<option	value="status36"	<?php	if($questionnaire['pid_company_status']	== 'status36')	{echo	'selected="selected"';}	?>>	СБК	</option>
					<option	value="status37"	<?php	if($questionnaire['pid_company_status']	== 'status37')	{echo	'selected="selected"';}	?>>	СВК	</option>
					<option	value="status38"	<?php	if($questionnaire['pid_company_status']	== 'status38')	{echo	'selected="selected"';}	?>>	СОК	</option>
					<option	value="status39"	<?php	if($questionnaire['pid_company_status']	== 'status39')	{echo	'selected="selected"';}	?>>	СООО	</option>
					<option	value="status40"	<?php	if($questionnaire['pid_company_status']	== 'status40')	{echo	'selected="selected"';}	?>>	СП	</option>
					<option	value="status41"	<?php	if($questionnaire['pid_company_status']	== 'status41')	{echo	'selected="selected"';}	?>>	СПД	</option>
					<option	value="status42"	<?php	if($questionnaire['pid_company_status']	== 'status42')	{echo	'selected="selected"';}	?>>	СТОВ	</option>
					<option	value="status43"	<?php	if($questionnaire['pid_company_status']	== 'status43')	{echo	'selected="selected"';}	?>>	СФГ	</option>
					<option	value="status44"	<?php	if($questionnaire['pid_company_status']	== 'status44')	{echo	'selected="selected"';}	?>>	ТДВ	</option>
					<option	value="status45"	<?php	if($questionnaire['pid_company_status']	== 'status45')	{echo	'selected="selected"';}	?>>	ТОВ	</option>
					<option	value="status46"	<?php	if($questionnaire['pid_company_status']	== 'status46')	{echo	'selected="selected"';}	?>>	ТОО	</option>
					<option	value="status47"	<?php	if($questionnaire['pid_company_status']	== 'status47')	{echo	'selected="selected"';}	?>>	УП	</option>
					<option	value="status48"	<?php	if($questionnaire['pid_company_status']	== 'status48')	{echo	'selected="selected"';}	?>>	ФГ	</option>
					<option	value="status49"	<?php	if($questionnaire['pid_company_status']	== 'status49')	{echo	'selected="selected"';}	?>>	ФО	</option>
					<option	value="status50"	<?php	if($questionnaire['pid_company_status']	== 'status50')	{echo	'selected="selected"';}	?>>	ФОП	</option>
					<option	value="status51"	<?php	if($questionnaire['pid_company_status']	== 'status51')	{echo	'selected="selected"';}	?>>	ФСГ	</option>
					<option	value="status52"	<?php	if($questionnaire['pid_company_status']	== 'status52')	{echo	'selected="selected"';}	?>>	ФХ	</option>

					</select> -->

				<input type="text"  name="pid_company_name_UA" id="demo-name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_name_UA']) ? $questionnaire['pid_company_name_UA'] : '' ?>" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> placeholder="Назва Компанії"  class="pair_class"/>
				
				
				

				<label for="pid_company_name_EN" class="pair_class">Назва (англійською мовою)</label>
				<input type="text" name="pid_company_name_EN" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_name_EN']) ? $questionnaire['pid_company_name_EN'] : '' ?>" placeholder="Company Name"   class="pair_class"/>
				<label for="pid_company_id" class="pair_class">ЄДРПОУ (для юридичних осіб) або ДРФО (для фізичних осіб)</label>
				<input type="number" name="pid_company_id" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_id']) ? $questionnaire['pid_company_id'] : '' ?>" placeholder="ЄДРПОУ"   class="pair_class"/>
			</div>

			<div>
				<h3>Керівник</h3>
				<label for="pid_general_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_general_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_general_manager_name']) ? $questionnaire['pid_general_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_general_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_general_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_general_manager_surname']) ? $questionnaire['pid_general_manager_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_general_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_general_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_general_manager_phone']) ? $questionnaire['pid_general_manager_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_general_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_general_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_general_manager_email']) ? $questionnaire['pid_general_manager_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>
			</div>

		<!--	<div>
				<h3>Особа, відповідальна за органічне виробництво ти сертифікацію</h3>
				<label for="pid_responsible_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_responsible_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_responsible_manager_name']) ? $questionnaire['pid_responsible_manager_name'] : '' ?>"  placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_responsible_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_responsible_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_responsible_manager_surname']) ? $questionnaire['pid_responsible_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_responsible_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_responsible_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_responsible_manager_phone']) ? $questionnaire['pid_responsible_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_responsible_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_responsible_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_responsible_manager_email']) ? $questionnaire['pid_responsible_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			</div>

			<div>
				<h3>Особа, відповідальна за фінансові питання</h3>
				<label for="pid_finance_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_finance_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_finance_manager_name']) ? $questionnaire['pid_finance_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_finance_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_finance_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_finance_manager_surname']) ? $questionnaire['pid_finance_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_finance_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_finance_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_finance_manager_phone']) ? $questionnaire['pid_finance_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_finance_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_finance_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_finance_manager_email']) ? $questionnaire['pid_finance_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			
			</div> -->
			<div id="legal_2">
				<h3>Юридична адреса</h3>
				<label for="pid_legal_address_country" class="pair_class">Країна</label>
				<select name="pid_legal_address_country"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_legal_address_country']) ? $questionnaire['pid_legal_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['pid_legal_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_legal_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_legal_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_legal_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_legal_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_legal_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_legal_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_legal_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_legal_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_legal_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_legal_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_legal_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_legal_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_legal_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_legal_address_region']) ? $questionnaire['pid_legal_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_legal_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_legal_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_legal_address_district']) ? $questionnaire['pid_legal_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_legal_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_legal_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_legal_address_city']) ? $questionnaire['pid_legal_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_legal_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_legal_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_legal_address_index']) ? $questionnaire['pid_legal_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_legal_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_legal_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_legal_address_street']) ? $questionnaire['pid_legal_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="post_2">
				<h3 class="pair_class">Поштова адреса</h3>
				<button formnovalidate type="button" name="pid_copy_to_post" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_2', 'post_2', suffixes);">Копіювати з юр. адреси</button>

				<label for="pid_post_address_country" class="pair_class">Країна</label>
				<select name="pid_post_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_post_address_country']) ? $questionnaire['pid_post_address_country'] : '' ?>"  class="pair_class">
						<option value="" <?php if($questionnaire['pid_post_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_post_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_post_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_post_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_post_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_post_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_post_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_post_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_post_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_post_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_post_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_post_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_post_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_post_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_post_address_region']) ? $questionnaire['pid_post_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_post_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_post_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_post_address_district']) ? $questionnaire['pid_post_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_post_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_post_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_post_address_city']) ? $questionnaire['pid_post_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>
				
				<label for="pid_post_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_post_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_post_address_index']) ? $questionnaire['pid_post_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_post_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_post_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_post_address_street']) ? $questionnaire['pid_post_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="production_2">
				<h3 class="pair_class">Адреса місцезнаходження виробництва або виробничих потужностей</h3>
				<button formnovalidate type="button" name="pid_copy_to_production" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_2', 'production_2', suffixes);">Копіювати з юр. адреси</button>

				<label for="pid_production_address_country" class="pair_class">Країна</label>
				<select name="pid_production_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_production_address_country']) ? $questionnaire['pid_production_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['pid_production_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_production_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_production_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_production_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_production_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_production_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_production_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_production_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_production_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_production_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_production_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_production_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_production_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_production_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_production_address_region']) ? $questionnaire['pid_production_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_production_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_production_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_production_address_district']) ? $questionnaire['pid_production_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_production_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_production_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_production_address_city']) ? $questionnaire['pid_production_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_production_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_production_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_production_address_index']) ? $questionnaire['pid_production_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_production_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_production_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_production_address_street']) ? $questionnaire['pid_production_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>




			<div>
				<h3>Контакти компанії</h3>
				<label for="pid_company_phone" class="pair_class">Номер телефону <br>(основний, який буде вказаний на сайті ОС)</label>
				<input type="tel" name="pid_company_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_phone']) ? $questionnaire['pid_company_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_company_email" class="pair_class">Е-пошта організації <br>(основна, яка буде вказана на сайті ОС)</label>
				<input type="email" name="pid_company_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_email']) ? $questionnaire['pid_company_email'] : '' ?>" placeholder="email"  class="pair_class"/><br>

			<!--	<label for="pid_company_web" class="pair_class">Веб-сайт</label>
				<input type="text" name="pid_company_web" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_company_web']) ? $questionnaire['pid_company_web'] : '' ?>" 
				placeholder="WWW.organicstandard.com.ua"  class="pair_class"/><br> -->
			</div>
				
				<label for="add_1_pid" class="pair_class">Додати підрядну організацію</label>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="add_1_pid" id="add_1_pid_checkbox" onchange="show_hiden(this);" class="pair_class" <?php if($questionnaire[add_1_pid] == 'on') {echo ' checked';} ?>/>
	
		</div>
			
<!------------------------------------------------------------------------------------------------------------------------------------------------->
<!-- -----------------------------------------------------------------Підрядник номер 2--------------------------------------------------------- -->
<!-------------------------------------------------------------------------------------------------------------------------------------------------->
				
		<div id="add_1_pid" style="display: none">

			<div >
				<h3>Підрядна Організація</h3>
				<label for="pid_1_company_name_UA" class="pair_class">Назва організації або назва фізичної особи</label>

			

				<!-- <select  name="pid_1_company_status"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_status']) ? $questionnaire['pid_1_company_status'] : '' ?>">
					<option value="emp" <?php if($questionnaire['pid_1_company_status'] == 'emp') {echo 'selected="selected"';} ?>></option>
					<option	value="status0"	<?php	if($questionnaire['pid_1_company_status']	== 'status0')	{echo	'selected="selected"';}	?>>	АПХ	</option>
					<option	value="status1"	<?php	if($questionnaire['pid_1_company_status']	== 'status1')	{echo	'selected="selected"';}	?>>	АТ	</option>
					<option	value="status2"	<?php	if($questionnaire['pid_1_company_status']	== 'status2')	{echo	'selected="selected"';}	?>>	АТЗТ	</option>
					<option	value="status3"	<?php	if($questionnaire['pid_1_company_status']	== 'status3')	{echo	'selected="selected"';}	?>>	ВАТ	</option>
					<option	value="status4"	<?php	if($questionnaire['pid_1_company_status']	== 'status4')	{echo	'selected="selected"';}	?>>	ВКПФ	</option>
					<option	value="status5"	<?php	if($questionnaire['pid_1_company_status']	== 'status5')	{echo	'selected="selected"';}	?>>	ДП	</option>
					<option	value="status6"	<?php	if($questionnaire['pid_1_company_status']	== 'status6')	{echo	'selected="selected"';}	?>>	ЗЕ	</option>
					<option	value="status7"	<?php	if($questionnaire['pid_1_company_status']	== 'status7')	{echo	'selected="selected"';}	?>>	ИООО	</option>
					<option	value="status8"	<?php	if($questionnaire['pid_1_company_status']	== 'status8')	{echo	'selected="selected"';}	?>>	ИП	</option>
					<option	value="status9"	<?php	if($questionnaire['pid_1_company_status']	== 'status9')	{echo	'selected="selected"';}	?>>	ИСЧУ	</option>
					<option	value="status10"	<?php	if($questionnaire['pid_1_company_status']	== 'status10')	{echo	'selected="selected"';}	?>>	ИЧУП	</option>
					<option	value="status11"	<?php	if($questionnaire['pid_1_company_status']	== 'status11')	{echo	'selected="selected"';}	?>>	КФХ	</option>
					<option	value="status12"	<?php	if($questionnaire['pid_1_company_status']	== 'status12')	{echo	'selected="selected"';}	?>>	КХ	</option>
					<option	value="status13"	<?php	if($questionnaire['pid_1_company_status']	== 'status13')	{echo	'selected="selected"';}	?>>	ЛМГО	</option>
					<option	value="status14"	<?php	if($questionnaire['pid_1_company_status']	== 'status14')	{echo	'selected="selected"';}	?>>	ЛПХ	</option>
					<option	value="status15"	<?php	if($questionnaire['pid_1_company_status']	== 'status15')	{echo	'selected="selected"';}	?>>	МБО	</option>
					<option	value="status16"	<?php	if($questionnaire['pid_1_company_status']	== 'status16')	{echo	'selected="selected"';}	?>>	МЕФ	</option>
					<option	value="status17"	<?php	if($questionnaire['pid_1_company_status']	== 'status17')	{echo	'selected="selected"';}	?>>	МООЖ	</option>
					<option	value="status18"	<?php	if($questionnaire['pid_1_company_status']	== 'status18')	{echo	'selected="selected"';}	?>>	МПП	</option>
					<option	value="status19"	<?php	if($questionnaire['pid_1_company_status']	== 'status19')	{echo	'selected="selected"';}	?>>	МСОК	</option>
					<option	value="status20"	<?php	if($questionnaire['pid_1_company_status']	== 'status20')	{echo	'selected="selected"';}	?>>	НВ	</option>
					<option	value="status21"	<?php	if($questionnaire['pid_1_company_status']	== 'status21')	{echo	'selected="selected"';}	?>>	НВП	</option>
					<option	value="status22"	<?php	if($questionnaire['pid_1_company_status']	== 'status22')	{echo	'selected="selected"';}	?>>	НДВП	</option>
					<option	value="status23"	<?php	if($questionnaire['pid_1_company_status']	== 'status23')	{echo	'selected="selected"';}	?>>	ОДО	</option>
					<option	value="status24"	<?php	if($questionnaire['pid_1_company_status']	== 'status24')	{echo	'selected="selected"';}	?>>	ООО	</option>
					<option	value="status25"	<?php	if($questionnaire['pid_1_company_status']	== 'status25')	{echo	'selected="selected"';}	?>>	ОСГ	</option>
					<option	value="status26"	<?php	if($questionnaire['pid_1_company_status']	== 'status26')	{echo	'selected="selected"';}	?>>	ПАСТ	</option>
					<option	value="status27"	<?php	if($questionnaire['pid_1_company_status']	== 'status27')	{echo	'selected="selected"';}	?>>	ПАТ	</option>
					<option	value="status28"	<?php	if($questionnaire['pid_1_company_status']	== 'status28')	{echo	'selected="selected"';}	?>>	ПАФ	</option>
					<option	value="status29"	<?php	if($questionnaire['pid_1_company_status']	== 'status29')	{echo	'selected="selected"';}	?>>	ПОП	</option>
					<option	value="status30"	<?php	if($questionnaire['pid_1_company_status']	== 'status30')	{echo	'selected="selected"';}	?>>	ПП	</option>
					<option	value="status31"	<?php	if($questionnaire['pid_1_company_status']	== 'status31')	{echo	'selected="selected"';}	?>>	ППОА	</option>
					<option	value="status32"	<?php	if($questionnaire['pid_1_company_status']	== 'status32')	{echo	'selected="selected"';}	?>>	ПрАТ	</option>
					<option	value="status33"	<?php	if($questionnaire['pid_1_company_status']	== 'status33')	{echo	'selected="selected"';}	?>>	ПСП	</option>
					<option	value="status34"	<?php	if($questionnaire['pid_1_company_status']	== 'status34')	{echo	'selected="selected"';}	?>>	ПСПО	</option>
					<option	value="status35"	<?php	if($questionnaire['pid_1_company_status']	== 'status35')	{echo	'selected="selected"';}	?>>	ПТ	</option>
					<option	value="status36"	<?php	if($questionnaire['pid_1_company_status']	== 'status36')	{echo	'selected="selected"';}	?>>	СБК	</option>
					<option	value="status37"	<?php	if($questionnaire['pid_1_company_status']	== 'status37')	{echo	'selected="selected"';}	?>>	СВК	</option>
					<option	value="status38"	<?php	if($questionnaire['pid_1_company_status']	== 'status38')	{echo	'selected="selected"';}	?>>	СОК	</option>
					<option	value="status39"	<?php	if($questionnaire['pid_1_company_status']	== 'status39')	{echo	'selected="selected"';}	?>>	СООО	</option>
					<option	value="status40"	<?php	if($questionnaire['pid_1_company_status']	== 'status40')	{echo	'selected="selected"';}	?>>	СП	</option>
					<option	value="status41"	<?php	if($questionnaire['pid_1_company_status']	== 'status41')	{echo	'selected="selected"';}	?>>	СПД	</option>
					<option	value="status42"	<?php	if($questionnaire['pid_1_company_status']	== 'status42')	{echo	'selected="selected"';}	?>>	СТОВ	</option>
					<option	value="status43"	<?php	if($questionnaire['pid_1_company_status']	== 'status43')	{echo	'selected="selected"';}	?>>	СФГ	</option>
					<option	value="status44"	<?php	if($questionnaire['pid_1_company_status']	== 'status44')	{echo	'selected="selected"';}	?>>	ТДВ	</option>
					<option	value="status45"	<?php	if($questionnaire['pid_1_company_status']	== 'status45')	{echo	'selected="selected"';}	?>>	ТОВ	</option>
					<option	value="status46"	<?php	if($questionnaire['pid_1_company_status']	== 'status46')	{echo	'selected="selected"';}	?>>	ТОО	</option>
					<option	value="status47"	<?php	if($questionnaire['pid_1_company_status']	== 'status47')	{echo	'selected="selected"';}	?>>	УП	</option>
					<option	value="status48"	<?php	if($questionnaire['pid_1_company_status']	== 'status48')	{echo	'selected="selected"';}	?>>	ФГ	</option>
					<option	value="status49"	<?php	if($questionnaire['pid_1_company_status']	== 'status49')	{echo	'selected="selected"';}	?>>	ФО	</option>
					<option	value="status50"	<?php	if($questionnaire['pid_1_company_status']	== 'status50')	{echo	'selected="selected"';}	?>>	ФОП	</option>
					<option	value="status51"	<?php	if($questionnaire['pid_1_company_status']	== 'status51')	{echo	'selected="selected"';}	?>>	ФСГ	</option>
					<option	value="status52"	<?php	if($questionnaire['pid_1_company_status']	== 'status52')	{echo	'selected="selected"';}	?>>	ФХ	</option>

					</select> -->


				<input type="text"  name="pid_1_company_name_UA" id="demo-name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_name_UA']) ? $questionnaire['pid_1_company_name_UA'] : '' ?>" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> placeholder="Назва Компанії"  class="pair_class"/>
				
				
				


				<label for="pid_1_company_name_EN" class="pair_class">Назва (англійською мовою)</label>
				<input type="text" name="pid_1_company_name_EN" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_name_EN']) ? $questionnaire['pid_1_company_name_EN'] : '' ?>" placeholder="Company Name"   class="pair_class"/>
				<label for="pid_1_company_id" class="pair_class">ЄДРПОУ (для юридичних осіб) або ДРФО (для фізичних осіб)</label>
				<input type="number" name="pid_1_company_id" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_id']) ? $questionnaire['pid_1_company_id'] : '' ?>" placeholder="ЄДРПОУ"   class="pair_class"/>
			</div>

			<div>
				<h3>Керівник</h3>
				<label for="pid_1_general_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_1_general_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_general_manager_name']) ? $questionnaire['pid_1_general_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_1_general_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_1_general_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_general_manager_surname']) ? $questionnaire['pid_1_general_manager_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_1_general_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_1_general_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_general_manager_phone']) ? $questionnaire['pid_1_general_manager_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_1_general_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_1_general_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_general_manager_email']) ? $questionnaire['pid_1_general_manager_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>
			</div>

		<!--	<div>
				<h3>Особа, відповідальна за органічне виробництво ти сертифікацію</h3>
				<label for="pid_1_responsible_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_1_responsible_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_responsible_manager_name']) ? $questionnaire['pid_1_responsible_manager_name'] : '' ?>"  placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_1_responsible_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_1_responsible_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_responsible_manager_surname']) ? $questionnaire['pid_1_responsible_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_1_responsible_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_1_responsible_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_responsible_manager_phone']) ? $questionnaire['pid_1_responsible_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_1_responsible_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_1_responsible_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_responsible_manager_email']) ? $questionnaire['pid_1_responsible_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			</div>

			<div>
				<h3>Особа, відповідальна за фінансові питання</h3>
				<label for="pid_1_finance_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_1_finance_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_finance_manager_name']) ? $questionnaire['pid_1_finance_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_1_finance_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_1_finance_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_finance_manager_surname']) ? $questionnaire['pid_1_finance_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_1_finance_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_1_finance_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_finance_manager_phone']) ? $questionnaire['pid_1_finance_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_1_finance_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_1_finance_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_finance_manager_email']) ? $questionnaire['pid_1_finance_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			
			</div> -->
			<div id="legal_3">
				<h3>Юридична адреса</h3>
				<label for="pid_1_legal_address_country" class="pair_class">Країна</label>
				<select name="pid_1_legal_address_country"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_legal_address_country']) ? $questionnaire['pid_1_legal_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['pid_1_legal_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_1_legal_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_1_legal_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_1_legal_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_1_legal_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_1_legal_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_1_legal_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_1_legal_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_1_legal_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_1_legal_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_1_legal_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_1_legal_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_1_legal_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_1_legal_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_legal_address_region']) ? $questionnaire['pid_1_legal_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_legal_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_1_legal_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_legal_address_district']) ? $questionnaire['pid_1_legal_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_legal_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_1_legal_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_legal_address_city']) ? $questionnaire['pid_1_legal_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_legal_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_1_legal_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_legal_address_index']) ? $questionnaire['pid_1_legal_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_legal_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_1_legal_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_legal_address_street']) ? $questionnaire['pid_1_legal_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="post_3">
				<h3 class="pair_class">Поштова адреса</h3>
				<button formnovalidate type="button" name="pid_1_copy_to_post" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_3', 'post_3', suffixes);">Копіювати з юр. адреси</button>

				<label for="pid_1_post_address_country" class="pair_class">Країна</label>
				<select name="pid_1_post_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_post_address_country']) ? $questionnaire['pid_1_post_address_country'] : '' ?>"  class="pair_class">
						<option value="" <?php if($questionnaire['pid_1_post_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_1_post_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_1_post_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_1_post_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_1_post_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_1_post_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_1_post_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_1_post_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_1_post_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_1_post_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_1_post_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_1_post_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_1_post_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_1_post_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_post_address_region']) ? $questionnaire['pid_1_post_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_post_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_1_post_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_post_address_district']) ? $questionnaire['pid_1_post_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_post_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_1_post_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_post_address_city']) ? $questionnaire['pid_1_post_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>
				
				<label for="pid_1_post_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_1_post_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_post_address_index']) ? $questionnaire['pid_1_post_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_post_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_1_post_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_post_address_street']) ? $questionnaire['pid_1_post_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="production_3">
				<h3 class="pair_class">Адреса місцезнаходження виробництва або виробничих потужностей</h3>
				<button formnovalidate type="button" name="pid_1_copy_to_production" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_3', 'production_3', suffixes);">Копіювати з юр. адреси</button>

				<label for="pid_1_production_address_country" class="pair_class">Країна</label>
				<select name="pid_1_production_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_production_address_country']) ? $questionnaire['pid_1_production_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['pid_1_production_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_1_production_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_1_production_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_1_production_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_1_production_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_1_production_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_1_production_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_1_production_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_1_production_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_1_production_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_1_production_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_1_production_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_1_production_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_1_production_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_production_address_region']) ? $questionnaire['pid_1_production_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_production_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_1_production_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_production_address_district']) ? $questionnaire['pid_1_production_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_production_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_1_production_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_production_address_city']) ? $questionnaire['pid_1_production_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_production_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_1_production_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_production_address_index']) ? $questionnaire['pid_1_production_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_1_production_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_1_production_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_production_address_street']) ? $questionnaire['pid_1_production_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>




			<div>
				<h3>Контакти компанії</h3>
				<label for="pid_1_company_phone" class="pair_class">Номер телефону <br>(основний, який буде вказаний на сайті ОС)</label>
				<input type="tel" name="pid_1_company_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_phone']) ? $questionnaire['pid_1_company_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_1_company_email" class="pair_class">Е-пошта організації <br>(основна, яка буде вказана на сайті ОС)</label>
				<input type="email" name="pid_1_company_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_email']) ? $questionnaire['pid_1_company_email'] : '' ?>" placeholder="email"  class="pair_class"/><br>

			<!--	<label for="pid_1_company_web" class="pair_class">Веб-сайт</label>
				<input type="text" name="pid_1_company_web" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_1_company_web']) ? $questionnaire['pid_1_company_web'] : '' ?>" 
				placeholder="WWW.organicstandard.com.ua"  class="pair_class"/><br> -->
			</div>
					
				<label for="add_2_pid" class="pair_class">Додати підрядну організацію</label>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="add_2_pid" id="add_2_pid_checkbox" onchange="show_hiden(this);" class="pair_class" <?php if($questionnaire[add_2_pid] == 'on') {echo ' checked';} ?>/>
	
		</div>
			
<!----------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- -----------------------------------------------------------------Підрядник номер 3--------------------------------------------------------- -->
<!----------------------------------------------------------------------------------------------------------------------------------------------- -->

				
		<div id="add_2_pid" style="display: none">
			
				<div >
				<h3>Підрядна організація</h3>
				<label for="pid_2_company_name_UA" class="pair_class">Назва організації або назва фізичної особи</label>

				<!--
				<select  name="pid_2_company_status"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_status']) ? $questionnaire['pid_2_company_status'] : '' ?>">
					<option value="emp" <?php if($questionnaire['pid_2_company_status'] == 'emp') {echo 'selected="selected"';} ?>></option>
					<option	value="status0"	<?php	if($questionnaire['pid_2_company_status']	== 'status0')	{echo	'selected="selected"';}	?>>	АПХ	</option>
					<option	value="status1"	<?php	if($questionnaire['pid_2_company_status']	== 'status1')	{echo	'selected="selected"';}	?>>	АТ	</option>
					<option	value="status2"	<?php	if($questionnaire['pid_2_company_status']	== 'status2')	{echo	'selected="selected"';}	?>>	АТЗТ	</option>
					<option	value="status3"	<?php	if($questionnaire['pid_2_company_status']	== 'status3')	{echo	'selected="selected"';}	?>>	ВАТ	</option>
					<option	value="status4"	<?php	if($questionnaire['pid_2_company_status']	== 'status4')	{echo	'selected="selected"';}	?>>	ВКПФ	</option>
					<option	value="status5"	<?php	if($questionnaire['pid_2_company_status']	== 'status5')	{echo	'selected="selected"';}	?>>	ДП	</option>
					<option	value="status6"	<?php	if($questionnaire['pid_2_company_status']	== 'status6')	{echo	'selected="selected"';}	?>>	ЗЕ	</option>
					<option	value="status7"	<?php	if($questionnaire['pid_2_company_status']	== 'status7')	{echo	'selected="selected"';}	?>>	ИООО	</option>
					<option	value="status8"	<?php	if($questionnaire['pid_2_company_status']	== 'status8')	{echo	'selected="selected"';}	?>>	ИП	</option>
					<option	value="status9"	<?php	if($questionnaire['pid_2_company_status']	== 'status9')	{echo	'selected="selected"';}	?>>	ИСЧУ	</option>
					<option	value="status10"	<?php	if($questionnaire['pid_2_company_status']	== 'status10')	{echo	'selected="selected"';}	?>>	ИЧУП	</option>
					<option	value="status11"	<?php	if($questionnaire['pid_2_company_status']	== 'status11')	{echo	'selected="selected"';}	?>>	КФХ	</option>
					<option	value="status12"	<?php	if($questionnaire['pid_2_company_status']	== 'status12')	{echo	'selected="selected"';}	?>>	КХ	</option>
					<option	value="status13"	<?php	if($questionnaire['pid_2_company_status']	== 'status13')	{echo	'selected="selected"';}	?>>	ЛМГО	</option>
					<option	value="status14"	<?php	if($questionnaire['pid_2_company_status']	== 'status14')	{echo	'selected="selected"';}	?>>	ЛПХ	</option>
					<option	value="status15"	<?php	if($questionnaire['pid_2_company_status']	== 'status15')	{echo	'selected="selected"';}	?>>	МБО	</option>
					<option	value="status16"	<?php	if($questionnaire['pid_2_company_status']	== 'status16')	{echo	'selected="selected"';}	?>>	МЕФ	</option>
					<option	value="status17"	<?php	if($questionnaire['pid_2_company_status']	== 'status17')	{echo	'selected="selected"';}	?>>	МООЖ	</option>
					<option	value="status18"	<?php	if($questionnaire['pid_2_company_status']	== 'status18')	{echo	'selected="selected"';}	?>>	МПП	</option>
					<option	value="status19"	<?php	if($questionnaire['pid_2_company_status']	== 'status19')	{echo	'selected="selected"';}	?>>	МСОК	</option>
					<option	value="status20"	<?php	if($questionnaire['pid_2_company_status']	== 'status20')	{echo	'selected="selected"';}	?>>	НВ	</option>
					<option	value="status21"	<?php	if($questionnaire['pid_2_company_status']	== 'status21')	{echo	'selected="selected"';}	?>>	НВП	</option>
					<option	value="status22"	<?php	if($questionnaire['pid_2_company_status']	== 'status22')	{echo	'selected="selected"';}	?>>	НДВП	</option>
					<option	value="status23"	<?php	if($questionnaire['pid_2_company_status']	== 'status23')	{echo	'selected="selected"';}	?>>	ОДО	</option>
					<option	value="status24"	<?php	if($questionnaire['pid_2_company_status']	== 'status24')	{echo	'selected="selected"';}	?>>	ООО	</option>
					<option	value="status25"	<?php	if($questionnaire['pid_2_company_status']	== 'status25')	{echo	'selected="selected"';}	?>>	ОСГ	</option>
					<option	value="status26"	<?php	if($questionnaire['pid_2_company_status']	== 'status26')	{echo	'selected="selected"';}	?>>	ПАСТ	</option>
					<option	value="status27"	<?php	if($questionnaire['pid_2_company_status']	== 'status27')	{echo	'selected="selected"';}	?>>	ПАТ	</option>
					<option	value="status28"	<?php	if($questionnaire['pid_2_company_status']	== 'status28')	{echo	'selected="selected"';}	?>>	ПАФ	</option>
					<option	value="status29"	<?php	if($questionnaire['pid_2_company_status']	== 'status29')	{echo	'selected="selected"';}	?>>	ПОП	</option>
					<option	value="status30"	<?php	if($questionnaire['pid_2_company_status']	== 'status30')	{echo	'selected="selected"';}	?>>	ПП	</option>
					<option	value="status31"	<?php	if($questionnaire['pid_2_company_status']	== 'status31')	{echo	'selected="selected"';}	?>>	ППОА	</option>
					<option	value="status32"	<?php	if($questionnaire['pid_2_company_status']	== 'status32')	{echo	'selected="selected"';}	?>>	ПрАТ	</option>
					<option	value="status33"	<?php	if($questionnaire['pid_2_company_status']	== 'status33')	{echo	'selected="selected"';}	?>>	ПСП	</option>
					<option	value="status34"	<?php	if($questionnaire['pid_2_company_status']	== 'status34')	{echo	'selected="selected"';}	?>>	ПСПО	</option>
					<option	value="status35"	<?php	if($questionnaire['pid_2_company_status']	== 'status35')	{echo	'selected="selected"';}	?>>	ПТ	</option>
					<option	value="status36"	<?php	if($questionnaire['pid_2_company_status']	== 'status36')	{echo	'selected="selected"';}	?>>	СБК	</option>
					<option	value="status37"	<?php	if($questionnaire['pid_2_company_status']	== 'status37')	{echo	'selected="selected"';}	?>>	СВК	</option>
					<option	value="status38"	<?php	if($questionnaire['pid_2_company_status']	== 'status38')	{echo	'selected="selected"';}	?>>	СОК	</option>
					<option	value="status39"	<?php	if($questionnaire['pid_2_company_status']	== 'status39')	{echo	'selected="selected"';}	?>>	СООО	</option>
					<option	value="status40"	<?php	if($questionnaire['pid_2_company_status']	== 'status40')	{echo	'selected="selected"';}	?>>	СП	</option>
					<option	value="status41"	<?php	if($questionnaire['pid_2_company_status']	== 'status41')	{echo	'selected="selected"';}	?>>	СПД	</option>
					<option	value="status42"	<?php	if($questionnaire['pid_2_company_status']	== 'status42')	{echo	'selected="selected"';}	?>>	СТОВ	</option>
					<option	value="status43"	<?php	if($questionnaire['pid_2_company_status']	== 'status43')	{echo	'selected="selected"';}	?>>	СФГ	</option>
					<option	value="status44"	<?php	if($questionnaire['pid_2_company_status']	== 'status44')	{echo	'selected="selected"';}	?>>	ТДВ	</option>
					<option	value="status45"	<?php	if($questionnaire['pid_2_company_status']	== 'status45')	{echo	'selected="selected"';}	?>>	ТОВ	</option>
					<option	value="status46"	<?php	if($questionnaire['pid_2_company_status']	== 'status46')	{echo	'selected="selected"';}	?>>	ТОО	</option>
					<option	value="status47"	<?php	if($questionnaire['pid_2_company_status']	== 'status47')	{echo	'selected="selected"';}	?>>	УП	</option>
					<option	value="status48"	<?php	if($questionnaire['pid_2_company_status']	== 'status48')	{echo	'selected="selected"';}	?>>	ФГ	</option>
					<option	value="status49"	<?php	if($questionnaire['pid_2_company_status']	== 'status49')	{echo	'selected="selected"';}	?>>	ФО	</option>
					<option	value="status50"	<?php	if($questionnaire['pid_2_company_status']	== 'status50')	{echo	'selected="selected"';}	?>>	ФОП	</option>
					<option	value="status51"	<?php	if($questionnaire['pid_2_company_status']	== 'status51')	{echo	'selected="selected"';}	?>>	ФСГ	</option>
					<option	value="status52"	<?php	if($questionnaire['pid_2_company_status']	== 'status52')	{echo	'selected="selected"';}	?>>	ФХ	</option>

					</select> -->


				<input type="text"  name="pid_2_company_name_UA" id="demo-name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_name_UA']) ? $questionnaire['pid_2_company_name_UA'] : '' ?>" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> placeholder="Назва Компанії"  class="pair_class"/>
				
				
				

				

				<label for="pid_2_company_name_EN" class="pair_class">Назва (англійською мовою)</label>
				<input type="text" name="pid_2_company_name_EN" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_name_EN']) ? $questionnaire['pid_2_company_name_EN'] : '' ?>" placeholder="Company Name"   class="pair_class"/>
				<label for="pid_2_company_id" class="pair_class">ЄДРПОУ (для юридичних осіб) або ДРФО (для фізичних осіб)</label>
				<input type="number" name="pid_2_company_id" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_id']) ? $questionnaire['pid_2_company_id'] : '' ?>" placeholder="ЄДРПОУ"   class="pair_class"/>
			</div>

			<div>
				<h3>Керівник</h3>
				<label for="pid_2_general_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_2_general_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_general_manager_name']) ? $questionnaire['pid_2_general_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_2_general_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_2_general_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_general_manager_surname']) ? $questionnaire['pid_2_general_manager_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_2_general_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_2_general_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_general_manager_phone']) ? $questionnaire['pid_2_general_manager_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_2_general_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_2_general_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_general_manager_email']) ? $questionnaire['pid_2_general_manager_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>
			</div>

		<!--	<div>
				<h3>Особа, відповідальна за органічне виробництво ти сертифікацію</h3>
				<label for="pid_2_responsible_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_2_responsible_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_responsible_manager_name']) ? $questionnaire['pid_2_responsible_manager_name'] : '' ?>"  placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_2_responsible_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_2_responsible_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_responsible_manager_surname']) ? $questionnaire['pid_2_responsible_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_2_responsible_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_2_responsible_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_responsible_manager_phone']) ? $questionnaire['pid_2_responsible_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_2_responsible_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_2_responsible_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_responsible_manager_email']) ? $questionnaire['pid_2_responsible_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			</div>

			<div>
				<h3>Особа, відповідальна за фінансові питання</h3>
				<label for="pid_2_finance_manager_name" class="pair_class">Ім'я</label>
				<input type="text" name="pid_2_finance_manager_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_finance_manager_name']) ? $questionnaire['pid_2_finance_manager_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

				<label for="pid_2_finance_manager_surname" class="pair_class">Прізвище</label>
				<input type="text" name="pid_2_finance_manager_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_finance_manager_surname']) ? $questionnaire['pid_2_finance_manager_surname'] : '' ?>" placeholder="Прізвище"  class="pair_class"/><br>

				<label for="pid_2_finance_manager_phone" class="pair_class">Номер телефону</label>
				<input type="tel" name="pid_2_finance_manager_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_finance_manager_phone']) ? $questionnaire['pid_2_finance_manager_phone'] : '' ?>" placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_2_finance_manager_email" class="pair_class">Email</label>
				<input type="email" name="pid_2_finance_manager_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_finance_manager_email']) ? $questionnaire['pid_2_finance_manager_email'] : '' ?>" placeholder="Email"  class="pair_class"/>
			
			</div> -->
			<div id="legal_4">
				<h3>Юридична адреса</h3>
				<label for="pid_2_legal_address_country" class="pair_class">Країна</label>
				<select name="pid_2_legal_address_country"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_legal_address_country']) ? $questionnaire['pid_2_legal_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['pid_2_legal_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_2_legal_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_2_legal_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_2_legal_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_2_legal_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_2_legal_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_2_legal_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_2_legal_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_2_legal_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_2_legal_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_2_legal_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_2_legal_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_2_legal_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_2_legal_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_legal_address_region']) ? $questionnaire['pid_2_legal_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_legal_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_2_legal_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_legal_address_district']) ? $questionnaire['pid_2_legal_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_legal_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_2_legal_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_legal_address_city']) ? $questionnaire['pid_2_legal_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_legal_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_2_legal_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_legal_address_index']) ? $questionnaire['pid_2_legal_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_legal_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_2_legal_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_legal_address_street']) ? $questionnaire['pid_2_legal_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="post_4">
				<h3 class="pair_class">Поштова адреса</h3>
				<button formnovalidate type="button" name="pid_2_copy_to_post" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_4', 'post_4', suffixes);">Копіювати з юр. адреси</button>

				<label for="pid_2_post_address_country" class="pair_class">Країна</label>
				<select name="pid_2_post_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_post_address_country']) ? $questionnaire['pid_2_post_address_country'] : '' ?>"  class="pair_class">
					<option value="" <?php if($questionnaire['pid_2_post_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
					<option value="AZ"<?php if($questionnaire['pid_2_post_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
					<option value="BY"<?php if($questionnaire['pid_2_post_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
					<option value="AM"<?php if($questionnaire['pid_2_post_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
					<option value="GE"<?php if($questionnaire['pid_2_post_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
					<option value="KZ"<?php if($questionnaire['pid_2_post_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
					<option value="KG"<?php if($questionnaire['pid_2_post_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
					<option value="MD"<?php if($questionnaire['pid_2_post_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
					<option value="RU"<?php if($questionnaire['pid_2_post_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
					<option value="TJ"<?php if($questionnaire['pid_2_post_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
					<option value="UZ"<?php if($questionnaire['pid_2_post_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
					<option value="UA"<?php if($questionnaire['pid_2_post_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_2_post_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_2_post_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_post_address_region']) ? $questionnaire['pid_2_post_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_post_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_2_post_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_post_address_district']) ? $questionnaire['pid_2_post_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_post_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_2_post_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_post_address_city']) ? $questionnaire['pid_2_post_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>
				
				<label for="pid_2_post_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_2_post_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_post_address_index']) ? $questionnaire['pid_2_post_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_post_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_2_post_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_post_address_street']) ? $questionnaire['pid_2_post_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>

			<div id="production_4">
				<h3 class="pair_class">Адреса місцезнаходження виробництва або виробничих потужностей</h3>
				<button formnovalidate type="button" name="pid_2_copy_to_production" class="pair_class" onclick="var suffixes = ['_region', '_country', '_district', '_index', '_street', '_city']; copy_from('legal_4', 'production_4', suffixes);">Копіювати з юр. адреси</button>

				<label for="pid_2_production_address_country" class="pair_class">Країна</label>
				<select name="pid_2_production_address_country" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_production_address_country']) ? $questionnaire['pid_2_production_address_country'] : '' ?>" class="pair_class">
						<option value="" <?php if($questionnaire['pid_2_production_address_country'] == '') {echo 'selected="selected"';} ?>>- Країна -</option>
						<option value="AZ"<?php if($questionnaire['pid_2_production_address_country'] == 'AZ') {echo 'selected=selected';} ?> >Азербайджан</option>
						<option value="BY"<?php if($questionnaire['pid_2_production_address_country'] == 'BY') {echo 'selected=selected';} ?> >Білорусь</option>
						<option value="AM"<?php if($questionnaire['pid_2_production_address_country'] == 'AM') {echo 'selected=selected';} ?> >Вірменія</option>
						<option value="GE"<?php if($questionnaire['pid_2_production_address_country'] == 'GE') {echo 'selected=selected';} ?> >Грузія</option>
						<option value="KZ"<?php if($questionnaire['pid_2_production_address_country'] == 'KZ') {echo 'selected=selected';} ?> >Казахстан</option>
						<option value="KG"<?php if($questionnaire['pid_2_production_address_country'] == 'KG') {echo 'selected=selected';} ?> >Киргизія</option>
						<option value="MD"<?php if($questionnaire['pid_2_production_address_country'] == 'MD') {echo 'selected=selected';} ?> >Молдова</option>
						<option value="RU"<?php if($questionnaire['pid_2_production_address_country'] == 'RU') {echo 'selected=selected';} ?> >Росія</option>
						<option value="TJ"<?php if($questionnaire['pid_2_production_address_country'] == 'TJ') {echo 'selected=selected';} ?> >Таджикистан</option>
						<option value="UZ"<?php if($questionnaire['pid_2_production_address_country'] == 'UZ') {echo 'selected=selected';} ?> >Узбекистан</option>
						<option value="UA"<?php if($questionnaire['pid_2_production_address_country'] == 'UA') {echo 'selected=selected';} ?> >Україна</option>

				</select>

				<label for="pid_2_production_address_region" class="pair_class">Область</label>
				<input type="text" name="pid_2_production_address_region" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_production_address_region']) ? $questionnaire['pid_2_production_address_region'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_production_address_district" class="pair_class">Район</label>
				<input type="text" name="pid_2_production_address_district" title ="new" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_production_address_district']) ? $questionnaire['pid_2_production_address_district'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_production_address_city" class="pair_class">Місто</label>
				<input type="text" name="pid_2_production_address_city" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_production_address_city']) ? $questionnaire['pid_2_production_address_city'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_production_address_index" class="pair_class">Поштовий індекс</label>
				<input type="number" name="pid_2_production_address_index" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_production_address_index']) ? $questionnaire['pid_2_production_address_index'] : '' ?>" placeholder="адреса"   class="pair_class"/>

				<label for="pid_2_production_address_street" class="pair_class">Вулиця</label>
				<input type="text" name="pid_2_production_address_street" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_production_address_street']) ? $questionnaire['pid_2_production_address_street'] : '' ?>" placeholder="адреса"   class="pair_class"/>
			</div>




			<div>
				<h3>Контакти компанії</h3>
				<label for="pid_2_company_phone" class="pair_class">Номер телефону <br>(основний, який буде вказаний на сайті ОС)</label>
				<input type="tel" name="pid_2_company_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_phone']) ? $questionnaire['pid_2_company_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

				<label for="pid_2_company_email" class="pair_class">Е-пошта організації <br>(основна, яка буде вказана на сайті ОС)</label>
				<input type="email" name="pid_2_company_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_email']) ? $questionnaire['pid_2_company_email'] : '' ?>" placeholder="email"  class="pair_class"/><br>

				<!-- <label for="pid_2_company_web" class="pair_class">Веб-сайт</label>
				<input type="text" name="pid_2_company_web" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pid_2_company_web']) ? $questionnaire['pid_2_company_web'] : '' ?>" 
				placeholder="WWW.organicstandard.com.ua"  class="pair_class"/><br> -->
			</div>
					
				
		</div>	
		<hr>
		<h3>
Врахуйте, що надані Вами контакти будуть внесені в базу ОС, і лише через них буде здійснюватися комунікація, тому просимо надавати ДЕТАЛЬНУ ТА ВИЧЕРПНУ контактну інформацію.</h3>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- -----------------------------------------------------------------Розділ Виду діяльності---------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
<hr>
				<h3 class="pair_class">Продукція</h3> 

				<div class="pair_class"> 
				<h3 class="triple_class" align="middle">Виробництво</h3>
				<h3 class="triple_class" align="middle">Торгівля <a align="left" class="tooltip" href="#"><img src="/templates/organic/images/Help_logo.png"><span class="custom help"><img class="move"  src="/templates/organic/images/info.png" alt="Информация" height="48" width="48" /><em>Торгівля</em>Торгівля - купівля готової продукції та її перепродаж без обробки.</span></a></h3>
				<h3 class="triple_class" align="middle">Експорт/Імпорт</h3>
				</div>
<!-- -----------------------------------------------------------------Рослиництво--------------------------------------------------------------- -->

				<label for="production_crop_production" class="pair_class"><b>А  - Рослинництво</b></label>
				<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_crop_production" id="production_crop_production_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_crop_production] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_crop_production" id="traid_crop_production_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_crop_production] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_crop_production" id="export_crop_production_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_crop_production] == 'on') {echo ' checked';} ?>/>
				</div>

			<div id="production_crop_production" style="display: none">


						<label for="crop_production_1" class="pair_class">Рослинництво</label>
						<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="crop_production_1" id="crop_production_1_checkbox" onchange="show_hiden(this);"<?php if($questionnaire[production_crop_production] == 'on') {echo ' checked';} ?>  />
					<div id="crop_production_1" style="display: none">

								<label for="crop_production_size" class="pair_class">Загальна площа виробництва продукції рослинництва (га)</label>
								<input type="number" step="0.01" name="crop_production_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_size']) ? $questionnaire['crop_production_size'] : '' ?>"  />

								<label for="crop_production_organic_size" class="pair_class">Площа органічного виробництва (га)</label>
								<input type="number" step="0.01" name="crop_production_organic_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_organic_size']) ? $questionnaire['crop_production_organic_size'] : '' ?>"  />

					    			<label for="crop_production_organic_1_size" class="pair_class"> з них:<br>-польових культур (зернові, бобові та технічні) (га)</label>
					    			<input type="number" step="0.01" name="crop_production_organic_1_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_organic_1_size']) ? $questionnaire['crop_production_organic_1_size'] : '0' ?>" />

									<label for="crop_production_organic_2_siz" class="pair_class">-перелогових земель (землі, де не відбувається с.-г. виробництво) (га)</label>
									<input type="number" step="0.01" name="crop_production_organic_2_size"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_organic_2_size']) ? $questionnaire['crop_production_organic_2_size'] : '0' ?>" />

									<label for="crop_production_organic_3_size" class="pair_class">-овочі, розсадників, баштанних, лікарських трав (га)</label>
									<input type="number" step="0.01" name="crop_production_organic_3_size"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_organic_3_size']) ? $questionnaire['crop_production_organic_3_size'] : '0' ?>" />

									<label for="crop_production_organic_4_size" class="pair_class">-винограду, плодово ягідних насаджень (га)	</label>
									<input type="number" step="0.01" name="crop_production_organic_4_size"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_organic_4_size']) ? $questionnaire['crop_production_organic_4_size'] : '0	' ?>" />

					</div>
								<label for="crop_production_after" class="pair_class">Післязбиральна доробка (очистка, сушіння, сортування, зберігання)</label>
								<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="crop_production_after" id="crop_production_after_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[crop_production_after] == 'on') {echo ' checked';} ?> />
					<div id="crop_production_after"	style="display: none">

									<label for="crop_production_after_about_a" class="pair_class">Опишіть післязбиральну доробку</label>

									<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="crop_production_after_about_a" placeholder="Enter your message" rows="3" ><?php echo isset($questionnaire['crop_production_after_about_a']) ? $questionnaire['crop_production_after_about_a'] : '' ?></textarea>
					</div><hr>
			</div>

			<div id="traid_crop_production" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_crop_production_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_crop_production_b" value ="1" <?php if($questionnaire[traid_crop_production_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_crop_production_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_crop_production_b" value="2" <?php if($questionnaire[traid_crop_production_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_crop_production_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_crop_production_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_crop_production_general']) ? $questionnaire['traid_crop_production_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_crop_production" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_crop_production_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_crop_production_b" value="1" <?php if($questionnaire[export_crop_production_b] == '1') {echo ' checked';} ?>/>

						<label for="export_crop_production_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_crop_production_b" value="2" <?php if($questionnaire[export_crop_production_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_crop_production_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_crop_production_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_crop_production_general']) ? $questionnaire['export_crop_production_general'] : '' ?>
						</textarea><br>

						<label for="export_crop_production_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_crop_production_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_crop_production_wait']) ? $questionnaire['export_crop_production_wait'] : '' ?>
						</textarea><br>

						<label for="import_crop_production_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_crop_production_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_crop_production_wait']) ? $questionnaire['import_crop_production_wait'] : '' ?>
						</textarea><br>
						
			<!--	<div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_crop_production" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_crop_production" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_crop_production']) ? $questionnaire['export_manager_name_crop_production'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_crop_production" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_crop_production" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_crop_production']) ? $questionnaire['export_manager_surname_crop_production'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_crop_production" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_crop_production" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_crop_production']) ? $questionnaire['export_manager_phone_crop_production'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_crop_production" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_crop_production" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_crop_production']) ? $questionnaire['export_manager_email_crop_production'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div>
-->

						<hr>
			</div>


			



<!-- -----------------------------------------------------------------Дикороси--------------------------------------------------------------- -->

				<label for="production_wild_collection" class="pair_class"><b>A1- Заготівля дикорослих продуктів</b></label>
				<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_wild_collection" id="production_wild_collection_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_wild_collection] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_wild_collection" id="traid_wild_collection_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_wild_collection] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_wild_collection" id="export_wild_collection_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_wild_collection] == 'on') {echo ' checked';} ?>/>
				</div>

			<div id="production_wild_collection" style="display: none">

							<label for="wild_collection_size" class="pair_class">Загальна площа заготівлі продукції (га)</label>
							<input type="number" step="0.01" name="wild_collection_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_size']) ? $questionnaire['wild_collection_size'] : '' ?>"  />

							<label for="wild_organic_collection_size" class="pair_class">Площа органічної заготівлі продукції (га)</label>
							<input type="number" step="0.01" name="wild_organic_collection_size"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_organic_collection_size']) ? $questionnaire['wild_organic_collection_size'] : '' ?>" />

					<table >
							<tr >
								<td>
								№
								</td>
								<td>
									Назва продукту заготівлі
								</td>
								<td>
									Загальний обсяг партії
								</td>
								<td>
									Кількість закупівельних центрів
								</td>
								<td>
									Розміщення закупівельних центрів
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									<input type="text" name="wild_collection_1_1" id="wild_collection_1_1_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_1']) ? $questionnaire['wild_collection_1_1'] : '' ?>"  />
								</td>
								<td>
									<input type="text" name="wild_collection_2_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_1']) ? $questionnaire['wild_collection_2_1'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_3_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_1']) ? $questionnaire['wild_collection_3_1'] : '' ?>"/>
								</td>
								<td>
								<input type="text" name="wild_collection_4_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_1']) ? $questionnaire['wild_collection_4_1'] : '' ?>"/> 

						</textarea><br>
								</td>
							</tr>

						

							<tr id="wild_collection_1_1" class="hidden">
								<td>
									2
								</td>
								<td>
									<input type="text" name="wild_collection_1_2" id="wild_collection_1_2_input"
									onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_2']) ? $questionnaire['wild_collection_1_2'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_2_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_2']) ? $questionnaire['wild_collection_2_2'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_3_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_2']) ? $questionnaire['wild_collection_3_2'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_4_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_2']) ? $questionnaire['wild_collection_4_2'] : '' ?>"/>
								</td>
							</tr>

						

							<tr id="wild_collection_1_2" class="hidden">
								<td>
									3
								</td>
								<td>
									<input type="text" name="wild_collection_1_3" id="wild_collection_1_3_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_3']) ? $questionnaire['wild_collection_1_3'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_2_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_3']) ? $questionnaire['wild_collection_2_3'] : '' ?>"/>
								</td>
								<td> 
									<input type="text" name="wild_collection_3_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_3']) ? $questionnaire['wild_collection_3_3'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_4_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_3']) ? $questionnaire['wild_collection_4_3'] : '' ?>"/>
								</td>
							</tr>
							<tr id="wild_collection_1_3" class="hidden">
								<td>
									4
								</td>
								<td>
									<input type="text" name="wild_collection_1_4" id="wild_collection_1_4_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_4']) ? $questionnaire['wild_collection_1_4'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_2_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_4']) ? $questionnaire['wild_collection_2_4'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_3_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_4']) ? $questionnaire['wild_collection_3_4'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_4_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_4']) ? $questionnaire['wild_collection_4_4'] : '' ?>"/>
								</td>
							</tr>
							<tr id="wild_collection_1_4" class="hidden">
								<td>
									5
								</td>
								<td>
									<input type="text" name="wild_collection_1_5" id="wild_collection_1_5_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_5']) ? $questionnaire['wild_collection_1_5'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_2_5" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_5']) ? $questionnaire['wild_collection_2_5'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_3_5" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_5']) ? $questionnaire['wild_collection_3_5'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_4_5" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_5']) ? $questionnaire['wild_collection_4_5'] : '' ?>"/>
								</td>
							</tr>
							<tr id="wild_collection_1_5" class="hidden">
								<td>
									6
								</td>
								<td>
									<input type="text" name="wild_collection_1_6" name="wild_collection_1_5" id="wild_collection_1_5_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_6']) ? $questionnaire['wild_collection_1_6'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_2_6" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_6']) ? $questionnaire['wild_collection_2_6'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_3_6" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_6']) ? $questionnaire['wild_collection_3_6'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_4_6" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_6']) ? $questionnaire['wild_collection_4_6'] : '' ?>"/>
								</td>
							</tr>
							<tr id="wild_collection_1_6" class="hidden">
								<td>
									7
								</td>
								<td >
									<input type="text" name="wild_collection_1_7" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_1_7']) ? $questionnaire['wild_collection_1_7'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_2_7" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_2_7']) ? $questionnaire['wild_collection_2_7'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_3_7" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_3_7']) ? $questionnaire['wild_collection_3_7'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="wild_collection_4_7" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wild_collection_4_7']) ? $questionnaire['wild_collection_4_7'] : '' ?>"/>
								</td>
							</tr>

				</table>
				<hr>

								<label for="wild_collection_after" class="pair_class">Післязбиральна доробка (очистка, сушіння, сортування, зберігання)</label>
								<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="wild_collection_after" id="wild_collection_after_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[wild_collection_after] == 'on') {echo ' checked';} ?> />

					<div id="wild_collection_after"	style="display: none">

									<label for="wild_collection_after_about_b" class="pair_class">Опишіть післязбиральну доробку</label>

									<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="wild_collection_after_about_b" placeholder="Enter your message" rows="3" ><?php echo isset($questionnaire['wild_collection_after_about_b']) ? $questionnaire['wild_collection_after_about_b'] : '' ?></textarea>
					</div>
					<hr>
			</div>

			
			<div id="traid_wild_collection" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_wild_collection_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_wild_collection_b" value ="1" <?php if($questionnaire[traid_wild_collection_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_wild_collection_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_wild_collection_b" value="2" <?php if($questionnaire[traid_wild_collection_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_wild_collection_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_wild_collection_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_wild_collection_general']) ? $questionnaire['traid_wild_collection_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_wild_collection" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_wild_collection_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_wild_collection_b" value="1" <?php if($questionnaire[export_wild_collection_b] == '1') {echo ' checked';} ?>/>

						<label for="export_wild_collection_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_wild_collection_b" value="2" <?php if($questionnaire[export_wild_collection_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_wild_collection_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_wild_collection_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_wild_collection_general']) ? $questionnaire['export_wild_collection_general'] : '' ?>
						</textarea><br>

						<label for="export_wild_collection_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_wild_collection_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_wild_collection_wait']) ? $questionnaire['export_wild_collection_wait'] : '' ?>
						</textarea><br>

						<label for="import_wild_collection_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_wild_collection_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_wild_collection_wait']) ? $questionnaire['import_wild_collection_wait'] : '' ?>
						</textarea><br>
						
			<!--	<div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_wild_collection" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_wild_collection" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_wild_collection']) ? $questionnaire['export_manager_name_wild_collection'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_wild_collection" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_wild_collection" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_wild_collection']) ? $questionnaire['export_manager_surname_wild_collection'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_wild_collection" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_wild_collection" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_wild_collection']) ? $questionnaire['export_manager_phone_wild_collection'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_wild_collection" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_wild_collection" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_wild_collection']) ? $questionnaire['export_manager_email_wild_collection'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->
						<hr>
			</div>





<!-- -----------------------------------------------------------------Тваринництво-------------------------------------------------------------- -->

						<label for="production_animal_husbandry" class="pair_class"><b>B - Тваринництво</b></label>
						

						<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_animal_husbandry" id="production_animal_husbandry_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_animal_husbandry] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_animal_husbandry" id="traid_animal_husbandry_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_animal_husbandry] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_animal_husbandry" id="export_animal_husbandry_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_animal_husbandry] == 'on') {echo ' checked';} ?>/>
				</div>

				<div id="production_animal_husbandry" style="display: none">
				<p> Зверніть увагу, що ведення паралельного виробництва з тваринництва є неможливим.</p><br><br>
					<p>(Вкажіть кількість)</p>
						<label for="vrh" class="pair_class">ВРХ</label>
						<input  type="checkbox" name="vrh" id="vrh_checkbox" onchange="show_hiden(this);"  <?php if($questionnaire[vrh] == 'on') {echo ' checked';} ?> />
						<br>
					<div id="vrh" style="display: none">

						<label for="vrh_cow" class="pair_class"> - з них корів </label>
						<input type="number"   name="vrh_cow"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['vrh_cow']) ? $questionnaire['vrh_cow'] : '' ?>" />

						<label for="else_vrh" class="pair_class"> - решта ВРХ </label>
						<input type="number" name="else_vrh" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['else_vrh']) ? $questionnaire['else_vrh'] : '' ?>" />
					</div>
						<label for="pinck" class="pair_class">свиней </label>
						<input type="number" name="pinck" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['pinck']) ? $questionnaire['pinck'] : '' ?>"  />

						<label for="goat" class="pair_class">кіз </label>
						<input type="number" name="goat" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['goat']) ? $questionnaire['goat'] : '' ?>"  />

						<label for="sheep" class="pair_class">овець </label>
						<input type="number" name="sheep"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['sheep']) ? $questionnaire['sheep'] : '' ?>" />

						<label for="poultry" class="pair_class">птиці</label>
						<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="poultry" id="poultry_checkbox" onchange="show_hiden(this);"  <?php if($questionnaire[poultry] == 'on') {echo ' checked';} ?>  />
					<div id="poultry" style="display: none">

						<label for="chickens" class="pair_class"> - кури </label>
						<input type="number" name="chickens"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['chickens']) ? $questionnaire['chickens'] : '' ?>" />

						<label for="turkeys" class="pair_class"> - індики </label>
						<input type="number" name="turkeys" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['turkeys']) ? $questionnaire['turkeys'] : '' ?>"  />

						<label for="ducks" class="pair_class"> - качки</label>
						<input type="number" name="ducks"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['ducks']) ? $questionnaire['ducks'] : '' ?>" />

						<label for="geese" class="pair_class"> - гуси</label>
						<input type="number" name="geese" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['geese']) ? $questionnaire['geese'] : '' ?>"  />
					</div>

						<label for="animal_husbandry_else" class="pair_class">тварин, вказати яких</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="animal_husbandry_else" placeholder="Enter your message" rows="3" ><?php echo isset($questionnaire['animal_husbandry_else']) ? $questionnaire['animal_husbandry_else'] : '' ?></textarea>

						<!--		<label for="animal_husbandry_after" class="pair_class">Післязбиральна доробка (очистка, сушіння, сортування, зберігання)</label>
								<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="animal_husbandry_after" onchange="show_hiden(this);"/>
					<div id="animal_husbandry_after"	style="display: none">

									<label for="animal_husbandry_after_about_b" class="pair_class">Опишіть післязбиральну доробку</label>

									<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="animal_husbandry_after_about_b" placeholder="Enter your message" rows="3" class="pair_class"></textarea>
					</div> -->
					<hr>
					</div>

			<div id="traid_animal_husbandry" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_animal_husbandry_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_animal_husbandry_b" value ="1" <?php if($questionnaire[traid_animal_husbandry_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_animal_husbandry_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_animal_husbandry_b" value="2" <?php if($questionnaire[traid_animal_husbandry_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_animal_husbandry_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_animal_husbandry_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_animal_husbandry_general']) ? $questionnaire['traid_animal_husbandry_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_animal_husbandry" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_animal_husbandry_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_animal_husbandry_b" value="1" <?php if($questionnaire[export_animal_husbandry_b] == '1') {echo ' checked';} ?>/>

						<label for="export_animal_husbandry_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_animal_husbandry_b" value="2" <?php if($questionnaire[export_animal_husbandry_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_animal_husbandry_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_animal_husbandry_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_animal_husbandry_general']) ? $questionnaire['export_animal_husbandry_general'] : '' ?>
						</textarea><br>

						<label for="export_animal_husbandry_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_animal_husbandry_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_animal_husbandry_wait']) ? $questionnaire['export_animal_husbandry_wait'] : '' ?>
						</textarea><br>

						<label for="import_animal_husbandry_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_animal_husbandry_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_animal_husbandry_wait']) ? $questionnaire['import_animal_husbandry_wait'] : '' ?>
						</textarea><br>
						
			<!--	<div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_animal_husbandry" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_animal_husbandry" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_animal_husbandry']) ? $questionnaire['export_manager_name_animal_husbandry'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_animal_husbandry" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_animal_husbandry" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_animal_husbandry']) ? $questionnaire['export_manager_surname_animal_husbandry'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_animal_husbandry" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_animal_husbandry" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_animal_husbandry']) ? $questionnaire['export_manager_phone_animal_husbandry'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_animal_husbandry" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_animal_husbandry" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_animal_husbandry']) ? $questionnaire['export_manager_email_animal_husbandry'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->



					<hr>
		</div>


<!-- -----------------------------------------------------------------Бджільництво-------------------------------------------------------------- -->

				<label for="production_beekeeping" class="pair_class"><b>B1- Бджільництво</b></label>
						<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_beekeeping" id="production_beekeeping_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_beekeeping] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_beekeeping" id="traid_beekeeping_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_beekeeping] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_beekeeping" id="export_beekeeping_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_beekeeping] == 'on') {echo ' checked';} ?>/>
				</div>

			<div id="production_beekeeping" style="display: none">

					<!--	<label for="beekeeping_type" class="pair_class">Вид бджіл</label>
						<input type="text" name="beekeeping_type"   />
						<label for="beekeeping_breed" class="pair_class">Порода</label>
						<input type="text" name="beekeeping_breed"   />
						<label for="beekeeping_origin" class="pair_class">Походження бджолосімей</label>
						<input type="text" name="beekeeping_origin"   />
						<label for="beekeeping_wax" class="pair_class">Походження воску/вощини</label>
						<input type="text" name="beekeeping_wax"   />
						<label for="beekeeping_treatment" class="pair_class">Методи і засоби лікування бджіл</label>
						<input type="text" name="beekeeping_treatment"   /> -->
						<label for="beekeeping_all" class="pair_class">Загальна кількість бджілосімей</label>
						<input type="text" name="beekeeping_all" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_all']) ? $questionnaire['beekeeping_all'] : '' ?>"  />

							<label for="beekeeping_all_local" class="pair_class">з них:<br>
						- на фіксованому місці (далі у таблиці "Зона №1") протягом всього року</label>
							<input type="text" name="beekeeping_all_local"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_all_local']) ? $questionnaire['beekeeping_all_local'] : '' ?>" />

							<label for="beekeeping_all_migratory" class="pair_class">- на іншому фіксованому місці (далі у таблиці "Зона №2") протягом всього року</label>
							<input type="text" name="beekeeping_all_migratory"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_all_migratory']) ? $questionnaire['beekeeping_all_migratory'] : '' ?>" />

							<label for="beekeeping_all_migratory_1" class="pair_class">- мігруючих колоній (далі у таблиці "Зона №3", "Зона №4" і т.д.) протягом всього року</label>
							<input type="text" name="beekeeping_all_migratory_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_all_migratory_1']) ? $questionnaire['beekeeping_all_migratory_1'] : '' ?>"   />

					
					<table>

						<tr>
							<td rowspan="2">Прилеглі території (у радіусі 3км)
							</td>
							<td align="center" colspan="5" width="50%">
								Приблизний % вуд загальної кормової зони<br> для кожного місця розташування пасіки, включаючи зону міграції (якщо мігруєте)
							</td>
						</tr>
						<tr>
							<td >Зона №1</td>
							<td >Зона №2</td>
							<td >Зона №3</td>
							<td >Зона №4</td>
							<td >Зона №5</td>
						</tr>
						<tr>
							<td>
								Органічні (сертифікавані) поля
							</td>
							<td>

								<input size="5%" type="text" name="beekeeping_1_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_1_1']) ? $questionnaire['beekeeping_1_1'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_2_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_2_1']) ? $questionnaire['beekeeping_2_1'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_3_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_3_1']) ? $questionnaire['beekeeping_3_1'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_4_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_4_1']) ? $questionnaire['beekeeping_4_1'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_5_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_5_1']) ? $questionnaire['beekeeping_5_1'] : '' ?>" />
							</td>
						</tr>
						<tr>
							<td>
								С/г угіддя
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_1_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_1_2']) ? $questionnaire['beekeeping_1_2'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_2_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_2_2']) ? $questionnaire['beekeeping_2_2'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_3_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_3_2']) ? $questionnaire['beekeeping_3_2'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_4_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_4_2']) ? $questionnaire['beekeeping_4_2'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_5_2"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_5_2']) ? $questionnaire['beekeeping_5_2'] : '' ?>"/>
							</td>
						</tr>
						<tr>
							<td>
								Природне середовище
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_1_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_1_3']) ? $questionnaire['beekeeping_1_3'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_2_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_2_3']) ? $questionnaire['beekeeping_2_3'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_3_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_3_3']) ? $questionnaire['beekeeping_3_3'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_4_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_4_3']) ? $questionnaire['beekeeping_4_3'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_5_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_5_3']) ? $questionnaire['beekeeping_5_3'] : '' ?>" />
							</td>
						</tr>
						<tr>
							<td>
								Населені пункти
							</td>
							<td>
								<input 	size="5%" type="text" name="beekeeping_1_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_1_4']) ? $questionnaire['beekeeping_1_4'] : '' ?>" /> 
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_2_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_2_4']) ? $questionnaire['beekeeping_2_4'] : '' ?>" /> 
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_3_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_3_4']) ? $questionnaire['beekeeping_3_4'] : '' ?>" /> 
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_4_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_4_4']) ? $questionnaire['beekeeping_4_4'] : '' ?>" />
							</td>
							<td>
								<input size="5%" type="text" name="beekeeping_5_4" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['beekeeping_5_4']) ? $questionnaire['beekeeping_5_4'] : '' ?>" /> 
							</td>
						</tr>
					</table>
					<hr>
					</div>

					<div id="traid_beekeeping" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_beekeeping_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_beekeeping_b" value ="1" <?php if($questionnaire[traid_beekeeping_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_beekeeping_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_beekeeping_b" value="2" <?php if($questionnaire[traid_beekeeping_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_beekeeping_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_beekeeping_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_beekeeping_general']) ? $questionnaire['traid_beekeeping_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_beekeeping" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_beekeeping_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_beekeeping_b" value="1" <?php if($questionnaire[export_beekeeping_b] == '1') {echo ' checked';} ?>/>

						<label for="export_beekeeping_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_beekeeping_b" value="2" <?php if($questionnaire[export_beekeeping_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_beekeeping_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_beekeeping_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_beekeeping_general']) ? $questionnaire['export_beekeeping_general'] : '' ?>
						</textarea><br>

						<label for="export_beekeeping_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_beekeeping_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_beekeeping_wait']) ? $questionnaire['export_beekeeping_wait'] : '' ?>
						</textarea><br>

						<label for="import_beekeeping_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_beekeeping_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_beekeeping_wait']) ? $questionnaire['import_beekeeping_wait'] : '' ?>
						</textarea><br>
						
			<!--	<div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_beekeeping" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_beekeeping" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_beekeeping']) ? $questionnaire['export_manager_name_beekeeping'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_beekeeping" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_beekeeping" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_beekeeping']) ? $questionnaire['export_manager_surname_beekeeping'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_beekeeping" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_beekeeping" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_beekeeping']) ? $questionnaire['export_manager_phone_beekeeping'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_beekeeping" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_beekeeping" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_beekeeping']) ? $questionnaire['export_manager_email_beekeeping'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->

					<hr>
				</div>

<!-- -----------------------------------------------------------------Аквакультура-------------------------------------------------------------- -->

				<label for="production_aquaculture" class="pair_class"><b>C - Виробництво продукції аквакультури та водоростей</b></label>
						<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_aquaculture" id="production_aquaculture_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_aquaculture] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_aquaculture" id="traid_aquaculture_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_aquaculture] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_aquaculture" id="export_aquaculture_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_aquaculture] == 'on') {echo ' checked';} ?>/>
				</div>

			<div id="production_aquaculture" style="display: none">

						<label for="aquaculture_size" class="pair_class">Загальна площа виробництва продукції водного дзеркала (га)</label>
						<input type="number" step="0.01" name="aquaculture_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_size']) ? $questionnaire['aquaculture_size'] : '' ?>"  />

						<label for="aquaculture_organic_size" class="pair_class">Загальна площа органічного виробництва продукції водного дзеркала (га)</label>
						<input type="number" step="0.01" name="aquaculture_organic_size"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_organic_size']) ? $questionnaire['aquaculture_organic_size'] : '' ?>" />

						<label for="aquaculture_size_around" class="pair_class">Площа прилеглої території (га)</label>
						<input type="number" step="0.01" name="aquaculture_size_around"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_size_around']) ? $questionnaire['aquaculture_size_around'] : '' ?>" />


						<label  class="pair_class">-культування водних видів</label>
				<table >
							<tr>
								<td colspan="5">
									Список видів популяції водних тварин
								</td>
							</tr>
							<tr>
								<td>
									№
								</td>
								<td>
									Наукова назва виду
								</td>
								
								
								<td>
									Кількість, т/шт
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									<input type="text" name="aquaculture_1_1_1" id="aquaculture_1_1_1_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_1_1_1']) ? $questionnaire['aquaculture_1_1_1'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="aquaculture_1_2_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_1_2_1']) ? $questionnaire['aquaculture_1_2_1'] : '' ?>"/>
								</td>
								
							</tr>
							<tr id="aquaculture_1_1_1" class="hidden" >
								<td>
									2
								</td>
								<td>
									<input type="text" name="aquaculture_1_1_2" id="aquaculture_1_1_2_input" onchange="show_hiden_input(this);"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_1_1_2']) ? $questionnaire['aquaculture_1_1_2'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="aquaculture_1_2_2"  <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_1_2_2']) ? $questionnaire['aquaculture_1_2_2'] : '' ?>"/>
								</td>
								
							</tr>
							<tr id="aquaculture_1_1_2" class="hidden">
								<td>
									3
								</td>
								<td>
									<input type="text" name="aquaculture_1_1_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_1_1_3']) ? $questionnaire['aquaculture_1_1_3'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="aquaculture_1_2_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_1_2_3']) ? $questionnaire['aquaculture_1_2_3'] : '' ?>"/>
								</td>
								
							</tr>

				</table>
							<!--	<p class="pair_class">-Збір дикорослих морських водоростей</p><br>
								<p class="pair_class">-Культування морських водоростей</p>

				<table border="1">
							<tr>
								<td colspan="5">
									<p class="pair_class">Список видів популяції водоростей</p>
								</td>
							</tr>
							<tr>
								<td>
									№
								</td>
								<td>
									Наукова назва виду
								</td>
								<td>
									Синонім
								</td>
								<td>
									Місцева назва
								</td>
								<td>
									Кількість, т/шт
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									<input type="text" name="aquaculture_2_1_1"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_2_1"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_3_1"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_4_1"/>
								</td>
							</tr>
							<tr>
								<td>
									2
								</td>
								<td>
									<input type="text" name="aquaculture_2_1_2"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_2_2"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_3_2"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_4_2"/>
								</td>
							</tr>
							<tr>
								<td>
									3
								</td>
								<td>
									<input type="text" name="aquaculture_2_1_3"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_2_3"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_3_3"/>
								</td>
								<td>
									<input type="text" name="aquaculture_2_4_3"/>
								</td>
							</tr>

				</table> -->
								<p  class="pair_class">-Культування молюсків</p>


				<table >
							<tr>
								<td colspan="3">
									Список видів молюсків
								</td>
							</tr>
							<tr>
								<td >
									№
								</td>
								<td>
									Наукова назва виду
								</td>
								<td>
									Кількість, т/шт
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									<input type="text" name="aquaculture_3_1_1" id="aquaculture_3_1_1_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_3_1_1']) ? $questionnaire['aquaculture_3_1_1'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="aquaculture_3_2_1" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_3_2_1']) ? $questionnaire['aquaculture_3_2_1'] : '' ?>"/>
								</td>
							
							</tr>
							<tr   id="aquaculture_3_1_1" class="hidden">
								<td >
									2
								</td>
								<td>
									<input type="text" name="aquaculture_3_1_2" id="aquaculture_3_1_2_input" onchange="show_hiden_input(this);" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_3_1_2']) ? $questionnaire['aquaculture_3_1_2'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="aquaculture_3_2_2" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_3_2_2']) ? $questionnaire['aquaculture_3_2_2'] : '' ?>"/>
								</td>
								
							</tr>
							<tr id="aquaculture_3_1_2" class="hidden">
								<td>
									3
								</td>
								<td>
									<input type="text" name="aquaculture_3_1_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_3_1_3']) ? $questionnaire['aquaculture_3_1_3'] : '' ?>"/>
								</td>
								<td>
									<input type="text" name="aquaculture_3_2_3" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['aquaculture_3_2_3']) ? $questionnaire['aquaculture_3_2_3'] : '' ?>"/>
								</td>
								
							</tr>

				</table>


						<!--		<label for="aquaculture_after" class="pair_class">Післязбиральна доробка (очистка, сушіння, сортування, зберігання)</label>
								<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="aquaculture_after" onchange="show_hiden(this);" />
					<div id="aquaculture_after"	style="display: none">

									<label for="aquaculture_after_about_b" class="pair_class">Опишіть післязбиральну доробку</label>

									<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="aquaculture_after_about_b" placeholder="Enter your message" rows="3" ></textarea>
					</div> -->
					<hr>
				</div>

					<div id="traid_aquaculture" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_aquaculture_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_aquaculture_b" value ="1" <?php if($questionnaire[traid_aquaculture_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_aquaculture_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_aquaculture_b" value="2" <?php if($questionnaire[traid_aquaculture_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_aquaculture_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_aquaculture_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_aquaculture_general']) ? $questionnaire['traid_aquaculture_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_aquaculture" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_aquaculture_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_aquaculture_b" value="1" <?php if($questionnaire[export_aquaculture_b] == '1') {echo ' checked';} ?>/>

						<label for="export_aquaculture_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_aquaculture_b" value="2" <?php if($questionnaire[export_aquaculture_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_aquaculture_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_aquaculture_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_aquaculture_general']) ? $questionnaire['export_aquaculture_general'] : '' ?>
						</textarea><br>

						<label for="export_aquaculture_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_aquaculture_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_aquaculture_wait']) ? $questionnaire['export_aquaculture_wait'] : '' ?>
						</textarea><br>

						<label for="import_aquaculture_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_aquaculture_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_aquaculture_wait']) ? $questionnaire['import_aquaculture_wait'] : '' ?>
						</textarea><br>
						
			<!--	<div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_aquaculture" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_aquaculture" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_aquaculture']) ? $questionnaire['export_manager_name_aquaculture'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_aquaculture" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_aquaculture" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_aquaculture']) ? $questionnaire['export_manager_surname_aquaculture'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_aquaculture" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_aquaculture" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_aquaculture']) ? $questionnaire['export_manager_phone_aquaculture'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_aquaculture" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_aquaculture" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_aquaculture']) ? $questionnaire['export_manager_email_aquaculture'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->
					<hr>
				</div>


<!-- -----------------------------------------------------------------Переробка харчова--------------------------------------------------------- -->


						<label for="production_processing_products_for_use_as_food" class="pair_class"><b>D - Виробництво харчової продукції сільськогосподарського походження (переробна діяльність)</b></label>
							<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_processing_products_for_use_as_food" id="production_processing_products_for_use_as_food_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_processing_products_for_use_as_food] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_food" id="traid_processing_products_for_use_as_food_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_processing_products_for_use_as_food] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_food" id="export_processing_products_for_use_as_food_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_processing_products_for_use_as_food] == 'on') {echo ' checked';} ?>/>
				</div>


			<div id="production_processing_products_for_use_as_food" style="display: none">


						<label for="activities_in_food_processing" class="pair_class">діяльність з переробки харчових продуктів</label>
						<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="activities_in_food_processing" id="activities_in_food_processing_checkbox" onchange="show_hiden(this);"  <?php if($questionnaire[activities_in_food_processing] == 'on') {echo ' checked';} ?>/>

					<div id="activities_in_food_processing" style="display: none">
						<label for="food_general" class="pair_class">Загальний асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="food_general" rows="3" ><?php echo isset($questionnaire['food_general']) ? $questionnaire['food_general'] : '' ?></textarea><br>

						<label for="food_for_certificationt" class="pair_class">Продукція, подана на сертифікацію</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="food_for_certificationt" rows="3" ><?php echo isset($questionnaire['food_for_certificationt']) ? $questionnaire['food_for_certificationt'] : '' ?></textarea><br>

						<label for="food_emploe" class="pair_class">Кількість працівників, залучених до переробної діяльності</label>
						<input type="number" name="food_emploe" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['food_emploe']) ? $questionnaire['food_emploe'] : '' ?>" />
					</div>


					<label for="wine_industry" class="pair_class">діяльність з виробництва вина</label>
						<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="wine_industry" id="wine_industry_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[wine_industry] == 'on') {echo ' checked';} ?> />

					<div id="wine_industry" style="display: none">
						<label for="wine_industry_general" class="pair_class">Загальний асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="wine_industry_general" rows="3" ><?php echo isset($questionnaire['wine_industry_general']) ? $questionnaire['wine_industry_general'] : '' ?></textarea><br>

						<label for="wine industry_certificationt" class="pair_class">Продукція, подана на сертифікацію</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="wine_industry_certificationt" rows="3" ><?php echo isset($questionnaire['wine_industry_certificationt']) ? $questionnaire['wine_industry_certificationt'] : '' ?></textarea><br>

						<label for="wine_industry_emploe" class="pair_class">Кількість працівників, залучених до переробної діяльності</label>
						<input type="number" name="wine_industry_emploe" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['wine_industry_emploe']) ? $questionnaire['wine_industry_emploe'] : '' ?>"/>
					</div>
					<hr>
			</div>

			<div id="traid_processing_products_for_use_as_food" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_processing_products_for_use_as_food_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_food_b" value ="1" <?php if($questionnaire[traid_processing_products_for_use_as_food_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_processing_products_for_use_as_food_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_food_b" value="2" <?php if($questionnaire[traid_processing_products_for_use_as_food_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_processing_products_for_use_as_food_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_food_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_processing_products_for_use_as_food_general']) ? $questionnaire['traid_processing_products_for_use_as_food_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_processing_products_for_use_as_food" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_processing_products_for_use_as_food_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_food_b" value="1" <?php if($questionnaire[export_processing_products_for_use_as_food_b] == '1') {echo ' checked';} ?>/>

						<label for="export_processing_products_for_use_as_food_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_food_b" value="2" <?php if($questionnaire[export_processing_products_for_use_as_food_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_processing_products_for_use_as_food_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_food_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_processing_products_for_use_as_food_general']) ? $questionnaire['export_processing_products_for_use_as_food_general'] : '' ?>
						</textarea><br>

						<label for="export_processing_products_for_use_as_food_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_food_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_processing_products_for_use_as_food_wait']) ? $questionnaire['export_processing_products_for_use_as_food_wait'] : '' ?>
						</textarea><br>

						<label for="import_processing_products_for_use_as_food_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_processing_products_for_use_as_food_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_processing_products_for_use_as_food_wait']) ? $questionnaire['import_processing_products_for_use_as_food_wait'] : '' ?>
						</textarea><br>
						
				<!-- <div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_processing_products_for_use_as_food" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_processing_products_for_use_as_food" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_processing_products_for_use_as_food']) ? $questionnaire['export_manager_name_processing_products_for_use_as_food'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_processing_products_for_use_as_food" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_processing_products_for_use_as_food" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_processing_products_for_use_as_food']) ? $questionnaire['export_manager_surname_processing_products_for_use_as_food'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_processing_products_for_use_as_food" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_processing_products_for_use_as_food" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_processing_products_for_use_as_food']) ? $questionnaire['export_manager_phone_processing_products_for_use_as_food'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_processing_products_for_use_as_food" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_processing_products_for_use_as_food" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_processing_products_for_use_as_food']) ? $questionnaire['export_manager_email_processing_products_for_use_as_food'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->
				<hr>
				</div>


<!-- -----------------------------------------------------------------Переробка корми----------------------------------------------------------- -->


					<label for="production_processing_products_for_use_as_feed" class="pair_class"><b>E - Виробництво кормів, що піддавалися переробці, сільськогосподарського походження</b></label>
					<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_processing_products_for_use_as_feed" id="production_processing_products_for_use_as_feed_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_processing_products_for_use_as_feed] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_feed" id="traid_processing_products_for_use_as_feed_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_processing_products_for_use_as_feed] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_feed" id="export_processing_products_for_use_as_feed_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" class="triple_class" <?php if($questionnaire[export_processing_products_for_use_as_feed] == 'on') {echo ' checked';} ?>/>
				</div>

			<div id="production_processing_products_for_use_as_feed" style="display: none">

             

					
						<label for="feed_general" class="pair_class">Загальний асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="feed_general" rows="3" ><?php echo isset($questionnaire['feed_general']) ? $questionnaire['feed_general'] : '' ?></textarea><br>

						<label for="feed_for_certificationt" class="pair_class">Продукція, подана на сертифікацію</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="feed_for_certificationt" rows="3" ><?php echo isset($questionnaire['feed_for_certificationt']) ? $questionnaire['feed_for_certificationt'] : '' ?></textarea><br>

						<label for="feed_emploe" class="pair_class">Кількість працівників, залучених до переробної діяльності</label>
						<input type="number" name="feed_emploe" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['feed_emploe']) ? $questionnaire['feed_emploe'] : '' ?>" />
								
					<hr>
			</div>


			<div id="traid_processing_products_for_use_as_feed" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_processing_products_for_use_as_feed_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_feed_b" value ="1" <?php if($questionnaire[traid_processing_products_for_use_as_feed_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_processing_products_for_use_as_feed_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_feed_b" value="2" <?php if($questionnaire[traid_processing_products_for_use_as_feed_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_processing_products_for_use_as_feed_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_processing_products_for_use_as_feed_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_processing_products_for_use_as_feed_general']) ? $questionnaire['traid_processing_products_for_use_as_feed_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_processing_products_for_use_as_feed" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_processing_products_for_use_as_feed_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_feed_b" value="1" <?php if($questionnaire[export_processing_products_for_use_as_feed_b] == '1') {echo ' checked';} ?>/>

						<label for="export_processing_products_for_use_as_feed_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_feed_b" value="2" <?php if($questionnaire[export_processing_products_for_use_as_feed_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_processing_products_for_use_as_feed_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_feed_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_processing_products_for_use_as_feed_general']) ? $questionnaire['export_processing_products_for_use_as_feed_general'] : '' ?>
						</textarea><br>

						<label for="export_processing_products_for_use_as_feed_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_processing_products_for_use_as_feed_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_processing_products_for_use_as_feed_wait']) ? $questionnaire['export_processing_products_for_use_as_feed_wait'] : '' ?>
						</textarea><br>

						<label for="import_processing_products_for_use_as_feed_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_processing_products_for_use_as_feed_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_processing_products_for_use_as_feed_wait']) ? $questionnaire['import_processing_products_for_use_as_feed_wait'] : '' ?>
						</textarea><br>
						
				<!-- <div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_processing_products_for_use_as_feed" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_processing_products_for_use_as_feed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_processing_products_for_use_as_feed']) ? $questionnaire['export_manager_name_processing_products_for_use_as_feed'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_processing_products_for_use_as_feed" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_processing_products_for_use_as_feed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_processing_products_for_use_as_feed']) ? $questionnaire['export_manager_surname_processing_products_for_use_as_feed'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_processing_products_for_use_as_feed" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_processing_products_for_use_as_feed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_processing_products_for_use_as_feed']) ? $questionnaire['export_manager_phone_processing_products_for_use_as_feed'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_processing_products_for_use_as_feed" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_processing_products_for_use_as_feed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_processing_products_for_use_as_feed']) ? $questionnaire['export_manager_email_processing_products_for_use_as_feed'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->
				<hr>
				</div>

<!-- -----------------------------------------------------------------Насіння----------------------------------------------------------- -->
					<label for="production_growing_seedlings_and_seed" class="pair_class"><b>F - Виробництво насіння та/чи садивного матеріалу</b></label>
					<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_growing_seedlings_and_seed" id="production_growing_seedlings_and_seed_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_growing_seedlings_and_seed] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_growing_seedlings_and_seed" id="traid_growing_seedlings_and_seed_checkbox" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_growing_seedlings_and_seed] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_growing_seedlings_and_seed" id="export_growing_seedlings_and_seed_checkbox" onchange="show_hidden_export(this, 'test322'); " class="triple_class" <?php if($questionnaire[export_growing_seedlings_and_seed] == 'on') {echo ' checked';} ?>/>  
				</div>

			<div id="production_growing_seedlings_and_seed" style="display: none">

						<label for="crop_production_F_size" class="pair_class">Загальна площа виробництва насіння/садивного матеріалу (га) </label>
						<input type="number" step="0.01" name="crop_production_F_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_F_size']) ? $questionnaire['crop_production_F_size'] : '' ?>" />

						<label for="crop_production_organic_F_size" class="pair_class">Площа органічного виробництва насіння/садивного матеріалу (га) </label>
						<input type="number" step="0.01" name="crop_production_organic_F_size" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['crop_production_organic_F_size']) ? $questionnaire['crop_production_organic_F_size'] : '' ?>" />


								<label for="growing_seedlings_and_seed_after" class="pair_class">Післязбиральна доробка (очистка, сушіння, сортування, зберігання)</label>
								<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="growing_seedlings_and_seed_after" id="growing_seedlings_and_seed_after_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[growing_seedlings_and_seed_after] == 'on') {echo ' checked';} ?> />

					<div id="growing_seedlings_and_seed_after"	style="display: none">

									<label for="growing_seedlings_and_seed_after_about_b" class="pair_class">Опишіть післязбиральну доробку</label>
									<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="growing_seedlings_and_seed_after_about_b" placeholder="Enter your message" rows="3" ><?php echo isset($questionnaire['growing_seedlings_and_seed_after_about_b']) ? $questionnaire['growing_seedlings_and_seed_after_about_b'] : '' ?></textarea>
					</div>
					<hr>
			</div>

			<div id="traid_growing_seedlings_and_seed" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_growing_seedlings_and_seed_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_growing_seedlings_and_seed_b" value ="1" <?php if($questionnaire[traid_growing_seedlings_and_seed_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_growing_seedlings_and_seed_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_growing_seedlings_and_seed_b" value="2" <?php if($questionnaire[traid_growing_seedlings_and_seed_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_growing_seedlings_and_seed_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_growing_seedlings_and_seed_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_growing_seedlings_and_seed_general']) ? $questionnaire['traid_growing_seedlings_and_seed_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_growing_seedlings_and_seed" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_growing_seedlings_and_seed_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_growing_seedlings_and_seed_b" value="1" <?php if($questionnaire[export_growing_seedlings_and_seed_b] == '1') {echo ' checked';} ?>/>

						<label for="export_growing_seedlings_and_seed_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_growing_seedlings_and_seed_b" value="2" <?php if($questionnaire[export_growing_seedlings_and_seed_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_growing_seedlings_and_seed_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_growing_seedlings_and_seed_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_growing_seedlings_and_seed_general']) ? $questionnaire['export_growing_seedlings_and_seed_general'] : '' ?>
						</textarea><br>

						<label for="export_growing_seedlings_and_seed_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_growing_seedlings_and_seed_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_growing_seedlings_and_seed_wait']) ? $questionnaire['export_growing_seedlings_and_seed_wait'] : '' ?>
						</textarea><br>

						<label for="import_growing_seedlings_and_seed_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_growing_seedlings_and_seed_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_growing_seedlings_and_seed_wait']) ? $questionnaire['import_growing_seedlings_and_seed_wait'] : '' ?>
						</textarea><br>
						
				<!-- <div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_growing_seedlings_and_seed" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_growing_seedlings_and_seed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_growing_seedlings_and_seed']) ? $questionnaire['export_manager_name_growing_seedlings_and_seed'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_surname_growing_seedlings_and_seed" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_growing_seedlings_and_seed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_growing_seedlings_and_seed']) ? $questionnaire['export_manager_surname_growing_seedlings_and_seed'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_phone_growing_seedlings_and_seed" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_growing_seedlings_and_seed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_growing_seedlings_and_seed']) ? $questionnaire['export_manager_phone_growing_seedlings_and_seed'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_growing_seedlings_and_seed" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_growing_seedlings_and_seed" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_growing_seedlings_and_seed']) ? $questionnaire['export_manager_email_growing_seedlings_and_seed'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div> -->
				<hr>
				</div>

<!-- -----------------------------------------------------------------ЗЗР---------------------------------------------------------------- -->

				<!--	<label for="production_inputs" class="pair_class"><b>G - ЗЗР та добрива</b></label>
					<div class="pair_class">
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production_inputs" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[production_inputs] == 'on') {echo ' checked';} ?> />
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_inputs" onchange="show_hiden(this);" class="triple_class" <?php if($questionnaire[traid_inputs] == 'on') {echo ' checked';} ?>/>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_inputs"    class="triple_class" <?php if($questionnaire[export_inputs] == 'on') {echo ' checked';} ?>
					onchange="show_hidden_export(this, 'test322'); "
					 
				/>
				</div> 

				

			<div id="production_inputs" style="display: none">

					<hr>
			</div>


			<div id="traid_inputs" style="display: none">
							<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
					<div class="pair_class" align='center'>
						<label for="traid_inputs_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_inputs_b" value ="1" <?php if($questionnaire[traid_inputs_b] == '1') {echo ' checked';} ?>/>
						<label for="traid_inputs_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_inputs_b" value="2" <?php if($questionnaire[traid_inputs_b] == '2') {echo ' checked';} ?>/>
					</div>

						<label for="traid_inputs_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_inputs_general" rows="3" class="pair_class" ><?php echo isset($questionnaire['traid_inputs_general']) ? $questionnaire['traid_inputs_general'] : '' ?></textarea><br>
						
					<hr>
			</div>

            <div id="export_inputs" style="display: none">
					<p class="pair_class">Чи є у підприємства складські приміщення (власні, орендовані)</p>
				<div class="pair_class" align='center'>

					<label for="export_inputs_b" >Так</label>
					<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_inputs_b" value="1" <?php if($questionnaire[traid_inputs_b] == '1') {echo ' checked';} ?>/>

						<label for="export_inputs_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_inputs_b" value="2" <?php if($questionnaire[traid_inputs_b] == '2') {echo ' checked';} ?>/>

			    </div>




						<label  for="export_inputs_general" class="pair_class">Асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_inputs_general" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_inputs_general']) ? $questionnaire['export_inputs_general'] : '' ?>
						</textarea><br>

						<label for="export_inputs_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_inputs_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['export_inputs_wait']) ? $questionnaire['export_inputs_wait'] : '' ?>
						</textarea><br>

						<label for="import_inputs_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_inputs_wait" rows="3" class="pair_class">
							<?php echo isset($questionnaire['import_inputs_wait']) ? $questionnaire['import_inputs_wait'] : '' ?>
						</textarea><br>
						
				<div>
					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_name_inputs" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_name_inputs" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_name_inputs']) ? $questionnaire['export_manager_name_inputs'] : '' ?>" placeholder="Ім'я"   class="pair_class"/>
					<br>

					<label for="export_manager_surname_inputs" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_surname_inputs" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_surname_inputs']) ? $questionnaire['export_manager_surname_inputs'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/>
					<br>

					<label for="export_manager_phone_inputs" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_phone_inputs" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_phone_inputs']) ? $questionnaire['export_manager_phone_inputs'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_email_inputs" class="pair_class">Email</label>
					<input type="email" name="export_manager_email_inputs" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_email_inputs']) ? $questionnaire['export_manager_email_inputs'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div>
				<hr>
				</div>

				<div id="export_manager_for_all" style="display: none">

					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>
					<label for="export_manager_for_all_name" class="pair_class">Ім'я</label>
					<input type="text" name="export_manager_for_all_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_for_all_name']) ? $questionnaire['export_manager_for_all_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export_manager_for_all_surname" class="pair_class">Прізвище</label>
					<input type="text" name="export_manager_for_all_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_for_all_surname']) ? $questionnaire['export_manager_for_all_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export_manager_for_all_phone" class="pair_class">Номер телефону</label>
					<input type="tel" name="export_manager_for_all_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_for_all_phone']) ? $questionnaire['export_manager_for_all_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export_manager_for_all_email" class="pair_class">Email</label>
					<input type="email" name="export_manager_for_all_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export_manager_for_all_email']) ? $questionnaire['export_manager_for_all_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>

				</div> -->


				<hr>


				<div id="test322" style="display: none">

					<h3>Особа відповідальна за експорт</h3>
					<p>(контактна особа від якої будуть прийматися заявки на експорт)</p>

					<label for="export1_manager_for_all_name" class="pair_class">Ім'я</label>
					<input type="text" name="export1_manager_for_all_name" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export1_manager_for_all_name']) ? $questionnaire['export1_manager_for_all_name'] : '' ?>" placeholder="Ім'я"   class="pair_class"/><br>

					<label for="export1_manager_for_all_surname" class="pair_class">Прізвище</label>
					<input type="text" name="export1_manager_for_all_surname" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export1_manager_for_all_surname']) ? $questionnaire['export1_manager_for_all_surname'] : '' ?>"  placeholder="Прізвище"  class="pair_class"/><br>

					<label for="export1_manager_for_all_phone" class="pair_class">Номер телефону</label>
					<input type="tel" name="export1_manager_for_all_phone" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export1_manager_for_all_phone']) ? $questionnaire['export1_manager_for_all_phone'] : '' ?>"  placeholder="+38(0"  class="pair_class"/><br>

					<label for="export1_manager_for_all_email" class="pair_class">Email</label>
					<input type="email" name="export1_manager_for_all_email" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['export1_manager_for_all_email']) ? $questionnaire['export1_manager_for_all_email'] : '' ?>"  placeholder="Email"  class="pair_class"/>
				</div>




<!-- -----------------------------------------------------ТОРГІВЛЯ\ЕКСПОРТ\ВИРОБНИЦТВО---------------------------------------------------------- 
				<hr>

					<label for="production" class="pair_class"><b>Виробництво</b></label>
					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="production" onchange="show_hiden(this);" class="pair_class"/>

			<div id="production" style="display: none">


					<hr>
			</div>

					<label for="export" class="pair_class"><b>Імпорт\Експорт</b></label>
					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export" onchange="show_hiden(this);" class="pair_class"/>

			<div id="export" style="display: none">
					<p class="pair_class">Чи є у власності підприємства складські приміщення</p>
					<div class="pair_class" align='center'>
						<label for="export_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_b"/>
						<label for="export_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_b"/>

					</div>


						<label for="export_general" class="pair_class">Загальний асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_general" rows="3" class="pair_class"></textarea><br>
						<label for="export_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="export_wait" rows="3" class="pair_class"></textarea><br>
						<label for="import_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="import_wait" rows="3" class="pair_class"></textarea><br>
						<hr>
			</div>


					<label for="traid" class="pair_class"><b>Торгівля</b></label>
					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid" onchange="show_hiden(this);" class="pair_class"/>

			<div id="traid" style="display: none">
					<p class="pair_class">Чи є у власності підприємства складські приміщення</p>
					<div class="pair_class" align='center'>
						<label for="traid_b">Так</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_b"/>
						<label for="traid_b">Ні</label>
						<input type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_b"/>
					</div>

						<label for="traid_general" class="pair_class">Загальний асортимент продукції</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_general" rows="3" class="pair_class"></textarea><br>
						<label for="traid_export_wait" class="pair_class">Продукція, експорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_export_wait" rows="3" class="pair_class"></textarea><br>
						<label for="traid_import_wait" class="pair_class">Продукція, імпорт якої очікується</label>
						<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="traid_import_wait" rows="3" class="pair_class"></textarea><br>
						<hr>
			</div>
						(Під торгівельною діяльністю тут мається на увазі купівля готової продукції та її перепродаж без обробки)<hr> -->

<!-- -----------------------------------------------------------------Стандарти-------------------------------------------------------------- -->

			<div>

			<h3>Стандарти</h3>
				(будь ласка, оберіть відповідно до потенційного ринку)<br><br>
				Основний:<br>
					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="standard_eu"  <?php if($questionnaire[standard_eu] == 'on') {echo ' checked';} ?> />Стандарт Міжнародних Акредитованих Органів Сертифікації з органічного виробництва і переробки, еквівалентний Стандарту Європейського Союзу (Регулювання Ради (ЄС) 834/2007, 889/2008) // український та міжнародний ринки<br><br>
					Додаткові:<br>
					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="standard_nop" <?php if($questionnaire[standard_nop] == 'on') {echo ' checked';} ?> />NOP - ринок США

					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="standard_jas" <?php if($questionnaire[standard_jas] == 'on') {echo ' checked';} ?> />JAS - ринок Японії

					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="standard_bs" <?php if($questionnaire[standard_bs] == 'on') {echo ' checked';} ?> />Bio Suisse - ринок Швейцарії

					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="standard_krav"  <?php if($questionnaire[standard_krav] == 'on') {echo ' checked';} ?>/>KRAV - ринок Швеції

					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="standard_naturland"  <?php if($questionnaire[standard_naturland] == 'on') {echo ' checked';} ?>/>Naturland - ринок Німеччини
			</div>

<!-- --------------------------------------------------------Як ви про нас дізналися------------------------------------------------------------ -->

			<div id='test'>
				<h3>Як ви дізналися про "Органік Стандарт"?</h3>
				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="other_1" <?php if($questionnaire[other_1] == 'on') {echo ' checked';} ?> />
				<label for="other_1" >Знайшли інформацію в інтернеті</label><br>


					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="other_2" id="other_2_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[other_2] == 'on') {echo ' checked';} ?>/>
					<label for="other_2" >через консультанта органічного виробництва</label><br>

			<div id="other_2" style="display: none">
				<label for="other_2_who" class="pair_class">Вкажіть кого:</label>
				<input type="text" name="other_2_who" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['other_2_who']) ? $questionnaire['other_2_who'] : '' ?>" /><br>
			</div>

					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="other_3" id="other_3_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[other_3] == 'on') {echo ' checked';} ?>/>
					<label for="other_3" >Рекомендації</label><br>

			<div id="other_3" style="display: none">
				<label for="other_3_who" class="pair_class">Вкажіть кого:</label>
				<input type="text" name="other_3_who" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> value="<?php echo isset($questionnaire['other_3_who']) ? $questionnaire['other_3_who'] : '' ?>" /><br>
			</div>



				<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="other_4" <?php if($questionnaire[other_4] == 'on') {echo ' checked';} ?> />
				<label for="other_4" >Семінар, конференція чи інший захід</label><br>

					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="other_5" id="other_5_checkbox" onchange="show_hiden(this);" <?php if($questionnaire[other_5] == 'on') {echo ' checked';} ?>/>
					<label for="other_5" >Ваш варіант</label><br>

			<div id="other_5" style="display: none">
				<label for="other_5_who" class="pair_class">Вкажіть свій варіант:</label>
				<textarea <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="other_5_who" placeholder="Enter your message" rows="3" class="pair_class"><?php echo isset($questionnaire['Enter your message']) ? $questionnaire['Enter your message'] : '' ?></textarea><br>
			</div>
			</div>
			<br><br>
<!-- -----------------------------------------------------------------Підтвердження------------------------------------------------------------ -->
			<hr>
					<h3>ПОГОДЖЕННЯ</h3>
					<p>Вся контактна інформація, як Оператора, так і Замовника (якщо це різні організації), є ОБОВ’ЯЗКОВОЮ до заповнення, АЛЕ ці контакти відображатимуться на сайті ОС після попереднього погодження.</p><br>
					
					<p>Я надаю згоду на публікацію на сайті Органік Стандарт контактних даних</p> 

					<div  >
						<label class="pair_class" for="agree_p"><b>Замовника</b></label>
						<input class="pair_class" type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="agree_p" value ="1" <?php if($questionnaire[agree_p] == '1') {echo ' checked';} ?>/>

						<label class="pair_class" for="agree_p"><b>Оператора</b></label>
						<input class="pair_class" type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="agree_p" value="2" <?php if($questionnaire[agree_p] == '2') {echo ' checked';} ?>/>

						<label class="pair_class" for="agree_p"><b>Оператора і Замовника</b></label>
						<input class="pair_class" type="radio" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="agree_p" value="3" <?php if($questionnaire[agree_p] == '3') {echo ' checked';} ?>/><hr>
					</div>
			
			

							





					
					<input type="checkbox" <?php if (isset($_GET['readonly'])) {echo 'readonly';} ?> name="agree" id="agree_for_first_company" required <?php if($questionnaire[agree] == 'on') {echo ' checked';} ?> />
					
					<label for="agree" ><b>  Підтверджую,</b> що уся інформація надана в цій заяві є достовірною, у випадку будь-яких важливих змін зобов'язуюсь негайно повідомити ТОВ"Органік стандарт".</label><br>
					<div align="center">
					<input type="submit" Value="Відправити">	<br>					
					</div><br>
<hr>				



				
</form>

				</div>


			<div>
	<!-- <iframe src="https://www.google.com/maps/d/embed?mid=1sEiNliOB5wvdQaSXJwp0QB8k5dU" width="640" height="480"></iframe> -->
</div>
				<div>
						<p>За додатковою інформацією звертайтесь до нас за телефоном або електронною поштою: <a href="tel:+380672431990">+38(067) 243 19 90 </a>, <a href="mailto:office@organicstandard.com.ua">office@organicstandard.com.ua</a> </p>
				</div>

				</div></div> 


				
			<div id="bg_bottom">&nbsp;</div>
		
		<div class="push">&nbsp;</div>
		
		</div>
		</div>

	
			


</body>


</html>



