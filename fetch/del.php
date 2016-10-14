<?php
    include "20626.php";
    $del = "delete from member where idx='{$_POST['idx']}'";
    $pdo->query($del);
?>
<script>
    location.href="list.php";
</script>