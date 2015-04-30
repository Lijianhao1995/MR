<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
//list each历遍数组
<?php
	$arr=array("what","the","fuck");
	while(list($a,$b)=each($arr)){//$a是键名,$b是对应数组内容
		echo "\$a=$a,\$b=$b"."<br>";
	}
?>
//foreach历遍数组
<?php
	$arr_1=array("fruit"=>"apple","snack"=>"chips","nuts"=>"peanuts");
	foreach($arr_1 as $key=>$array){
		echo "$key-----------$array"."<br>";
	}
?>
//array_unqiue数组去除重复
<?php
	$arr=array("PHP","C++","C","JAVA","C++","Python");
	for($i=0;$i<=count(arr);$i++){
		echo $arr[$i]."<br>";
	}
	$arr=array_unique($arr);
	foreach($arr as $key=>$array){
		echo "$key-----$$array" ."<br>";
	}
?>
//implode将数组转化为字符串
<?php
	$arr=array("fuck","dick","nipple","butt");
	$value=implode(" ",$arr);
	echo "<br>".$value."<br>";
?>
//array_push添加元素
<?php
	$arr=array("apple","microsoft");
	echo "<br>befor:<br>";
	print_r($arr);
	echo "<br>";
	array_push($arr,"sisco","oracle");
	echo "after:<br>";
	print_r($arr);
?>
//获取服务器的IP地址
<?php
	echo "<br>"."the IP address of your sever is:".$_SERVER['SERVER_ADDR'];
?>
</body>
</body>
</html>