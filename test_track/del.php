<?php
    include "db.php";
    $del = "delete from member where idx='{$_POST['idx']}'";
    $stmh = $pdo->prepare($del);
    $stmh->execute();
?>