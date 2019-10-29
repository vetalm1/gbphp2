<?php
// по хорошему бы выгрузить весь каталог в json вернуть его в js и там уже обработать и реактивно вставить в хтмл
// непонятно то-ли к 25 отображенным добавить 25 еще, то-ли вместо 25 отображенных вставить новые???
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="ajaxRequest.js"></script>
</head>
<body>

<div class="catalog">

<H2 class="alert-warning mt-2 mb-5">Каталог товаров<br></H2>
<div id="msg"></div>
 <input class="alert alert-success ml-5" type="button" name="submit" value="показать список" onClick = "getdetails(0,'show', 'goodsController.php')"><br>
 <input class="alert-info ml-5 mb-2 minus" type="button" name="submit" value="<== предыдущие 25 " onClick = "getdetails(-25,'selectFromGoods', 'goodsController.php')">
 <input class="alert-info ml-5 plus" type="button" name="submit" value="следующие 25 ==> " onClick = "getdetails(25,'selectFromGoods', 'goodsController.php')">
    
</div>
<br>
</body>
</html>

