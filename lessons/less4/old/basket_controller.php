<?php
 include '../engine/autoload.php';
 autoload('../config');

session_start();
$id = $_POST['sendId'];
$good_name = $_POST['sendName'];
$price = $_POST['sendPrice'];
$action = $_POST['action'];

switch($action) {
    case 'addToBasket':
        addToBasket($id, $good_name, $price);
        break;
    case 'delFromBasket':
        delFromBasket ($id);
        break;
    default:
        break;
}

function addToBasket($id, $good_name, $price) {
    $user_name = $_SESSION['user_name'];
    if ($id && $user_name) {
        $query = sprintf("INSERT INTO test.basket (`user_name`, `id_good`, `good_name`, `price`) VALUES (\"%s\", \"%s\", \"%s\", \"%s\");", $user_name, $id, $good_name, $price);
        mysqli_query(myDbConnect(), $query);
    }
    echo 'Добавлено в корзину';
}

function selectByUser() {
    $user_name = $_SESSION['user_name'];
    $query = "SELECT * FROM test.basket WHERE user_name = '$user_name' AND basket.order_id = '';";
    $result = mysqli_query(myDbConnect(), $query);
    $employes = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $employes[] = $row;
    }
    return $employes;
}
function selectByOrder($orderId='') {
    $user_name = $_SESSION['user_name'];
    $query = "SELECT * FROM test.basket WHERE basket.order_id = '$orderId';";
    $result = mysqli_query(myDbConnect(), $query);
    $employes = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $employes[] = $row;
    }
    return $employes;
}

function delFromBasket ($id) {
    $user_name = $_SESSION['user_name'];
    if ($id && $user_name) {
        $user_name = $_SESSION['user_name'];
        $query = "DELETE FROM test.basket WHERE basket.id_good = '$id' AND basket.user_name = '$user_name' AND basket.order_id = '';";
        mysqli_query(myDbConnect(), $query);
    }
}

function addToOrders($summ) {
    $user_name = $_SESSION['user_name'];
    $dateTime = date("Y-m-d H:i:s"); 
    if ($summ && $user_name) {
        $query = sprintf("INSERT INTO test.orders1 (`user_name`, `summ`, `datetime_create`) VALUES (\"%s\", \"%s\", \"%s\");", $user_name,  $summ, $dateTime);
        mysqli_query(myDbConnect(), $query);
    }
    $query = "SELECT * FROM test.orders1 WHERE `datetime_create` = '$dateTime';";
    $result = mysqli_query(myDbConnect(), $query);
    $empl = [];  
    while ($row = mysqli_fetch_assoc($result)) {  
        $empl[] = $row;
    }
    $bb=$empl[0]['id_order']; //напрямую не вставляется в строку запроса с какогото хрена
    $query = "UPDATE `test`.`basket` SET `basket`.`order_id` = '$bb' WHERE `basket`.`user_name` = '$user_name' AND basket.order_id = '';";
    mysqli_query(myDbConnect(), $query);
    return $empl[0]['id_order'].$user_name;
}
