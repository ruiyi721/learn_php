<?php
    $s = "0123456789";
    //     ^
    // $test = strpos($s, "12"); // 從 $s 裡面找到 '23' 在哪個位置，回傳 idx
    // // echo gettype($test); // 如果找不到會是false
    // // echo $test; // 2
    // if ($test === false) { // =(賦值) ==(比較) ===(型別也要一樣)
    //     echo "not found";
    // } else {
    //     echo "found";
    // }

    function myStrpos($where, $findWhat) {
        $test = strpos($where, $findWhat);
        return ($test === false) ? -1 : $test;
    }

    echo myStrpos($s, '3');

    // $n = 4;
    // $formal = "零壹貳參肆伍";
    // echo substr($formal, $n * 3, 3);

    // $s = "1234567890";
    // $s = "8" . str_replace("8", "", $s);
    // echo $s; // 把8挪到前面去

    // $s = "123abc456abc789";
    // echo str_replace("abc", "-", $s); // 123-456-789

    // $s = "0123456789";
    // //      ^^^^
    // echo substr($s, 2, 4); // 從 idx2 位置取4碼出來

    // $s = "abcdefgh陳芮以"; // 8 + 9
    // $i = strlen($s);
    // echo $i; // 17
?>