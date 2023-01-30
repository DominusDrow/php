<?php
class Set {
	private $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function union($set)
	{
		$union = [];

		foreach ($this->data as $value) 
			$union[] = $value;

		foreach ($set->getData() as $value) 
			$union[] = $value;

		$union = array_unique($union);
		
		return new Set($union);
	}

	public function intersection($set)
	{
		$intersection = [];

		foreach ($this->data as $value) 
			if(in_array($value,$set->getData()))
				$intersection[] = $value;

		return new Set($intersection);
	}

	public function difference($set)
	{
		$difference = [];

		foreach ($this->data as $value) 
			if(!in_array($value,$set->getData()))
				$difference[] = $value;

		return new Set($difference);
	}

	public function complement($set)
	{
		$complement = [];

		for ($i=1; $i <= 20; $i++) 
			if(!in_array($i,$set->getData()))
				$complement[] = $i;

		return new Set($complement);
	}
	
	public function printSet()
	{
		echo "<ul>";
		foreach ($this->data as $value) {
			echo "<li>$value</li>";
		}
		echo "</ul>";
	}


}
?>
