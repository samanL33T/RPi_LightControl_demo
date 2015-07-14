<?php

$ctl = $_POST['ctl'];
$command = "sudo python lights.py $ctl";
$result = shell_exec($command);
echo($result);

?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<title>SaMaN's Room Control System</title>
<body><p class="head">Welcome to SaMaN's Room Control system!</p>
<form action="" method="POST" name="form">
<p class="title"> Control the lights from here: </p>
<p class="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="ctl" value="1">
</form></p>
<form action="" method="POST" name="form">
<p class="lol">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="ctl" value="0">
</form>
</p>
</body></html>
