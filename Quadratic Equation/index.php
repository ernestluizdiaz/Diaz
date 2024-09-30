<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php session_start(); ?>

<h1>Discriminant of a quadratic equation</h1>

<form action="handleForm.php" method="POST">
    <p>A <input type="text" placeholder="Value of a here" name="valueA"></p>
    <p>B <input type="text" placeholder="Value of b here" name="valueB"></p>
    <p>C <input type="text" placeholder="Value of c here" name="valueC"></p>
    <p><input type="submit" value="Submit" name="submitBtn"></p>
</form>


</body>
</html>