<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:26
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\page.overview.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222524fafdfc2b173d6-30671151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0172aa746e0c73ee3be780f352b7b5f933b4f318' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\page.overview.default.tpl',
      1 => 1332681484,
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
  'nocache_hash' => '222524fafdfc2b173d6-30671151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdfc428b764_50751150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdfc428b764_50751150')) {function content_4fafdfc428b764_50751150($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bodyclass'=>"full"), 0, '222524fafdfc2b173d6-30671151');
content_4fafdfc2be7998_99568944($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '222524fafdfc2b173d6-30671151');
content_4fafdfc30ad009_37048802($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '222524fafdfc2b173d6-30671151');
content_4fafdfc36908f5_12202253($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<table class="table519">
	<tr>
		<th colspan="3"><a href="#" onclick="return Dialog.PlanetAction();" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planetmenu'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planet'];?>
 "<span class="planetname"><?php echo $_smarty_tpl->tpl_vars['planetname']->value;?>
</span>"</a> (<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
)</th>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['messages']->value){?>
	<tr>
		<td colspan="3"><a href="?page=messages"><?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
</a></td>
	</tr>
	<?php }?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_server_time'];?>
</td>
		<td colspan="2" class="servertime"><?php echo $_smarty_tpl->tpl_vars['servertime']->value;?>
</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['is_news']->value){?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_news'];?>
</td><td colspan="2"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</td>
	</tr>
	<?php }?>
	<tr>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_admins_online'];?>
</td>
		<td colspan="2"><?php  $_smarty_tpl->tpl_vars['Name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Name']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AdminsOnline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['Name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['Name']->key => $_smarty_tpl->tpl_vars['Name']->value){
$_smarty_tpl->tpl_vars['Name']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['Name']->key;
 $_smarty_tpl->tpl_vars['Name']->index++;
 $_smarty_tpl->tpl_vars['Name']->first = $_smarty_tpl->tpl_vars['Name']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['Name']->first){?>&nbsp;&bull;&nbsp;<?php }?><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</a><?php }
if (!$_smarty_tpl->tpl_vars['Name']->_loop) {
?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_no_admins_online'];?>
<?php } ?></td>
	</tr>
	<?php if (!empty($_smarty_tpl->tpl_vars['chatOnline']->value)){?>
	<tr>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_chat_online'];?>
</td>
		<td colspan="2"><?php  $_smarty_tpl->tpl_vars['Name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chatOnline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['Name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['Name']->key => $_smarty_tpl->tpl_vars['Name']->value){
$_smarty_tpl->tpl_vars['Name']->_loop = true;
 $_smarty_tpl->tpl_vars['Name']->index++;
 $_smarty_tpl->tpl_vars['Name']->first = $_smarty_tpl->tpl_vars['Name']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['Name']->first){?>,&nbsp;<?php }?><a href="?page=chat"><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</a><?php } ?></td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Teamspeak']->value){?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_teamspeak'];?>
</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['Teamspeak']->value;?>
</td>
	</tr>
	<?php }?>
	<tr>
		<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_events'];?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['fleet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fleet']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fleets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fleet']->key => $_smarty_tpl->tpl_vars['fleet']->value){
$_smarty_tpl->tpl_vars['fleet']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['fleet']->key;
?>
	<tr>
		<td id="fleettime_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="fleets" data-fleet-end-time="<?php echo $_smarty_tpl->tpl_vars['fleet']->value['returntime'];?>
" data-fleet-time="<?php echo $_smarty_tpl->tpl_vars['fleet']->value['resttime'];?>
">-</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['fleet']->value['text'];?>
</td>
	</tr>
	<?php } ?>
	<tr>
		<td><?php if ($_smarty_tpl->tpl_vars['Moon']->value){?><a href="game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->tpl_vars['Moon']->value['id'];?>
&amp;re=0" title="<?php echo $_smarty_tpl->tpl_vars['Moon']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/mond.jpg" height="50" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['Moon']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_moon'];?>
)"></a><br><?php echo $_smarty_tpl->tpl_vars['Moon']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_moon'];?>
)<?php }else{ ?>&nbsp;<?php }?></td>
		<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/<?php echo $_smarty_tpl->tpl_vars['planetimage']->value;?>
.jpg" height="200" width="200" alt="<?php echo $_smarty_tpl->tpl_vars['planetname']->value;?>
"><br><?php echo $_smarty_tpl->tpl_vars['build']->value;?>
</td>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['AllPlanets']->value){?>
		<table>
			<?php  $_smarty_tpl->tpl_vars['PlanetRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PlanetRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AllPlanets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['PlanetRow']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['PlanetRow']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['PlanetRow']->key => $_smarty_tpl->tpl_vars['PlanetRow']->value){
$_smarty_tpl->tpl_vars['PlanetRow']->_loop = true;
 $_smarty_tpl->tpl_vars['PlanetRow']->iteration++;
 $_smarty_tpl->tpl_vars['PlanetRow']->last = $_smarty_tpl->tpl_vars['PlanetRow']->iteration === $_smarty_tpl->tpl_vars['PlanetRow']->total;
?>
			<?php if (($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW'])===1){?><tr style="height:20px;"><?php }?>
			<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['name'];?>
<br><a href="game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['name'];?>
"></a><br><?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['build'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['PlanetRow']->last&&$_smarty_tpl->tpl_vars['PlanetRow']->total>1&&($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW'])!==0){?>
			<?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable($_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']-($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']), true, 0);?>
			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<td class="transparent">&nbsp;</td>
			<?php }} ?>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW'])===0){?></tr><?php }?>
			<?php } ?>
		</table>
		<?php }else{ ?>&nbsp;<?php }?>
		</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_diameter'];?>
</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['planet_diameter']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_distance_unit'];?>
 (<a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_developed_fields'];?>
"><?php echo $_smarty_tpl->tpl_vars['planet_field_current']->value;?>
</a> / <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_max_developed_fields'];?>
"><?php echo $_smarty_tpl->tpl_vars['planet_field_max']->value;?>
</a> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_fields'];?>
)</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temperature'];?>
</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_aprox'];?>
 <?php echo $_smarty_tpl->tpl_vars['planet_temp_min']->value;?>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_to'];?>
 <?php echo $_smarty_tpl->tpl_vars['planet_temp_max']->value;?>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_position'];?>
</td>
		<td colspan="2"><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</a></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_points'];?>
</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['rankInfo']->value;?>
</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['ref_active']->value){?>
	<tr>
		<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_reflink'];?>
</th>
	</tr>
	<tr>
		<td colspan="3"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
index.php?ref=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" readonly="readonly" style="width:450px;"></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['RefLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RefLink']->_loop = false;
 $_smarty_tpl->tpl_vars['RefID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RefLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RefLink']->key => $_smarty_tpl->tpl_vars['RefLink']->value){
$_smarty_tpl->tpl_vars['RefLink']->_loop = true;
 $_smarty_tpl->tpl_vars['RefID']->value = $_smarty_tpl->tpl_vars['RefLink']->key;
?>
	<tr>
		<td colspan="2"><a href="#" onclick="return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['RefID']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['RefLink']->value['username'];?>
');"><?php echo $_smarty_tpl->tpl_vars['RefLink']->value['username'];?>
</a></td>
		<td><?php ob_start();?><?php echo pretty_number($_smarty_tpl->tpl_vars['RefLink']->value['points']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
 / <?php echo pretty_number($_smarty_tpl->tpl_vars['ref_minpoints']->value);?>
</td>
	</tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['RefLink']->_loop) {
?>
	<tr>
		<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_noreflink'];?>
</td>
	</tr>
	<?php } ?>
	<?php }?>
</table>
</div>
<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '222524fafdfc2b173d6-30671151');
content_4fafdfc4220047_85315668($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:26
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdfc2be7998_99568944')) {function content_4fafdfc2be7998_99568944($_smarty_tpl) {?><!DOCTYPE html>

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
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
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
buildEndTime	= <?php echo $_smarty_tpl->tpl_vars['buildtime']->value;?>
;
</script>

	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:27
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdfc30ad009_37048802')) {function content_4fafdfc30ad009_37048802($_smarty_tpl) {?><div id="leftmenu">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:27
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdfc36908f5_12202253')) {function content_4fafdfc36908f5_12202253($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\Server\\xampp\\htdocs\\2moons-1svn\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
	<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:22:28
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdfc4220047_85315668')) {function content_4fafdfc4220047_85315668($_smarty_tpl) {?><div class="clear"></div>
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