<?php
//
// ���������� �������� ������.
//
include_once('inc/model.php');
include_once('inc/C_Base.php');

class C_Page extends C_Base
{
	//
	// �����������.
	//
	
	//http://site.ru/index.php?c=Page&action=index
	
	function __construct(){		
		parent::__construct();
	}
	
	public function action_index(){
		$this->title .= '::������';
		$text = text_get();
		$this->content = $this->Template('theme/v_index.php', array('text' => $text));	
	}
	
	public function action_news(){
		$this->title .= 'News';
		$text = "News.........";
		$this->content = $this->Template('theme/v_news.php', array('text' => $text));	
	}
	
	public function action_contacts(){
		$this->title .= '::��������';
		$this->content = $this->Template('theme/v_contacts.php');	
	}
  
  	public function action_about(){
		$this->title .= '::� ��������';
		$this->content = $this->Template('theme/v_about.php');	
	}
	
	public function action_service(){
		$this->title .= '::Service!!!';
		$this->content = $this->Template('theme/v_service.php');	
	}
	
	public function action_edit(){
		$this->title .= '::��������������';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			die();
		}
		
		$text = text_get();
		$this->content = $this->Template('theme/v_edit.php', array('text' => $text));		
	}
}
