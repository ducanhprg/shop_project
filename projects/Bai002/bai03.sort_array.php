
Sorts
</br>
-------------------------------
</br>
- sort: sort an array by its value</br>
<?php
    $a = ['a', 'c', 'b'];
    sort($a);
    print_r($a);
    echo '<br>';
    $b = [1, 3, 2];
    sort($b);
    print_r($b);
?>

</br>
-------------------------------
</br>
- rsort: sort an array by its value in reverse order</br>
<?php
    $a = ['a', 'c', 'b'];
    rsort($a);
    print_r($a);
    echo '<br>';
?>

</br>
-------------------------------
</br>
- ksort: sort an array by its key </br>
<?php
    $a = [
        'key1' => '1',
        'key3' => '2',
        'key2' => '3',
    ];
    ksort($a);
    print_r($a);
    echo '<br>';
?>

</br>
-------------------------------
</br>
- krsort: sort an array by its key in reverse order </br>

</br>
-------------------------------
</br>
- asort: sort array by values but maintain index association</br>
<?php
    $a = [
        '1' => '3',
        '2' => '2',
        '4' => '1',
    ];
    asort($a);
    print_r($a);
echo '<br>';
    $lista = $listb = [
        'Mr. Beast' => 12312,
        'Mr. Nice Guy' => 123,
        'Ms. Thug' => 1212312,
    ];
    sort($lista);
    print_r($lista);
    echo '<br>';
    asort($listb);
    print_r($listb);
    echo '<br>';
    print_r(count($lista));
?>
