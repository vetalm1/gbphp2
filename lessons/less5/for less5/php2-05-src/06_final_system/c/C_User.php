<?php
//
// ����������� �������� ������.
//
include_once('m/M_User.php');

class C_Page extends C_Base
{
	//
	// �����������.
	//
	
	public function action_auth(){
		$this->title .= '::������';
		$text = text_get();
		$this->content = $this->Template('v/v_index.php', array('text' => $text));	
		/*$user = new M_User();
		  if($_POST){
			  $login=$_POST['login'];
			  $login=$_POST['login'];
		  }
		if($user->auth($login,$pass))
		*/	
	}
	
	public function action_edit(){
		$this->title .= '::��������������';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', array('text' => $text));		
	}
}
