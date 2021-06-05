<?php  
	include_once("do.php");
	execute('create','dtkaryawan');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"crossorigin="anonymous">
<title>Add Data</title>
<body style="background-color: white">
	
	<center class="mt-3"><h1>Menambahkan Data</h1></center>
	<center class="mt-5">
		<form method="POST" action="add.php" border=2 style="max-width: 80%">
			<div class="form-row mb-3">
				<div class="col-md-6">
					<label><b>Nama</b></label>
					<input type="text" required="required" name="nama" class="form-control border-secondary">
				</div>
				<div class="col-md-6">
					<label><b>Email</b></label>
					<input type="email" required="required" name="email" class="form-control border-secondary">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6">
					<label><b>Nomor Telepon</b></label>
					<input type="text" name="notelp" maxlength=13 class="form-control border-secondary">
				</div>
			    <div class="form-group col-md-6">
			      <label><b>Gender</b></label>
			      <select required="required" name="gender" class="form-control border-secondary">
			      	<option><b>Pria</b></option>
			      	<option><b>Wanita</b></option>
			      </select>
			    </div>
			</div>
			<div class="form-row mb-3">
				<div class="col-md-10">
					<label><b>Alamat</b></label>
					<input required="required" type="text" name="alamat" class="form-control border-secondary">
				</div>
				<div class="col-md-2">
					<label><b>Kode Pos</b></label>
					<input type="text" name="zip" class="form-control border-secondary">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6">
					<label><b>Tempat Lahir</b></label>
					<input required="required" type="text" name="t4lhr" class="form-control border-secondary">
				</div>
				<div class="col-md-6">
					<label><b>Tanggal Lahir</b></label>
					<input required="required" type="date" name="tgllhr" class="form-control border-secondary">
				</div>
			</div>
			<input type="submit" name="GO" value="Tambahkan" class="btn btn-dark mt-4">
		</form>
	</center>

</body>