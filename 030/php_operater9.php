<?php
    // $x = 100;
    // // $y = $x;
    // $y = &$x; // address of $x
    // $x = 200;

    // echo "$y </br>";

    $x = 100;
    $y = &$x;
    $y = 200;
    echo "x = $x </br>";

    unset($x); // 清除記憶體
    echo "y = $y </br>"; // 分身升級為本尊
?>