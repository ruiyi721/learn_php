<?php
    $x = 1 + "10";    // 11
    $x = "11" + 1;    // 12
    $x = 1 + "x10";   // 1
    $x = 1 + "10x";   // 11 盡量轉 碰到不能轉就停 轉不成功就當0
    $x = 1 + "11.5x"; // 12.5
    $x = 1 + "x11.5"; // 1

    echo $x;
?>