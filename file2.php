<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$name=array("pen","shirt","cellphone","computer");
	$price=array("108","88","666","6666");
	$counts=array(1,2,3,4);
?>
<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF0000">
	<tr>
		<th width="145" align="center" bgcolor="#FFFFFF">Category</th>
		<th width="145" align="center" bgcolor="#FFFFFF">Pirce</th>
		<th width="145" align="center" bgcolor="#FFFFFF">Count</th>
		<th width="145" align="center" bgcolor="#FFFFFF">Costs</th>
	</tr>
<?php
	foreach ($name as $key=>$value){
?>
<tr>
	<td height="25" align="center" bgcolor="#FFFFFF"><?php echo $value; ?></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $price[$key]; ?></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $counts[$key]; ?></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $price[$key]*$counts[$key]; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
