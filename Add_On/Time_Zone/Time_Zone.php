<!DOCTYPE html>
<html>
<head>
<title>TIME ZONE</title>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
<!-- <link href="./Css/Time_Zone.css" rel="stylesheet"> -->
</head>
<body>
<?php
include './Add_On/Time_Zone/Function/Africa_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/America_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/Antartica_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/Asia_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/Atlantic_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/Australia_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/Europe_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/India_Time_Zone_Call_Csv.php';
include './Add_On/Time_Zone/Function/Pacific_Time_Zone_Call_Csv.php';
?>
<div class="Time_Zone">
<ul id="menu-accordeon"><li><a href="#">Time Zone Local</a><?php include 'Time_Zone_Local.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Africa Time Zone</a><?php include 'Africa_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">America Time Zone</a><?php include 'America_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Antartica Time Zone</a><?php include 'Antartica_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Asia Time Zone</a><?php include 'Asia_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Atlantic Time Zone</a><?php include 'Atlantic_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Australia Time Zone</a><?php include 'Australia_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Europe Time Zone</a><?php include 'Europe_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Indian Time Zone</a><?php include 'India_Time_Zone.php';?></li></ul>
<ul id="menu-accordeon"><li><a href="#">Pacific Time Zone</a><?php include 'Pacific_Time_Zone.php';?></li></ul>
</div>
<script type="text/javascript">
$(document).ready(function() {
$('#menu-accordeon>li').click(function() {
$(this).toggleClass('active');
$(this).siblings().removeClass('active');
})
});
</script>
</body>
</html>