<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Robots" content="noindex,nofollow" />
<title>中科微汇微信编辑器后台登录</title>
<link href="<?php echo HOME_PUBLIC;?>css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
        <div class="login">
	<form name="myForm" method="post" action="<?php echo U('Login/check');?>">
		<div class="logo"></div>
		
		<div class="login_form">
			<div class="user">
		<input class="text_value" name="adminname" type="text" id="adminname" value="用户名" onfocus="javascript:if(this.value=='用户名')this.value='';">
        <input class="text_value" name="adminpassword" type="password" id="adminpassword" onfocus="javascript:if(this.value=='密码')this.value='';">     
	    </div>
			<button class="button" id="submit" type="submit">登录</button>
		</div>
		<div id="tip"></div>	
	  <div class="foot">Copyright &copy; 2015.www.eweima.net All rights reserved.</div>
	</form>
</div>
</div>
</body>
</html>