<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 11:15:58
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/wallet/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16126685265aa9bb3e09d6c2-43988479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73fd63351f47e07ecac8c73dc0a6285cad05dca3' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/wallet/status.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16126685265aa9bb3e09d6c2-43988479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COININFO' => 0,
    'ADDRESSCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9bb3e0b40b5_93030719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9bb3e0b40b5_93030719')) {function content_5aa9bb3e0b40b5_93030719($_smarty_tpl) {?>  <div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> Wallet Status
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <th>Version</th>
            <th>Protocol Version</th>
            <th>Wallet Version</th>
            <th>Peers</th>
            <th>Status</th>
            <th>Blocks</th>
            <th>Accounts</th>
          </thead>
          <tbody>
            <tr>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['version'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['protocolversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['walletversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['connections'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><font color="<?php if ($_smarty_tpl->tpl_vars['COININFO']->value['errors']) {?>red<?php } else { ?>green<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['errors'])===null||$tmp==='' ? "OK" : $tmp);?>
</font></td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['blocks'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['ADDRESSCOUNT']->value;?>
</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
