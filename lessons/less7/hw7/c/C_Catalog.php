<?php
// Конттроллер страницы пользователя.
require_once('m/M_Catalog.php');
class C_Catalog extends C_Base
{
	// Конструктор ???.
	
	public function action_getCatalog(){
        $this->title .= '::Каталог товаров';
        $Catalog = new M_Catalog(); 
        $text = $Catalog->showCatalog();
        $this->content = $this->Template('v/v_catalog.php', array('text' => $text));	
    }
    
    public function action_filterCatalog(){
    
    }

}