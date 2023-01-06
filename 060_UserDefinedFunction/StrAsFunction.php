<?php
    function test1($i) {
        return $i + 1;
    }

    function test100($i) {
        return $i + 100;
    }

    $p = "test100"; // 有點像轉接器 乘載一個 function 的名字
    echo $p(2);
?>