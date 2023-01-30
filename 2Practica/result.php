<?php session_start(); ?>
<?php include("./conjuntos.php") ?>
<?php include("./randomSet.php") ?>

<?php include("./includes/header.php") ?>
<br>
<br>
<br>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Resultado</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<h4>Conjunto A</h4>
						<?php
							//$setA = new set([]);
							//$setA->OtherConstructor($_SESSION['setA']);
							$setA = new set(randomSet($_SESSION['setA']));
							$setA->printSet();
						?>
					</div>
					<div class="col-md-6">
						<h4>Conjunto B</h4>
						<?php
							//$setB = new set([]);
							//$setB->OtherConstructor($_SESSION['setB']);
							$setB = new set(randomSet($_SESSION['setB']));
							$setB->printSet();
						?>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<h4>Unión</h4>
						<?php
							$union = $setA->union($setB);
							$union->printSet();
						?>
					</div>
					<div class="col-md-6">
						<h4>Intersección</h4>
						<?php
							$intersection = $setA->intersection($setB);
							$intersection->printSet();
						?>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<h4>Diferencia A-B</h4>
						<?php
							$difference = $setA->difference($setB);
							$difference->printSet();
						?>
					</div>
					<div class="col-md-6">
						<h4>Diferencia B-A</h4>
						<?php
							$difference = $setB->difference($setA);
							$difference->printSet();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</div>

<?php include("./includes/footer.php") ?>
