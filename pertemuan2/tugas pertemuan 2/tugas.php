<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<div>
        
           
        <form method="POST" action="tugaske2.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">

        <h5>Form Pendaftaran</h5>
            <div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="nama_panggilan">Nama Panggilan</label>
				<input type="text" name="nama_panggilan" class="form-control" id="nama_panggilan">
			</div>
			<div class="form-group">
                <label for="alamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="Umur">Umur</label>
				<input type="tel" name="Umur"  class="form-control" id="Umur">
			</div>
			<button name="submit" class="btn btn-primary" id="submit">Submit</button>
		</form>

	</div>
</body>
</html>