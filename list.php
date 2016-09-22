<?php
    $search='%'.$_POST['search'].'%'; // 분할검색
    include 'kccdb.php';
    $sql = "select * from member where last_name like :last_name or first_name like :first_name";
    $stmh = $pdo->prepare($sql); // 보안강화 sql injaection 으로부터
    $stmh->bindvalue(':last_name',$search,PDO::PARAM_STR); // 이름검색
    $stmh->bindvalue(':first_name',$search,PDO::PARAM_STR); // 성검색
    $stmh->execute();  // 실행
    $count = $stmh->rowcount(); // 이름값만큼 카운트 세줌
    print $count."건입니다."; // 출력
    //과제 - KCC.php 파일에 있는 로그인폼 만큼 여러가지를 추가하여보기 위에것은 이름만 한거
    ?>
    
   