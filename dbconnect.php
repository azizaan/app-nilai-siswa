<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "nilai_siswa";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
	die("error in connection");
}

//echo "database connected"
?>