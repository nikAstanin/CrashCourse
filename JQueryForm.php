<!DOCTYPE html>
<html>
	<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" href = "style/Main_style.css"/>
	<title>Lab_2_Form</title>
	<script src="scripts/Main_script.js"></script>
	<script src="scripts/jquery-3.4.0.min.js"></script>
	</head>
	
	<body>

<?php include 'header.php'; ?>	
	<main>
		<form name = "JQueryForma" id = "JQueryForm">
			<span><h1>Личные данные</h1><span>На английском</span></span>
			<div class = "inputs">
				<input type = "text" name = "surname" id = "input_surname" placeholder = "Фамилия" onclick = surnameClick(document.getElementById('input_surname'))>
				<label for = "input_surname">Фамилия</label><span> Введите фамилию правильно</span><br>
			</div>
			<div class = "inputs">
				<input type = "text" name = "name" id = "input_name" placeholder = "Имя" onclick = nameClick(this)>
				<label for = "input_name">Имя</label><span> Введите имя правильно</span><br>
			</div>
			<div class = "inputs">
				<input type = "text" name = "patronymic" id = "input_patronymic" placeholder = "Отчество" onclick = patronymicClick(this)>
				<label for = "input_patronymic">Отчество</label><span> Введите отчество правильно</span><br>
			</div>
			<select name = "age_list[]" id = "spisok">
				<option value = "less_16">До 16</option>
				<option value = "_16_21">16-21</option>
				<option value = "_21_27">21-27</option>
				<option value = "_27_35">27-35</option>
				<option value = "_35_45">35-45</option>
				<option value = "_45_55">45-55</option>
				<option value = "more_55">Больше 55</option>
			</select>
			<label for = "spisok">Выберите возраст</label><br/>
			<p><b>О себе</b></p>
			<textarea name = "about_yourself"></textarea>
			<input type = "button" onclick = "jqueryValid(document.getElementById('JQueryForm'))" name = "submit" id = "button_submit" value = "ПЕРЕЙТИ"/>
		</form>
	</main>
<?php include 'footer.php'; ?>