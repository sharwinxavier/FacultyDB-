<?php
$db_host = "localhost";
$db_user = "id16509056_licetdb";
$db_pass = "M@hi07dhoni7";
$db_name = "id16509056_faculty";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Failed to connect to the Database '.mysqli_connect_error();
}
?>