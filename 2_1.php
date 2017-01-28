<?php

$plates = 10;
$dishsoap = 1;
while ($plates > 0 && $dishsoap >= 0.5) {
    $plates -= 1;
    $dishsoap -= 0.5;
    echo $dishsoap . "\n";
}
if ($plates == 0 && $dishsoap > 0) {
    echo '¬се тарелки чистые, моющего средства осталось: ' . $dishsoap;
}
if ($plates > 0) {
    echo 'ћоющее средство закончилось, осталось гр€зных тарелок: ' . $plates;
}
if ($plates == 0 && $dishsoap == 0) {
    echo '¬се тарелки чистые, моющее средство закончилось';
}
?>
