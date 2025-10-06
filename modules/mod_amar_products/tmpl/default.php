<?php

defined ('_JEXEC') or die;

use Joomla\CMS\Router\Route;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

$app = Factory::getApplication();
$pageId = (int) $app->input->getInt('id');
$url = Uri::root() . 'index.php?option=com_ajax&plugin=products&method=getProducts&id=' . $pageId . '&format=json';
?>

<div id="products-container" data-ajax-url="<?php echo $url; ?>"></div>
