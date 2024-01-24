<?php

// Cach viet while loop khong dung 'do'
// Chi thuc hien khi thoa man dieu kien trong while
//$a = 0;
//while ($a < 10) {
//    echo $a;
//    echo '</br>';
//    $a++;
//}

// Cach viet while loop dung 'do'
// Thuc hien do 1 truoc khi xet dieu kien trong while
//$a = 10;
//do {
//    echo $a;
//    echo '</br>';
//    $a++;
//} while ($a < 10);


// dung for
//for ($i = 0; $i < 10; $i++) {
//    echo $i;
//    echo '</br>';
//}


// foreach dung cho array
$a = ['a', 'b', 'c'];
foreach($a as $value) {
    echo $value;
    echo '</br>';
}

foreach ($a as $key => $value) {
    echo 'Phan tu index: ' . $key . ' co value: ' . $value;
    echo '</br>';
}


