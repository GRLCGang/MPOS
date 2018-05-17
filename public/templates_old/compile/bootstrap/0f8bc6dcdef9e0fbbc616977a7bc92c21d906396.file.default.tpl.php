<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:47:56
         compiled from "/var/www/html/MPOS/templates/bootstrap/statistics/donors/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16274009155aa8713c7663f5-94417239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8bc6dcdef9e0fbbc616977a7bc92c21d906396' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/statistics/donors/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16274009155aa8713c7663f5-94417239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DONORS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa8713c786952_16789843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa8713c786952_16789843')) {function content_5aa8713c786952_16789843($_smarty_tpl) {?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-bitbucket fa-fw"></i> Pool Donors
      </div>
      <div class="panel-body table-responsive">
      <table class="table table-striped table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['DONORS']->value) {?>datatable<?php }?>">
        <thead>
          <tr>
            <th>Name</th>
            <th>%</th>
            <th><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Total</th>
          </tr>
        </thead>
        <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['donor'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['name'] = 'donor';
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DONORS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['donor']['total']);
?>
          <tr>
            <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['username'];?>
<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['donate_percent'];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['DONORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['donor']['index']]['donation'],"2");?>
</td>
          </tr>
<?php endfor; else: ?>
          <tr>
            <td colspan="3">No confirmed donations yet, please be patient!</td>
          </tr>
<?php endif; ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
