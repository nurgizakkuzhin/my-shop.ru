<?php /* Smarty version Smarty-3.1.6, created on 2021-05-04 23:02:52
         compiled from "D:\OSPanel\domains\myshop.local\config/../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19494608ffab95df057-27394476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ab7e911b521e9c29a2b5b5932da13d581c4305b' => 
    array (
      0 => 'D:\\OSPanel\\domains\\myshop.local\\config/../views/default\\header.tpl',
      1 => 1620155929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19494608ffab95df057-27394476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_608ffab9790a3',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608ffab9790a3')) {function content_608ffab9790a3($_smarty_tpl) {?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css">
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</head>
<body>
<div id="header">
    <h1>My shop - интернет магазин</h1>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="centerColumn">



<?php }} ?>