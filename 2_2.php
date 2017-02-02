<?php
$arr = [1,2,3,8,14,89,45];
	$count = count($arr)-1;
	for ($i=0; $i < $count; $i++,$count--)
	{ 
		$arr[$i] = $arr[$i] ^ $arr[$count];
		$arr[$count] = $arr[$count] ^ $arr[$i];
		$arr[$i] = $arr[$i] ^ $arr[$count];
	}
var_dump($arr);
?>
