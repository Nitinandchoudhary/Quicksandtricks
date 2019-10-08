<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 

// user name is root 
$mysql_user = 'root'; 

$mysql_pass = "";
// function to connect with database having 
// argument host and user name 
if (!@mysqli_connect ($mysql_host, $mysql_user, $mysql_pass)) 
{ 
	die('Cannot connect to database'); 
} 
else
{ 
	// database name is server 
	if (@mysqli_select_db('jain')) 
	{ 
		echo "Connection Success"; 
	} 
	else
	{ 
		die('Cannot connect to database'); 
	} 
} 
?> 
