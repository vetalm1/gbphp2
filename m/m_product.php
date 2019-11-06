<?php

require_once('m/sql.php');

class M_Product {

    function addToGoodList($name, $desc, $price){
        $sql = SQL::Instance();
        $req = $sql->UID("INSERT INTO goods (good_name, good_description, good_price, is_active ) VALUES (:name, :desc, :price, 1)", ['name'=>$name, 'desc'=>$desc, 'price'=>$price]);    
    }

    function updateGood($name, $desc, $price, $good_id){
        $sql = SQL::Instance();
        $query = "UPDATE goods SET `good_name`=:name, `good_description`=:desc, `good_price`=:price WHERE `id`='$good_id' ;";
        $request = $sql->UID($query, ['name'=>$name, 'desc'=>$desc, 'price'=>$price] );
        return 'Отредактировано.';
    }

    function getGood($good_id){
        $sql = SQL::Instance();
        $req = $sql->Select("SELECT `id`, `good_name`, `good_description`, `good_price` FROM `goods` WHERE `id`=:id;", ['id'=>$good_id]);
        return $req;
    }

    function getFormHTML($title, $btnText, $req){
        $formHTML = '
            <h3>'.$title.'</h3>
            <form method="post">
            <input name = "good_id"  type="text" placeholder="id товара" value ="'.$req[0]['id'].'"> <br>
            <input class="m-1 h5 col-md-2 alert-success" name = "name"  type="text" placeholder="Наименование товара" value ="'.$req[0]['good_name'].'"> <br>
            <input class="m-1 h5 col-md-2 alert-success" name = "desc"  type="text" placeholder="Описание товара" value ="'.$req[0]['good_description'].'"> <br>
            <input class="m-1 h5 col-md-2 alert-success" name = "price" type="text" placeholder="Цена" value ="'.$req[0]['good_price'].'"> <br>
            <button class="m-1 btn btn-success" type="submit">'.$btnText.'</button>
            </form>';
        return $formHTML;
    }
        //style ="display: none"
    function getIdFormHTML(){
        $idFormHTML ='
        <h5>Ведите id товара для редактирования</h5>
        <form method="post">
        <input class="m-1 h5 col-md-1 alert-success" name = "good_id" type="text" placeholder="id товара "> 
        <button class="m-1 btn btn-success" type="submit">Показать</button>
        </form>';
        return $idFormHTML;
    }

}