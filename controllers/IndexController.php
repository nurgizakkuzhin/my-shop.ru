<?php


/**
 *  Контроллер главной страницы
 * 
 */
//Подключаем модели
include_once __DIR__ . '/../models/CategoriesModel.php';
include_once __DIR__ . '/../models/ProductsModel.php';


function testAction(){
	echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 
function indexAction($smarty){

    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
