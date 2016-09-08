<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>南医大不断网服务[测试版]</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="stylesheet" href="http://www.lolhelper.cn/dist/css/ratchet3.min.css">
<link rel="stylesheet" href="http://www.lolhelper.cn/dist/css/style.css">
</head>
<body>
<header class="bar bar-nav">
<h1 class="title"><strong>南医大不断网服务[测试版]</strong></h1>
</header>
<div class="content"> 
<div class="card" style="border:none">
<?php
function getFileRows($filename,$start,$num=0)
{
    $rowsdata = array();
    $lines = file( $filename );
    $start = $start -1;
    $num = $num == 0 ? count($lines)-$start : $num;
    for($i=0;$i<$num; $i++)
    {
        $k = $start + $i;
        $rowsdata[] = $lines[$k];
    }
    return $rowsdata;
}

$day=date("d");
$rowsdata = getFileRows("username.txt",(int)$day,$num=1);


$username = $rowsdata[0];
$username=trim($username);
$password='111111';

?>
服务时间:晚上10:00-12:00</br>
使用说明:服务期间点击下方按钮即可上网!</br>
使用教程在前面!</br>
友情提醒一句,使用本服务的所有后果与本人无关</br>
请慎重使用!

<form method="POST" action="https://securelogin.arubanetworks.com/auth/index.html/u" onsubmit="return submitTest()">
<input type="hidden"  name="user" value="<?php echo $username;?>">
<input type="hidden" name="password" value="<?php echo $password;?>"/>
<input type="hidden" name="btn" value=""/>
<button class="btn btn-primary btn-block">点击上网</button>
</form>

<SCRIPT LANGUAGE="JavaScript"> 

function submitTest() { 
	var d = new Date()
	var hour = parseInt(d.getHours())
	if (hour<22)
		{alert("非服务期间无法使用!");return false}
	else {return true}
} 

</SCRIPT> 

</body>
</html>