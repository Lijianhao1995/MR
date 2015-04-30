<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$array[0]="php";
	$array['1']="java";
	$array[ar]="C++";
	print_r($array);
?>
<?php
	$array=array(0=>"php",1=>"C++",2=>"Java");
	while(list($name,$value)=each($array)){
		echo $name= $value."<br>";
	}
?>
<?php
	$arr=array("PHP","Java","C++");
	array_push($arr,"PHP","VC");
	echo "<br>"; 
	print_r($arr);
	echo "<br>";
	$arr=array_unique($arr);
	print_r($arr);
?>

</body>
</html>
