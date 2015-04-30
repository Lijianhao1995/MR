<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="" name="form1" method="post">
<input type="file" name="file" enctype="multipart/form-data" />
<input type="text" name="text" />
<input type="submit" name="submit1" value="OK!"/>
</form>
<?php
	if(isset($_POST[submit1]) and $_POST[submit1]=="OK!"){
		echo $_POST["text"]."<br>";	
		echo $_FILES["file"]["size"];
	}
?>
</body>
</html>
