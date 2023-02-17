<?php
class Matrix {
  private $matrix;

  public function __construct($matrix) {
    $this->matrix = $matrix;
  }

  public function add($other) {
    if (!($other instanceof Matrix)) {
      throw new InvalidArgumentException("El argumento debe ser una matrix.");
    }

    if ($this->getDimensions() !== $other->getDimensions()) {
      echo"NO SE PUEDE HACER LA SUMA:no tienen las mismas dineciones <br>";
      return;
    }

    $result = array();
    for ($i = 0; $i < count($this->matrix); $i++) {
      $row = array();
      for ($j = 0; $j < count($this->matrix[$i]); $j++) {
        $row[] = $this->matrix[$i][$j] + $other->getValue($i, $j);
      }
      $result[] = $row;
    }
    return new Matrix($result);
  }

  public function subtract($other) {
    if (!($other instanceof Matrix)) {
      throw new InvalidArgumentException("El argumento debe ser una matrix.");
    }

    if ($this->getDimensions() !== $other->getDimensions()) {
      echo"NO SE PUEDE HACER LA RESTA:no tienen las mismas dineciones <br>";
      return;
    }

    $result = array();
    for ($i = 0; $i < count($this->matrix); $i++) {
      $row = array();
      for ($j = 0; $j < count($this->matrix[$i]); $j++) {
        $row[] = $this->matrix[$i][$j] - $other->getValue($i, $j);
      }
      $result[] = $row;
    }
    return new Matrix($result);
  }

  public function multiply($other) {
    if (!($other instanceof Matrix)) {
      throw new InvalidArgumentException("El argumento debe ser una matrix.");
    }

    if ($this->getNumColumns() !== $other->getNumRows()) {
      echo "NO SE PUEDE HACER LA MULTIPLICACIÓN: <br>";
      return;
    }

    $result = array();
    for ($i = 0; $i < $this->getNumRows(); $i++) {
      $row = array();
      for ($j = 0; $j < $other->getNumColumns(); $j++) {
        $sum = 0;
        for ($k = 0; $k < $this->getNumColumns(); $k++) {
          $sum += $this->getValue($i, $k) * $other->getValue($k, $j);
        }
        $row[] = $sum;
      }
      $result[] = $row;
    }
    return new Matrix($result);
  }

  public function getNumRows() {
    return count($this->matrix);
  }

  public function getNumColumns() {
    return count($this->matrix[0]);
  }

  public function getDimensions() {
    return array($this->getNumRows(), $this->getNumColumns());
  }

  public function getValue($row, $col) {
    return $this->matrix[$row][$col];
  }


public function printHTML() {
    $output = '<table border="1">';
    foreach ($this->matrix as $row) {
        $output .= "<tr>";
        foreach ($row as $value) {
            $output .= "<td> " . $value . " |</td>";
        }
        $output .= "</tr>";
    }
    $output .= "</table>";
    echo $output;
}




  public function __toString() {
    $output = "";
    for ($i = 0; $i < count($this->matrix); $i++) {
      for ($j = 0; $j < count($this->matrix[$i]); $j++) {
        $output .= $this->matrix[$i][$j] . " ";
      }
      $output .= "\n";
    }
  }
}
?>

