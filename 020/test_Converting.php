<?php
    $a = 12;
    $b = "34";

    $result = $a + $b; // 46
    $result = $a . $b; // 1234 串接
    $result = $a + intval($b); // 46 intval()轉數字

    echo $result;
?>