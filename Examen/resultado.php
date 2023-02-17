<?php include("./includes/header.php") ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Operaciones de matrices</h1>

<?php
include("./randomM.php");
include("./matriz.php");

if (isset($_POST['op'])) {
  $filaA = $_POST['filaA'];
  $columnaA = $_POST['columnaA'];
  $filaB = $_POST['filaB'];
  $columnaB = $_POST['columnaB'];

$matrixObj1 = new Matrix(randomMatrix($filaA,$columnaA));
$matrixObj2 = new Matrix(randomMatrix($filaB,$columnaB));


echo "<h4 class='text-center'>Matrices generadas</h4>";
$matrixObj1->printHTML();
echo "<br>";
$matrixObj2->printHTML();

  $operaciones = $_POST['op'];

  foreach ($operaciones as $op) {
    if($op == "suma"){
      echo "<h4 class='text-center'>Suma</h4>";
      $matrizSuma = $matrixObj1->add($matrixObj2);
      $matrizSuma->printHTML();
    }
    if($op == "resta"){
      echo "<h4 class='text-center'>Resta</h4>";
      $matrizResta = $matrixObj1->subtract($matrixObj2);
      $matrizResta->printHTML();
    }
    if($op == "multi"){
      echo "<h4 class='text-center'>MUltiplicación</h4>";
      $matrixMulti = $matrixObj1->multiply($matrixObj2);
      $matrixMulti->printHTML();
    }

  }

}

echo "<br>";
?>


        </div>
    </div>


<?php include("./includes/footer.php") ?>
