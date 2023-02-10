<?php include ('db.php') ?>

<?php include("./includes/header.php") ?>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Boleta Electoral</h3>
			</div>
			<div class="card-body">
				<form action="save_vote.php" method="POST">
					<div class="form-group
						<?php if (isset($error)) { echo 'has-error'; } ?>">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre del Votante" required>
						<?php if (isset($error)) { ?>
							<span class="help-block"><?php echo $error; ?></span>
						<?php } ?>
					</div>
          <hr>

					<div class="container parent">
						<div class="row">
							

<div class='col text-center'>
        <input type="radio" name="imgbackground" id="img1" class="d-none imgbgchk" value="PRI">
          <label for="img1">
            <img src="./src/pri.png" alt="Image 1">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
            </label>
          <p>Partido Revolucionario Institucional</p>
        </div>


<div class='col text-center'>
        <input type="radio" name="imgbackground" id="img2" class="d-none imgbgchk" value="MORENA">
          <label for="img2">
            <img src="./src/morena.png" alt="Image 2">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
          </label>
          <p>Movimiento de Regeneración Nacional</p>
        </div>

<div class='col text-center'>
        <input type="radio" name="imgbackground" id="img3" class="d-none imgbgchk" value="PRD">
          <label for="img3">
            <img src="./src/prd.png" alt="Image 3">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
          </label>
          <p>Partido de la Revolución Democrática</p>
        </div>


</div>
<div class="row">


<div class='col text-center'>
        <input type="radio" name="imgbackground" id="img4" class="d-none imgbgchk" value="PAN">
            <label for="img4">
              <img src="./src/pan.png" alt="image 4">
              <div class="tick_container">
                <div class="tick"><i class="fa fa-check"></i></div>
              </div>
            </label>
          <p>Partido Acción Nacional</p>
        </div>

<div class='col text-center'>
        <input type="radio" name="imgbackground" id="img5" class="d-none imgbgchk" value="PT">
            <label for="img5">
              <img src="./src/pt.png" alt="image 5">
              <div class="tick_container">
                <div class="tick"><i class="fa fa-check"></i></div>
              </div>
            </label>
          <p>Partido del Trabajo</p>
        </div>


<div class='col text-center'>
        <input type="radio" name="imgbackground" id="img6" class="d-none imgbgchk" value="NULO">
            <label for="img6">
              <img src="./src/nulo.png" alt="image 6">
              <div class="tick_container">
                <div class="tick"><i class="fa fa-check"></i></div>
              </div>
            </label>
          <p>Anular voto</p>
        </div>


              </div>
						</div>
					</div>
          <div class="row w-100 align-items-center">
						<div class="col text-center">
							<button class="btn btn-success btn-block" name="save_vote"> Enviar voto </button>
						</div>
					</div>
				</form>
			</div>
  <?php if(isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php session_unset(); } ?>

		</div>
	</div>
</div>

<?php include("./includes/footer.php"); ?>

