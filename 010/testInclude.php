<?php
    // include 就是把一段程式碼複製貼上的意思
    include("testDefine.php");
    include_once("testDefine.php"); // 只會引用一次，會檢查引用對象是否已經參用過
    // require 是比較強制的 如有錯誤整個程式運行會停止
    require("testDefine.php");
    require_once("testDefine.php");
    // echo PI;
?>