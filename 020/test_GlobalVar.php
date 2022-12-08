<?php
    $a = 20;
    function myfunc($b) {
        $a = 30;
        global $a, $c; // 需下 global 才看的到全域變數
        return $c = ($b + $a);
    }
    print myfunc(40) + $c;
?>