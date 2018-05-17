<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:47:19
         compiled from "/var/www/html/MPOS/templates/bootstrap/statistics/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4187605285aa8711783de71-70562158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8488d1c11349eac51f8e48b9249bccb74e392588' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/statistics/blocks/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4187605285aa8711783de71-70562158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87117849dc0_42299979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87117849dc0_42299979')) {function content_5aa87117849dc0_42299979($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_shares_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_overview_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/blocks_found_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
