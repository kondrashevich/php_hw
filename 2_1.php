<?php

$plates = 10;
$dishsoap = 1;
while ($plates > 0 && $dishsoap >= 0.5) {
    $plates -= 1;
    $dishsoap -= 0.5;
    echo $dishsoap . "\n";
}
if ($plates == 0 && $dishsoap > 0) {
    echo '��� ������� ������, ������� �������� ��������: ' . $dishsoap;
}
if ($plates > 0) {
    echo '������ �������� �����������, �������� ������� �������: ' . $plates;
}
if ($plates == 0 && $dishsoap == 0) {
    echo '��� ������� ������, ������ �������� �����������';
}
?>
