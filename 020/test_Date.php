<?php
    
    // 1970-01-01 00:00:00
    $x = getdate();
    echo gettype($x), "<br>";

    $x = date('Y-m-d H:i:s');
    echo $x, "<br>";
    echo gettype($x), "<br>";

    $x = gmdate('Y-m-d H:i:s');
    echo $x, "<br>";

    $x = strtotime(gmdate('Y-m-d H:i:s'));
    echo $x, "<br>";
    echo gettype($x), "<br>";
    
?>