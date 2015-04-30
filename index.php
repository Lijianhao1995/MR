<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
?>
<form name="form1" method="post" action="">
    用户名：
	<input type="text" name="text">
	<br />
	<font ><strong><em>密码</em></strong> ：</font>
	<input type="password" name="pwd" ">
	<input type="submit" name="sub" value="登陆" action="">
	<input type="submit" name="butt2" value="注册">
<?php
	if(isset($_POST["sub"])){
		if($_POST['text']!=""||$_POST['pwd']!=""){
		$pwdd=$_POST['pwd'];
		for($i=0;$i<=3;$i++){
				echo "<script>alert('你的密码是$pwdd');</script>";
		}
		}else{
			echo "<script>alert('文本框内容不能为空');</script>";
		}
	}
?>
</form>
</body>
</html>
