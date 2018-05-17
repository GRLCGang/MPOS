<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 11:15:57
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/wallet/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11790142465aa9bb3de9ccf5-94567249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e811ffcdaf12905aaa48bb3e3060b160a218282' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/wallet/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11790142465aa9bb3de9ccf5-94567249',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9bb3e06d301_27233245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9bb3e06d301_27233245')) {function content_5aa9bb3e06d301_27233245($_smarty_tpl) {?><div class="row">
  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/balance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/peers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/accounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
