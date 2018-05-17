<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 11:15:58
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/wallet/transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19514080295aa9bb3e0dc249-16062726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681e7f010a868844efe407e1fe2c3082cf8137da' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/wallet/transactions.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19514080295aa9bb3e0dc249-16062726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TRANSACTIONS' => 0,
    'ARRAY' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9bb3e104af4_04090574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9bb3e104af4_04090574')) {function content_5aa9bb3e104af4_04090574($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/MPOS/public/../include/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/MPOS/public/../include/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/MPOS/public/../include/smarty/libs/plugins/modifier.date_format.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-connectdevelop fa-fw"></i> Last <?php echo count($_smarty_tpl->tpl_vars['TRANSACTIONS']->value);?>
 transactions
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
              <th class="text-center">Account</th>
              <th class="text-center">Address</th>
              <th class="text-center">Category</th>
              <th class="text-right">Amount</th>
              <th class="text-right">Confirmations</th>
              <th class="text-center">Transaction ID</th>
              <th class="text-right">Time</th>
            </tr>
            </thead>
            <tbody>
<?php  $_smarty_tpl->tpl_vars['ARRAY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ARRAY']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TRANSACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ARRAY']->key => $_smarty_tpl->tpl_vars['ARRAY']->value) {
$_smarty_tpl->tpl_vars['ARRAY']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ARRAY']->key;
?>
            <tr>
              <td class="text-center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ARRAY']->value['account'])===null||$tmp==='' ? "Default" : $tmp);?>
</td>
              <td class="text-center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ARRAY']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td class="text-center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['ARRAY']->value['category']);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['ARRAY']->value['amount'],((string)$_smarty_tpl->tpl_vars['PRECISION']->value));?>
</td>
              <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['ARRAY']->value['confirmations'];?>
</td>
              <td class="text-center">
                <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['transactionexplorer']['disabled']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['transactionexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['ARRAY']->value['txid'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ARRAY']->value['txid'],20,"...",false,true);?>
</a>
                <?php } else { ?>
                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ARRAY']->value['txid'],20,"...",false,true);?>

                <?php }?>
              </td>
              <td class="text-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ARRAY']->value['time'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>

            </tr>
<?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
<?php }} ?>
