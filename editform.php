<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Nilai SMK Negeri 1 Purwosari</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM nilai_mapel WHERE id_nilai='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Nilai</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id" value="<?php echo $row['id_nilai']; ?>">

		<div class="form-group">
			<label>NIS</label>
			<input type="text" name="NIS" class="form-control" value="<?php echo $row['NIS']; ?>">			
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">			
		</div>

		<div class="form-group">
			<label>Mapel</label>
			<input type="text" name="mapel" class="form-control" value="<?php echo $row['mapel']; ?>">			
		</div>

		<div class="form-group">
			<label>Nilai</label>
			<input type="text" name="nilai" class="form-control" value="<?php echo $row['nilai']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update NIlai</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 