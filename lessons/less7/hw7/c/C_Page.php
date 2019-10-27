<?php
//
// Конттроллер страницы main.
//
include_once('m/M_page.php');

class C_Page extends C_Base
{
	
	public function action_index(){
		$this->title = 'Интернет магазин';
		$index = new M_Page();
		$text = $index->showPromoList();
		//$today = date();
		$this->content = $this->Template('v/v_index.php', array('text' => $text));	
	}
}
