<?php
    $x = "ABC";
    $y = "AB";
    if ($x >= $y)
        echo "$x >= $y";
    else
        echo "$x < $y";

    echo "<hr>";

    $x = "ABC";
    $y = "BA";
    if ($x >= $y)
        echo "$x >= $y";
    else
        echo "$x < $y";

    echo "<hr>";

    $x = "123";
    $y = "12";
    if ($x >= $y)
        echo "$x >= $y";
    else
        echo "$x < $y";

    echo "<hr>";

    $x = "123";
    $y = "21";
    if ($x >= $y)
        echo "$x >= $y";
    else
        echo "$x < $y";

    echo "<hr>";
    // 當兩個字串內容都可以轉成數字時 PHP 會自動幫你當成數字比較
?>