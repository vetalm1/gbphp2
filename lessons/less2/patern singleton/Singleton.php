<?php
class DB{
    static $db;
    
     use stTrait;

   
    function select(){
        
    }
    function update(){
        
    }
    function delete(){
        
    }
    function insert(){
        
    }
}

class Test{
    function showGoods(){
        $db = DB::getObject()->select();
    }
}