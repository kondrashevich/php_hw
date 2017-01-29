<?php
	
	function daysOnNewYear(){
		return "До конца ".date("Y")." осталось ".(365 - date("z"))."  дней";
	}
	echo daysOnNewYear();
?>
