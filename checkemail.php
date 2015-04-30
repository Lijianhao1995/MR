<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<script language="javascript" type="text/javascript">
	function checkemial(emial){
		var str=email;
		var expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]w+)*/;
		var objExp=new RegExp(expression);
		if(objexp.test(str)==true){
			return true;
		}else{
			return false;
		}
	}
</script>
<script language="javascript" type="text/javascript">
	function check(form1){
		if(form1.email.value==""){
			alert("please enter your emial address");
			form1.email.focus();
			return;
		}
		if(!checkmial(form1.email.value){
			alert("worng address of a email");
			form1.email.focus();
			return;
		}
		form1.submit();
		
	}
</script>
<form action="" method="post" name="form1">
  <p>用户名:
    <input type="text" name="username"  />
</p>
  <p>密码:
    <input type="password" name="password" />
</p>
  <p>email:
    <input type="text" name="email"  value=""/>
      </p>
  <p>
    <input type="submit" name="submit" value="提交" onclick="check(form1);"/>
  </p>
</form>
</body>
</html>
