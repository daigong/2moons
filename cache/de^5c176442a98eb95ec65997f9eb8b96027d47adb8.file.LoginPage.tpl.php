<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:36
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\LoginPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52034fafdf906589e9-92285979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c176442a98eb95ec65997f9eb8b96027d47adb8' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\LoginPage.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
    '2341b715241a081a6cbf180a2e15cbc391c2827d' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\overall_header.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
    '4c363b43ef833c88a1c113171039d9a4f2b820a8' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\overall_footer.tpl',
      1 => 1332681483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52034fafdf906589e9-92285979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
    'username' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdf90ab2b25_27138705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdf90ab2b25_27138705')) {function content_4fafdf90ab2b25_27138705($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '52034fafdf906589e9-92285979');
content_4fafdf9075e7f3_54736747($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<div id="content">
	<form action="" method="POST">
    <table style="width:569px;margin-top:30px;">
		<tr>
            <th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['adm_login'];?>
</th>
        </tr>
		<tr>
            <td>
				<div><label style="display:inline-block;width:100px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['adm_username'];?>
:</label><input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"></div>
				<div><label style="display:inline-block;width:100px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['adm_password'];?>
:</label><input type="password" name="admin_pw"></div>
				<div><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['adm_absenden'];?>
"></div>
			</td>
        </tr>
    </table>
	</form>
</div>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '52034fafdf906589e9-92285979');
content_4fafdf90a53437_40768933($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:36
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf9075e7f3_54736747')) {function content_4fafdf9075e7f3_54736747($_smarty_tpl) {?><!DOCTYPE html>

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
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:36
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf90a53437_40768933')) {function content_4fafdf90a53437_40768933($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
<?php if ($_GET['reload']=='t'){?>
<script type="text/javascript">
parent.topFrame.document.location.reload();
</script>
<?php }elseif($_GET['reload']=='l'){?>
<script type="text/javascript">
parent.rightFrame.document.location.reload();
</script>
<?php }?>
<?php }?>
</body>
</html><?php }} ?>