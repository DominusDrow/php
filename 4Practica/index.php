<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adopciones</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            
            <form action="index.php" method="POST">

            <h3 class="mb-5">Inicio de seción</h3>

            <div class="form-outline mb-4">
              <input type="text" name="name" class="form-control form-control-lg" required />
              <label class="form-label" for="typeEmailX-2">Nombre</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="pass" class="form-control form-control-lg" required />
              <label class="form-label" for="typePasswordX-2">Contraseña</label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" name="submit">Ingresar</button>
						
            <div class="text-center mt-3 small">
              <p>¿No tienes cuenta? <a href="register.php">Register</a></p>
            </div>
            <hr class="my-4">
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  

<?php
include ('db.php');
global $conn;

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $pass = $_POST['pass'];
  
  $query = "SELECT * FROM usuarios WHERE nombre = '$name' AND contrasena = '$pass'";
  $result = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($result) == 1){
    $_SESSION['name'] = $name;
    header('Location: home.php');
  }else{
  ?>
  <div class="alert alert-danger position-absolute top-0 end-0" role="alert">
    Datos incorrectos o no existe el usuario
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  }
}
?>

<?php include ('./includes/footer.php') ?>




