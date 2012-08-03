<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:40:10
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\page.fleetStep1.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324804fafe3ea83d0e1-77844332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a79a2a4ae637974bad758e8228e176368d90cdbc' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\game\\page.fleetStep1.default.tpl',
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
  'nocache_hash' => '324804fafe3ea83d0e1-77844332',
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
  'unifunc' => 'content_4fafe3ec012448_28812943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafe3ec012448_28812943')) {function content_4fafe3ec012448_28812943($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\Server\\xampp\\htdocs\\2moons-1svn\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bodyclass'=>"full"), 0, '324804fafe3ea83d0e1-77844332');
content_4fafe3ea887923_29899319($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '324804fafe3ea83d0e1-77844332');
content_4fafe3eac24d24_73932333($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '324804fafe3ea83d0e1-77844332');
content_4fafe3eb25e1c0_97492564($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<form action="game.php?page=fleetStep2" method="post" onsubmit="return CheckTarget()" id="form">
	<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
	<input type="hidden" name="fleet_group" value="0">
	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_fleet'];?>
</th>
		</tr>
		<tr style="height:20px;">
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_destiny'];?>
</td>
			<td>
				<input type="text" id="galaxy" name="galaxy" size="3" maxlength="2" onkeyup="updateVars()" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
">
				<input type="text" id="system" name="system" size="3" maxlength="3" onkeyup="updateVars()" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">
				<input type="text" id="planet" name="planet" size="3" maxlength="2" onkeyup="updateVars()" value="<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
">
				<select id="type" name="type" onchange="updateVars()">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['typeSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['type']->value),$_smarty_tpl);?>

				</select>
			</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fleet_speed'];?>
</td>
			<td>
				<select id="speed" name="speed" onChange="updateVars()">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['speedSelect']->value),$_smarty_tpl);?>

				</select> %
			</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_distance'];?>
</td>
			<td id="distance">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_time'];?>
</th>
			<td id="duration">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_arrival'];?>
</th>
			<td id="arrival">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_return'];?>
</th>
			<td id="return">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fuel_consumption'];?>
</td>
			<td id="consumption">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_max_speed'];?>
</td>
			<td id="maxspeed">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_cargo_capacity'];?>
</td>
			<td id="storage">-</td>
		</tr>
	</table>
	<?php if (isModulAvalible(@MODULE_SHORTCUTS)){?>
	<table class="table519 shortcut" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut'];?>
 (<a href="#" onclick="EditShortcuts();return false" class="shortcut-link-edit shortcut-link"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_edition'];?>
</a><a href="#" onclick="SaveShortcuts();return false" class="shortcut-edit"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_save'];?>
</a>)</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['shortcutRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shortcutRow']->_loop = false;
 $_smarty_tpl->tpl_vars['shortcutID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shortcutList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['shortcutRow']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['shortcutRow']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['shortcutRow']->key => $_smarty_tpl->tpl_vars['shortcutRow']->value){
$_smarty_tpl->tpl_vars['shortcutRow']->_loop = true;
 $_smarty_tpl->tpl_vars['shortcutID']->value = $_smarty_tpl->tpl_vars['shortcutRow']->key;
 $_smarty_tpl->tpl_vars['shortcutRow']->iteration++;
 $_smarty_tpl->tpl_vars['shortcutRow']->last = $_smarty_tpl->tpl_vars['shortcutRow']->iteration === $_smarty_tpl->tpl_vars['shortcutRow']->total;
?>
			<?php if (($_smarty_tpl->tpl_vars['shortcutRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'])===1){?><tr style="height:20px;" class="shortcut-row"><?php }?>			
			<td style="width:<?php echo 100/$_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'];?>
%" class="shortcut-colum shortcut-isset">
				<div class="shortcut-link">
					<a href="javascript:setTarget(<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['galaxy'];?>
,<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['system'];?>
,<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['planet'];?>
,<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['type'];?>
);updateVars();"><?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['shortcutRow']->value['type']==1){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_planet_shortcut'];?>
<?php }elseif($_smarty_tpl->tpl_vars['shortcutRow']->value['type']==2){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_debris_shortcut'];?>
<?php }elseif($_smarty_tpl->tpl_vars['shortcutRow']->value['type']==3){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_moon_shortcut'];?>
<?php }?> [<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['planet'];?>
]</a>
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
][name]" value="<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['name'];?>
">
					<div class="shortcut-delete" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_dlte_shortcut'];?>
"></div>
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
][galaxy]" value="<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['galaxy'];?>
" size="3" maxlength="2">:<input type="text" class="shortcut-input" name="shortcut[<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
][system]" value="<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['system'];?>
" size="3" maxlength="3">:<input type="text" class="shortcut-input" name="shortcut[<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
][planet]" value="<?php echo $_smarty_tpl->tpl_vars['shortcutRow']->value['planet'];?>
" size="3" maxlength="2">
					<select class="shortcut-input" name="shortcut[<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
][type]">
						<?php echo smarty_function_html_options(array('selected'=>$_smarty_tpl->tpl_vars['shortcutRow']->value['type'],'options'=>$_smarty_tpl->tpl_vars['typeSelect']->value),$_smarty_tpl);?>

					</select>
				</div>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['shortcutRow']->last&&($_smarty_tpl->tpl_vars['shortcutRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'])!==0){?>
			<?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable($_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1']-($_smarty_tpl->tpl_vars['shortcutRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1']), true, 0);?>
			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<td class="shortcut-colum" style="width:<?php echo 100/$_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'];?>
%">&nbsp;</td>
			<?php }} ?>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['shortcutRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'])===0){?></tr><?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['shortcutRow']->_loop) {
?>
		<tr style="height:20px;" class="shortcut-none">
			<td colspan="<?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_shortcuts'];?>
</td>
		</tr>
		<?php } ?>
		<tr style="height:20px;" class="shortcut-edit shortcut-new">
			<td>
				<div class="shortcut-link">
					
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[][name]" placeholder="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_name'];?>
">
					<div class="shortcut-delete" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_dlte_shortcut'];?>
"></div>
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[][galaxy]" value="" size="3" maxlength="2" placeholder="G" pattern="[0-9]*">:<input type="text" class="shortcut-input" name="shortcut[][system]" value="" size="3" maxlength="3" placeholder="S" pattern="[0-9]*">:<input type="text" class="shortcut-input" name="shortcut[][planet]" value="" size="3" maxlength="2" placeholder="P" pattern="[0-9]*">
					<select class="shortcut-input" name="shortcut[][type]">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['typeSelect']->value),$_smarty_tpl);?>

					</select>
				</div>
			</td>
		</tr>
		<tr style="height:20px;" class="shortcut-edit">
			<td colspan="<?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'];?>
">
				<a href="#" onclick="AddShortcuts();return false"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_add'];?>
</a>
			</td>
		</tr>		
	</table>
	<?php }?>
	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_my_planets'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['ColonyRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ColonyRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colonyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ColonyRow']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['ColonyRow']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ColonyRow']->key => $_smarty_tpl->tpl_vars['ColonyRow']->value){
$_smarty_tpl->tpl_vars['ColonyRow']->_loop = true;
 $_smarty_tpl->tpl_vars['ColonyRow']->iteration++;
 $_smarty_tpl->tpl_vars['ColonyRow']->last = $_smarty_tpl->tpl_vars['ColonyRow']->iteration === $_smarty_tpl->tpl_vars['ColonyRow']->total;
?>
		<?php if (($_smarty_tpl->tpl_vars['ColonyRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1'])===1){?><tr style="height:20px;"><?php }?>
		<td>
			<a href="javascript:setTarget(<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['galaxy'];?>
,<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['system'];?>
,<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['planet'];?>
,<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['type'];?>
);updateVars();"><?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['ColonyRow']->value['type']==3){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_moon_shortcut'];?>
<?php }?> [<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['ColonyRow']->value['planet'];?>
]</a>
		</td>
		<?php if ($_smarty_tpl->tpl_vars['ColonyRow']->last&&($_smarty_tpl->tpl_vars['ColonyRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1'])!==0){?>
		<?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable($_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1']-($_smarty_tpl->tpl_vars['ColonyRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1']), true, 0);?>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?><td>&nbsp;</td><?php }} ?>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['ColonyRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1'])===0){?></tr><?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['ColonyRow']->_loop) {
?>
		<tr style="height:20px;">
			<td colspan="<?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_colony'];?>
</td>
		</tr>
		<?php } ?>	
	</table>
	<?php if ($_smarty_tpl->tpl_vars['ACSList']->value){?>
	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['COLONY_ROWS_ON_FLEET1'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_acs_title'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['ACSRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ACSRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ACSList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ACSRow']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['ACSRow']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ACSRow']->key => $_smarty_tpl->tpl_vars['ACSRow']->value){
$_smarty_tpl->tpl_vars['ACSRow']->_loop = true;
 $_smarty_tpl->tpl_vars['ACSRow']->iteration++;
 $_smarty_tpl->tpl_vars['ACSRow']->last = $_smarty_tpl->tpl_vars['ACSRow']->iteration === $_smarty_tpl->tpl_vars['ACSRow']->total;
?>
		<?php if (($_smarty_tpl->tpl_vars['ACSRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['ACS_ROWS_ON_FLEET1'])===1){?><tr style="height:20px;"><?php }?>
		<tr style="height:20px;">
			<td><a href="javascript:setACSTarget(<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['galaxy'];?>
,<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['system'];?>
,<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['planet'];?>
,<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['planet_type'];?>
,<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['id'];?>
);"><?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['name'];?>
 - [<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['ACSRow']->value['planet'];?>
]</a></td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['ACSRow']->last&&($_smarty_tpl->tpl_vars['ACSRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['ACS_ROWS_ON_FLEET1'])!==0){?>
		<?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable($_smarty_tpl->tpl_vars['themeSettings']->value['ACS_ROWS_ON_FLEET1']-($_smarty_tpl->tpl_vars['ACSRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['ACS_ROWS_ON_FLEET1']), true, 0);?>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?><td>&nbsp;</td><?php }} ?>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['ACSRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['ACS_ROWS_ON_FLEET1'])===0){?></tr><?php }?>
		<?php } ?>
	</table>
	<?php }?>
	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<td><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_continue'];?>
"></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
data			= <?php echo json_encode($_smarty_tpl->tpl_vars['fleetdata']->value);?>
;
shortCutRows	= <?php echo $_smarty_tpl->tpl_vars['themeSettings']->value['SHORTCUT_ROWS_ON_FLEET1'];?>
;
fl_no_shortcuts	= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_shortcuts'];?>
';
</script>
</div>
<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '324804fafe3ea83d0e1-77844332');
content_4fafe3ebf00122_38038384($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:40:10
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe3ea887923_29899319')) {function content_4fafe3ea887923_29899319($_smarty_tpl) {?><!DOCTYPE html>

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
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
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
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:40:10
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe3eac24d24_73932333')) {function content_4fafe3eac24d24_73932333($_smarty_tpl) {?><div id="leftmenu">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:40:11
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe3eb25e1c0_97492564')) {function content_4fafe3eb25e1c0_97492564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\Server\\xampp\\htdocs\\2moons-1svn\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
	<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:40:11
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\game\main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafe3ebf00122_38038384')) {function content_4fafe3ebf00122_38038384($_smarty_tpl) {?><div class="clear"></div>
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