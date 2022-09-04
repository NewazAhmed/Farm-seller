<?php
include('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$check_in = $_POST['in'];
	$check_out = $_POST['out'];
	$rl = $_POST['role'];
	$role_type = $_POST['type'];
	if(mysql_query("INSERT INTO `registration` (`name`,`email`,`mobile_no`,`check_in`,`check_out`,`role`,`role_type`) VALUES ('$name','$email','$mob','$check_in','$check_out','$rl','$role_type')"))
	{
		header('Location: C:/wamp/www/project/payment.html');
	}
	else
		echo mysql_error();
	}
}
if(isset($_POST['submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'Not book';
?>