<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:27:32
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/dashboard/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14083953605aa87a8445d6e0-22854642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1db722c4087fb2af8ee77938134c945440d72189' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/dashboard/user.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14083953605aa87a8445d6e0-22854642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO' => 0,
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87a8446dd98_38844121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87a8446dd98_38844121')) {function content_5aa87a8446dd98_38844121($_smarty_tpl) {?><div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-user fa-fw"></i> Users
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Total</th>
              <th>Active</th>
              <th>Locked</th>
              <th>Admins</th>
              <th>No Fees</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
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
        <i class="fa fa-sign-in fa-fw"></i> Logins
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>24 hours</th>
              <th>7 days</th>
              <th>1 month</th>
              <th>6 months</th>
              <th>1 year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div><?php }} ?>
