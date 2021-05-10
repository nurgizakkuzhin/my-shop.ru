<?php
/**
 * 
 * Файл настроек
 * 
 */

//> Константы для обращения к контроллерам
define ('PathPrefix', __DIR__ . '/../controllers/');
define ('PathPostfix', 'Controller.php');
//<


//> используемый шаблон 
$template = 'default';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', __DIR__ . '/../views/' . $template . '/');
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', '/templates/' . $template . '/');
//<

//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require(__DIR__ . '/../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir(__DIR__ . '/../tmp/smarty/templates_c');
$smarty->setCacheDir(__DIR__ . '/../tmp/smarty/cache');
$smarty->setConfigDir(__DIR__ . '/../library/Smarty/configs');

$smarty->assign('teplateWebPath', TemplateWebPath);
//<