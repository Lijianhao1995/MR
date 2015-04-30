<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	echo "username:".$_POST[Username]."<br>";
	echo "password:".$_POST[Password]."<br>";
	echo "sex:".$_POST[Sex]."<br>";
	echo "education:".$_POST[education]."<br>";
	echo "hobby:";
	$array=$_POST[Hobby];
	//echo $array;
	foreach($array as $arr){
		echo $arr."&nbsp&nbsp";
	}
	
	echo "<br>"."personal situation:".$_POST[myTextArea]."<br>";
?>
</body>
</html>
