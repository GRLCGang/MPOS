<?php /* Smarty version Smarty-3.1.16, created on 2018-03-14 12:28:08
         compiled from "/var/www/html/MPOS/templates/bootstrap/statistics/graphs/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21211191725aa87aa823fa76-23149993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa83e2d44632bd0503e5660ad1b105a92ee06215' => 
    array (
      0 => '/var/www/html/MPOS/templates/bootstrap/statistics/graphs/default.tpl',
      1 => 1520986531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21211191725aa87aa823fa76-23149993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURMININGSTATS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5aa87aa82518f4_59902402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa87aa82518f4_59902402')) {function content_5aa87aa82518f4_59902402($_smarty_tpl) {?><script>
$(function () {
  var hashChart = Morris.Line({
    element: 'hashrate-area-chart',
    data: <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
,
    xkey: 'time',
    ykeys: ['hashrate'],
    labels: ['Hashrate'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });

  var workersChart = Morris.Line({
    element: 'workers-area-chart',
    data: <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
,
    xkey: 'time',
    ykeys: ['workers'],
    labels: ['Workers'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });

  var shareCharts= Morris.Line({
    element: 'sharerate-area-chart',
    data: <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
,
    xkey: 'time',
    ykeys: ['sharerate'],
    labels: ['Sharerate'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });
});
</script>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Hashrate past 24h
      </div>
      <div class="panel-body">
        <div id="hashrate-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your average hashrate per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Workers past 24h
      </div>
      <div class="panel-body">
        <div id="workers-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your average active workers per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Sharerate past 24h
      </div>
      <div class="panel-body">
        <div id="sharerate-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your share rate per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>
<?php }} ?>
