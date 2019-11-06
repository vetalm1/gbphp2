<?

require_once('m/sql.php');

class M_User {  //extends BaseModel

    function auth($login, $pass) {

     $sql = SQL::Instance(); // так подключается синглтон-подключение к БД.
     $req = $sql->Select("SELECT `login`, `pass` FROM test.logins WHERE login = :login;", ['login'=>$login]);
        //echo $req[0]['login'].'<br>';
        //проверка на правильность пароля 
     return password_verify($pass, $req[0]['pass']);        
    }

    function registration($login, $pass){
        $sql = SQL::Instance();
        $pass = password_hash($pass, PASSWORD_BCRYPT);
        $req = $sql->UID("INSERT INTO logins (login,pass) VALUES (:login,:pass)", ['login'=>$login, 'pass'=>$pass]);
        return $req; //$this->setNewUser($login, $pass);
    }
	
}


function getAuthHtml($title){
    $auth = '
        <h3>'.$title.'</h3>
        <form method="post">
        <input class="m-1" name = "login" type="text"  placeholder="Имя пользователя">
        <input class="m-1" name="pass" type="password" placeholder="Пароль">
        <button class="m-1" type="submit">OK</button>
        </form>
        <a href="index.php?c=users&act=registration">Регистрация</a> ';
    return $auth;
}