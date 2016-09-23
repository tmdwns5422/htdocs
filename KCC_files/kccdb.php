<?php
    
    try{
    $pdo= new PDO('mysql:host=localhost;dbname=kcc;charset=utf8','root','');
    //$pdo = new PDO('oracle:host=localhost') //옵션명을 오라클로 바꾸면 오라클을 이용한 db가 됨
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print '접속성공';
    }
    catch(PDOException $Exception){
    die('접속오류:'.$Exception->getMessage());
    }
?>