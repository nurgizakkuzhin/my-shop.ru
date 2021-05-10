<?php

/**
 * ProductController
 *
 *Контроллер страницы товара (/product/)
 *
 */

//подключаем модели
include_once __DIR__ . '/../models/CategoriesModel.php';
include_once __DIR__ . '/../models/ProductsModel.php';

/**
* Формирование страницы продукта
*
 * @param object $smarty шаблонизатор
*/
function indexAction($smarty){

    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null) {
        exit();
    }
    //Получить данные продукта
    $rsProducts = getProductById($itemId);
    //Получить все категории
    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', '');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}
