<!DOCTYPE html>
<html>
	<head>
        <meta charset = "UTF-8"/>
        <link rel = "stylesheet" href = "style/Main_style.css"/>
        <link rel="stylesheet" href="style/table.css">
        <title>Lab_2_Form</title>
        
        <script src="scripts/jquery-3.4.0.min.js"></script>
	</head>
	
	<body>
<?php include 'header.php'; ?>
    <main>
        <p class = "tableHeader">Таблица 1.</p>
        <table class = "table_1">
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Возраст</th>
                <th>Пол</th>
                <th>Долг</th>
            </tr>
            <tr>
                <td>Абдул</td>
                <td>Абдулаев</td>
                <td>Абдулаевич</td>
                <td>34</td>
                <td>Муж</td>
                <td>123.00</td>
            </tr>
            <tr>
                <td>Иван</td>
                <td>Иванов</td>
                <td>Иванович</td>
                <td>18</td>
                <td>Муж</td>
                <td>2345.00</td>
            </tr>
            <tr>
                <td>Полина</td>
                <td>Петрова</td>
                <td>Петровна</td>
                <td>45</td>
                <td>Жен</td>
                <td>1267.24</td>
            </tr>
            <tr>
                <td>Абдул</td>
                <td>Абдулаев</td>
                <td>Абдулаевич</td>
                <td>34</td>
                <td>Муж</td>
                <td></td>
            </tr>
        </table>
    </main>
<?php include 'footer.php'; ?>