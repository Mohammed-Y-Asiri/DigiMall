<?php
$dbname = "u663987839_digimall";
$username = "u663987839_admin";
$password = "12345";
$server_name = "localhost";

$con = mysqli_connect($server_name, $username,$password, $dbname);

if($con){
//	echo "Connect";
}
else {
//	echo "failed";
}

?>