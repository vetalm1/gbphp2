<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/less6/hw6/m/sql.php');

class M_Page {  //extends BaseModel

    function showPromoList() {

     $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
     $req = $sql->Select("SELECT * FROM test.goods LIMIT 3 ;", []);
     return $req;
    }


}

