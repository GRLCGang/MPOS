<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 11:15:58
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/wallet/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9218458705aa9bb3e06f435-64116945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38573204a8644557b654a96182628181fb0aa030' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/wallet/balance.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9218458705aa9bb3e06f435-64116945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BALANCE' => 0,
    'LOCKED' => 0,
    'UNCONFIRMED' => 0,
    'NEWMINT' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9bb3e09b161_31116649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9bb3e09b161_31116649')) {function content_5aa9bb3e09b161_31116649($_smarty_tpl) {?>  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-money fa-fw"></i> Balance Summary
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <tr>
            <td>Wallet Balance</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['BALANCE']->value,"8");?>
</td>
          </tr>
          <tr>
            <td>Locked for users</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['LOCKED']->value,"8");?>
</td>
          </tr>
          <tr>
            <td>Unconfirmed</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['UNCONFIRMED']->value,"8");?>
</td>
          </tr>
<?php if ($_smarty_tpl->tpl_vars['NEWMINT']->value>=0) {?>
          <tr>
            <td>Liquid Assets</td>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['getbalancewithunconfirmed']) {?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value-$_smarty_tpl->tpl_vars['UNCONFIRMED']->value+(($tmp = @$_smarty_tpl->tpl_vars['NEWMINT']->value)===null||$tmp==='' ? "0" : $tmp)),"8");?>
</td>
            <?php } else { ?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value+(($tmp = @$_smarty_tpl->tpl_vars['NEWMINT']->value)===null||$tmp==='' ? "0" : $tmp)),"8");?>
</td>
            <?php }?>
          </tr>
          <tr>
            <td>PoS New Mint</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['NEWMINT']->value,"8");?>
</td>
          </tr>
<?php } else { ?>
          <tr>
            <td>Liquid Assets</td>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['getbalancewithunconfirmed']) {?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value-$_smarty_tpl->tpl_vars['UNCONFIRMED']->value),"8");?>
</td>
            <?php } else { ?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value),"8");?>
</td>
            <?php }?>
          </tr>
<?php }?>
        </table>
      </div>
    </div>
  </div>
<?php }} ?>
