<?php
    $base = 100;
    function add($x, $y) {
        // php 裡預設區塊裡是看不到全域變數的，如需使用請加 global
        global $base;
        echo "base = $base", "<br>";
        $result = $x + $y + $base;
        return $result;
    }

    $answer = add(2, 5);
    echo $answer;
?>