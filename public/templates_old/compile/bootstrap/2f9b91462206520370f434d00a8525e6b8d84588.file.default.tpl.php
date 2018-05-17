<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 00:43:54
         compiled from "/var/www/html/MPOS/templates/bootstrap/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15177385975aa8704a929979-71407745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f9b91462206520370f434d00a8525e6b8d84588' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/login//default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15177385975aa8704a929979-71407745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa8704a93fcc8_67890097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa8704a93fcc8_67890097')) {function content_5aa8704a93fcc8_67890097($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in fa-fw"></i> Login with existing account
      </div>
      <div class="panel-body">
        <div class="form-group">
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus required>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
          </div>
        </div>
      </div>
      <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
      <div class="panel-footer">
        <input type="submit" class="btn btn-success btn-sm" value="Login" >
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a>
      </div>
    </div>
  </form>
</div>
<?php }} ?>
