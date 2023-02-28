
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

    $query = "UPDATE mascotas SET estado = 0 WHERE nombre = '$nombre_mascota'";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }

    $mascotas = $mascotas - 1;
    $query = "UPDATE usuarios SET mascota = $mascotas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }
    
    $query_mascota = "SELECT * FROM mascotas WHERE nombre = '$nombre_mascota'";
    $result_mascota = mysqli_query($conn, $query_mascota);
    $row_mascota = mysqli_fetch_array($result_mascota);
    $id_mascota = $row_mascota['id'];
   
    $query = "DELETE FROM adopciones WHERE id_mascota = $id_mascota AND id_usuario = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }

    $_SESSION['message'] = 'Mascota abandonada';
    $_SESSION['message_type'] = 'danger';
    header("Location: ./home.php");
  }

?>

