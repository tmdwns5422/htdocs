<?php
    include 'kccdb.php';
    $sql = "select * from member order by idx desc";
    $stmh = $pdo -> prepare($sql);
    $stmh->execute();
    $result = $stmh->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table{width: 2500px; border: 1px solid black; border-spacing:0;}
        tr{width: 2500px; height:30px;  text-align: center; border: 1px solid black;}
        th{width: 300px; height:30px; text-align: center; border: 1px solid black; background-color:cadetblue;}
        td{width: 300px; height: 30px; text-align: center; border: 1px solid black;}
    </style>
</head>
<body>
   <table>
       <tr>
           <th>번호</th>
           <th>한글이름</th>
           <th>영어이름</th>
           <th>생년월일</th>
           <th>아이디</th>
           <th>비밀번호</th>
           <th>집전화번호</th>
           <th>휴대폰번호</th>
           <th>수신여부</th>
           <th>이메일</th>
           <th>우편번호</th>
           <th>자택주소</th>
           <th>세부주소</th>
           <th>dm발송처</th>
           <th>직장명</th>
           <th>직종</th>
           <th>직위</th>
           <th>직장 우편번호</th>
           <th>직장주소</th>
           <th>직장세부주소</th>
           <th>직장전화번호</th>
           <th>팩스번호</th>
           <th>결혼여부</th>
           <th>결혼기념일</th>
       </tr>
    <?php
        foreach($result as $row){    
    ?>    
        <tr>
            <td><?=$row['idx']?></td>
            <td><?=$row['kName']?></td>
            <td><?=$row['eName']?></td>
            <td><?=$row['bYear'].$row['bMonth'].$row['bDay']?></td>
            <td><?=$row['id']?></td>
            <td><?=$row['pw']?></td>
            <td><?=$row['fN']?></td>
            <td><?=$row['fPn']?></td>
            <td><?=$row['sns']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['fPostN']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['dm']?></td>
            <td><?=$row['emp']?></td>
            <td><?=$row['op']?></td>
            <td><?=$row['sp']?></td>
            <td><?=$row['efPostN']?></td>
            <td><?=$row['eAddress']?></td>
            <td><?=$row['eIaddress']?></td>
            <td><?=$row['efN']?></td>
            <td><?=$row['ffN']?></td>
            <td><?=$row['wedding']?></td>
            <td><?=$row['wYear'].$row['wMonth'].$row['wDay']?></td>
        </tr>
        <?php
        } 
        ?>
    </table>
</body>
</html>