<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Nilai SMK Negeri 1 Purwosari</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="js/jquery.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>
   <?php 
	//tambahkan format nilai
	include ('./formatharga/lib.php');
	?>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM nilai_mapel";

	$result = mysqli_query($conn , $query);

	?>

<nav class="navbar bg-light">
  <div class="container-fluid" style="margin-left: 7.5rem">
    <a class="navbar-brand">
      <img src="SMK.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>

	<div class="container" style="margin-top: 20px; padding-bottom: 20px;">
		
		<h1>Data Nilai SMK Negeri 1 Purwosari</h1>
		<div class="row">
			<div class="col-sm-4">
				<h3>Form Input Nilai</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>NIS</label>
						<input type="text" name="NIS" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Peserta Didik</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Mapel</label>
						<input type="text" name="mapel" class="form-control">
					</div>
					<div class="form-group">
						<label>Nilai</label>
						<input type="text" name="nilai" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambahkan</button>					
				</form>
				
			</div>
			<div class="col-sm-8">
				<h3>Tabel Daftar Nilai</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>NIS</th>
							<th>Nama Peserta Didik</th>
							<th>Mapel</th>
							<th>Nilai</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['NIS']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['mapel']; ?></td>
							<td><?php echo nilai ($row['nilai']); ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_nilai'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_nilai']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 