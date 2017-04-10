<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<title>样式列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo ADMIN_PUBLIC;?>css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_PUBLIC;?>js/themes/default/easyui.css" />
<style>
table{table-layout: fixed;}
td{word-break: break-all; word-wrap:break-word;}
</style>
<p><a href="<?php echo U('Focus/addstyle');?>/type/<?php echo ($info[0][stype]); ?>" class="easyui-linkbutton l-btn" onclick="load2()" id=""><span class="l-btn-left"><span class="l-btn-text">添加样式</span></span></a></p>
    <table width="90%" class="table table-bordered table-striped">
        <thead>
        
        <tr>
            <th width="20px">序号</th>
            <th width="200px">样式编号</th>
            <th >样式预览</th>
            <th width="100px">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
            <td><?php echo ($i++); ?></td>
            <td><?php echo ($vo["sstyle"]); ?></td>
            <td><?php echo ($vo["scode"]); ?></td>
            <td><a href="<?php echo U('editstyle');?>/id/<?php echo ($vo["sid"]); ?>/type/<?php echo ($vo["stype"]); ?>">编辑</a>&nbsp;&nbsp;<a href="<?php echo U('del');?>/id/<?php echo ($vo["sid"]); ?>/type/<?php echo ($vo["stype"]); ?>" onclick="if(confirm('确定要删除吗？')){return true;}return false;">删除</a></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <div style="margin:20px auto;text-align:center;"><?php echo ($page); ?></div>
</head>
</html>