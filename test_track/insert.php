<?php
    include "db.php";
    $sql = "insert into member set idx='{$_POST['idx']}',name='{$_POST['name']}',id='{$_POST['id']}',pw='{$_POST['pw']}'";
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    echo "<script>location.href='list.php';</script>";
?>