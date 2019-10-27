<?php

// Конттроллер страницы чтения.
include_once('m/M_User.php');
session_start();
class C_User extends C_Base
{
	//
	// Конструктор ???.
	//
	
	public function action_auth(){
		$this->title .= '::Авторизация';
		$text = getAuthHtml('Ведите данные для авторизации');
		$this->content = $this->Template('v/v_user.php', array('text' => $text));	
		$user = new M_User();
		if($_POST){
			$login=$_POST['login'];
			$pass=$_POST['pass'];

			if($user->auth($login,$pass)) {
				$_SESSION['isAuth'] = true;
				$_SESSION['user_name'] = $login;
				$text = 'Вы авторизавались как '.$_SESSION['user_name']; //$login;
			} else { 
				$text = 'Неверный логин/пароль';
			}
			$this->content = $this->Template('v/v_user.php', array('text' => $text));	
		}
	}
	
	public function action_registration(){
		$this->title .= '::Регистрация';
		$text = getAuthHtml('Ведите данные для регистрации');
		$this->content = $this->Template('v/v_user.php', array('text' => $text));
		$user = new M_User();
		if($_POST){
			$login=$_POST['login'];
			$pass=$_POST['pass'];

			if($user->registration($login,$pass)) {
				$text = 'Новый пользователь '.$login.', зарегистрирован';
			} else { 
				$text = 'ошибка регистрации';
			}
			$this->content = $this->Template('v/v_user.php', array('text' => $text));	
		}

	}

	public function action_userroom(){
		$this->title .= '::Личный кабинет';
		$text = 'Личный кабинет пользователя  '.$_SESSION['user_name'].'<br><br>'.'Пока здесь пусто';
		$this->content = $this->Template('v/v_user.php', array('text' => $text));

	}
	

	public function action_exit(){
		$this->title .= '::Выход';
		$_SESSION['isAuth'] = false;
		$_SESSION['user_name'] = '';
		$text = 'выход из авторизации';
		$this->content = $this->Template('v/v_user.php', array('text' => $text));
	}

}
