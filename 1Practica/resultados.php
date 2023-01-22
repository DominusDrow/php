<?php include("./db.php") ?>
<?php include("db_consult.php") ?>

<?php include("./includes/header.php") ?>

<div class="container">
	<h2 class="text-center">Votaciones </h2>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			
<div class="container">
<br>
	<div class="row">
		<div class="col-1">
			<img src="./src/pri.png" style="width:35px;" >
		</div>
		<div class="col-10">
			<div class="progress ">
<?php
$porcentaje = round(((getVotes('PRI') / getTotalVotes()) * 100),2);
?>

	<div class="progress-bar bg-info" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
			</div>
		</div>
		<div class="col-1">
			<?php echo getVotes("PRI") ?>
		</div>
	</div>

<br>
	<div class="row">
		<div class="col-1">
			<img src="./src/morena.png" style="width:35px;" >
		</div>
		<div class="col-10">
			<div class="progress ">
<?php
$porcentaje = round(((getVotes('MORENA') / getTotalVotes()) * 100),2);
?>
		<div class="progress-bar bg-danger" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
			</div>
			</div>
			<div class="col-1">
				<?php echo getVotes("MORENA") ?>
			</div>
		</div>

<br>
<div class="row">
	<div class="col-1">
		<img src="./src/prd.png" style="width:35px;" >
	</div>
	<div class="col-10">
		<div class="progress ">
<?php
$porcentaje = round(((getVotes('PRD') / getTotalVotes()) * 100),2);
?>
	<div class="progress-bar bg-warning" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
		</div>
		</div>
		<div class="col-1">
			<?php echo getVotes("PRD") ?>
		</div>
		</div>

<br>
<div class="row">
	<div class="col-1">
		<img src="./src/pan.png" style="width:35px;" >
	</div>
	<div class="col-10">
		<div class="progress ">
<?php
$porcentaje = round(((getVotes('PAN') / getTotalVotes()) * 100),2);
?>
	<div class="progress-bar bg-primary" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
		</div>
		</div>
	<div class="col-1">
		<?php echo getVotes("PAN") ?>
	</div>
	</div>

<br>
<div class="row">
	<div class="col-1">
		<img src="./src/pt.png" style="width:35px;" >
	</div>
	<div class="col-10">
		<div class="progress ">
<?php
$porcentaje = round(((getVotes('PT') / getTotalVotes()) * 100),2);
?>
	<div class="progress-bar bg-danger" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
	</div>
	</div>
	<div class="col-1">
		<?php echo getVotes("PT") ?>
	</div>
	</div>

<br>
<div class="row">
	<div class="col-1">
		<img src="./src/nulo.png" style="width:35px;" >
	</div>
	<div class="col-10">
		<div class="progress ">
<?php
$porcentaje = round(((getVotes('NULO') / getTotalVotes()) * 100),2);
?>
	<div class="progress-bar bg-secondary" role="progressbar" style=<?php echo "width:".$porcentaje."%" ?>  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $porcentaje."%" ?></div>
	</div>
 </div>
	<div class="col-1">
		<?php echo getVotes("NULO") ?>
	</div>
	</div>





		</div>
	</div>

</div>


<?php include("./includes/footer.php") ?>
