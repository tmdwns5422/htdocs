<?php
    include 'kccdb.php';
    $sql = "select * from member order by idx desc";
    $result = $pdo -> query($sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .item{margin-left: 15px; background-color: #e2e2e2; color:#999; width: 300px; display: inline-block;}
        .item:nth-child(1){margin-left: 0; }
        .under{width: 300px; height:2px; background-color: #000; display: block;}
    </style>
</head>
<body>
    <?php
        while($row = $result -> fetch()){    
    ?>    
        <div class="item">
            <?php 
            echo "한글이름: ".$row['kName'];
            echo "<br\n>";
            echo "<span class='under'></span>";
            echo "영문이름: ".$row['eName'];
            echo "<br\n>";
            echo "<span class='under'></span>";
            echo "생년월일: ".$row['bYear']." 년 ";
            echo " ".$row['bMonth']." 달 ";
            echo " ".$row['bDay']." 일 ";
            echo "<br>"."<span class='under'></span>";
            echo "아이디: ".$row['id'];
            echo "<br>"."<span class='under'></span>"; 
            echo "비밀번호: ".$row['pw'];
            echo "<br>"."<span class='under'></span>";  
            echo "집전화번호: ".$row['fN'];
            echo "<br>"."<span class='under'></span>";  
            echo "휴대폰번호: ".$row['fPn'];
            echo "<br>"."<span class='under'></span>";
            echo "sns 수신여부: ".$row['sns'];
            echo "<br>"."<span class='under'></span>";  
            echo "이메일: ".$row['email'];
            echo "<br>"."<span class='under'></span>";
            echo "우편번호: ".$row['fPostN'];
            echo "<br>"."<span class='under'></span>";
            echo "자택주소: ".$row['address'];
            echo "<br>"."<span class='under'></span>";
            echo "세부주소: ".$row['Iaddress'];
            echo "<br>"."<span class='under'></span>";
            echo "DM발송처 여부: ".$row['dm'];
            echo "<br>"."<span class='under'></span>";
            echo "직장명: ".$row['emp'];
            echo "<br>"."<span class='under'></span>";
            echo "직종: ".$row['op'];
            echo "<br>"."<span class='under'></span>";
            echo "직위: ".$row['sp'];
            echo "<br>"."<span class='under'></span>";
            echo "직장 우편번호: ".$row['efPostN'];
            echo "<br>"."<span class='under'></span>";  
            echo "직장주소: ".$row['eAddress'];
            echo "<br>"."<span class='under'></span>";
            echo "직장세부주소: ".$row['eIaddress'];
            echo "<br>"."<span class='under'></span>";
            echo "직장전화번호: ".$row['efN'];
            echo "<br>"."<span class='under'></span>";
            echo "팩스번호: ".$row['ffN'];
            echo "<br>"."<span class='under'></span>";
            echo "결혼여부: ".$row['wedding'];
            echo "<br>";
            echo "<span class='under'></span>";
            echo "결혼기념일: ".$row['wYear']." 년 ";
            echo " ".$row['wMonth']." 달 ";
            echo " ".$row['wDay']." 일 ";
            echo "<span class='under'></span>";
            ?>
            </div>
    <?php } ?>
</body>
</html>