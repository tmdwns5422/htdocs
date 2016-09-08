<?php
    $location = $_POST["location"];
    if(isset($location)){
        print "지역은 ".$location." 입니다.";
    }else{
        print "지역을 골라주십시오.";
    }
?>