<?php
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=board;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }catch(PDOException $Exception){
        die("접속실패".$Exception->getMessage());
    }
?>