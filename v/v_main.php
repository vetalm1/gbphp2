<?php
/**
 * Основной шаблон
 * ===============
 * $title - заголовок
 * $content - HTML страницы
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ru">
<head>
	<title><?=$title?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="v/style.css" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/ajaxRequest.js"></script> 	
</head>
<body>
	<div id="header">
		<h1><?=$title?></h1>
	</div>
	
	<div id="menu">
		<!-- <a href="index.php">Читать текст</a> |
		<a href="index.php?c=page&act=edit">Редактировать текст</a> | -->
		<a href="index.php?c=page&act=index">Домой</a> |
		<a href="index.php?c=catalog&act=getCatalog">Каталог товаров</a> |
		<a href="index.php?c=basket&act=getBasket">Корзина<span id="basket-count"></span></a> |
		<a href="index.php?c=order&act=getOrder">Заказы</a> |
		<?php if (!$_SESSION['isAuth']): ?>
		<a href="index.php?c=users&act=auth">Авторизация</a> |
		<?endif?>
		<!-- <a href="index.php?c=users&act=registration">Регистрация</a> | -->
		<?php if ($_SESSION['isAuth']): ?>
		<a href="index.php?c=users&act=exit">Выход</a> |
		<a href="index.php?c=users&act=userroom">Личный кабинет</a> 
		<?endif?>
		<span class="ml-4">Для отработки заказов авторизуйтесь под логином admin/admin</span>
		<b class=" text-success float-right h6" ><?=$_SESSION['user_name']?></b>
	</div>
	
	<div id="content">
		<?=$content?>
	</div>
	
	<div id="footer">
		Все права защищены. Адрес. Телефон.
	</div>
</body>
</html>
