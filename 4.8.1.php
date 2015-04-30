<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<h1>PHP开发宝典</h1>
<?php
function chinese_substr($str,$start,$len){
	$strlen=$start+$len;
	for($i=$start;$i<=$strlen;$i++){
		if(ord(substr($str,$i,1))>0xa0)
		{
			$temstr.=substr($str,$i,2);
			$i=$i+1;
		}
		else
		{
		$temstr.=substr($str,$i,1);
		}
	}

return $temstr;
}
$result=chinese_substr("PHP开发宝典",0,9);
echo $result;
?>
</body>
</html>
