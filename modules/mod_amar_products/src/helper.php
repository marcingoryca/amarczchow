<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Object\CMSObject;
use Joomla\CMS\Categories\Categories;

class AmarProductsHelper
{
    public static function getArticle($pageId)
    {
        $db = Factory::getDbo();
        $articles = '#__content';
        $categories = '#__categories';
                
        $query = $db->getQuery(true);
        $query->select('art.id AS article_id, 
                        art.title AS article_title, 
                        art.alias AS article_alias, 
                        art.introtext AS article_introtext, 
                        art.catid AS article_categoryId, 
                        art.images AS article_images, 
                        art.urls AS article_urls, 
                        art.attribs AS article_attribs,
                        cat.id AS category_id, 
                        cat.path AS category_path, 
                        cat.title AS category_title, 
                        cat.alias AS category_alias,
                        cat.description AS category_description,
                        cat.ph_category_id AS category_ph_id')
              ->from($db->quoteName($articles, 'art'))
              ->join('INNER', $db->quoteName($categories, 'cat') . ' ON cat.id=art.catid')
              ->where($db->quoteName('art.id') . '=' . (int)$pageId);
        $db->setQuery($query);

        return $db->loadObject();
    }

    public static function getProducts($pageId)
    {
        $db = Factory::getDbo();
        $article = self::getArticle($pageId);

        $phCategories = '#__phocacart_categories';
        $phProducts = '#__phocacart_products';
        $phProductCategories = '#__phocacart_product_categories';
        $phProductImages = '#__phocacart_product_images';

        $query = $db->getQuery(true);
        $query->select('phcat.id AS ph_category_id,
                        phcat.category_type AS ph_category_type,
                        phcat.title AS ph_category_title,
                        phcat.title_long AS ph_category_titlelong,
                        phcat.alias AS ph_category_alias,
                        phcat.description AS ph_category_description,
                        phcat.metatitle AS ph_category_metatitle,
                        phcat.metakey AS ph_category_metakey,
                        phpd.id AS ph_products_id,
                        phpd.catid AS ph_products_categoryid,
                        phpd.title AS ph_products_title,
                        phpd.title_long AS ph_products_titlelong,
                        phpd.alias AS ph_products_alias,
                        phpd.description AS ph_products_description,
                        phpd.description_long AS ph_products_descriptionlong,
                        phpd.price AS ph_products_price,
                        phpd.price_original AS ph_producst_priceoriginal,
                        phpd.stock AS ph_products_stock,
                        phpd.image AS ph_products_image,
                        phpd.featured_background_image AS ph_products_featuredbackgroundimage,
                        phpdcat.product_id AS ph_product_categories_productid,
                        phpdcat.category_id AS ph_product_categories_categoryid,
                        phpdimg.id AS ph_product_images_id,
                        phpdimg.product_id AS ph_product_images_productid,
                        phpdimg.image AS ph_product_images_image')
                ->from($db->quoteName($phCategories, 'phcat'))
                ->join('INNER', $db->quoteName($phProducts, 'phpd') . ' ON phpd.catid = phcat.id')
                ->join('LEFT', $db->quoteName($phProductCategories, 'phpdcat') . ' ON phpdcat.product_id = phpd.id')
                ->join('LEFT', $db->quoteName($phProductImages, 'phpdimg') . ' ON phpdimg.product_id = phpd.id')
                ->where('phcat.id = ' . (int)$article->category_ph_id)
                ->group('phpd.id');
        $db->setQuery($query);
    
        return $db->loadObjectList();
    }
}