<?php
		if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];
			$num3 = $_GET['num3'];
			
			if($num1 > $num2 && $num1 > $num3) {
				//num1
				if ($num2 > $num3) {
					echo "<h1>$num1 $num2 $num3</h1>";
				} else {
					echo "<h1>$num1 $num3 $num2</h1>";
				}
			} else if ($num2 > $num1 && $num2 > $num3) {
				//num2
				if ($num1 > $num3) {
					echo "<h1>$num2 $num1 $num3</h1>";
				} else{
					echo "<h1>$num2 $num3 $num1</h1>";
				}
			} else {
				//num3
				if ($num1 > $num2) {
					echo "<h1>$num3 $num1 $num2</h1>";
				} else {
					echo "<h1>$num3 $num2 $num1</h1>";
				}
			}
		}

	?>