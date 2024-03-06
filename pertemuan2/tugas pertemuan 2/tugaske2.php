<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div>
		
        <div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Nama Panggilan</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                	<td>1</td>
					<td>Abryan</td>
					<td>EL YANZ</td>
					<td>Depok</td>
					<td>+6281234567</td>
				</tr>
				<tr>
                 	<td>2</td>
					<td>Dapa</td>
					<td>EL DAPZ</td>
					<td>Bogor</td>
					<td>+620987654 </td>
				</tr>
				<?php
				  if (isset($_POST['submit'])) {
                    // Buat variable untuk menangkap dan menyimpan data yang dikirim
                    $submit = $_POST['submit'];
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $nama_panggilan = $_POST['nama_panggilan'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];
                    
                    
                   
                    
                    // Tampilkan data dari variable
                    echo $submit;
                    echo '<td/> ' . $nama_lengkap;
                    echo '<td/>' . $nama_panggilan;
                    echo '<td/>' . $alamat;
                    echo '<td/>' . $telepon;
                  }
				?>

				</tr>
			</tbody>
		</table>
        
				

		
	
		
			

			
		
	</div>
</body>
</html>