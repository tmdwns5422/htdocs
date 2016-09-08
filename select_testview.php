<?php
    $location = $_POST["location"];
    
    for(sum=1917;sum<2017;sum++){
        $year = "<option value=".$sum.">".$sum."</option>"
        print $year;
    }
    if(isset($location)){
        print $location;
    }else{
        print "생년을 골라주십시오.";
    }
?>