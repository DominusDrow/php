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
						<select name="voter_id" class="form-select" required>
							<option selected>Selecciona tu nombre</option>
							<?php
							$query = "SELECT * FROM voters WHERE voted = 0";
							$result_voters = mysqli_query($conn, $query);

							while($row = mysqli_fetch_assoc($result_voters)) { ?>
								<option value="<?php echo $row['id'] ?>">
									<?php echo $row['name'] ?>
								</option>
							<?php } ?>
						</select>

						<?php if (isset($error)) { ?>
							<span class="help-block"><?php echo $error; ?></span>
						<?php } ?>
					</div>
          <hr>

					<div class="container parent">
						<div class="row">


<?php
$query = "SELECT * FROM parties";
$result_parties = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result_parties)) { ?>
      <div class='col text-center'>
        <input type="radio" name="imgbackground" id="<?php echo "img".$row['id'] ?>" class="d-none imgbgchk" value="<?php echo $row['id'] ?>">
          <label for="<?php echo "img".$row['id'] ?>">
          <img src="<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
          </label>
          <p><?php echo $row['name'] ?></p>
        </div>
<?php
  if($row['id'] % 3 == 0) echo "</div><div class='row'>";
}
?>
						

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

