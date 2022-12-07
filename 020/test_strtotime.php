<?php
    $d = strtotime("1970-01-01 00:00:00"); // 設定檔的 view

    echo $d;
    echo "<br>";
    echo gmdate("Y-m-d H:i:s", $d);
?>