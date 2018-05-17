<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:24:40
         compiled from "/var/www/html/MPOS/templates/bootstrap/dashboard/worker_information/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15847396805aa879d8e89708-51400777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bba03bb96ddf15e989a593fe5e7050625dcdf34' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/dashboard/worker_information/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15847396805aa879d8e89708-51400777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa879d8e8de76_24116192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa879d8e8de76_24116192')) {function content_5aa879d8e8de76_24116192($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-desktop fa-fw"></i> Worker Information</h4>
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
         <thead>
          <tr>
            <th>Worker</th>
            <th>Hashrate</th>
            <th>Difficulty</th>
          </tr>
          </thead>
          <tbody id="b-workers">
            <td colspan="3" class="text-center">No worker information available</td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
