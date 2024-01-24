<?php

// PHP Variables
// null, empty, isset

//$a = null;
//$b = 123;
//
//echo is_null($a);
//echo "<br>";
//echo '-----';
//echo "<br>";
//echo is_null($b);
//echo "<br>";
//echo '-----';
//echo "<br>";
//
//
//$c = 0;
//
//$c = '';
//
//$c = [];
//
//$c = null;
//
//$c = false;
//
////
////function getUserstatus()
////{
////    // if found status in database
////    return $status; // $status co the co the co gia tri = 0
////
////    // if not found status in database
////    return '';
////}
////
////$status = getUserstatus();
////if ($status == 0) {
////    // xu ly tiep theo
////}
//
//$c = false;
//
//if (empty($c)) {
//    echo 'empty $c';
//    echo "<br>";
//} else {
//    echo 'not empty';
//    echo "<br>";
//}
//
//if (isset($c)) {
//    echo 'isset';
//    echo "<br>";
//} else {
//    echo 'not isset';
//    echo "<br>";
//}
//
//if (is_null($c)) {
//    echo 'null';
//    echo "<br>";
//} else {
//    echo 'not null';
//    echo "<br>";
//}
//
////----
//
//if (isset($d)) {
//    echo 'isset';
//    echo "<br>";
//} else {
//    echo 'not isset $d';
//    echo "<br>";
//}
//
//$arraySample = [];
//if (is_array($arraySample)) {
//    echo 'is array';
//    echo "<br>";
//}


//$c = new stdClass();
//echo gettype($c);

$d = [
    'value1',
    'value2'
];
print_r($d);
echo '<br>';

unset($d[0]);
print_r($d);
echo '<br>';

$o = new stdClass();
$o->value1 = 'value1';
$o->value2 = 'value2';
print_r($o);
echo '<br>';
unset($o->value1);
print_r($o);
echo '<br>';

