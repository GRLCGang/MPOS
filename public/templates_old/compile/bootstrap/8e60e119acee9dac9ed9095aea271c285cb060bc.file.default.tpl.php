<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:47:48
         compiled from "/var/www/html/MPOS/templates/bootstrap/statistics/blockfinder/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14125072735aa87134dcc182-45509616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e60e119acee9dac9ed9095aea271c285cb060bc' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/statistics/blockfinder/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14125072735aa87134dcc182-45509616',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87134ddb7d8_70407969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87134ddb7d8_70407969')) {function content_5aa87134ddb7d8_70407969($_smarty_tpl) {?><div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('SHORT'=>true), 0);?>

<?php }?>
</div><?php }} ?>
