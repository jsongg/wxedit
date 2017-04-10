<?php

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Application/');

define('SITE_URL','http://'.$_SERVER['HTTP_HOST']); // 网站域名

// 定义根目录
// define('WXEDIT_ROOT',SITE_URL.'/'.strrchr(dirname(__FILE__),'\\').'/');
// echo WXEDIT_ROOT;die;
// 定义public目录Application/Public/Admin/
define('ADMIN_PUBLIC',SITE_URL.'/wxeditorNew/Application/Public/Admin/');
// 定义public目录Application/Public/Home/
define('HOME_PUBLIC',SITE_URL.'/wxeditorNew/Application/Public/Home/');


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';











































?>