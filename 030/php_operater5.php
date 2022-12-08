<?php
    $x = 1;
    $y = $x++; // $y = $x; $x++
    echo "x = $x, y = $y"; // 2 1

    echo "<hr>";

    $x = 1;
    $y = ++$x; // $x++; $y = $x
    echo "x = $x, y = $y"; // 2 2
?>