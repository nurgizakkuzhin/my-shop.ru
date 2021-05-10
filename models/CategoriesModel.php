<?php
/**
 * @return array массив категорий
 * @param integer $catId ID категории
 */
function getChildrenForCat($catId)
{
    $sql = 'SELECT * FROM categories WHERE parent_id = ' . $catId;
    $db_config = require __DIR__ . '/../config/db.php';
    $link = mysqli_connect($db_config['localhost'], $db_config['user'], $db_config['password'], $db_config['db_name']);


    $res = mysqli_query($link, $sql);

    return createSmartyRsArray($res);

}

function getAllMainCatsWithChildren()
{
    $db_config = require __DIR__ . '/../config/db.php';
    $link = mysqli_connect($db_config['localhost'], $db_config['user'], $db_config['password'], $db_config['db_name']);


    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $res = mysqli_query($link, $sql);


    $smartyRs = [];
    while ($row = mysqli_fetch_assoc($res)) {

        $rsChildren = getChildrenForCat($row['id']);

        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;
    }

    return $smartyRs;
}

/**
 * Получить данные категории по id
 *
 * @param integer $catId ID категории
 * @return array массив - строка категории
 */
function getCatById($catId)
{
    $catId = intval($catId);
    $sql = "SELECT * FROM categories WHERE id = '{$catId}'";

    $db_config = require __DIR__ . '/../config/db.php';
    $link = mysqli_connect($db_config['localhost'], $db_config['user'], $db_config['password'], $db_config['db_name']);

    $rs = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($rs);
}