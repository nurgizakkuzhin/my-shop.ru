<?php /* Smarty version Smarty-3.1.6, created on 2021-05-10 12:55:15
         compiled from "D:\OSPanel\domains\myshop.local\config/../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12391608ffab984c266-40778298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56f3ec8bae99ae490532931f1e60787956a5068' => 
    array (
      0 => 'D:\\OSPanel\\domains\\myshop.local\\config/../views/default\\leftcolumn.tpl',
      1 => 1620628533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12391608ffab984c266-40778298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_608ffab98500e',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608ffab98500e')) {function content_608ffab98500e($_smarty_tpl) {?><div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <a href = "/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>

                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                    <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                        --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
                    <?php } ?>
                <?php }?>
            <?php } ?>
    </div>
    <div class="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?> пусто <?php }?>
        </span>
</div>
<?php }} ?>