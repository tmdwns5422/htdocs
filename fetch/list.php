<?php
    include "20626.php";
    $sql = "select * from member";
    $stmh = $pdo->prepare($sql);
    $stmh->execute(); // $stmh 를 execute(실행)한다는것
    $result = $stmh->fetchAll();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fetch list</title>
    <style>
        *{margin:0;padding:0;}
        table{width: 500px; height: 50px; border:1px solid black; border-spacing: 0;}
        th{width: 500px; height: 50px; border: 1px solid black; background-color:cadetblue;}
        tr{width: 500px; height: 50px; }
        td{width: 100px; height: 50px; border: 1px solid black; text-align: center;}
    </style>
</head>
<body>
   <table>
       <tr>
            <th>번호</th>
            <th>아이디</th>
            <th>비밀번호</th>
            <th>나이</th>
            <th>삭제여부</th>
        </tr>
        <?php
        foreach($result as $row){// $result 안에있는 idx 값만큼 반복하고 그 idx 를 $row에 담는다 $row의 자료형은 배열이다.
            //print_r ($row);
            ?>
            <tr>
              <form action="del.php" method="post">
               <input type="hidden" value="<?=$row['idx']?>" name="idx">
                <td><?=$row['idx']?></td>
                <td><?=$row['id']?></td>
                <td><?=$row['pw']?></td>
                <td><?=$row['age']?></td>
                <td><button>삭제</button></td>
                </form>
            </tr>
        <?php   }
        /*for($i=0;$i<4;$i++){ //$row[$i] - $i에 상수값이 들어가면 그 순서마다 반복출력되게 된다 아직 난 foreach 문에서 할줄은 모른다 반복출력이 하나만 되다보니..
            print_r ("<br>".$row[$i]); // 게다가 for문에서 돌릴때 $row.length 값이 안먹어서 애먹는중
        }*/
       ?>
       </table>
</body>
</html>