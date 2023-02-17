
<?php

function randomMatrix($n, $m) {
  $matriz = array();

  for ($i = 0; $i < $n; $i++) {
    $fila = array();
    for ($j = 0; $j < $m; $j++) {
      $fila[] = rand(0, 10); // Genera un número aleatorio entre 0 y 100
    }
    $matriz[] = $fila;
  }

  return $matriz;
}

?>
