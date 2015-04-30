<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$str="select * from tb_book where bookname='PHP coding dictionary'";
	$a=addslashes($str);
	echo $a."<br>";
	$b=stripslashes($a);
	echo $b."<br>";
?>
<?php
	$str="嗯嗯嗯嗯嗯嗯啊啊啊啊嗯嗯啊啊额安嗯嗯嗯嗯啊啊啊啊啊嗯嗯额啊啊嗯嗯嗯嗯呃啊恩恩额啊嗯嗯嗯啊额啊嗯嗯恩恩额啊啊额阿尔阿额饿啊恩恩额";
	if(strlen($str)>4){
		for($i=0;$i<=strlen($str);$i++){
			echo "当截取".$i."个字符时".substr($str,0,$i)."...."."<br>";
		}
	}
	else
		echo $str;
?>
</body>
</html>
