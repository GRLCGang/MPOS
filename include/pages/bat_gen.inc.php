<?php
$defflip = (!cfip()) ? exit(header('HTTP/1.1 401 Unauthorized')) : 1;

if ($user->isAuthenticated()) {

	$aWorkers = $worker->getWorkers($_SESSION['USERDATA']['id']);
    if (!$aWorkers) 
	{
		$_SESSION['POPUP'][] = array('CONTENT' => 'You have no workers configured. Please add a <a href="' . $smarty->server['SCRIPT_NAME'] . '?page=account&action=workers">worker</a> before generating a batch file.', 'TYPE' => 'alert alert-danger');
	}

	} 
// Tempalte specifics
$smarty->assign('WORKERS', $aWorkers);
$smarty->assign("CONTENT", "default.tpl");
