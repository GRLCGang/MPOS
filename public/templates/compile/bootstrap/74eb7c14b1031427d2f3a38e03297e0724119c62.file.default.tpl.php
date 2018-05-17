<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:24:40
         compiled from "/var/www/html/MPOS/templates/bootstrap/dashboard/overview/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6879700125aa879d8db2bb2-73968257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74eb7c14b1031427d2f3a38e03297e0724119c62' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/dashboard/overview/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6879700125aa879d8db2bb2-73968257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa879d8dbf053_39523803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa879d8dbf053_39523803')) {function content_5aa879d8dbf053_39523803($_smarty_tpl) {?>  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-dot-circle-o fa-fw"></i> Pool Information
        </h4>
      </div>
      <div class="panel-footer">
       <div class="row">
          
          <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['enabled']) {?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/_with_price_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php } else { ?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/_without_price_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php }?>
       </div>
      </div>
    </div>
  </div>
<?php }} ?>
