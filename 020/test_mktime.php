<?php
    // phpinfo(); 用這個找到設定檔在哪
    // php.ini
    // date.timezone = Asia/Taipei
    $d = mktime(13, 30, 0, 9, 10, 2012);
    // 得出來的數字為距離 1970-01-01 00:00:00 有多少秒
    echo $d;
    echo "<br>";

    $s = date("Y-m-d H:i:s");
    echo $s, "<br>";
    echo gettype($s), "<br>"; // type 為 string
    
    $s = gmdate("Y-m-d H:i:s");
    echo $s, "<br>";
?>