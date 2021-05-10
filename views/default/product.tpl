{*Страница продукта*}

<h3>{$rsProducts['name']}</h3>

<img src="/images/products/{$rsProducts['image']}" width="575">
Стоимость: {$rsProducts['price']}

<a id="addCart_{$rsProducts['id']}" href="#"  onClick="addToCart({$rsProducts['id']}); return false;" alt="Добавить в
корзину">Добавить в корзину</a>
<p>Описание <br>
    {$rsProducts['description']}
</p>