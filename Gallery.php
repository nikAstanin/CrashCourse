<!DOCTYPE html>
<html>
	<head>
        <meta charset = "UTF-8"/>
        <link rel = "stylesheet" href = "style/Main_style.css"/>
        <title>Lab_2_Form</title>
        <script src="scripts/Main_script.js"></script>
        <script src="scripts/jquery-3.4.0.min.js"></script>
        <link rel="stylesheet" href="style/jquery.fancybox.min.css"/>
        <script src="scripts/jquery.fancybox.min.js"></script>
	</head>
	
	<body>
<?php include 'header.php'; ?>
    <main>
        <div class="photoGallery">
            <a data-fancybox="gallery" href="img/big_1.jpg" class="big_img"><img src="img/small_1.jpg" class="small_img"></a>
            <a data-fancybox="gallery" href="img/big_2.jpg" class="big_img"><img src="img/small_2.jpg" class="small_img"></a>
            <a data-fancybox="gallery" href="img/big_3.jpg" class="big_img"><img src="img/small_3.jpg" class="small_img"></a>
        </div>
    </main>
<?php include 'footer.php'; ?>