<?php 
$minute = date('i');
echo $minute%5>2 ? 'Красный свет'."\n" : 'Зелёный свет'."\n";
?>
