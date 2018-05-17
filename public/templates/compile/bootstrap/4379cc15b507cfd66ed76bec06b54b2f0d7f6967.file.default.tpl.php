<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:38:13
         compiled from "/var/www/html/MPOS/templates/bootstrap/home//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6570461495aa86ef56f4362-60900619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4379cc15b507cfd66ed76bec06b54b2f0d7f6967' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/home//default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6570461495aa86ef56f4362-60900619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa86ef56fd555_45984253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa86ef56fd555_45984253')) {function content_5aa86ef56fd555_45984253($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['newsstyle'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("home/news_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ("home/news_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
