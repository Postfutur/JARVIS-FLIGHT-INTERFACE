<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>
<html>

<head>
<title>LOG TO FLIGHT MODE</title>
<meta charset="UTF-8">
<link href="./Css/Flight_Mode.css" rel="stylesheet">
<script type="text/javascript" src="./Js/Count_Down.js"></script>
</head>

<body>
<div>
<section class="stark-login">
<form role="" action="" method="">
<div id="fade-box">
<h1 class="form-signin-heading">FLIGHT MODE DISENGAGED</h1>
<h2>Flight mode of in <span id="time">00:10</span> Secondes!</h2>
<?php
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();
header('Refresh: 10; URL = index.php');
?>
</div>
</form>
<div class="hexagons">
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<br>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<br>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>

<br>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<br>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
<span>&#x2B22;</span>
</div>
</section>
<div id="circle1">
<div id="inner-cirlce1">
</div>
</div>
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>
</body>
</html>