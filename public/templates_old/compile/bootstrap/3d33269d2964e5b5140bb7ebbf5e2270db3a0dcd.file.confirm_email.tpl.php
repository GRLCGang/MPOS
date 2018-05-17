<?php /* Smarty version Smarty-3.1.16, created on 2018-03-24 17:29:23
         compiled from "/var/www/html/MPOS/templates/mail/register/confirm_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18951157335ab68af3343145-68564655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d33269d2964e5b5140bb7ebbf5e2270db3a0dcd' => 
    array (
      0 => '/var/www/html/MPOS/templates/mail/register/confirm_email.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18951157335ab68af3343145-68564655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'WEBSITENAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ab68af3364fb4_12624184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab68af3364fb4_12624184')) {function content_5ab68af3364fb4_12624184($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have created a new account. In order to complete the registration process please follow this link:</p>
<p>http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=confirm&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p></p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>
