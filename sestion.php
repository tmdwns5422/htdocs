<?php
        session_start(); // 슈퍼전역변수 session 을 사용하겟다
        $count = 1; // 초기값
        if(isset($_SESSION["count"])){
            $count = $_SESSION ["count"];
            $count++;
        }else{
            
        }
    $_SESSION["count"] = $count;
    ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

</head>

<body>
    <?php
        if($count == 1){
    ?>
        첫 방문입니다.<br>
    <?php
        }else{
    ?>
        당신의 방문은 <?=$count?>번째 입니다.
    <?php
        }
    ?>
</body>

</html>