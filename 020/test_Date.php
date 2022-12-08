<?php
    
    // 1970-01-01 00:00:00
    $x = getdate();
    print_r($x);
    echo gettype($x), "<br>";

    $x = date('Y-m-d H:i:s', 0); // 本地時間 1970-01-01 08:00:00
    echo $x, "<br>";
    echo gettype($x), "<br>";

    $x = gmdate('Y-m-d H:i:s', 0); // 標準時間 1970-01-01 00:00:00
    echo $x, "<br>";

    $x = strtotime(gmdate('Y-m-d H:i:s', 0)); // 字串轉成時間
    echo $x, "<br>";
    echo gettype($x), "<br>";
    
?>