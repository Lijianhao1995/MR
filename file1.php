<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
/*define ("myNumber","how arey you");//定义常量
echo myNumber;//输出常量
$name="lijianhao"."<br>";
echo $name."<br>";
$name=87;
echo $name."<br>";
$i="zhao";
$j="hello";
$j=& $i;
$j="hello,$j";
echo $j."<br>";
echo $i."<br>";*/
$zyy="PHPlanguage";
function lxt(){
	global $zyy;
	echo "<font color='#0000FF' face='新宋体' size='+2'>".$zyy."</font><br>";
	}
lxt();
$PHPlanguage="what the fuck";
echo $$zyy;
$a="a";
$b='a';
echo "$a ";
echo '$b ';
if(is_string)
{
	echo "<br>"."yes,this is  a string."."<br>";
}
$a=7;
if(is_int)
{
	echo "yes,this is  a integer."."<br>";
}
$value[]="PHP";
$value[]="mySQL";
echo $value[1];
?>
</body>
</html>
