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

<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registro usuario</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required/>
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="telefono" class="form-control" placeholder="Telefono" required/>
              </div>


              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="text" name="contrasena" class="form-control" required/>
                    <label class="form-label" for="form3Example1w">contrasena</label>
                  </div>

                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1">Registrar</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include ('./includes/footer.php') ?>
