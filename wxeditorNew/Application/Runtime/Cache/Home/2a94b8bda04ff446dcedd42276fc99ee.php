<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>微信排版图文编辑器</title>
        <meta charset="UTF-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <link href="<?php echo HOME_PUBLIC;?>css/common.css" type="text/css" rel="stylesheet">
        <link href="<?php echo HOME_PUBLIC;?>css/index.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo HOME_PUBLIC;?>css/colorpicker.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo HOME_PUBLIC;?>css/editor-min.css" type="text/css" />
        <script type="text/javascript" src="<?php echo HOME_PUBLIC;?>js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?php echo HOME_PUBLIC;?>js/colorpicker-min.js"></script>
        <style>
          .wxeditor{
            margin:auto;
            padding:auto;
            border: 10px solid red;
          }
          
          .top div h6{
            font-size: 35px;
            text-align: center;
            color:blue;
            /*line-height: 20px;*/
          }
        </style>
    </head>
    <body  class="bodybody">
    <div class="top">
      <div><h6>微信编辑器</h6></div>
      
    </div>
        <div class="wxeditor">
            <div class="clearfix" style="background-color:white;">
  <div class="left clearfix">
                    <div class="tabbox clearfix">
                        <ul class="tabs" id="tabs">

                            <li class="editorlogo"><a href="#"><span style="font-size:25px;">微信排版</span></a></li>
                            <li><a href="#" tab="tab1" class="current">关注</a></li><li><a href="#" tab="tab2" class="">标题</a></li><li><a href="#" tab="tab3" class="">内容</a></li><li><a href="#" tab="tab4" class="">互推</a></li><li><a href="#" tab="tab5" class="">分割</a></li><li><a href="#" tab="tab6" class="">原文引导</a></li><li><a href="#" tab="tab7" class="">节日</a></li>
                        </ul>
                        <em class="fr"></em>
                    </div>
                    <div class="tplcontent">
                        <div id="colorpickerbox"></div>
                        <div>
<div id="tab1" class="tab_con ">
<ul class="content clearfix">
<?php
$i=0; do{ echo "<div style='color:red;'>".$stype1[$i]['sstyle']."</div>"; echo "<li><div class='itembox'>"; echo $stype1[$i]['scode']; echo "</div></li>"; $i++; }while($i<$count1); ?>
<br /><br />
</ul>
</div>
<div id="tab2" class="tab_con dn">
<ul class="content clearfix">
<?php
$i=0; do { echo "<div style='color:red;'>".$stype2[$i]['sstyle']."</div>"; echo '<li><div class="itembox">'; echo $stype2[$i]['scode']; echo '</div></li>'; $i++; } while ($i<$count2); ?>
<br /><br />
</ul>
</div>
<div id="tab3" class="tab_con dn">
<ul class="content clearfix">
<?php
$i=0; do { echo "<div style='color:red;'>".$stype3[$i]['sstyle']."</div>"; echo '<li><div class="itembox">'; echo $stype3[$i]['scode']; echo '</div></li>'; $i++; } while ($i<$count3); ?>
<br /><br />
</ul>
</div>
<div id="tab4" class="tab_con dn">
<ul class="content clearfix">
<?php
$i=0; do { echo "<div style='color:red;'>".$stype4[$i]['sstyle']."</div>"; echo '<li><div class="itembox">'; echo $stype4[$i]['scode']; echo '</div></li>'; $i++; } while ($i<$count4); ?>
<br /><br />
</ul>
</div>
<div id="tab5" class="tab_con dn">
<ul class="content clearfix">
<?php
$i=0; do { echo "<div style='color:red;'>".$stype5[$i]['sstyle']."</div>"; echo '<li><div class="itembox">'; echo $stype5[$i]['scode']; echo '</div></li>'; $i++; } while ($i<$count5); ?>
<br /><br />
</ul>
</div>
<div id="tab6" class="tab_con dn">
<ul class="content clearfix">
<?php
$i=6; do { echo "<div style='color:red;'>".$stype6[$i]['sstyle']."</div>"; echo '<li><div class="itembox">'; echo $stype6[$i]['scode']; echo '</div></li>'; $i++; } while ($i<$count6); ?>
<br /><br />
</ul>
</div>
<div id="tab7" class="tab_con dn">
<ul class="content clearfix">
<?php
$i=0; do { echo "<div style='color:red;'>".$stype7[$i]['sstyle']."</div>"; echo '<li><div class="itembox">'; echo $stype7[$i]['scode']; echo '</div></li>'; $i++; } while ($i<$count7); ?>
<br /><br />
</ul>
</div>
</div>
</div>
<div class="goto">→</div>
                </div>
                <div class="right">
                    <div id="bdeditor">
                        <script type="text/javascript" charset="utf-8" src="<?php echo HOME_PUBLIC;?>js/ueditor/ueditor.config.js"></script>
                        <script type="text/javascript" charset="utf-8" src="<?php echo HOME_PUBLIC;?>js/ueditor/ueditor.all.min.js"> </script>
                        <script type="text/javascript" charset="utf-8" src="<?php echo HOME_PUBLIC;?>js/ueditor/lang/zh-cn/zh-cn.js"></script>
                              <script id="editor" type="text/plain" style="width:100%;height:560px;"></script>
              </div>
                </div>
            </div>
      
        <div id="previewbox">
                <div style="height:100%;overflow-y:scroll;padding-right:5px;">
                <div style="font-size:18px;line-height:24px;font-weight:700">中科微汇，专注于微信公众号</div>
                <div><em style="color:#8c8c8c;font-style:normal;font-size:12px;">2016-08-10</em> <a style="font-size:12px;color:#607fa6" href="javascript:void(0);" id="post-user">baidu.com</a> </div>
                <div id="preview"></div>
                </div>

                <div style="position:absolute;right:50px;top:40px;cursor:pointer;width:50px;height:50px;font-size:50px;font-weight:700" id="phoneclose">X</div>
        </div>
        <div class="fullshowbox">全屏</div>
        <div class="fullhidebox">退出</div>
        <div id="phone">手机预览</div>  
    </div>
    </body>
   <script>
    function launchFullscreen(a){if(a.requestFullscreen){a.requestFullscreen()}else{if(a.mozRequestFullScreen){a.mozRequestFullScreen()}else{if(a.msRequestFullscreen){a.msRequestFullscreen()}else{if(a.webkitRequestFullscreen){a.webkitRequestFullScreen()}}}}};function exitFullscreen(){if(document.exitFullscreen){document.exitFullscreen()}else{if(document.mozCancelFullScreen){document.mozCancelFullScreen()}else{if(document.webkitExitFullscreen){document.webkitExitFullscreen()}}}};function fullscreenElement(){return document.fullscreenElement||document.webkitCurrentFullScreenElement||document.mozFullScreenElement||null};$(function(){$("#phoneclose").on('click',function(){$("#previewbox").hide()});$("#phone").on('click',function(){if($("#previewbox").css("display")=="block"){$("#previewbox").hide()}else{$("#previewbox").show()}});$(window).on('fullscreenchange webkitfullscreenchange mozfullscreenchange',function(){if(!fullscreenElement()){$('.wxeditor').css({margin:'0'})}});$('.fullshowbox').on('click',function(){$('.wxeditor').css({margin:'50px 0'});launchFullscreen(document.documentElement)});$('.fullhidebox').on('click',function(){$('#wxeditortip,#header').show();exitFullscreen()});var b=["borderTopColor","borderRightColor","borderBottomColor","borderLeftColor"],d=[];$.each(b,function(a){d.push(".itembox .wxqq-"+b[a])});$("#colorpickerbox").ColorPicker({flat:true,color:"#00bbec",onChange:function(a,e,f){$(".itembox .wxqq-bg").css({backgroundColor:"#"+e});$(".itembox .wxqq-color").css({color:"#"+e});$.each(d,function(g){$(d[g]).css(b[g],"#"+e)})}});var c=UE.getEditor("editor",{topOffset:0,autoFloatEnabled:false,autoHeightEnabled:false,autotypeset:{removeEmptyline:true},toolbars:[['fullscreen','source','undo','redo','bold','italic','underline','fontborder','strikethrough','removeformat','autotypeset','blockquote','pasteplain','forecolor','backcolor','insertorderedlist','insertunorderedlist','selectall','cleardoc','rowspacingtop','rowspacingbottom','lineheight','indent','justifyleft','justifycenter','justifyright','fontfamily','fontsize','justifyjustify','touppercase','tolowercase','simpleupload','emotion','insertvideo','map','date','time','spechars','preview','searchreplace'],['con','title','fork','guide','division','other','mystyle']],autoHeightEnabled:false,allowDivTransToP:false,autoFloatEnabled:true,enableAutoSave:false});c.ready(function(){c.addListener('contentChange',function(){$("#preview").html(c.getContent()+'<div><a style="font-size:12px;color:#607fa6" href="javascript:void(0);" id="post-user">中科微汇，微信公众平台专家</a></br><a style="font-size:12px;color:#607fa6" href="javascript:void(0);" id="post-user">阅读原文</a> <em style="color:#8c8c8c;font-style:normal;font-size:12px;">阅读 100000+</em><span class="fr"><a style="font-size:12px;color:#607fa6" href="javascript:void(0);">举报</a></span></div>')});

      $(".itembox").on("click",function(a){c.execCommand("insertHtml","<div>"+$(this).html()+"</div><br />")})

    });

    $(".tabs li a").on("click",function(){$(this).addClass("current").parent().siblings().each(function(){$(this).find("a").removeClass("current")});

      $("#"+$(this).attr("tab")).show().siblings().hide()

    })});
</script>
<script>
  // $(document).ready(function(){
  //   var url="http://localhost:8080/wxeditorNew/index.php/Home/Index/ajax";
  //   var data =
  //   $.post(url,data,success,type);
  // });

    
  
</script> 
</html>