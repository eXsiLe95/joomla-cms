<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26.03.2018
 * Time: 21:39
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by SelectUser
$controller = JControllerLegacy::getInstance('SelectUser');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();