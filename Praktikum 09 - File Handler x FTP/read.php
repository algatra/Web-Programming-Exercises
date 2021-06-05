<?php include_once('header.html'); ?>

 <main>
 	<div class="container mt-3">
 		<div class="row">
 			<div class="col-sm-3">
 				<div class="card">
 					<div class="card-body">
 						<h5 class="card-tittle">List File</h5><hr>
 						<p class="card-text">
		 					<ul>
		 						<?php 

			 						$dir = "file/";
			 						$file = array_diff(scandir($dir), array('.', '..'));
			 						foreach($file as $filename){
			 							echo "<li><a href='read.php?file=$filename'>$filename</a></li>";
			 						}

		 						 ?>
		 					</ul>
 						</p>
 					</div>
 				</div>
 			</div>
 			<div class="col-sm-9">
 				<div class="card mb-3">
 					<div class="card-body">
 						<h5 class="card-tittle">Content</h5><hr>
 						<p class="card-text">
 							<?php 

 								if(isset($_GET['file'])){
 									$files = 'file/'.$_GET["file"];
 									echo nl2br(file_get_contents($files));
 								}

 							 ?>
 						</p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </main>

<?php include_once('headbot.html'); ?>
