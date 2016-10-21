<?php
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=kcc;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        echo "연결성공입니데스";
    }catch(PDOException $Exception){
        die("연결실패입니다".$Exception->getMessage());
    }
?>