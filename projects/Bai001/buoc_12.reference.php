<?php

$a = '1';
$b = &$a;
$c = $a;
echo $b;
echo '</br>';
echo $c;
echo '</br>';
echo '-------------------------</br>';

$a .= '2'; // $a = '12';
echo $b;
echo '</br>';
echo $c;

