<?php
include_once('inc/Controller.php');

//
// ������� ���������� �����.
//
abstract class C_Base extends Controller
{
	protected $title;		// ��������� ��������
	protected $content;		// ���������� ��������

	//
	// �����������.
	//
	function __construct()
	{		
		$this->title = '�������� �����';
		$this->content = '';
	}
	
	//
	// ��������� �������� ��������
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);	
		$page = $this->Template('theme/v_main.php', $vars);				
		echo $page;
	}	
}
