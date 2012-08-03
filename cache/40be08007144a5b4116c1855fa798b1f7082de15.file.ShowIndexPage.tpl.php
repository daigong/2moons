<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:40
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\ShowIndexPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313744fafdf94875888-27645167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40be08007144a5b4116c1855fa798b1f7082de15' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\ShowIndexPage.tpl',
      1 => 1332681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313744fafdf94875888-27645167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adm_cp_title' => 1,
    'game_name' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdf948cf844_73376682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdf948cf844_73376682')) {function content_4fafdf948cf844_73376682($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['adm_cp_title']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
</head>
<frameset cols="217,*" frameborder="0">
<frame src="admin.php?page=menu" name="rightFrame" id="rightFrame" noresize="noresize">
	<frameset rows="84,*" frameborder="0">
		<frame src="admin.php?page=topnav" name="topFrame" scrolling="no" noresize="noresize" id="topFrame">
		<frame src="admin.php?page=overview" name="Hauptframe" scrolling="auto" noresize="noresize" id="mainFrame">
	</frameset>
</frameset>
</html><?php }} ?>