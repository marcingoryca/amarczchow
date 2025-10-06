<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
Use Joomla\CMS\Uri\Uri;

require_once __DIR__ . '/src/helper.php';


$app = Factory::getApplication();
$pageId = $app->input->getInt('id', 0);
$products = AmarProductsHelper::getProducts($pageId);
$doc = Factory::getApplication()->getDocument();
$doc->addScript(Uri::root() . 'media/mod_amar_products/js/script.js');


require ModuleHelper::getLayoutPath('mod_amar_products', $params->get('layout', 'default'));

