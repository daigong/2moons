<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:40
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\ShowMenuPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88794fafdf94a40760-02657640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc29d9e67674531d79014f9dfd9a3ef97487e58e' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\ShowMenuPage.tpl',
      1 => 1332681484,
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
  'nocache_hash' => '88794fafdf94a40760-02657640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
    'supportticks' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdf95284369_35851876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdf95284369_35851876')) {function content_4fafdf95284369_35851876($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '88794fafdf94a40760-02657640');
content_4fafdf94a8d9b9_27143480($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<div id="leftmenu">
	<ul id="menu">
		<li style="background-image: url('./styles/theme/gow/img/menu-top.png');height:100px;"></li>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_general'];?>
</span></a></li>
		<?php if (allowedTo('ShowInformationPage')){?><li><a href="?page=infos" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_game_info'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowConfigBasicPage')){?><li><a href="?page=config" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_settings'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowConfigUniPage')){?><li><a href="?page=configuni" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_unisettings'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowChatConfigPage')){?><li><a href="?page=chat" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_chat'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowTeamspeakPage')){?><li><a href="?page=teamspeak" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ts_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowFacebookPage')){?><li><a href="?page=facebook" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_fb_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowModulePage')){?><li><a href="?page=module" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_module'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowStatsPage')){?><li><a href="?page=statsconf" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_stats_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowUpdatePage')){?><li><a href="?page=update" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_update'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowVertifyPage')){?><li><a href="?page=vertify" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vertify'];?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_users_settings'];?>
</span></a></li>
		<?php if (allowedTo('ShowCreatorPage')){?><li><a href="?page=create" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['new_creator_title'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowAccountEditorPage')){?><li><a href="?page=accounteditor" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_add_delete_resources'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowBanPage')){?><li><a href="?page=bans" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ban_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowGiveawayPage')){?><li><a href="?page=giveaway" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_giveaway'];?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_observation'];?>
</span></a></li>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=online&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_connected'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSupportPage')){?><li><a href="?page=support" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_support'];?>
<?php if ($_smarty_tpl->tpl_vars['supportticks']->value!=0){?> (<?php echo $_smarty_tpl->tpl_vars['supportticks']->value;?>
)<?php }?></a></li><?php }?>
		<?php if (allowedTo('ShowActivePage')){?><li><a href="?page=active" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vaild_users'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=p_connect&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_active_planets'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowFlyingFleetPage')){?><li><a href="?page=fleets" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_flying_fleets'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowNewsPage')){?><li><a href="?page=news" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_news'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=users&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_user_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=planet&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_planet_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search&amp;search=moon&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_moon_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowMessageListPage')){?><li><a href="?page=messagelist" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mess_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowAccountDataPage')){?><li><a href="?page=accountdata" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_info_account_page'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><li><a href="?page=search" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_search_page'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowMultiIPPage')){?><li><a href="?page=multiips" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_multiip_page'];?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_tools'];?>
</span></a></li>
		<?php if (allowedTo('ShowLogPage')){?><li><a href="?page=log" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_logs'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSendMessagesPage')){?><li><a href="?page=globalmessage" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_global_message'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowPassEncripterPage')){?><li><a href="?page=password" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_md5_encripter'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowStatUpdatePage')){?><li><a href="?page=statsupdate" target="Hauptframe" onClick=" return confirm('<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mpu_confirmation'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_manual_points_update'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowClearCachePage')){?><li><a href="?page=clearcache" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_clear_cache'];?>
</a></li><?php }?>
		<li style="background-image: url('./styles/theme/gow/img/menu-foot.png');height:30px;"></li>
	</ul>
</div>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '88794fafdf94a40760-02657640');
content_4fafdf95215ef6_16143233($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:40
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf94a8d9b9_27143480')) {function content_4fafdf94a8d9b9_27143480($_smarty_tpl) {?><!DOCTYPE html>

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
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:41
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf95215ef6_16143233')) {function content_4fafdf95215ef6_16143233($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
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