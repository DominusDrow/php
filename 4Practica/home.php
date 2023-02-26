<?php	include ('db.php') ?>

<?php include ('./includes/header.php') ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<?php if(isset($_SESSION['message'])){ ?>
				<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
					<?= $_SESSION['message'] ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php session_unset(); } ?>
			<div class="card card-body">
<?php
if(isset($_SESSION['name'])){
?>

<div class="card">
  <img src="./src/usuario.jpg" class="card-img-top" alt="Foto de perfil">
  <div class="card-body">
    <h5 class="card-title">Nombre del usuario</h5>
    <p class="card-text">Otros datos del usuario</p>
  </div>
</div>


<?php
}else{
?>
  <h3>Inicia sesión</h3>
<?php } ?>

			</div>
		</div>
		<div class="col-md-8">

<?php
$name = $_SESSION['name'];
$query = "SELECT * FROM usuarios WHERE nombre = '$name'";
$result_user = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result_user)){ ?>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
              <h4><?php echo $row['nombre']; ?></h4>
              <p><?php echo $row['image']; ?></p>
            </div>
          </div>
        </div>
      </div>
<?php } ?>

		</div>
	</div>
</div>

<?php include ('./includes/footer.php') ?>

