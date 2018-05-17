<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:27:32
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/dashboard/mpos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20089021035aa87a8440daf6-58774205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0467aaa85ec792a4d3581bc7505232eb34eac9f2' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/dashboard/mpos.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20089021035aa87a8440daf6-58774205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VERSION' => 0,
    'CRON_ERROR' => 0,
    'CRON_DISABLED' => 0,
    'WALLET_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87a84459f36_22262942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87a84459f36_22262942')) {function content_5aa87a84459f36_22262942($_smarty_tpl) {?><div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> MPOS Version Information
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Component</th>
              <th>Current</th>
              <th>Installed</th>
              <th>Online</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>MPOS</strong></td>
              <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE'];?>
</font></td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE'];?>
</font>
              </td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE']==$_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CORE']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CORE'];?>
</font>
              </td>
            </tr>
            <tr>
              <td><strong>Config</strong></td>
              <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG'];?>
</font></td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG'];?>
</font>
              </td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG']==$_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CONFIG']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CONFIG'];?>
</font>
              </td>
            </tr>
            <tr>
              <td><strong>Database</strong></td>
              <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB'];?>
</font></td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB'];?>
</font>
              </td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB']==$_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['DB']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['DB'];?>
</font>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-question fa-fw"></i> MPOS Status
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="2">Cronjobs</th>
              <th>Wallet</th>
            </tr>
            <tr>
              <th><strong>Errors</strong></th>
              <th><strong>Disabled</strong></th>
              <th><strong>Errors</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_ERROR']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_ERROR']->value;?>
<?php }?></a>
              </td>
              <td>
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_DISABLED']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_DISABLED']->value;?>
<?php }?></a>
              </td>
              <td>
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['WALLET_ERROR']->value)===null||$tmp==='' ? "None - OK" : $tmp);?>
</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




<?php }} ?>
