<?php
    include  $_SERVER['DOCUMENT_ROOT']."/db.php";
    include  $_SERVER['DOCUMENT_ROOT']."/password.php";
    
	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$address = $_POST['address'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];

    $sql = mq("insert into member (id,pw,name,address,sex,email) values('".$userid."','".$userpw."','".$username."','".$address."','".$sex."','".$email."')");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/login.php">