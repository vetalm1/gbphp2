<?php
/**
 * Шаблон страницы пользователя
 * =======================
 * $text - текст
 */
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/ajaxRequest.js"></script>

<?php if ($_SESSION['isAuth']): ?>
<table class='table'>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($text as $good) : ?>
            <tr class="text-success">
                <th>0000<?=$good['id']?></td>             
                <td><?=$good['good_name']?></td>
                <td><?=$good['good_price'].' руб.'?></td>
                <td><input class="alert-success" type="button" name="submit" value="В корзину" onClick = "getdetails(<?=$good['id'].', \''.$good['good_name'].'\', '.$good['good_price']?> , 'addToBasket', 'm/M_Basket.php')" /></td>
                <!-- Нужно прописать листнером в js а не onClick -->
            </tr>
        <?php endforeach ?>
        </tbody>
</table>
<div class="alert" id="msg"></div>
<?else:?>

<h5 class=" m-3 alert alert-danger">Доступ ограничен, авторизуйтесь чтобы продолжить 
<a class="ml-4 " href="index.php?c=users&act=auth">Авторизация</a>
</h5>

<?endif?>
