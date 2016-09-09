<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dbtestphp</title>
</head>
<body>
    <?php
    //DB연결방법
    
    
    //mysql 함수사용 [ 실제로 사용하진않음 ]
    /*$con = mysql_connect('localhost','root','') or die ("접속못해");
    print "접속성공!";
    mysql_select_db('php');
    mysql_close($con);
    */
    
    //mysqli 함수사용 [ 이것도 실제로 사용은 안함 ]
    /*
    $mysqli = new mysqli('localhost','root','','php');
    if($mysqliㅡ>connect_error){
        die('접속못해');
    }
        print ('접속성공');
        $mysqliㅡ>close();
    //
    */
    
    
    
    
    //pdo로 만들기 [ 이거 사용하면 다른 db로 바꿀떄 코드고칠필요 없음 옵션만 바까주면 됨 ]
    $pdo= new PDO('mysql:host=localhost;dbname=php;charset=utf-8','root','');
    //$pdo = new PDO('oracle:host=localhost') //옵션명을 오라클로 바꾸면 오라클을 이용한 db가 됨
    print '접속성공';
    $pdo=null;
    
    
    
    ?>
</body>
</html>