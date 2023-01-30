<?php
function randomSet($size)
{
	$set = [];

	for ($i=0; $i < $size; $i++){
		$number = rand(1,20);
		if(!in_array($number,$set))
			$set[] = $number;
		else
			$i--;
	}

	return $set;
}
?>
