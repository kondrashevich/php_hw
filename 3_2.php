<?php

$word = 'REDIVIDER';
function Palindrom ($text1)
{
    $text2 = strrev($text1);
    if ($text1 == $text2)
    {
        return true;
    }
    else
    {
        return false;
    }
}
echo Palindrom($word);

?>