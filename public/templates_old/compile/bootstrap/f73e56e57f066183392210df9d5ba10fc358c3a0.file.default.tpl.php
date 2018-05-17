<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:24:40
         compiled from "/var/www/html/MPOS/templates/bootstrap/dashboard/account_data/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5921094935aa879d8e66e30-07217291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f73e56e57f066183392210df9d5ba10fc358c3a0' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/dashboard/account_data/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5921094935aa879d8e66e30-07217291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa879d8e87796_19540204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa879d8e87796_19540204')) {function content_5aa879d8e87796_19540204($_smarty_tpl) {?>  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-user-md fa-fw"></i> Account Information</h4>
      </div>
      <div class="panel-body no-padding">
        <table class="table table-bordered table-hover table-striped">
          <tr>
            <td colspan="2">
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['no_fees']) {?>
            You are mining without any pool fees applied and
    <?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']>0) {?>
            You are mining at <font color="orange"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']<0.0001) {?><?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], ENT_QUOTES, 'UTF-8', true),"8");?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>%</font> pool fee and
    <?php } else { ?>
            This pool does not apply fees and
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent']>0) {?>
            you donate <font color="green"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'], ENT_QUOTES, 'UTF-8', true);?>
%</font>.
    <?php } else { ?>
            you are not <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit">donating</a>.
    <?php }?>
            </td>
          </tr>
        </table>
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr><th colspan="2"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Account Balance</th></tr>
          </thead>
          <tbody>
            <tr>
              <th>Confirmed</th>
              <th>
                <span class="label label-success pull-right bigfont" id="b-confirmed"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'],"6");?>
</span>
              </th>
            </tr>
            <tr>
              <th>Unconfirmed</th>
              <th>
                <span class="label label-warning pull-right bigfont" id="b-unconfirmed"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['unconfirmed'],"6");?>
</span>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php }} ?>
