<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/m/sql.php');

class M_Basket {  //extends BaseModel

    function showBasketList() {

     $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
     $req = $sql->Select("SELECT `id_basket`, `user_name`, `id_good`, `good_name`, `price`, `order_id` 
                          FROM test.basket WHERE  `order_id`='' AND user_name= :user_name;", ['user_name'=>$_SESSION['user_name']]);
     return $req; //[0]['name'];  //var_dump($req);
    }

    function putToOrder($basketList){
        $dateTime = date("Y-m-d H:i:s"); 
        $user_name = $_SESSION['user_name'];
        $sql = SQL::Instance();
        // запись в таблице Ордер
        foreach($basketList as $good){
            $summ +=$good['price'];
        }
        $query = "INSERT INTO orders1 (`user_name`, `summ`, `datetime_create`) VALUES (:user_name, :summ, :datetime_create);";
        $request = $sql->Select($query, ['user_name'=>$user_name, 'summ'=>$summ, 'datetime_create'=>$dateTime ]); 
        // Получить номер заказа из таблицы с заказом
        $query = "SELECT * FROM orders1 WHERE `datetime_create` = :dateTime;";
        $request = $sql->Select($query, ['dateTime'=>$dateTime ]);
        $order_id = $request[0]['id_order'];
        // присвоить товарам корзины номер заказа
        $query = "UPDATE basket SET `order_id` = :order_id WHERE `user_name` = '$user_name' AND order_id = '';";
        $request = $sql->Select($query, ['order_id'=>$order_id]);
    }
}


session_start();
$id = $_POST['sendId'];
$good_name = $_POST['sendName'];
$price = $_POST['sendPrice'];
$action = $_POST['action'];

switch($action) {
    case 'addToBasket':
        addToBasket($id, $good_name, $user_name, $price);
        break;
    case 'delFromBasket':
        delFromBasket ($id);
        break;
    case 'countBasket':
        countBasket();
        break;
    default:
        break;
}

function addToBasket($id, $good_name, $user_name, $price){
    $user_name = $_SESSION['user_name'];
    $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
    if ($id && $user_name) {
        $query = "INSERT INTO basket (`user_name`, `id_good`, `good_name`, `price`) VALUES (:user_name, :id, :good_name, :price)";
        $req = $sql->Select($query, ['user_name'=>$user_name, 'id'=>$id, 'good_name'=>$good_name, 'price'=>$price,]);
        echo $request='добавлено в корзину';
    }

}

function delFromBasket($id){
    $user_name = $_SESSION['user_name'];
    $sql = SQL::Instance(); 
    if ($id && $user_name) {

        $req = $sql->Select("DELETE FROM `basket` WHERE `id_basket` = :id;", ['id'=>$id]);
        echo $request='Удалено из корзины: ';
    }
}

function countBasket(){
    $user_name = $_SESSION['user_name'];
    $sql = SQL::Instance();
    $req = $sql->Select("SELECT * FROM test.basket WHERE  `order_id`='' AND user_name= :user_name;", ['user_name'=>$user_name]);
    foreach($req as $good){
        $count +=1;
    }
    echo $count;
    return $count;
}