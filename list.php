<?php
    $search='%'.$_POST['search'].'%';
    include 'kccdb.php';
    $sql = "select * from member where last_name like :last_name or first_name like :first_name";
    $stmh = $pdo->prepare($sql); // 보안강화 sql injaection 으로부터
    $stmh->bindvalue(':last_name',$search,PDO::PARAM_STR);
    $stmh->bindvalue(':first_name',$search,PDO::PARAM_STR);
    $stmh->execute();
    $count = $stmh->rowcount();
    print $count."건입니다.";
    ?>