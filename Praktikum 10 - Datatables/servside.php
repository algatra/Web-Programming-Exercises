<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
 
    <title>View - Serverside</title>
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
							<h5 class="card-title">Tabel Tinggi Permukaan Air - Server Side</h5><hr>
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
									<!-- blank -->
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
				'order': [2,"desc"],
				"processing": true,
		        "serverSide": true,
		        "ajax": "data.php",
		        "columns": [
			        { "data": 0 },
			        { "data": 1 },
			        { "data": 2 },
			        { "data": 3,
			          "render": function (id, type, full, meta) {
                            return "<button class='btn btn-success'>Edit</button> || <button class='btn btn-danger'>Hapus</button>";
                        } 
			        }
		    	]

			});
		});
	</script>
  </body>

</html>