<?php
$username = $_REQUEST['uname'];
$password = $_REQUEST['psw'];
$loggedin = 0;
/*
echo $username;
echo $password;
*/


if ($username == "admin" AND $password == "123456") {
	$loggedin = 1;
	echo "Admin logged in";
}
else {
	echo "Error: Wrong username/password";
}
	
?>
