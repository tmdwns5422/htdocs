<?php
    include "db.php";
    $del = "delete from board where idx='{$_GET['idx']}'";
    $delete = $pdo->prepare($del);
    $delete->execute();
    echo "<script>location.href='index.php'</script>";
?>