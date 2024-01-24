- strlen </br>
- strpos </br>
- str_replace </br>
- substr </br>
- trim </br>
- strtoupper </br>
- strtolower </br>
- ucfirst </br>
- sprintf </br>
------------------------------------
<!--</br>-->
<!--strlen </br>-->
<?php
//    $str = 'abcde';
//    echo strlen($str);
//    echo '<br>';
//?>
<!---------------------------------------->
<!--</br>-->
<!--strpos </br>-->
<?php
//    $str = 'abcde';
//    echo strpos($str, 'd');
//    echo '<br>';
//?>
<!---->
<!---------------------------------------->
<!--</br>-->
<!--- str_replace </br>-->
<?php
//    $str = 'abcde';
//    echo str_replace('ab', 'A', $str);
//    echo '<br>';
//    $str = ' abc 123 def ';
//    echo str_replace(' ', '', $str);
//?>
<!--</br>-->
<!---------------------------------------->
<!--</br>-->
<!--- substr </br>-->
<?php
//    $str = 'abcde';
//    echo substr($str, 2);
//    echo '<br>';
//?>
<!---->
<!--</br>-->
<!---------------------------------------->
<!--</br>-->
<!--- trim </br>-->
<?php
//    $str = ' abc 123 def ';
//    echo trim($str);
//    echo '<br>';
//    if (trim($str) == 'abc123def') {
//        echo 'false: abc123def';
//    } else if (trim($str) == 'abc 123 def') {
//        echo 'true: abc 123 def';
//    }
//    echo '<br>';
//?>
<!---->
<!--</br>-->
<!---------------------------------------->
<!--</br>-->
<!--- strtoupper: convert string to uppercase </br>-->
<!--- strtolower: convert string to lowercase </br>-->
<!--- ucfirst: first character of the string to uppercase </br>-->
<!---->
<?php
//    $str = 'aBcDe';
//    echo strtoupper($str);
//    echo '<br>';
//    echo strtolower($str);
//    echo '<br>';
//    echo ucfirst($str);
//    echo '<br>';
//?>

</br>
------------------------------------
</br>
- sprintf </br>
<?php
    $str = 'The username: %s with id: %d has been %s';
    echo sprintf($str, 'userA', 12, 'disabled');
    echo '<br>';
    echo sprintf($str, 'userB', 14, 'activated');
?>