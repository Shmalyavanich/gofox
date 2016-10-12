<?php
	defined('_JEXEC') or die;
	/*
	$session = JFactory::getSession();
	$session->set('send_params', $params);
	
	$message_items['phone'] = JText::_('MOD_REQUESTCALL_MESSAGEITEM_PHONE');
	if ($params->get('show_send_time'))
		$message_items['send_time'] = JText::_('MOD_REQUESTCALL_MESSAGEITEM_DATETIME');
	
	$session->set('message_items', $message_items);
	*/
	//$_SESSION['email_admin'] = $params->get('email_admin');
	/*echo '<div class="uk-position-absolute">';
	print_r($_SESSION);
	echo '</div>';*/
	
	$email = str_replace('@', ',', $params->get('email_admin'));
	require JModuleHelper::getLayoutPath('mod_requestcall', $params->get('layout', 'default'));
?>

