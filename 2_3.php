<?php 

	$arr = array(1, 2, 3, 8, 14, 89, 45);
	echo $arr;
	for ( $i = 0; $i < 7; $i++ ) {
		echo $arr[$i].' ';
	}
	for	( $i=0; $i < 6; $i++ ) {
		for	( $j=0; $j < 6 - $i; $j++ ) 
		{
			if ($arr[$j] > $arr[$j + 1]) 
			{ 
				$k = $arr[$j];
				$arr[$j] = $arr[$j + 1];
				$arr[$j + 1] = $k;
			}	
		}
	}
	for ( $i = 0; $i < 7; $i++ ) {
		echo $arr[$i].' ';
	}
?>
