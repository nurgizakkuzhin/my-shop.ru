<?php /* Smarty version Smarty-3.1.6, created on 2021-05-04 23:12:32
         compiled from "D:\OSPanel\domains\myshop.local\config/../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185481682660917d499f9c29-60430957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779796e5fcf5ecbea78ae15ef66d926510b60c9a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\myshop.local\\config/../views/default\\product.tpl',
      1 => 1620159151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185481682660917d499f9c29-60430957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_60917d49d8fc7',
  'variables' => 
  array (
    'rsProducts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60917d49d8fc7')) {function content_60917d49d8fc7($_smarty_tpl) {?>

<h3><?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['name'];?>
</h3>

<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['image'];?>
" width="575">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['price'];?>


<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['id'];?>
" href="#"  onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['id'];?>
); return false;" alt="Добавить в
корзину">Добавить в корзину</a>
<p>Описание <br>
    <?php echo $_smarty_tpl->tpl_vars['rsProducts']->value['description'];?>

</p><?php }} ?>