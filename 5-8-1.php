<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$arr=array("america","canada","japanese","china","russia","france","germany","spain","korea","england","itatly");
	$arrLowToTop=$arr;
	sort($arrLowTOTop);
	$arrTopToLow=$arr;
	rsort($arrTopToLow);
	echo "before:"."<br>";
	foreach($arr as $key=>$array){
		echo $array."<br>";
	}
	echo "The from low to top sort:"."<br>";
	foreach($arrLowToTop as $key=>$array){
		echo $array."<br>";
	}
	echo "The from top to low sort:"."<br>";
	foreach($arrTopToLow as $key=>$array){
		echo $array."<br>";
	}
?>
</body>
</html>
