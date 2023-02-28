
<?php
include ('./db.php');

if(isset($_POST['adoptar'])) {
  $nombre_mascota = $_POST['nombre_mascota'];
  

  $nombre = $_SESSION['name'];
  $query = "SELECT id, mascota FROM usuarios WHERE nombre = '$nombre'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $id = $row['id'];
  $mascotas = $row['mascota'];

  if($mascotas >= 2) {
    $_SESSION['message'] = 'No puedes adoptar más de 2 mascotas';
    $_SESSION['message_type'] = 'danger';
    header("Location: ./home.php");

  } else {
    $query = "UPDATE mascotas SET estado = 1 WHERE nombre = '$nombre_mascota'";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }

    $mascotas = $mascotas + 1;
    $query = "UPDATE usuarios SET mascota = $mascotas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    
    $query_mascota = "SELECT * FROM mascotas WHERE nombre = '$nombre_mascota'";
    $result_mascota = mysqli_query($conn, $query_mascota);
    $row_mascota = mysqli_fetch_array($result_mascota);
    $id_mascota = $row_mascota['id'];
   
    $query = "INSERT INTO adopciones(id_mascota, id_usuario) VALUES ($id_mascota, $id)";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }

    $_SESSION['message'] = 'Mascota adoptada';
    $_SESSION['message_type'] = 'success';
    header("Location: ./home.php");
  }
}

?>

