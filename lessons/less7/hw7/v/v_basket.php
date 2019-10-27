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
            <tr id="<?=$good['id_basket']?>" class="text-success">
                <th>0000<?=$good['id_good']?></td>             
                <td><?=$good['good_name']?></td>
                <td><?=$good['price'].' руб.'?></td>
                <td><input class="alert-success" type="button" name="submit" value="Удалить" onClick = "getdetails(<?=$good['id_basket'].', \''.$good['good_name'].'\', '.$good['price']?> , 'delFromBasket', 'm/M_Basket.php')" /></td>
                <!-- Нужно прописать листнером в js а не onClick -->
            </tr>
            <?php $summ +=$good['price'] ?>
        <?php endforeach ?>
        </tbody>
</table>
<H3 id="summ" class="text-info">Итого на сумму: <?=$summ.' руб.'?></H3>
<div class="alert" id="msg"></div>
<!-- <button  >Заказать</button> -->
<a class=" order-success" href="index.php?c=basket&act=putToOrder">Заказать</a>
<?else:?>

<h5 class=" m-3 alert alert-danger">Доступ ограничен, авторизуйтесь чтобы продолжить 
<a class="ml-4 " href="index.php?c=users&act=auth">Авторизация</a>
</h5>

<?endif?>