<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<input type="button" name="button1" value="单击这里" onclick="javascript:alert('您单击了这个按钮'/*必须是单引号*/)" />
<script>
	function check_form(){
		if(form1.username.value==""){
			alert("请输入用户名");
				form1.username.select();
				return(false);
			}
		if(form1.password.value==""){
			alert("请输入密码");
			form1.password.select();
			return(false);
			}
	}
</script>
<form id="form1" name="form1" method="post" action="">
  <p>
  <input name="username" type="text" id="username" size="18" />
  </p>
  <p>
    <input name="password" type="password" id="password" size="18"  />
  </p>
  <p>
    <input type="submit" name="submit" value="登陆" onclick="return check_form();" />
    <input type="reset" name="submit2" value="重置"  onclick="javascript:alert('您单击了这个按钮')" onmouseover="javascript:alert('您双击了这个按钮')"  />
      </p>
</form>
</body>
</html>
