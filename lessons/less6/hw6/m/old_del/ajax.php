<?php
session_start();
$id = $_POST['sendId'];
$good_name = $_POST['sendName'];
$price = $_POST['sendPrice'];
$action = $_POST['action'];
$user_name = $_POST['sendUser_name']; 
echo 'lkxjffldkjngdlfgn ----'.$_SESSION['user_name'];

switch($action) {
    case 'addToBasket':
        addToBasket($id, $good_name, $user_name, $price);
        break;
    case 'delFromBasket':
        delFromBasket ($id, $user_name);
        break;
    default:
        break;
}

function addToBasket($id, $good_name, $user_name, $price){
    $db = new PDO('mysql:host=localhost:3307;dbname=test', 'root', '');
    //$user_name = $_SESSION['user_name']; // чета здесь не видно суперглобальную сессию
    if ($id && $user_name) {

        $query = "INSERT INTO basket (`user_name`, `id_good`, `good_name`, `price`) VALUES (:user_name, :id, :good_name, :price)";
        $q = $db->prepare($query);
        $q->execute(['user_name'=>$user_name, 'id'=>$id, 'good_name'=>$good_name, 'price'=>$price,]);
        echo $request='добавлено в корзину';
    }

}

function delFromBasket($id, $user_name){
    $db = new PDO('mysql:host=localhost:3307;dbname=test', 'root', '');
    if ($id && $user_name) {
        $query = "DELETE FROM `basket` WHERE `id_basket` = :id;";
        $q = $db->prepare($query);
        $q->execute(['id'=>$id]);
        echo $request='Удалено из корзины: ';
    }
}