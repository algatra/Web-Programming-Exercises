<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
 
    <title>View - Client Side</title>
  </head>

  <body>
	
	<header>
		<nav class="navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php"> Client Side</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="servside.php">Server Sider</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<div class="container mt-3">
			<div class="row d-flex justify-content-center">
				<div class="col-sm-9">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Tabel Tinggi Permukaan Air</h5><hr>
							<table id="tabel-data">
								<thead class="thead-dark">
									<tr>
										<th>No</th>
										<th>Nilai</th>
										<th>Waktu</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 

										include('konek.php');
										$tma = $konek->query('SELECT * from tma ORDER BY waktu DESC');
										while($row = $tma->fetch_array()){ 

											echo "
											<tr>
												<td>".$row['id_tma']."</td>
												<td>".$row['nilai']."</td>
												<td>".$row['waktu']."</td>
												<td>
													<button class='btn btn-info'>Edit</button>
													<button class='btn btn-danger'>Hapus</button>
												</td>
											</tr>";

										}

									 ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#tabel-data').DataTable({
				'searching': false, 
				'info': false, 
				'order': [3,"desc"]}
				);
		});
	</script>
  </body>

</html>