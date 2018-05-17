<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:47:45
         compiled from "/var/www/html/MPOS/templates/bootstrap/statistics/round/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15163618255aa87131268846-04049991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f9d048cacdaf991076240e3bc65bbb833af778' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/statistics/round/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15163618255aa87131268846-04049991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa871312857e5_53244368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa871312857e5_53244368')) {function content_5aa871312857e5_53244368($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='prop') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
<?php } else { ?>
   <div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
<?php }?>
<?php }} ?>
