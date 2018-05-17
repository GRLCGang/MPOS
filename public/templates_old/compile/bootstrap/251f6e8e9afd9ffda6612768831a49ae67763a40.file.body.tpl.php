<?php /* Smarty version Smarty-3.1.16, created on 2018-03-30 18:12:53
         compiled from "/var/www/html/MPOS/templates/mail/contactform/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6664476125abde3750277d4-78834012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '251f6e8e9afd9ffda6612768831a49ae67763a40' => 
    array (
      0 => '/var/www/html/MPOS/templates/mail/contactform/body.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6664476125abde3750277d4-78834012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEBSITENAME' => 0,
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5abde375041be1_82002109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abde375041be1_82002109')) {function content_5abde375041be1_82002109($_smarty_tpl) {?><html>
<body>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 Message,</p>
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderName'];?>
 Sent you a message</p>
<p>Senders Email: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderEmail'];?>
</p>
<p>Subject: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderSubject'];?>
</p>
<p>Personal message:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderMessage'];?>
</p>
<p></p>
</body>
</html>
<?php }} ?>
