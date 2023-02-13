<?php include("db.php") ?>


<?php include("includes/header.php") ?>

<br>
<div class="container">
	<h2 class="text-center">Historial de votos</h2>
	<br>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-bordered">
				<thead>
					<tr class="table-active">
						<th>Nombre</th>
						<th>Partido</th>
						<th>Fecha</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = "SELECT * FROM votes";
					$result_votes = mysqli_query($conn, $query);

					while($row = mysqli_fetch_assoc($result_votes)) { 
						$query = "SELECT * FROM voters WHERE id = ".$row['voter_id'];
						$result_voters = mysqli_query($conn, $query);
						$voter = mysqli_fetch_assoc($result_voters);

						$query = "SELECT * FROM parties WHERE id = ".$row['party_id'];
						$result_parties = mysqli_query($conn, $query);
						$party = mysqli_fetch_assoc($result_parties);
					?>
						<tr>
							<td><?php echo $voter['name'] ?></td>
							<td><?php echo $party['name'] ?></td>
							<td><?php echo $row['date'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</div>

