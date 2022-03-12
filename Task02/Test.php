<?php
	include '2.php';
	function runTest(){
		// String representation test
		$v1 = new Vector(1, 2, 3);
		echo "Ожидается: (1; 2; 3)"."<br>";
		echo "Получено: " . $v1->toString()."<br>"."<br>";;
		
		$v2 = new Vector(1, 4, -2);
		echo "Ожидается: (1, 4, -2)"."<br>";
		echo "Получено: " . $v2->toString()."<br>"."<br>";;
		
		// Adding test
		$v3 = $v1->add($v2);	
		echo "Получено: " . $v3->toString()."<br>";
		
		$v4=$v1->sub($v2);
		echo "Получено: " . $v4->toString()."<br>";
		
		$v5=$v1->product(5);
		echo "Получено: " . $v5->toString()."<br>";
	}
?>