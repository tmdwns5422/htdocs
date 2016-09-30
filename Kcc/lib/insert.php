<?php
include 'kccdb.php';

$homeNumber = $_POST["fN"].$_POST["sN"].$_POST["tN"];
$phoneNumber = $_POST["fPn"].$_POST["sPn"].$_POST["tPn"];
$postNumber = $_POST["fPostN"].$_POST["sPostN"];
$address = $_POST["address"].$_POST["IAddress"];
$ePostNumber = $_POST["efPostN"].$_POST["esPostN"];
$eaddress = $_POST["eAddress"].$_POST["eIaddress"];
$eNumber = $_POST["efN"].$_POST["esN"].$_POST["etN"];
$faxNumber = $_POST["ffN"].$_POST["fsN"].$_POST["ftN"];

$sql = "INSERT INTO member (kName,eName,bYear,bMonth,bDay,id,pw,fN,fPn,sns,email,fPostN,address,dm,emp,op,sp,efPostN,eAddress,efN,ffN,wedding,wYear,wMonth,wDay) VALUES('{$_POST['kName']}','{$_POST['eName']}','{$_POST['bYear']}','{$_POST['bMonth']}','{$_POST['bDay']}','{$_POST['id']}','{$_POST['pw']}','{$homeNumber}','{$phoneNumber}','{$_POST['sns']}','{$_POST['email']}','{$postNumber}','{$address}','{$_POST['dm']}','{$_POST['emp']}','{$_POST['op']}','{$_POST['sp']}','{$ePostNumber}','{$eaddress}','{$eNumber}','{$faxNumber}','{$_POST['wedding']}','{$_POST['wYear']}','{$_POST['wMonth']}','{$_POST['wDay']}')";
    //$sql = "INSERT INTO member (kName,eName,bYear) VALUES('$kName','$eName','$bYear')";
    $result = $pdo -> query($sql);
    echo "<script>location.href='login_view.php';</script>"
?>