<?php
// Конттроллер Заказов.
require_once('m/M_Order.php');
require_once('m/M_Basket.php');
class C_Order extends C_Base
{
	// Конструктор ???.
	
	public function action_getOrder(){
        $this->title .= '::Заказы';
        $orderList = new M_Order(); 
        $text = $orderList->showOrderList();
        $this->content = $this->Template('v/v_orders.php', array('text' => $text));	
    }
    
    public function action_redactOrder(){
        $this->title .= '::Редактирование заказа';
        $orderList = new M_Order(); 
        $order_id = $_GET['id'];
        $text = $orderList->showOrder($order_id);
        $this->content = $this->Template('v/v_order.php', array('text' => $text));
    }

    public function action_confirmOrder(){
        $orderConfirm = new M_Order();
        $order_id = $_GET['id'];
        $text = $orderConfirm->confirmOrder($order_id);
        $this->content = $this->Template('v/v_index.php', array('text' => $text));
    }
}
