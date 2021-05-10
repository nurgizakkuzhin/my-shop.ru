<?php /* Smarty version Smarty-3.1.6, created on 2021-05-10 21:57:03
         compiled from "D:\OSPanel\domains\myshop.local\config/../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213317658660995d9087cfd4-68387743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239963056723600ad6c9be0b120bf466aa29e834' => 
    array (
      0 => 'D:\\OSPanel\\domains\\myshop.local\\config/../views/default\\cart.tpl',
      1 => 1620673021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213317658660995d9087cfd4-68387743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_60995d908b796',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60995d908b796')) {function content_60995d908b796($_smarty_tpl) {?>

<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
    В корзине пусто
<?php }else{ ?>
    <h2>Данные заказа</h2>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена за единицу</th>
            <th>Цена</th>
            <th>Действие</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                <td>
                    <input type="text" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                           value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
                </td>
                <td>
                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>
                <td>
                    <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>
                <td>
                    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                       href="#"
                       onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"
                       alt="Удалить из корзины">
                        Удалить
                    </a>
                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                class = "hideme"
                       href="#"
                       onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"
                       alt="Восстановить элемент">
                        Восстановить
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php }?><?php }} ?>