<?php

function dateReturn($t) {
		
		$months = array(
		'01' => 'января',
		'02' => 'февраля',
		'03' => 'марта',
		'04' => 'апреля',
		'05' => 'мая',
		'06' => 'июня',
		'07' => 'июля',
		'08' => 'августа',
		'09' => 'сентября',
		'10' => 'октября',
		'11' => 'ноября',
		'12' => 'декабря' 
		);
		
		$month = date('m', strtotime($t));
		$d1 = date('d', strtotime($t));
		$d2 = date('d', strtotime(date('r')));
		
		if ($d1 == $d2) return "Сегодня в ".(date('H:i', strtotime($t)));
		
		if ($d2 - $d1 == 1) return "Вчера в ".(date('H:i', strtotime($t)));
		
		if ($d2 + $d1 == 1) return "Завтра в ".(date('H:i', strtotime($t)));
		
		else return $d1." ".$months[$month]." ".date('Y', strtotime($t))."  года в ".(date('H:i', strtotime($t)));
	}
	echo dateReturn('12.03.2016 19:50');

?>