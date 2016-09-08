<?php
    $location = $_POST["location"];
    
    if($location!=""){
        print "당신이 태어난 해는 [".$location."] 년 입니다.";
    }else{
        print "생년을 골라주십시오.";
    }
?>