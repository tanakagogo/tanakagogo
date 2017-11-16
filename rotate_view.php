<?php
session_start();
echo '<pre>';
var_dump($_SESSION['degree']);
var_dump($_SESSION['header']);
var_dump($_SESSION['source']);
var_dump($_SESSION['image']);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>image_rotate</title>
</head>
<body>
    <img src='rotate.php' alt="image">
    <!-- <img src="W000017561-006_1_S2.jpg"> -->

<form action="rotate.php" method="get">
    <input type="radio" name="degree" value="90">90
    <input type="radio" name="degree" value="180">180
    <input type="radio" name="degree" value="270">270
    <input type="submit" name="get_degree" value="回転">
</form>
</body>
</html>
