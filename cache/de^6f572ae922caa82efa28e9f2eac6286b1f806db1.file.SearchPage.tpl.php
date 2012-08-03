<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:43
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\SearchPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126984fafdf97ad46c1-44094179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f572ae922caa82efa28e9f2eac6286b1f806db1' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\SearchPage.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
    '2341b715241a081a6cbf180a2e15cbc391c2827d' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\overall_header.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126984fafdf97ad46c1-44094179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'minimize' => 1,
    'se_contrac' => 1,
    'ac_minimize_maximize' => 1,
    'diisplaay' => 1,
    'se_search_title' => 1,
    'se_intro' => 1,
    'se_type_typee' => 1,
    'se_search_in' => 1,
    'se_filter_title' => 1,
    'se_limit' => 1,
    'se_asc_desc' => 1,
    'OrderBYParse' => 1,
    'se_search_order' => 1,
    'search' => 1,
    'Selector' => 1,
    'SearchFile' => 1,
    'SearchFor' => 1,
    'Searchmethod' => 1,
    'limit' => 1,
    'OrderBY' => 1,
    'Order' => 1,
    'se_search' => 1,
    'error' => 0,
    'PAGES' => 1,
    'LIST' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdf97f3f4c8_64782900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdf97f3f4c8_64782900')) {function content_4fafdf97f3f4c8_64782900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\Server\\xampp\\htdocs\\2moons-1svn\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '126984fafdf97ad46c1-44094179');
content_4fafdf97b1c638_39659177($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<form action="" method="POST">
<table width="90%">
<tr>
<td class="transparent left">
<input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['minimize']->value;?>
 name="minimize"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['se_contrac']->value;?>
" class="button">
<img src="./styles/images/Adm/GO.png" onClick="javascript:$('#search').slideToggle()" style="cursor:pointer;padding-right:60px;" class="tooltip" name="<?php echo $_smarty_tpl->tpl_vars['ac_minimize_maximize']->value;?>
">
</td>
</tr>
</table>
<div id="search"<?php echo $_smarty_tpl->tpl_vars['diisplaay']->value;?>
>
<table width="90%">
	<tr>
		<th colspan="8">
			<?php echo $_smarty_tpl->tpl_vars['se_search_title']->value;?>

		</td>
	</tr>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_intro']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_type_typee']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_search_in']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_filter_title']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_limit']->value;?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_asc_desc']->value;?>

		</td>
		<?php if ($_smarty_tpl->tpl_vars['OrderBYParse']->value){?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['se_search_order']->value;?>

		</td>
		<?php }?>
		<td>
			&nbsp;
		</td>
	</tr>
<tr>
	<td>
		<input type="text" name="key_user" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'search','options'=>$_smarty_tpl->tpl_vars['Selector']->value['list'],'selected'=>$_smarty_tpl->tpl_vars['SearchFile']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'search_in','options'=>$_smarty_tpl->tpl_vars['Selector']->value['search'],'selected'=>$_smarty_tpl->tpl_vars['SearchFor']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'fucki','options'=>$_smarty_tpl->tpl_vars['Selector']->value['filter'],'selected'=>$_smarty_tpl->tpl_vars['Searchmethod']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'limit','options'=>$_smarty_tpl->tpl_vars['Selector']->value['limit'],'selected'=>$_smarty_tpl->tpl_vars['limit']->value),$_smarty_tpl);?>

	</td>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'key_acc','options'=>$_smarty_tpl->tpl_vars['Selector']->value['order'],'selected'=>$_smarty_tpl->tpl_vars['OrderBY']->value),$_smarty_tpl);?>

	</td>
	<?php if ($_smarty_tpl->tpl_vars['OrderBYParse']->value){?>
	<td>
		<?php echo smarty_function_html_options(array('name'=>'key_order','options'=>$_smarty_tpl->tpl_vars['OrderBYParse']->value,'selected'=>$_smarty_tpl->tpl_vars['Order']->value),$_smarty_tpl);?>

	</td>
	<?php }?>
	<td>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['se_search']->value;?>
">
	</td>
</tr>
<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
<tr>
	<td colspan="8">
		<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
	</td>
</tr>
<?php }?>
</table>
</div>
<br>
<table width="90%" border="0px">
<?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>

</table>
<?php echo $_smarty_tpl->tpl_vars['LIST']->value;?>

<br>
<table width="90%" border="0px">
<?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>

</table>
</form><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:43
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf97b1c638_39659177')) {function content_4fafdf97b1c638_39659177($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/ingame.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/admin.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['fcm_info']->value;?>
";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php }} ?>