<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:13
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\QuickEditorPlanet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307134fafdfb5765771-94506579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7748f51ac68cca60f66da5f9946abf3c446900' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\QuickEditorPlanet.tpl',
      1 => 1335786968,
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
  'nocache_hash' => '307134fafdfb5765771-94506579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 1,
    'LNG' => 0,
    'name' => 1,
    'galaxy' => 1,
    'system' => 1,
    'planet' => 1,
    'ownername' => 1,
    'ownerid' => 1,
    'field_min' => 1,
    'field_max' => 1,
    'temp_min' => 1,
    'temp_max' => 1,
    'metal_c' => 1,
    'metal' => 1,
    'crystal_c' => 1,
    'crystal' => 1,
    'deuterium_c' => 1,
    'deuterium' => 1,
    'build' => 1,
    'Element' => 1,
    'fleet' => 1,
    'defense' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdfb5dce6a5_09413151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdfb5dce6a5_09413151')) {function content_4fafdfb5dce6a5_09413151($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '307134fafdfb5765771-94506579');
content_4fafdfb57c07e2_56728332($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<script type="text/javascript">
function check(){
	$.post('?page=qeditor&edit=planet&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&action=send', $('#userform').serialize(), function(data){
		Dialog.alert(data, function() {
			opener.location.reload();
			window.close();
		});
	});
	return false;
}
</script>
<form method="post" id="userform" action="" onsubmit="return check();">
<table width="100%" style="color:#FFFFFF"><tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_info'];?>
</th>
</tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_id'];?>
:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td></tr>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_planetname'];?>
:</td><td width="50%"><input name="name" type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_coords'];?>
:</td><td width="50%">[<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_owner'];?>
:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['ownername']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_id'];?>
: <?php echo $_smarty_tpl->tpl_vars['ownerid']->value;?>
)</td></tr>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_fields'];?>
:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['field_min']->value;?>
 / <input name="field_max" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['field_max']->value;?>
"></td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_temp'];?>
:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['temp_min']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['temp_max']->value;?>
</td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_resources'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['metal_c']->value;?>
</td><td width="40%"><input name="metal" type="text" value="<?php echo $_smarty_tpl->tpl_vars['metal']->value;?>
"></td></tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['crystal_c']->value;?>
</td><td width="40%"><input name="crystal" type="text" value="<?php echo $_smarty_tpl->tpl_vars['crystal']->value;?>
"></td></tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['deuterium_c']->value;?>
</td><td width="40%"><input name="deuterium" type="text" value="<?php echo $_smarty_tpl->tpl_vars['deuterium']->value;?>
"></td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_build'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_level'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['build']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php } ?>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_fleet'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fleet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php } ?>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_defensive'];?>
</th>
</tr>
<tr>
        <td></td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['defense']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php } ?>
<tr>
        <td colspan="3"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_submit'];?>
"> <input type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_reset'];?>
"></td>
</tr>
</table>
</form>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '307134fafdfb5765771-94506579');
content_4fafdfb5d67df7_78829226($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:13
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdfb57c07e2_56728332')) {function content_4fafdfb57c07e2_56728332($_smarty_tpl) {?><!DOCTYPE html>

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
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:13
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdfb5d67df7_78829226')) {function content_4fafdfb5d67df7_78829226($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
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