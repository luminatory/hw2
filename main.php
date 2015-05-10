 <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Тег INPUT, атрибут checked</title>
</head>
<body>

	<form method="post" action="main.php">
		<p>
			<b>Choose the language</b>
		</p>
		<p>
			<input type="radio" id="en" name="lang" value="en"><label for="en">en</label><Br>
			<input type="radio" id="ru" name="lang" value="ru"><label for="ru">ru</label><Br>
		
		
		<p>
			<input type="submit" value="Send">
		</p>
	</form>
</body>
</html>
<?php
if (isset($_POST['lang']) && $_POST['lang'] == 'en') {
	include_once 'cv_en.php';
}elseif (isset($_POST['lang']) && $_POST['lang'] == 'ru') {
	include_once 'cv_ru.php';
} else echo "please choose one language";

?>
