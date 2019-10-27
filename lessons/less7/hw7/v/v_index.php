<?php
/**
 * Ўаблон главной страницы
 * =======================
 * $text - текст
 */
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/ajaxRequest.js"></script>

<h2 class="">Акция дня.</h2>

    <div class="promo-goods">
        <?php foreach ($text as $good) : ?>
            <div class="promo-good-item">
                <img src="img/img<?=$good['id']?>.jpg" alt="">
                <h5><?=$good['good_name']?></h5>
                <h4><?=$good['good_price'].' руб.'?></h4>
                <td><input class="alert-success" type="button" name="submit" value="В корзину" onClick = "getdetails(<?=$good['id'].', \''.$good['good_name'].'\', '.$good['good_price']?> , 'addToBasket', 'm/M_Basket.php')" /></td>
            </div>
        <?php endforeach ?>
    </div>
