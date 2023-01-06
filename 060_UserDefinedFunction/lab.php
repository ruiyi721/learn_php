<?php

// function showStar($count, $what = "*") {
//     $compare = $count > 0 && $count <=21;
//     if($compare) {
//         $result = "";
//         for($i = 1; $i <= $count; $i++) {
//             $result .= $what;
//         }
//         echo $result;
//     } else {
//         echo "count > 0 and <= 21 plz.";
//     }
// }

function check($count, $what) {
    $result = "";
    if($count <= 0) {
        $result .=  "count > 0 please";
    }
    if($count > 21) {
        $result .= "count <= 21 please";
    }
    if($count == 4) {
        $result .= "count =/= 4";
    }
    return $result;
}

function showStar($count, $what = "*") {
    $test = check($count, $what);
    if($test == "") {
        $result = "";
        for($i = 1; $i <= $count; $i++) {
            $result .= $what;
        }
        echo $result;
    }
    else {
        echo $test;
    }
}

$howMany = 20;
showStar($howMany); // 參數可以多不能少

?>