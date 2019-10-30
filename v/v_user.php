<?php
/**
 * Шаблон страницы пользователя
 * =======================
 * $text - текст
 */
?>

<?=nl2br($text)?> 

<br><br>

<?php if ($_SESSION['isAuth']&& $_SESSION['user_name']=='admin'): ?>

    <a class="h5" href="index.php?c=order&act=getOrder">Заказы</a>
    <a class="h5 ml-2" href="index.php?c=product&act=addProduct">Добавить новый товар</a> 
    <a class="h5 ml-2" href="index.php?c=product&act=updateProduct">Редактировать товар</a>
    <a class="h5 ml-2" href="index.php?c=product&act=deleteProduct">Удалить товар</a>


<?else:?>


<?endif?>