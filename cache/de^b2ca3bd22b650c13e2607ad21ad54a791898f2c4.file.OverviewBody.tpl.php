<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:41
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\OverviewBody.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130444fafdf9533e5b0-54365262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ca3bd22b650c13e2607ad21ad54a791898f2c4' => 
    array (
      0 => 'E:/Server/xampp/htdocs/2moons-1svn/styles/templates\\adm\\OverviewBody.tpl',
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
  'nocache_hash' => '130444fafdf9533e5b0-54365262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
    'Messages' => 1,
    'Message' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fafdf9578a767_85348557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fafdf9578a767_85348557')) {function content_4fafdf9578a767_85348557($_smarty_tpl) {?><?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '130444fafdf9533e5b0-54365262');
content_4fafdf953d2732_86972478($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<center>
<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_title'];?>
</h1>
<table width="90%" style="border:2px <?php if (empty($_smarty_tpl->tpl_vars['Messages']->value)){?>lime<?php }else{ ?>red<?php }?> solid;text-align:center;font-weight:bold;">
<tr>
    <td class="transparent"><?php  $_smarty_tpl->tpl_vars['Message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Message']->key => $_smarty_tpl->tpl_vars['Message']->value){
$_smarty_tpl->tpl_vars['Message']->_loop = true;
?>
	<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</span><br>
	<?php }
if (!$_smarty_tpl->tpl_vars['Message']->_loop) {
?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_none'];?>
<?php } ?>
	</td>
</tr>
</table>
<br>
<table width="80%">
	<tr>
    	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_overview'];?>
</th>
    </tr>
	<tr>
    	<td style="height:50px" colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_welcome_text'];?>
<br><iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2F2Moons%2F129282307106646&amp;width=292&amp;connections=0&amp;stream=false&amp;header=false&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe></td>
    </tr>
    <tr>
        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_support'];?>
</th>
    </tr>
    <tr>
        <td colspan="2"><a href="http://code.google.com/p/2moons/" target="_blank">Project Homepage</a><br>
        <a href="http://code.google.com/p/2moons/source/list" target="_blank">SVN Revision List</a><br>
		<a href="http://www.titanspace.org/" target="_blank">Offical Betauni</a><br>
		<a href="http://2moons.cc/" target="_blank">2moons.cc - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_forum'];?>
</a></td>
    </tr> 
	<tr>
		<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_donate'];?>
 - Paypal</th>
		<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_donate'];?>
 - Moneybookers</th>
	</tr>
	<tr>
		<td align="center" style="height:110px;">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="CM6PQFUATN7MS">
		<input type="image" src="https://www.paypal.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen - mit PayPal." style="background:transparent;border:0px none;">
		</form>
		</td>
		<td align="center">
		<img src="http://www.moneybookers.com/images/logos/additional_logos/de_donatewith.gif" style="background:transparent;border:0px none;">
		<form action="https://www.moneybookers.com/app/payment.pl" target="_blank">
		<input type="hidden" name="pay_to_email" value="slaver7@gmail.com">
		<input type="hidden" name="recipient_description" value="Donation for 2Moons">
		<input type="hidden" name="return_url_target" value="1">
		<input type="hidden" name="cancel_url_target" value="1">
		<input type="hidden" name="dynamic_descriptor" value="Descriptor">
		<input type="hidden" name="language" value="DE">
		<input type="hidden" name="confirmation_note" value="Thank you for this Donation">
		<input type="hidden" name="detail1_description" value="Donation">
		<input type="hidden" name="detail1_text" value="Thank you for this donation!">
		<input type="hidden" name="rec_period" value="1">
		<input type="hidden" name="rec_grace_period" value="1">
		<input type="hidden" name="rec_cycle" value="day">
		<input type="hidden" name="submit_id" value="Submit">
		<input type="text" name="amount" value="0.00">
		<select name="currency">
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select><br>
		<input type="submit" name="Pay" value="Pay">
		</form>
		</td>
	</tr>
	<tr>
		<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_updates'];?>
</th>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<div id="feed"></div>
		</td>
	</tr> 
	<tr>
		<th colspan="2"><a href="https://www.facebook.com/2Moons.Game"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_news'];?>
</a></th>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<div id="news"></div>
		</td>
	</tr>  
    <tr>
    	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_credits'];?>
</th>
    </tr>
    <tr>
    	<td colspan="2">
            <table align="center">
                <tr>
					<td class="transparent" colspan="3"><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_proyect_leader'];?>
</h3></td>
                </tr>
                <tr>
					<td class="transparent" colspan="3"><h3><a href="http://2moons.cc/user/5-jan/" style="color:red">Jan</a></h3></td>
                </tr>
			</table>
			<div style="width:100%">
				<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_developers'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<a href="http://tracker.2moons.cc/secure/ViewProfile.jspa?name=jan#selectedTab=jira.user.profile.panels:user-profile-summary-panel" style="color:red">Jan</a><br>
								<a href="http://tracker.2moons.cc/secure/ViewProfile.jspa?name=FC92#selectedTab=jira.user.profile.panels:user-profile-summary-panel" style="color:red">FC92</a>
							</td>
						</tr>
					</table>
				</div>
				<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_translator'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<table width="250px;">
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/97-bullet/" target="_blank">BuLLeT</a> / <a href="http://2moons.cc/user/955-royaloss/">RoyalOss</a> / <a href="http://2moons.cc/user/1231-scofield06/">scofield06</a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/us.png" alt="(english)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/529-haloraptor33/" target="_blank">HaloRaptor33</a> / <a href="http://2moons.cc/user/1231-scofield06/">scofield06</a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/fr.png" alt="(french)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/205-idro/" target="_blank">Idro</a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/it.png" alt="(italia)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/100-qwatakayean/" target="_blank">QwataKayean</a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/pt.png" alt="(portuguese)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/98-inquisitorea/" target="_blank">InquisitorEA</a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/ru.png" alt="(russian)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/750-angelus-ira/" target="_blank">angelus_ira</a> / <a href="http://2moons.cc/user/1231-scofield06/">scofield06</a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/es.png" alt="(spanish)">
									</td>
								</tr>
								<tr>
									<td class="transparent">
										<a href="http://2moons.cc/user/853-pandorax/" target="_blank">_pandorax_ </a>
									</td>
									<td class="transparent">
										<img src="styles/images/login/flags/si.png" alt="(slovenian)">
									</td>
								</tr>
								</table>
							</td>
						</tr> 
					</table>
				</div>
				<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_special_thanks'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<table width="250px;">
								<tr>
									<td class="transparent left">Ralf M.</td>
									<td class="transparent left">InquisitorEA</td>
									<td class="transparent left">lucky</td>
								</tr>
								<tr>
									<td class="transparent left">Metusalem</td>
									<td class="transparent left">Meikel</td>
									<td class="transparent left">Phil</td>
								</tr>
								<tr>
									<td class="transparent left">Schnippi</td>
									<td class="transparent left">Vobi</td>
									<td class="transparent left">Sycrog</td>
								</tr>
								<tr>
									<td class="transparent left">Raito</td>
									<td class="transparent left">Chlorel</td>
									<td class="transparent left">e-Zobar</td>
								</tr>
								<tr>
									<td class="transparent left">Flousedid</td>
									<td class="transparent left">&nbsp;</td>
									<td class="transparent left">&nbsp;</td>
								</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
        </td>
    </tr>
</table>
</center>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("feeds", "1");
google.setOnLoadCallback(initialize);
function initialize() {
	var feedControl = new google.feeds.FeedControl();
	feedControl.addFeed("http://code.google.com/feeds/p/2moons/svnchanges/basic", "");
	feedControl.draw(document.getElementById("feed"));
	var feedControl = new google.feeds.FeedControl();
	feedControl.addFeed("https://www.facebook.com/feeds/page.php?id=129282307106646&format=rss20", "");
	feedControl.draw(document.getElementById("news"));
}
</script>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '130444fafdf9533e5b0-54365262');
content_4fafdf9572b4f6_69632891($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 18:21:41
         compiled from "E:/Server/xampp/htdocs/2moons-1svn/styles/templates\adm\overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fafdf953d2732_86972478')) {function content_4fafdf953d2732_86972478($_smarty_tpl) {?><!DOCTYPE html>

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
<?php if ($_valid && !is_callable('content_4fafdf9572b4f6_69632891')) {function content_4fafdf9572b4f6_69632891($_smarty_tpl) {?><?php if (isset($_GET['reload'])){?>
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