<?php
// Конттроллер корзины пользователя.
require_once('m/M_Basket.php');
class C_Basket extends C_Base
{
	// Конструктор ???.
	
	public function action_getBasket(){
        $this->title .= '::Корзина';
        $Catalog = new M_Basket(); 
        $text = $Catalog->showBasketList();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));	
    }
    


    public function action_putToOrder(){
        //$this->title .= '::Корзина';
        $putToOrder = new M_Basket(); 
        //$text = $Catalog->showBasketList();
        $putToOrder->PutToOrder($putToOrder->showBasketList());
        $text = $putToOrder->showBasketList();
        $this->content = $this->Template('v/v_basket.php', array('text' => $text));	
    }

}