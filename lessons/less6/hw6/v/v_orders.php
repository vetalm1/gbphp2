<?php
/**
 * Шаблон страницы заказов
 * =======================
 * $text - текст
 */
?>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/ajaxRequest.js"></script>

<?php if ($_SESSION['isAuth']&& $_SESSION['user_name']=='admin'): ?>
<table class='table'>
        <thead>
            <tr>
                <th scope="col">Номер заказа</th>
                <th scope="col">Заказчик</th>
                <th scope="col">Сумма</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($text as $good) : ?>
            <tr class="text-success">
                <th>00<?=$good['id_order']?></td>             
                <td><?=$good['user_name']?></td>
                <td><?=$good['summ'].' руб.'?></td>
                <td><a  href="index.php?c=order&act=redactOrder&id=<?=$good['id_order']?>">В заказ</a></td>
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
