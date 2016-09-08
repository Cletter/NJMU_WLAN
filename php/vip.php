<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>南医大不断网服务[VIP版]</title>
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
<h1 class="title"><strong>南医大不断网服务[VIP版]</strong></h1>
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
$rowsdata = getFileRows("username.txt",(int)$day+31,$num=1);


$username = $rowsdata[0];
$username=trim($username);
$password='111111';

?>

南医大24小时不断网服务只为你开启!</br>
请勿告知他人!

<form method="POST" action="https://securelogin.arubanetworks.com/auth/index.html/u" >
<input type="hidden"  name="user" value="<?php echo $username;?>">
<input type="hidden" name="password" value="<?php echo $password;?>"/>
<input type="hidden" name="btn" value=""/>
<button class="btn btn-primary btn-block">点击上网</button>
</form>


</body>
</html>