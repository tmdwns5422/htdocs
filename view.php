<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $_POST["onname"]."님 환영합니다.<br>"; // $_POST 전역변수,슈퍼전역변수
            echo $_POST["onage"]."살 이십니다.<br>";
            echo "당신의 성별은 ".$_POST["onmw"]." 이십니다.<br>";
            echo "그리고 직업은 ".$_POST["onjob"]." 이십니다.<br>";
            print "본문:".nl2br($_POST["honbun"])."입니다.";
            if(isset($_POST["hobby"])){
                $hobby=implode('와',$_POST["hobby"]);
                print "저의 취미는".$_POST["hobby"]."입니다.";
            }else{
                print "저의 취미는 없습니다.";
            }
        ?>
    </body>
</html>
