<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;

require_once JPATH_SITE . '/modules/mod_amar_products/src/helper.php';

class PlgAjaxProducts extends CMSPlugin
{
    public function onAjaxProducts()
    {
        $input = Factory::getApplication()->input;
        $pageId = $input->getInt('id', 0);

        $products = AmarProductsHelper::getProducts($pageId);

        echo json_encode([
            'success' => true,
            'data' => $products
        ]);
        Factory::getApplication()->close();
    }
}