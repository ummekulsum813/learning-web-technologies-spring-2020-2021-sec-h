<?php
	$a = 0;
	$search = "UMME";
	$arr = [1, 5, 2, 5, 1, 5, 4, 3, "UMME", "KULSUM"];
	foreach ($arr as $value) {
		if ($value == $search) {
			$a = 1;
		}
	}
	if ($a == 1) {
			echo "Here it is :" . $search;
		}
		else{
			echo "failed to found";
		}
?>