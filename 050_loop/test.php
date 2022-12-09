<?php
    $i = 1;
    // if 敘述的重複版
    while ($i <= 9) {
        if($i == 4) {
            $i++;
            continue;
        }
        echo $i, "<br>";
        $i++;
    }

    for($i = 1; $i <= 9; $i++) {
        if($i == 4) {
            continue; // 直接跳到迴圈結尾處
        }
        echo $i, "<br>";
    }// ...然後再 $i++
?>