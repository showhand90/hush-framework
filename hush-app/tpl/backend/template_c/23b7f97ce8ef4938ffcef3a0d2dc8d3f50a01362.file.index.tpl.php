<?php /* Smarty version 3.0rc1, created on 2010-06-07 18:00:23
         compiled from "D:\workspace\hush-framework\tpl\backend\template\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153324c0cc3372fac91-92309281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23b7f97ce8ef4938ffcef3a0d2dc8d3f50a01362' => 
    array (
      0 => 'D:\\workspace\\hush-framework\\tpl\\backend\\template\\index\\index.tpl',
      1 => 1274950988,
    ),
  ),
  'nocache_hash' => '153324c0cc3372fac91-92309281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iHush Tracking Console System</title>
<link href="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
css/frame.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
js/jquery.js" language="javascript" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
js/frame.js" language="javascript" type="text/javascript"></script>
</head>

<body class="showmenu" scroll="no">

<div class="pagemask"></div>

<iframe class="iframemask"></iframe>

<?php $_template = new Smarty_Internal_Template("index/frame/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<?php $_template = new Smarty_Internal_Template("index/frame/left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<script type="text/javascript">
function reSetIframe(){
    var iframe = document.getElementById("iframeId");
    try{
        var bHeight = iframe.contentWindow.document.body.scrollHeight;
        var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
        var height = Math.max(bHeight, dHeight);
        iframe.height = height;
    }catch (ex){}
}
$(function(){
	// default selected menu link
	ChangeNav("top_1", "欢迎界面");
});
</script>

<div class="right">
	<div class="main">
		<iframe id="main" name="main" frameborder="0" src="<?php echo $_smarty_tpl->getVariable('_root')->value;?>
common/" onload="javascript:reSetIframe();"></iframe>
		<div sytle="clear:both"></div>
	</div>
</div>
<!-- right end -->

<!--
<div class="qucikmenu" id="qucikmenu">
	<ul>
		<li><a href="javascript:;" target="main">1</a></li>
		<li><a href="javascript:;" target="main">2</a></li>
		<li><a href="javascript:;" target="main">3</a></li>
	</ul>
</div>
-->
<!-- qucikmenu end -->

</body>
</html>