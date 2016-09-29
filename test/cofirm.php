<?php
   // include("testsession.php");
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <?php
            print "이름:";
            print $_SESSION["name"];
            print " 등급:";
            print $_SESSION["level"];
        ?>
</body>
</html>