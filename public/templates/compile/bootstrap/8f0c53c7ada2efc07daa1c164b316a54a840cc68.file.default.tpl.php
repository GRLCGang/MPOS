<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:29:32
         compiled from "/var/www/html/MPOS/templates/bootstrap/account/edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9909946645aa87afca47448-34968384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0c53c7ada2efc07daa1c164b316a54a840cc68' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/account/edit/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9909946645aa87afca47448-34968384',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87afca57909_90565363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87afca57909_90565363')) {function content_5aa87afca57909_90565363($_smarty_tpl) {?><div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("account/edit/detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("account/edit/password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("account/edit/cashout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("account/edit/resetpin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
