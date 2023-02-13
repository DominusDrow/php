<?php include("./db.php") ?>
<?php include("db_consult.php") ?>

<?php include("./includes/header.php") ?>

<br>
<div class="container">
	<h2 class="text-center">Votaciones </h2>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			
<div class="container">

<?php
$query = "SELECT * FROM parties";
$result_parties = mysqli_query($conn, $query);
$total_votes = getTotalVotes();
$colors = array("primary", "secondary", "success", "danger", "warning", "info", "dark");

while($row = mysqli_fetch_assoc($result_parties)) { ?>
<br>
	<div class="row">
		<div class="col-1">
			<img src="<?php echo $row['image'] ?>" width="35" height="35">
		</div>
		<div class="col-10">
			<div class="progress ">
<?php
$porcentaje = round(((getVotes($row['id']) / $total_votes) * 100),2);
?>

	<div class="<?php echo "progress-bar bg-".$colors[$row['id']] ?>" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
			</div>
		</div>
		<div class="col-1">
			<?php echo getVotes($row['id']) ?>
		</div>
	</div>
<?php } ?>

		</div>
	</div>

</div>


<?php include("./includes/footer.php") ?>
