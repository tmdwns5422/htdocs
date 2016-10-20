<?php
    include "db.php";
    $sql = "select * from member order by idx desc";
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    $result = $stmh->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
    <table>
        <form action="del.php">
            <tr>
                <th>번호</th>
                <th>이름</th>
                <th>아이디</th>
                <th>패스워드</th>
            </tr>
        <?php
          foreach($result as $row){  
        ?>
            <tr>
                <td><?=$row['idx']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['id']?></td>
                <td><?=$row['pw']?></td>
            </tr>
        <?php
          }  
        ?>
        </form>
    </table>
</body>
</html>