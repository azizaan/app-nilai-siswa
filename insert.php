<?php
//add dbconnect

include('dbconnect.php');

$NIS = $_POST['NIS'];
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
$nilai = $_POST['nilai'];

//query

$query =  "INSERT INTO nilai_mapel (NIS , nama , mapel , nilai) VALUES('$NIS' , '$nama' , '$mapel' , '$nilai')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>