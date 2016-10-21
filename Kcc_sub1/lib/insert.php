<?php
include 'kccdb.php';

//$sql = "INSERT INTO member (kName,eName,bYear,bMonth,bDay,id,pw,fN,fPn,sns,email,fPostN,address,dm,emp,op,sp,efPostN,eAddress,efN,ffN,wedding,wYear,wMonth,wDay) VALUES('{$_POST['kName']}','{$_POST['eName']}','{$_POST['bYear']}','{$_POST['bMonth']}','{$_POST['bDay']}','{$_POST['id']}','{$_POST['pw']}','{$homeNumber}','{$phoneNumber}','{$_POST['sns']}','{$_POST['email']}','{$postNumber}','{$address}','{$_POST['dm']}','{$_POST['emp']}','{$_POST['op']}','{$_POST['sp']}','{$ePostNumber}','{$eaddress}','{$eNumber}','{$faxNumber}','{$_POST['wedding']}','{$_POST['wYear']}','{$_POST['wMonth']}','{$_POST['wDay']}')";

$phn = $_POST["fPn"].$_POST["sPn"].$_POST["tPn"];
$phoneNumber = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $phn);

$n = $_POST["fN"].$_POST["sN"].$_POST["tN"];
$Number = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $n);

$ephn = $_POST["efN"].$_POST["esN"].$_POST["etN"];
$ephoneNumber = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $ephn);

$fexn = $_POST["ffN"].$_POST["fsN"].$_POST["ftN"];
$fexNumber = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $fexn);

$sql = "INSERT INTO member set kName='{$_POST['kName']}' ,eName='{$_POST["eName"]}',bYear='{$_POST["bYear"]}',bMonth='{$_POST['bMonth']}',bDay='{$_POST['bDay']}',id='{$_POST['id']}',pw='{$_POST['pw']}',fN='{$Number}',fPn='{$phoneNumber}',sns='{$_POST['sns']}',email='{$_POST['email']}',fPostN='{$_POST['fPostN']}',address='{$_POST['address']}',Iaddress='{$_POST['Iaddress']}',dm='{$_POST['dm']}',emp='{$_POST['emp']}',op='{$_POST['op']}',sp='{$_POST['sp']}',efPostN='{$_POST['efPostN']}',eAddress='{$_POST['eAddress']}',eIaddress='{$_POST['eIaddress']}',efN='{$ephoneNumber}',ffN='{$fexNumber}',wedding='{$_POST['wedding']}',wYear='{$_POST['wYear']}',wMonth='{$_POST['wMonth']}',wDay='{$_POST['wDay']}'";
    //$sql = "INSERT INTO member (kName,eName,bYear) VALUES('$kName','$eName','$bYear')"; //이방법은 쓰지말것
    $go = $pdo ->query($sql);
    echo "<script>location.href='login_view.php';</script>"
?>