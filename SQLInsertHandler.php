<?php
// Obtain a connection object by connecting to the db
$connection = @mysqli_connect (MySQL server address, username,
password, database);
// Need to fill in address, username, pass

var_dump($_REQUEST);

$Manufacturer = $_REQUEST['manufacturer']; //Accesses user filled form of type manufacturer
$Make = $_REQUEST['make'];
$Version = $_REQUEST['version'];
$OSRelease = $_REQUEST['OSRelease'];
$Security = $_REQUEST['security'];

$sqlPHONE = "INSERT INTO phone (manufacturer, make, version, OSRelease, security) VALUES ('$Manufacturer','$Make','$Version','$OSRelease','$Security')";
//Inserts values from submission into our data tables
$sqlMANU = "INSERT INTO manufacturer (manufacturer, make, version, OSRelease, security) VALUES ('$Manufacturer','$Make','$Version','$OSRelease','$Security')";
$sqlVERS = "INSERT INTO version (version name) VALUES ('$Version')";

if(mysqli_query($connection, $sqlPHONE)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlPHONE. " . mysqli_error($connection);
	} //Checks error in one database. May need to add more

  mysqli_close($connection); //Close connection
?>
