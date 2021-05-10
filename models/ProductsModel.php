<?php
/**
 * Модель для таблицы продукции (products)
 */

/**
 * @param null $limit лимит товаров
 * @return array массив товаров
 */
function getLastProducts($limit = null)
{
    $sql = 'SELECT * FROM products ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT ' . $limit;
    }

    $db_config = require __DIR__ . '/../config/db.php';
    $link = mysqli_connect($db_config['localhost'], $db_config['user'], $db_config['password'], $db_config['db_name']);

    $res = mysqli_query($link, $sql);

    return createSmartyRsArray($res);

}

/**
 * Получить продукты для категории $itemId
 *
 * @param integer $itemId ID категории
 * @return array массив продуктов
 */

function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE category_id = '{$itemId}'";
    $db_config = require __DIR__ . '/../config/db.php';
    $link = mysqli_connect($db_config['localhost'], $db_config['user'], $db_config['password'], $db_config['db_name']);

    $res = mysqli_query($link, $sql);

    return createSmartyRsArray($res);
}

/**
 * @param integer $itemId ID продукта
 * @return array массив данных продукта
 */
function getProductById($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE id = '{$itemId}'";
    $db_config = require __DIR__ . '/../config/db.php';
    $link = mysqli_connect($db_config['localhost'], $db_config['user'], $db_config['password'], $db_config['db_name']);

    $res = mysqli_query($link, $sql);
    return mysqli_fetch_assoc($res);
}