<?php
class Circulo {
	private $px;
	private $py;
	private $radio;

	public function __construct($x,$y,$r){
		$this->px = $x;
		$this->py = $y;
		$this->radio = $r;
	}

	public function muetra ($cad){
		echo "<br> $cad <br>";
		echo "<br> px = $this->px <br>";
		echo "<br> py = $this->py <br>";
		echo "<br> radio = $this->radio <br>";
	}

	public function area (){
		return $this->radio * $this->radio * pi();
	}

	public function perimetro (){
		return 2 * pi() * $this->radio;
	}

	public function suma($circulo1,$circulo2){
		$this->px = $circulo1->px + $circulo2->px;
 		$this->py = $circulo1->py + $circulo2->py;
		$this->radio = $circulo1->radio + $circulo2->radio;
	}


}
?>
