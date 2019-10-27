<?php
include('m/sql.php');

class M_Catalog {  //extends BaseModel

    function showCatalog() {

     $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
     $req = $sql->Select("SELECT `id`, `good_name`, `good_price` FROM test.goods;", []);
        
     return $req; //[0]['name'];  //var_dump($req);
    }


}
