<?php
    include "kccdb.php";
    $id = $_POST['id'];
    $sql = "select * from member where id='$id'";
    $result = $pdo->query($sql);
    $data = $result->fetch();
    $rows = count($data);
    //echo $rows;  
    if($rows == 1){
        echo "사용가능한 아이디입니다."; // 1
    }else{
        echo "이미 존재하는 아이디입니다.";  // 56
    }
?>