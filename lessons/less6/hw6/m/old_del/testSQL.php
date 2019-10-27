<?php

include_once('sql.php');

$a='Vetal';
  
$sql = SQL::Instance(); // так подключается синглтон подключение к БД.
$req = $sql->Select("SELECT `login`, `pass` FROM test.logins WHERE login = :login;", ['login'=>$a]);
echo $req[0]['login'].'<br>';
echo $req[0]['pass'].'<br>';
//print_r($req);

$l='Roter';
$p='password';
$req = $sql->UID("INSERT INTO logins (login,pass) VALUES (:login,:pass)", ['login'=>$l, 'pass'=>$p]);
//print_r($req);
$p='no pass';
$req = $sql->UID("UPDATE logins set pass = :pass where login=:login", ['login'=>$l, 'pass'=>$p]);


//"DELETE FROM `logins` WHERE `logins`.`id` = 12"