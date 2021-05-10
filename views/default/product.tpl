{*Страница продукта*}

<h3>{$rsProducts['name']}</h3>

<img src="/images/products/{$rsProducts['image']}" width="575">
Стоимость: {$rsProducts['price']}

<a id="removeCart_{$rsProducts['id']}"
        {if !$itemInCart}
            class = "hideme"
        {/if}
   href="#"
   onClick="removeFromCart({$rsProducts['id']}); return false;"
   alt="Удалить из корзины">
    Удалить из  корзины
</a>
<a id="addCart_{$rsProducts['id']}"
        {if $itemInCart}
            class = "hideme"
        {/if}
   href="#"
   onClick="addToCart({$rsProducts['id']}); return false;"
   alt="Добавить в корзину">
    Добавить в корзину
</a>

<p>Описание <br>
    {$rsProducts['description']}
</p>