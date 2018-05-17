<?php /* Smarty version Smarty-3.1.16, created on 2018-03-15 11:17:52
         compiled from "/var/www/html/MPOS/templates/bootstrap/gettingstarted//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1826091195aa9bbb08a23d5-62252148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa02b4f8ff29e11ef34853e2d72b5ced50490730' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/gettingstarted//default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1826091195aa9bbb08a23d5-62252148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'SITESTRATUMURL' => 0,
    'SITESTRATUMPORT' => 0,
    'SITECOINNAME' => 0,
    'SITECOINURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa9bbb0907677_95287733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa9bbb0907677_95287733')) {function content_5aa9bbb0907677_95287733($_smarty_tpl) {?> <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-question fa-fw"></i> Getting Started Guide
        </div>
        <div class="panel-body">
        
    <p>1. <strong>Create account.</strong></p>
      <ul>
        <li>Register <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">here</a>, or login if you already have account</li>
        <li>Create a <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">worker</a> that will be used by the miner to login</li>
      </ul>
    </li>
    <p>2. <strong>Download a miner.</strong></p>
      <ul>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='sha256d') {?>
        <li><em>Intel/ATI/AMD CGMiner Windows:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2-windows.zip" target="_blank">Download here</a></li>
        <li><em>Intel/ATI/AMD CGMiner Linux:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2.tar.bz2" target="_blank">Download Here</a></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>
	<li><em>Intel/ATI/AMD CGMiner (3.7.2) Windows:</em> <a href="https://mega.co.nz/#!iQhlGIxa!mzKOfLY6TpOfvPvWE6JFlWdRgHEoshzm99f1hd3ZdRw" target="_blank">Download here</a></li>	
	<li><em>Intel/ATI/AMD CGMiner (3.7.2) Linux:</em> <a href="http://ck.kolivas.org/apps/cgminer/3.7/cgminer-3.7.0.tar.bz2" target="_blank">Download Here</a></li>	
	<li><em>NVIDIA Cudaminer:</em><a href="https://bitcointalk.org/index.php?topic=167229.0" target="_blank"> Download here</a></li>
	<?php }?>
	<li><em>Intel/ATI/AMD BFGMiner Linux/Windows:</em> <a href="http://bfgminer.org" target="_blank">Download here</a></li>
        <li><em>Fabulous Panda Miner Mac OS X:</em> <a href="http://fabulouspanda.co.uk/macminer/" target="_blank">Download here</a></li>
        <li><em>Minerd CPU Miner Mac/Linux/Windows:</em><a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850" target="_blank"> Download here</a>.</li>
      </ul>
    </li>
    <p>3. <strong>Configure your miner.</strong></p>
    <ul>
      <p>If your using Linux, Then type the following into the console:</p>
      <li>CGMiner</li>
      <pre>./cgminer <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>--scrypt <?php }?>-o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <li>BFGMiner</li>
      <pre>./bfgminer <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>--scrypt <?php }?>-o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <br />
	  <p> If you want to mine on a <strong> Windows Operating System</strong>, then you'll need to create a batch file to start your miner. </p><p> Simply open notepad and then copy and paste the following:</p>
      <li>CGMiner</li>
      <pre>cgminer <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>--scrypt <?php }?>-o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <li>BFGMiner</li>
      <pre>bfgminer <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>--scrypt <?php }?>-o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <li>MinerD</li>
      <pre>minerd -a <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>scrypt <?php }?>-t 6 -s 4 -o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>
      <li>Cudaminer For NVIDIA Cards</li>
	  <pre>cudaminer -o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <?php }?>
	  <br />
	  <p> You then need to change "-u Weblogin.Worker -p Worker password" to reflect your own account. Eg, "-u Steve.StevesWorker -p StevesWorkerPassword" then go to "File > Save as" and save the file as "RunMe.bat" in the same folder containing your miners application files. You are now ready to mine, double click on "RunMe.bat" to start mining. If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">here</a></p>
    </ul>
    <p>4. <strong>Create a <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 address to receive payments.</strong></p>
      <ul>
        <li> Downloading the client &amp; block chain: 	Download the <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 client from <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINURL']->value)===null||$tmp==='' ? "http://www.litecoin.org" : $tmp);?>
" target="_blank">here</a>.
          <p>Generate a new address and input it on your account page to receive payments.</p>
        </li>
      </ul>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>
    <p>5. <strong>Advanced CGMiner settings / FAQ</strong></p>
      <ul>
        <li><a href="https://raw.github.com/ckolivas/cgminer/v3.7.2/SCRYPT-README" target="_blank">Scrypt readme</a></li>
        <li>Don't set <b>intensity</b> too high, I=11 is standard and safest. Higher intensity takes more GPU RAM. Check for <b>hardware errors</b> in CGMiner (HW). HW=0 is good, otherwise lower intensity.</li>
        <li>Set shaders according to the readme (or look at your graphic cards specifications). CGMiner uses this value at first run to calculate <b>thread-concurrency</b>. Easiest way to get this optimized is to use same settings as others have used here: <a href="http://litecoin.info/Mining_Hardware_Comparison" target="_blank">here</a>.</li>
        <li>There's also an interesting project which gives you a GUI for CGMiner. Windows only it seems.</li>
        <li>Here's a great <a href="https://docs.google.com/document/d/1Gw7YPYgMgNNU42skibULbJJUx_suP_CpjSEdSi8_z9U/preview?sle=true" target="_blank">guide</a> how to get up and running with Xubuntu.</li>
      </ul>
    </li>
    <?php }?>
        </div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
  </div>
<?php }} ?>
