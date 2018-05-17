<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:43:59
         compiled from "/var/www/html/MPOS/templates/bootstrap/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17041408455aa8704f0d46d7-14395820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eba436d9f541c4807f48080300b595ca4767a8a' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/statistics/pool/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17041408455aa8704f0d46d7-14395820',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa8704f0e2127_13083377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa8704f0e2127_13083377')) {function content_5aa8704f0e2127_13083377($_smarty_tpl) {?><!-- Wrapper -->
<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
