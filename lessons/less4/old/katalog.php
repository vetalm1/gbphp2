<?php

//include 'engine/basket_controller.php';

//addToBasket($_GET['id'], $_GET['good_name'], $_GET['price']);

?>

<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="public/js/ajaxRequest.js"></script>
</head>
<body>

<div class="galery">
    
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($employes as $good) : ?>
            <tr class="text-success">
                <th>0000<?=$good['id']?></td>             
                <td>
                    <a class="text-success" href="public/moduls/goodcard.php?id=<?=$good['id']?>" target="blank">    
                        <?=$good['good_name']?>
                    </a>
                </td>
                <td><?=$good['good_price'].' руб.'?></td>
                <td><input class="alert-success" type="button" name="submit" value="В корзину" onClick = "getdetails(<?=$good['id'].', \''.$good['good_name'].'\', '.$good['good_price']?> , 'addToBasket', 'engine/basket_controller.php')" /></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <a class="alert alert-dark " href="public/basket.php">Корзина</a>
<br>
<div class="alert" id="msg"></div>
</div>

</body>
</html>
