<?php
/**
 * Main file index.php
 */
// Set basepath constant
defined('BASEPATH') or define('BASEPATH', realpath(dirname(__FILE__)));
// Require autoloader
require_once(BASEPATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
function getConfig() {
    return require(BASEPATH . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php");
}
// Instatiate controller
$controller = new PageController();
// Get the action parameter and decide what to do next.
$action = (string)filter_input(INPUT_GET, 'action');
/*
 * The content method parses the basic structure of every page - the index.html - which includes the
 * variables header, footer, title and main, which gets taken from the templates of $pageDataArray.
 * To display the content, we merely have to echo it.
 */
echo $controller->renderView($action);
