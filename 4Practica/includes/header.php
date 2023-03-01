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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="home.php">
			Adopciones
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<?php session_start();
					if($_SESSION['name'] == "admin"){ ?>
				<li class="nav-item">
					<a class="nav-link " href="usuarios.php">Usuarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="mascotas.php">Mascotas</a>
				</li>
				<?php }else{ ?>
				<li class="nav-item">
					<a class="nav-link " href="home.php">Perfil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="mascotas.php">Mascotas</a>
				</li>
				<?php }?>
			</ul>
		</div>

		<form class="form-inline my-2 my-lg-0">
			<a href="index.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Salir</a>
    </form>

	</div>
</nav>


