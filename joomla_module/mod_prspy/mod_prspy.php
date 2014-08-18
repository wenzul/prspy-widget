<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

$modulebase = ''.JURI::base(true).'/modules/mod_prspy/';
$document = JFactory::getDocument();

$document->addStyleSheet($modulebase.'library/css/prspy.css');
$document->addStyleSheet($modulebase.'library/css/flags.css');

// add Java-Script
//$document->addScript($modulebase.'library/js/jquery-1.11.1.min.js'); if you have not already included a version
$document->addScript($modulebase.'library/js/prspy-widget.js');
$document->addScript($modulebase.'library/js/jquery-cookie.js');

require JModuleHelper::getLayoutPath('mod_prspy');
