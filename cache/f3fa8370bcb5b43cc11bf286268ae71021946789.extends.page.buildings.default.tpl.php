<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:26:27
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\page.buildings.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3354fafdfce855a33-70501123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3fa8370bcb5b43cc11bf286268ae71021946789' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\page.buildings.default.tpl',
      1 => 1336926259,
      2 => 'file',
    ),
    '349229b0f783300ec888174b8ba2b2ca684fe6a6' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\layout.full.tpl',
      1 => 1332681484,
      2 => 'file',
    ),
    'ad4f67ddf878dcf3be349a4c82ca4f3e9df52e63' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\main.header.tpl',
      1 => 1332681484,
      2 => 'file',
    ),
    '7d1710e5439f0c4435b282c6a27843b5f6e33d35' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\main.navigation.tpl',
      1 => 1332681484,
      2 => 'file',
    ),
    '346e23ed96da0dfbb0e2916c4976d8821358abdf' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\main.topnav.tpl',
      1 => 1332681484,
      2 => 'file',
    ),
    '382517b82949679cbf788f4d31dbd427a7cc7ced' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\main.footer.tpl',
      1 => 1332681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3354fafdfce855a33-70501123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdfcfed05b8_91600002',
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdfcfed05b8_91600002')) {function content_4fafdfcfed05b8_91600002($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bodyclass'=>"full"), 0, '3354fafdfce855a33-70501123');
content_4fafe0b3b24e33_52382361($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value){?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3354fafdfce855a33-70501123');
content_4fafe0b3ec3121_38162076($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3354fafdfce855a33-70501123');
content_4fafe0b44fdf46_29117026($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<?php if (!empty($_smarty_tpl->tpl_vars['Queue']->value)){?>
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		<?php  $_smarty_tpl->tpl_vars['List'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['List']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Queue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['List']->iteration=0;
 $_smarty_tpl->tpl_vars['List']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['List']->key => $_smarty_tpl->tpl_vars['List']->value){
$_smarty_tpl->tpl_vars['List']->_loop = true;
 $_smarty_tpl->tpl_vars['List']->iteration++;
 $_smarty_tpl->tpl_vars['List']->index++;
 $_smarty_tpl->tpl_vars['List']->first = $_smarty_tpl->tpl_vars['List']->index === 0;
?>
		<?php $_smarty_tpl->tpl_vars['ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['List']->value['element'], true, 0);?>
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
.: 
				<?php if (!($_smarty_tpl->tpl_vars['isBusy']->value['research']&&($_smarty_tpl->tpl_vars['ID']->value==6||$_smarty_tpl->tpl_vars['ID']->value==31))&&!($_smarty_tpl->tpl_vars['isBusy']->value['shipyard']&&($_smarty_tpl->tpl_vars['ID']->value==15||$_smarty_tpl->tpl_vars['ID']->value==21))&&$_smarty_tpl->tpl_vars['RoomIsOk']->value&&$_smarty_tpl->tpl_vars['CanBuildElement']->value&&$_smarty_tpl->tpl_vars['BuildInfoList']->value[$_smarty_tpl->tpl_vars['ID']->value]['buyable']){?>
				<form class="build_form" action="game.php?page=buildings" method="post">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
<?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']){?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
<?php }?></button>
				</form>
				<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
 <?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
<?php }?><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['List']->first){?>
				<br><br><div id="progressbar" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['resttime'];?>
"></div>
			</td>
			<td>
				<div id="time" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['time'];?>
"><br></div>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }else{ ?>
			</td>
			<td>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }?>
				<br><span style="color:lime" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['endtime'];?>
" class="timer"><?php echo $_smarty_tpl->tpl_vars['List']->value['display'];?>
</span>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
<?php }?>
<table style="width:760px">
	<?php  $_smarty_tpl->tpl_vars['Element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Element']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BuildInfoList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->key => $_smarty_tpl->tpl_vars['Element']->value){
$_smarty_tpl->tpl_vars['Element']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['Element']->key;
?>
	<tr>
		<td rowspan="2" style="width:120px;">
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
" width="120" height="120">
			</a>
		</td>
		<th>
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
</a><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']>0){?> (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_lvl'];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];?>
<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel']!=255){?>/<?php echo $_smarty_tpl->tpl_vars['Element']->value['maxLevel'];?>
<?php }?>)<?php }?>
		</th>
	</tr>
	<tr>
		<td>
			<table style="width:100%">
				<tr>
					<td class="transparent left" style="width:90%;padding:10px;"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['shortDescription'][$_smarty_tpl->tpl_vars['ID']->value];?>
</p>
					<p><?php  $_smarty_tpl->tpl_vars['RessAmount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RessAmount']->_loop = false;
 $_smarty_tpl->tpl_vars['RessID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['costRessources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RessAmount']->key => $_smarty_tpl->tpl_vars['RessAmount']->value){
$_smarty_tpl->tpl_vars['RessAmount']->_loop = true;
 $_smarty_tpl->tpl_vars['RessID']->value = $_smarty_tpl->tpl_vars['RessAmount']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['RessID']->value];?>
: <b><span style="color:<?php if ($_smarty_tpl->tpl_vars['Element']->value['costOverflow'][$_smarty_tpl->tpl_vars['RessID']->value]==0){?>lime<?php }else{ ?>red<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['RessAmount']->value);?>
</span></b>
					<?php } ?></p></td>
					<td class="transparent" style="vertical-align:middle;width:100px">
					<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel']==$_smarty_tpl->tpl_vars['Element']->value['level']){?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_maxlevel'];?>
</span>
					<?php }elseif(($_smarty_tpl->tpl_vars['isBusy']->value['research']&&($_smarty_tpl->tpl_vars['ID']->value==6||$_smarty_tpl->tpl_vars['ID']->value==31))||($_smarty_tpl->tpl_vars['isBusy']->value['shipyard']&&($_smarty_tpl->tpl_vars['ID']->value==15||$_smarty_tpl->tpl_vars['ID']->value==21))){?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_working'];?>
</span>
					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['RoomIsOk']->value){?>
							<?php if ($_smarty_tpl->tpl_vars['CanBuildElement']->value&&$_smarty_tpl->tpl_vars['Element']->value['buyable']){?>
							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
								<button type="submit" class="build_submit"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']==0){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];?>
<?php echo $_smarty_tpl->tpl_vars['Element']->value['level']+1;?>
<?php }?></button>
							</form>
							<?php }else{ ?>
							<span style="color:red"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level']==0){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];?>
<?php echo $_smarty_tpl->tpl_vars['Element']->value['level']+1;?>
<?php }?></span>
							<?php }?>
						<?php }else{ ?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_no_more_fields'];?>
</span>
						<?php }?>
					<?php }?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="margin-bottom:10px;">  
			<table style="width:100%">
				<tr>
					<td class="transparent left">
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_remaining'];?>
<br>
						<?php  $_smarty_tpl->tpl_vars['ResCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ResCount']->_loop = false;
 $_smarty_tpl->tpl_vars['ResType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['costOverflow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ResCount']->key => $_smarty_tpl->tpl_vars['ResCount']->value){
$_smarty_tpl->tpl_vars['ResCount']->_loop = true;
 $_smarty_tpl->tpl_vars['ResType']->value = $_smarty_tpl->tpl_vars['ResCount']->key;
?>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ResType']->value];?>
: <span style="font-weight:700"><?php echo pretty_number($_smarty_tpl->tpl_vars['ResCount']->value);?>
</span><br>
						<?php } ?>
						<br>
					</td>
					<td class="transparent right">
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fgf_time'];?>

					</td>
				</tr>
				<tr>		
					<td class="transparent left" style="width:68%">
						<?php if (!empty($_smarty_tpl->tpl_vars['Element']->value['infoEnergy'])){?>
							<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_next_level'];?>
<br>
							<?php echo $_smarty_tpl->tpl_vars['Element']->value['infoEnergy'];?>
<br>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['Element']->value['level']>0){?>
							<?php if ($_smarty_tpl->tpl_vars['ID']->value==43){?><a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_jump_gate_action'];?>
</a><?php }?>
							<?php if (($_smarty_tpl->tpl_vars['ID']->value==44&&!$_smarty_tpl->tpl_vars['HaveMissiles']->value)||$_smarty_tpl->tpl_vars['ID']->value!=44){?><br><a class="tooltip_sticky" data-tooltip-content="<table style='width:300px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_price_for_destroy'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];?>
</th></tr><?php  $_smarty_tpl->tpl_vars['ResCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ResCount']->_loop = false;
 $_smarty_tpl->tpl_vars['ResType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Element']->value['destroyRessources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ResCount']->key => $_smarty_tpl->tpl_vars['ResCount']->value){
$_smarty_tpl->tpl_vars['ResCount']->_loop = true;
 $_smarty_tpl->tpl_vars['ResType']->value = $_smarty_tpl->tpl_vars['ResCount']->key;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ResType']->value];?>
</td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['ResCount']->value);?>
</td></tr><?php } ?><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_destroy_time'];?>
</td><td><?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['destroyTime']);?>
</td></tr><tr><td colspan='2'><form action='game.php?page=buildings' method='post' class='build_form'><input type='hidden' name='cmd' value='destroy'><input type='hidden' name='building' value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'><button type='submit' class='build_submit onlist'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
</button></form></td></tr></table>"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
</a><?php }?>
						<?php }else{ ?>
							&nbsp;
						<?php }?>
					</td>
					<td class="transparent right" style="white-space:nowrap;">
						<?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['elementTime']);?>

					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<?php } ?>
</table>
</div>
<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3354fafdfce855a33-70501123');
content_4fafe0b5155c06_30950196($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:26:27
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe0b3b24e33_52382361')) {function content_4fafe0b3b24e33_52382361($_smarty_tpl) {?><!DOCTYPE html>

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
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
 - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
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
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
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
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:26:27
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe0b3ec3121_38162076')) {function content_4fafe0b3ec3121_38162076($_smarty_tpl) {?><div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog">Changelog</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
		<?php if (isModulAvalible(@MODULE_IMPERIUM)){?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_RESEARCH)){?><li><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_BUILDING)){?><li><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_SHIPYARD_FLEET)){?><li><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_SHIPYARD_DEFENSIVE)){?><li><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_OFFICIER)||isModulAvalible(@MODULE_DMEXTRAS)){?><li><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_TRADER)){?><li><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_FLEET_TRADER)){?><li><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_TRADER)){?><li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_TECHTREE)){?><li><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_RESSOURCE_LIST)){?><li><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></li><?php }?>
		<li class="menucat2-head"></li>
		<?php if (isModulAvalible(@MODULE_GALAXY)){?><li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_ALLIANCE)){?><li><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></li><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['forum_url']->value)){?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_STATISTICS)){?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_RECORDS)){?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_BATTLEHALL)){?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_SEARCH)){?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_CHAT)){?><li><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_SUPPORT)){?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
		<li><a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a></li>
		<?php if (isModulAvalible(@MODULE_BANLIST)){?><li><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a></li><?php }?>
		<li><a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a></li>
		<?php if (isModulAvalible(@MODULE_SIMULATOR)){?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>

		<li class="menucat3-head"></li>
		<?php if (isModulAvalible(@MODULE_MESSAGES)){?><li><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];?>
<?php if ($_smarty_tpl->tpl_vars['new_message']->value>0){?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_NOTICE)){?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModulAvalible(@MODULE_BUDDYLIST)){?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value>0){?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:26:28
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe0b44fdf46_29117026')) {function content_4fafe0b44fdf46_29117026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\Server\\xampp\\htdocs\\2moons-1svn\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
						<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg" alt=""> 
					</td>
					<td id="planetSelectorWrapper">
						<select id="planetSelector">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PlanetSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['current_pid']->value),$_smarty_tpl);?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/metall.gif" alt=""></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/kristall.gif" alt=""></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/deuterium.gif" alt=""></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/darkmatter.gif" alt=""></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/energie.gif" alt=""></td>
								</tr>
								<tr>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
</td>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
</td>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
</td>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][921];?>
</td>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][911];?>
</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value){?>
								<tr>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
" id="current_metal"><?php echo shortly_number($_smarty_tpl->tpl_vars['metal']->value);?>
</td>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
" id="current_crystal"><?php echo shortly_number($_smarty_tpl->tpl_vars['crystal']->value);?>
</td>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
" id="current_deuterium"><?php echo shortly_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
</td>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['darkmatter']->value);?>
" id="current_darkmatter"><?php echo shortly_number($_smarty_tpl->tpl_vars['darkmatter']->value);?>
 </td>
									<td class="res_current tooltip" name="<?php echo pretty_number(($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value));?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['energy']->value);?>
"><span<?php if ($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value<0){?> style="color:red"<?php }?>><?php echo shortly_number($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value);?>
&nbsp;/&nbsp;<?php echo shortly_number($_smarty_tpl->tpl_vars['energy']->value);?>
</span></td>
								</tr>
								<tr>
									<td class="res_max tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal_max']->value);?>
" id="max_metal"><?php echo shortly_number($_smarty_tpl->tpl_vars['metal_max']->value);?>
</td>
									<td class="res_max tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal_max']->value);?>
" id="max_crystal"><?php echo shortly_number($_smarty_tpl->tpl_vars['crystal_max']->value);?>
</td>
									<td class="res_max tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium_max']->value);?>
" id="max_deuterium"><?php echo shortly_number($_smarty_tpl->tpl_vars['deuterium_max']->value);?>
</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php }else{ ?>
								<tr>
									<td class="res_current" id="current_metal"><?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
</td>
									<td class="res_current" id="current_crystal"><?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
</td>
									<td class="res_current" id="current_deuterium"><?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
</td>
									<td class="res_current" id="current_darkmatter"><?php echo pretty_number($_smarty_tpl->tpl_vars['darkmatter']->value);?>
 </td>
									<td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value<0){?> style="color:red"<?php }?>><?php echo pretty_number(($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value));?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['energy']->value);?>
</span></td>
								</tr>
								<tr>
									<td class="res_max" id="max_metal"><?php echo pretty_number($_smarty_tpl->tpl_vars['metal_max']->value);?>
</td>
									<td class="res_max" id="max_crystal"><?php echo pretty_number($_smarty_tpl->tpl_vars['crystal_max']->value);?>
</td>
									<td class="res_max" id="max_deuterium"><?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium_max']->value);?>
</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<script type="text/javascript">
		var resourceTickerMetal = {
			available: <?php echo $_smarty_tpl->tpl_vars['metal']->value;?>
,
			limit: [0, <?php echo $_smarty_tpl->tpl_vars['js_metal_max']->value;?>
],
			production: <?php echo $_smarty_tpl->tpl_vars['js_metal_hr']->value;?>
,
			valueElem: "current_metal"
		};
		var resourceTickerCrystal = {
			available: <?php echo $_smarty_tpl->tpl_vars['crystal']->value;?>
,
			limit: [0, <?php echo $_smarty_tpl->tpl_vars['js_crystal_max']->value;?>
],
			production: <?php echo $_smarty_tpl->tpl_vars['js_crystal_hr']->value;?>
,
			valueElem: "current_crystal"
		};
		var resourceTickerDeuterium = {
			available: <?php echo $_smarty_tpl->tpl_vars['deuterium']->value;?>
,
			limit: [0, <?php echo $_smarty_tpl->tpl_vars['js_deuterium_max']->value;?>
],
			production: <?php echo $_smarty_tpl->tpl_vars['js_deuterium_hr']->value;?>
,
			valueElem: "current_deuterium"
		};
		
		var shortlyNumber	= <?php echo json_encode($_smarty_tpl->tpl_vars['shortlyNumber']->value);?>

		var vacation = <?php echo $_smarty_tpl->tpl_vars['vmode']->value;?>
;
		if (!vacation) {
			resourceTicker(resourceTickerMetal, true);
			resourceTicker(resourceTickerCrystal, true);
			resourceTicker(resourceTickerDeuterium, true);
		}
		</script>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['closed']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['closed']->value;?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['delete']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['vacation']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tn_vacation_mode'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>
</div>
	<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:26:29
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe0b5155c06_30950196')) {function content_4fafe0b5155c06_30950196($_smarty_tpl) {?><div class="clear"></div>
<div id="footer">
	<?php echo $_smarty_tpl->tpl_vars['cron']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['ga_active']->value){?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['debug']->value==1){?>
	<script type="text/javascript">
	onerror = handleErr;
	</script>
	<?php }?>
</div>
</body>
</html><?php }} ?>