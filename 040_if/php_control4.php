<?php
    header("content-type: text/html; charset=utf-8");
    $num = 3;
    switch ($num) {
        case 0:
            echo "零";
            break;
        case 1:
            echo "壹";
            break;
        case 2:
            echo "貳";
            break;
        case 3:
            echo "參";
            break;
        case 4:
            echo "肆";
            break;
        default:
            echo "unknown";
    } // end of switch
?>