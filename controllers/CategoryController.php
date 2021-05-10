<?php
/**
 * CategoryContreoller.php
 * Контроллер страницы категории (/category/)
 */

//Подключаем модели
include_once __DIR__ . '/../models/CategoriesModel.php';
include_once __DIR__ . '/../models/ProductsModel.php';

function indexAction($smarty)
{
   $catId = isset($_GET['id']) ? $_GET['id'] : null;
   if ($catId == null) {
       exit();
   }
   $rsProducts = null;
   $rsChildCats = null;
   $rsCategory = getCatById($catId);

   //Если главная категория то показываем дачернии категории
    //иначе показываем товар

    if ($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId);
    } else {
        $rsProducts = getProductsByCat($catId);
    }
    $rsCategories = getAllMainCatsWithChildren();



    $smarty->assign('pageTitle', 'Товары категории' . $rsCategory['name']);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');

}

