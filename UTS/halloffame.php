
<?php
	// include 'func.php';
	include 'header.php';
	// checker();		
?>
<title>Top 10 Leaderboard</title>
<section class="u-align-center u-clearfix u-white u-section-1" id="carousel_1a45">
	<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">';
		<h2 class="u-text u-text-1">Hall Of Fame</h2>
		<br><br>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Rank</th>
					<th scope="col">Username</th>
					<th scope="col">Score</th>
				</tr>
			</thead>
			<tbody>

			<?php  
				include 'func.php';
				checker();
				$rank = 1;
				$conn = dbconnect("epiz_28535987_dtgame");
				$sql = "SELECT * FROM halloffame ORDER BY score DESC LIMIT 10";
				$res = $conn->query($sql);
				// var_dump($res->fetch_row());
				while ($row = $res->fetch_row()) {
					echo "<tr>
							<th scope='row'>$rank</th>
						  	<td>$row[0]</th>
						  	<td>$row[1]</th>
						  </tr>";
					$rank++;
			}
			?>

			</tbody>
		</table>
		<br><br><br>
	</div>
</section>
<?php include 'footer.php'; ?>