<?

include_once('m/BaseModel.php');

class M_User extends BaseModel{

    function auth($login, $pass) {
        //проверка на правильность пароля    
        $dbPassword = $this->getPass($login);
        return password_verify($pass, $dbPassword);        
        
        // по шорошему в базовой модели нужно было бы реализовать только
        // механизм получения данных из базы, а строку запроса и обработку результата уже в классе M_User
    }

    function registration($login, $pass){
        return $this->setNewUser($login, $pass);
    }
	
}



function getAuthHtml($title){
    $auth = '
        <h3>'.$title.'</h3>
        <form method="post">
        <input class="m-1" name = "login" type="text"  placeholder="Имя пользователя">
        <input class="m-1" name="pass" type="password" placeholder="Пароль">
        <button class="m-1" type="submit">OK</button>
        </form>';
        return $auth;
}