- array_merge: Combine arrays </br>
<?php
    $a = [1, 2, 3];
    $b = [4, 5, 6];
    $c = array_merge($a, $b);
    print_r($c);
    echo '<br>';
    $d = ['a', 'b', 'c'];
    $e = ['a', 'e', 'f'];
    $c = array_merge($d, $e); // keep all values from both arrays
    print_r($c);
    echo '<br>';
    print_r(array_unique(array_merge($d, $e))); // keep only unique values but indexes are removed
    echo '<br>';
    print_r(array_values(array_unique($c))); // reindex the array
?>

</br>
-------------------------------
</br>
- array_slice: Extract a slice of the array</br>
<?php
    $a = [1, 2, 3, 4, 5, 6];
    $b = array_slice($a, 2, 2);
    print_r($b);
?>

</br>
-------------------------------
</br>
- array_push: add elements at the end of array </br>
<?php
    $a = ['a', 'b', 'c'];
    array_push($a, 1, 2, 3);
    print_r($a);
    echo '<br>';
    $b = ['key' => 'value'];
    array_push($b, 'a', 'b', 'c');
    print_r($b);

    echo '<br>';
    $b = [2 => 'value2', 'key' => 'value' ];
    array_push($b, 'a', 'b', 'c');
    print_r($b);
?>

</br>
-------------------------------
</br>
- array_pop: remove elements at the end of array </br>
<?php
    $a = ['a', 'b', 'c'];
    array_pop($a);
    print_r($a);
?>

</br>
-------------------------------
</br>
- array_shift: remove elements at the beginning of array </br>
<?php
    $a = ['a', 'b', 'c'];
    array_shift($a);
    print_r($a);
?>

</br>
-------------------------------
</br>
- array_unshift: add elements at the beginning of array </br>
<?php
    $a = ['a', 'b', 'c'];
    array_unshift($a, 'd');
    print_r($a);
    echo '<br>';
    $b = ['key' => 'value', 0 => 'value2', ];
    array_unshift($b, 'd');
    print_r($b);
?>

