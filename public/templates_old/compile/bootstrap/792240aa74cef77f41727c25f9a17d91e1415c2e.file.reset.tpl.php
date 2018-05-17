<?php /* Smarty version Smarty-3.1.16, created on 2018-03-25 04:33:24
         compiled from "/var/www/html/MPOS/templates/mail/pin/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12390835415ab68be453dcd3-81157891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792240aa74cef77f41727c25f9a17d91e1415c2e' => 
    array (
      0 => '/var/www/html/MPOS/templates/mail/pin/reset.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12390835415ab68be453dcd3-81157891',
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
  'unifunc' => 'content_5ab68be454ec46_89804927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab68be454ec46_89804927')) {function content_5ab68be454ec46_89804927($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a PIN reset through our online form.</p>
<p>Randomly Generated PIN: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['pin'];?>
</p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>
