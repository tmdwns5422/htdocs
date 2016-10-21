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
            echo $_POST["onname"]." 님 환영합니다.<br>"; // $_POST 전역변수,슈퍼전역변수
            echo $_POST["onage"]." 살.<br>";
            echo "성별 :".$_POST["onmw"]."<br>";
            echo "직업 :".$_POST["onjob"]."<br>";
            print nl2br($_POST["honbun"]);
        
            if(isset($_POST["hobby"])){
                $hobby = implode('와',$_POST["hobby"]);
                print "취미는".$hobby."입니다.";
            }else{
                print "취미는 없습니다.";
            }
        ?>
    </body>
</html>
