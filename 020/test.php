<?php
    // 不是強型別，php 未規定一個變數之前放字串 後面只能放字串 可以換

    $userName = "chen";
    // $userName = "Dora Chen";
    $userName = 500;
    $x = 100;
    $y = "x = $x"; // php 裡雙引號包住變數會參用變數值, 單引號裡的字串才是真的字串

    echo $y;
?>