<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:27:32
         compiled from "/var/www/html/MPOS/templates/bootstrap/admin/dashboard/invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18181777515aa87a8447b568-78876342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7bb882fcdca566459d302bc3fc83a56567a4d2' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/admin/dashboard/invitation.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18181777515aa87a8447b568-78876342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87a84482cf6_37103564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87a84482cf6_37103564')) {function content_5aa87a84482cf6_37103564($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-users fa-fw"></i> <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=invitations">Invitations</a>
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Total</th>
              <th>Activated</th>
              <th>Outstanding</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
