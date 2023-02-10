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
					$query = "SELECT * FROM vote";
					$result_votes = mysqli_query($conn, $query);

					while($row = mysqli_fetch_assoc($result_votes)) { ?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['political'] ?></td>
							<td><?php echo $row['vote_date'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</div>

