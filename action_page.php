<html>
	<head>
	<script 
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>
	</head>
	<body>
	<script> 
	$(document).ready(function(){ 
	$('.button').click(function(){ 
	var clickBtnName = $(this).attr('name'); 
	var ajaxurl = 'http://localhost/SQLDeleteHandler.php'; 
	var data = {'id': clickBtnName}; 
	$.post(ajaxurl, data, function(response) { 
	window.location.href="http://localhost/store.php"; 
	}); 
	}); 
	}); 
	</script>
	


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



if ($loggedin == 1) {
	
//Obtain a connection object by connecting to the db
$connection = @mysqli_connect("127.0.0.1","root","moo","lab5");

if(mysqli_connect_errno())
{ 
echo "<h4>Failed to connect to MySQL: 
</h4>".mysqli_connect_error(); 
} 

 
$query = "select * from phone;";
$resultset = mysqli_query($connection,$query);
$count=$resultset->num_rows;
echo "This query returned $count rows<br><br>";
echo "<table> <tr> <th>id</th> <th>manufacturer</th> <th>make</th> <th>version</th> <th>OSRelease</th> <th>security</th> </tr>";
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) { 
echo "<tr> <td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> <td> <input type=\"submit\" class=\"button\" name=\"".$row[0]."\"value=\"delete\"/> </td> </tr>"; }
echo "</table>";
	
	
}


?>
	</body>
</html>
