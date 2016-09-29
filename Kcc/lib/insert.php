<?php
include 'kccdb.php';
$sql = "INSERT INTO member (kName,eName,bYear,bMonth,bDay,id,pw,fN,sN,tN,fPn,sPn,tPn,sns,email,fPostN,sPostN,address,IAddress,dm,emp,op,sp,efPostN,esPostN,eAddress,eIaddress,efN,esN,etN,ffN,fsN,ftN,wedding,wYear,wMonth,wDay) VALUES('{$_POST['kName']}','{$_POST['eName']}','{$_POST['bYear']}','{$_POST['bMonth']}','{$_POST['bDay']}','{$_POST['id']}','{$_POST['pw']}','{$_POST['fN']}','{$_POST['sN']}','{$_POST['tN']}','{$_POST['fPn']}','{$_POST['sPn']}','{$_POST['tPn']}','{$_POST['sns']}','{$_POST['email']}','{$_POST['fPostN']}','{$_POST['sPostN']}','{$_POST['address']}','{$_POST['Iaddress']}','{$_POST['dm']}','{$_POST['emp']}','{$_POST['op']}','{$_POST['sp']}','{$_POST['efPostN']}','{$_POST['esPostN']}','{$_POST['eAddress']}','{$_POST['eIaddress']}','{$_POST['efN']}','{$_POST['esN']}','{$_POST['etN']}','{$_POST['ffN']}','{$_POST['fsN']}','{$_POST['ftN']}','{$_POST['wedding']}','{$_POST['wYear']}','{$_POST['wMonth']}','{$_POST['wDay']}')";
    //$sql = "INSERT INTO member (kName,eName,bYear) VALUES('$kName','$eName','$bYear')";
    $result = $pdo -> query($sql);
    echo "<script>location.href='login_view.php';</script>"
?>
