<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 00:10:57
         compiled from "/var/www/html/MPOS/templates/bootstrap/password//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16277272235aa9ba112da5c9-19795260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b95c2cff4d50c9f6f045f76e9704219f8a1713d' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/password//default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16277272235aa9ba112da5c9-19795260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9ba112f1750_16451485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9ba112f1750_16451485')) {function content_5aa9ba112f1750_16451485($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" method="POST">
    <input type="hidden" name="page" value="password">
    <input type="hidden" name="action" value="reset">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Password reset</h3>
      </div>
      <div class="panel-body">
        <fieldset>
         <p>If you have an email set for your account, enter your username to get your password reset</p>
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" placeholder="Username or E-mail" name="username" type="text" maxlength="100" autofocus required>
          </div>
        </fieldset>
      </div>
      <div class="panel-footer" style="margin-top: 10px;">
        <input type="submit" class="btn btn-success btn-sm" value="Reset" >
      </div>
    </div>
  </form>
</div>
<?php }} ?>
