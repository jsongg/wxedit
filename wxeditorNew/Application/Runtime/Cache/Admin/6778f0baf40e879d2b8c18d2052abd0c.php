<?php if (!defined('THINK_PATH')) exit();?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language=javascript>
function opencat(cat,img,imgsrc){
	if(cat.style.display=="none"){
	cat.style.display="";
	imgsrc.src="<?php echo ADMIN_PUBLIC;?>images/arrow_bottom.gif";
	img.className="row02_over"
	}	else {
	cat.style.display="none"; 
	imgsrc.src="<?php echo ADMIN_PUBLIC;?>images/arrow_right.gif";
	img.className="row02"
	}
}
</script>
<link href="<?php echo ADMIN_PUBLIC;?>css/css.css" rel="stylesheet" type="text/css">
<div class="row01"><img src="<?php echo ADMIN_PUBLIC;?>images/ico_admin.gif" width="20" height="20" align="absmiddle" style="margin-top:2px;" />&nbsp;&nbsp;xxxx微信后台管理</div>
<a href="<?php echo U('main');?>" target="mainbody"><div class="row02"><img src="<?php echo ADMIN_PUBLIC;?>images/Home.gif" width="20" height="20" border="0" align="absmiddle"   style="margin-left:10px;"/> <b>后台首页</b></div>
</a>
     
	  <div class="row02" style="cursor:hand;" onclick=opencat(cat01,img01,imgsrc01)  id="img01"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_right.gif" width="10"  id="imgsrc01"  style="margin-left:20px;"/> 样式管理 </div>
	  <div id="cat01" style="display:none">
      <a href="<?php echo U('Focus/show');?>/type/1" target="mainbody"><div class="row03"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border=0/> 关注引导</div></a>
      <a href="<?php echo U('Focus/show');?>/type/2" target="mainbody"><div class="row03"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border=0/> 标题</div></a>
      <a href="<?php echo U('Focus/show');?>/type/3" target="mainbody"><div class="row04"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 内容区</div></a>
	  <a href="<?php echo U('Focus/show');?>/type/4" target="mainbody"><div class="row04"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 互推账号</div></a>
	  <a href="<?php echo U('Focus/show');?>/type/5" target="mainbody"><div class="row04"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 分割线</div></a>
      <a href="<?php echo U('Focus/show');?>/type/6" target="mainbody"><div class="row04"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 原文引导</div></a>
      <a href="<?php echo U('Focus/show');?>/type/7" target="mainbody"><div class="row04"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 其它</div></a>
      <a href="<?php echo U('Focus/addstyle');?>" target="mainbody"><div class="row04"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 添加样式</div></a>
	  </div>
	  
	  

      <div class="row02" style="cursor:hand;" onclick=opencat(cat02,img02,imgsrc02)  id="img02"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_right.gif" width="10"   style="margin-left:20px;"   id="imgsrc02"/> 系统管理 </div>
	  <div id="cat02" style="display:none">
	  
	  <a href="<?php echo U('System/show');?>/aid/<?php echo ($_SESSION['adminid']); ?>" target="mainbody"><div class="row03"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_dot.gif" width="3" height="3"  style="margin-left:40px;" border="0"/> 修改密码</div></a>
    </div>
      <a href="<?php echo U('System/loginOut');?>" target="_top" onclick="if(confirm('你确定退出系统吗？')){return true;}return false;">
      <div class="row02"><img src="<?php echo ADMIN_PUBLIC;?>images/arrow_right.gif" width="10" height="10"  style="margin-left:20px;" border="0"/> 退出系统 </div></a>
<div align="center"><br />
        <br />
      	<br />
  
 </div>
      <br />