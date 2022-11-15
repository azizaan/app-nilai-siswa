<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id'];
$NIS = $_GET['NIS'];
$nama = $_GET['nama'];
$mapel = $_GET['mapel'];
$nilai = $_GET['nilai'];

//query update
$query = "UPDATE nilai_mapel SET NIS='$NIS' , nama='$nama' , mapel='$mapel' , nilai='$nilai' WHERE id_nilai='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:home.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>