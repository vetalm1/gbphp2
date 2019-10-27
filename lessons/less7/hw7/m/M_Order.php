<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/less6/hw6/m/sql.php');

class M_Order {  //extends BaseModel

    function showOrderList() {

     $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
     $req = $sql->Select("SELECT `id_order`, `user_name`, `summ`, `datetime_create` 
                          FROM test.orders1 WHERE  `order_status`=''", []);
        
     return $req; 
    }

    function showOrder($id) {
        $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
        $req = $sql->Select("SELECT `id_basket`, `user_name`, `good_name`, `price`, `order_id` 
                             FROM test.basket WHERE  `order_id`=:order_id", ['order_id'=>$id]); 
        return $req; 
    }
   
    function confirmOrder($order_id) {
        $sql = SQL::Instance();
        $req = $sql->Select("SELECT `id_basket`, `user_name`, `id_good`, `good_name`, `price`, `order_id` 
        FROM basket WHERE  `order_id`=:order_id;", ['order_id'=>$order_id]);
        foreach($req as $good){
           $summ +=$good['price'];
        }
        $query = "UPDATE orders1 SET `summ` = :summ, `order_status`='ОК' WHERE `id_order` = '$order_id' ;";
        $request = $sql->Select($query, ['summ'=>$summ]);
        return 'Заказ обработан.';
    } 
}