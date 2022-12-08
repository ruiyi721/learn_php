<?php
    // && and(可代替) 且
    // || or 或
    $x = 3;
    if ($x >= 10 && foo())
        echo "yes";
    else
        echo "no";

    echo "<hr>";

    $x = 3;
    if ($x >= 10 & foo())
        echo "yes";
    else
        echo "no";

    function foo() {
        echo "foo() is running. <br>";
    }
?>