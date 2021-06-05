<?php  
	include_once('header.html');
	if(isset($_GET['notif'])){ ?>

		<div class="alert alert-success alert-dismissible fade show" role='alert'>
			File <strong><?= $_GET['file'] ?></strong> Berhasil Disimpan
			<button class="btn-close" type="button" data-bs-dismiss='alert' aria-label="Close"></button>
		</div>
	
	<?php
	}

?>

	<main>
		<div class="container mt-3">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">Save to .txt</h2><hr>
					<form action="save.php" method="post">
						<div class="mb-3">
							<labal class="form-label" for="filename">File Name</labal>
							<input class="form-control" type="text" name="nama" id="filename">
						</div>
						<div class="mb-3">
							<labal class="form-label" for="isifile">File Content</labal>
							<textarea class="form-control" type="text" name="isi" id="isifile"></textarea>
						</div>
						<button class="btn btn-dark" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</main>

<?php include_once('headbot.html'); ?>