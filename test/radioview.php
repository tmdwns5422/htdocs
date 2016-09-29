<?php
    $gender = $_POST["gender"];
    if(isset($gender)){
        print "당신의 성별은".$gender."입니다.";
    }else{
        print "성별을 입력해주십시오.";
    }
?>