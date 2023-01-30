<?php session_start(); ?>

<?php include("./includes/header.php") ?>

<br>
<br>
<br>
<br>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Ingrese conjuntos</h3>
			</div>
			<div class="card-body">
				<form action="calcular.php" method="POST">
					<div class="form-group">
						<input type="number" name="setA" class="form-control" placeholder="Número de datos del conjunto A" required>
            <br>
						<input type="number" name="setB" class="form-control" placeholder="Número de datos del conjunto B" required>
					</div>
          <hr>

          <div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="save_sets"> Crear Conjuntos </button>
						</div>
					</div>
				</form>
			</div>
		</div>

  <?php if(isset($_SESSION['message'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php unset($_SESSION['message']); } ?>

	</div>
</div>

<?php include("./includes/footer.php"); ?>

