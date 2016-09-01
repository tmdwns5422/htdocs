<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test.php/index.php가 아닐경우 경로 설정이 달라짐</title>
</head>
<body>
<ul>
    <li>1번</li>
    <li>2번</li>
    <?php
        echo "<p>asd</p>";
        print "<p>내 옆에는 장애인이 있을지도 모릅니다!</p>";
    ?>
    <li>3번째 예제<br>
        <?php
            print PHP_VERSION;
            // 현재 PHP 버전을 나타냅니다.
            print PHP_OS;
            // 현재 OS 상태를 나타냅니다.
            print __FILE__;
            // PHP 현재 경로를 나타냅니다.
        
        
            define("Hello","안녕하세요");
            print Hello;
            // define 에서 정의해준 Hello 를 출력하면 두번째 "안녕하세요"가 출력됨.
            define("10","하이");
            print 10;
            // 하지만 상수는 안됨. 그대로 10 출력
            
        ?>
    </li>
    <li>4번</li>
</ul>

    <header>a</header>
    <section>b</section>
    <footer>c</footer>
</body>
</html>