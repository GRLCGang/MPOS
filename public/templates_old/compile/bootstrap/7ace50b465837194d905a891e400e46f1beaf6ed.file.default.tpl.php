<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:27:32
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/dashboard/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7992631025aa87a843f5080-40960289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ace50b465837194d905a891e400e46f1beaf6ed' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/dashboard/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7992631025aa87a843f5080-40960289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87a8440b8b1_11958911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87a8440b8b1_11958911')) {function content_5aa87a8440b8b1_11958911($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/mpos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/registrations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/invitation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
<?php }} ?>
