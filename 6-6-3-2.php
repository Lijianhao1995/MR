<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table width="500" border="1" cellpadding="0" cellspacing="0" background="images/kkk.JPG">
 <form name="form" method="post" action="index.php">
  <tr>
    <td width="79" align="center" class="style1"></td>
    <td colspan="2">
	<textarea name="suggestions" cols="50" rows="5" class="wenbenkuang" id="suggestions"
	  onKeyDown="StatByte(this.form.suggestions,this.form.maxs,this.form.used,this.form.remain);"onKeyUp="StatByte(this.form.suggestions,this.form.maxs,this.form.used,this.form.remain);"></textarea></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">字节数:</td>
    <td colspan="2"><span class="style1">
	 最大字节数:
      <input name="maxs" type="text" disabled class="noborder" id="maxs"  value="100" size="4"> 
	 已用字节:
	  <input name="used" type="text" disabled class="noborder" id="used"  value="0" size="4">
	 剩余字节:
	  <input name="remain" type="text" disabled class="noborder" id="remain" value="100" size="4">
	  </span></td>
  </tr>
  <tr>
    <td height="22" align="center"></td>
    <td width="100"><input type="submit" name="Submit" value="提交"></td>
    <td width="236"><input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>
<script language=JavaScript>  
var LastCount =0;  
function StatByte(Message,maxs,Used,Remain){ //字节统计  
 var ByteCount = 0;  
 var StrValue  = Message.value;  
 var StrLength = Message.value.length;  
 var maxsValue  = maxs.value;  
if(LastCount != StrLength) { // 在此判断，减少循环次数  
    for (i=0;i<StrLength;i++){  
        ByteCount  = (StrValue.charCodeAt(i)<=256) ? ByteCount + 1 : ByteCount + 2;  
      if (ByteCount>maxsValue) {  
        Message.value = StrValue.substring(0,i);  
        alert("留言内容最多不能超过 " +maxsValue+ " 个字节！\n注意：一个汉字为两字节。");  
         ByteCount = maxsValue;  
         break;  
      }  
    }  
   Used.value = ByteCount;  
   Remain.value = maxsValue - ByteCount;  
   LastCount = StrLength;  
 }  
}  
</script>

</body>
</html>
