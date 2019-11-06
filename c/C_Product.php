<?php
// Конттроллер страницы пользователя.
require_once('m/M_Product.php');
class C_Product extends C_Base
{
	// Конструктор ???.
	
	public function action_addProduct(){
        $this->title .= '::Добавление нового товара';
        $Product = new M_Product(); 
        $text = $Product->getFormHTML('Заполните форму, нажмите добавить', 'Добавить', []);
        $this->content = $this->Template('v/v_product.php', array('text' => $text));
        
        if($_POST){
            $Product->addToGoodList($_POST['name'], $_POST['desc'], $_POST['price'], 1);
        }	
    }


    public function action_updateProduct(){
        $this->title .= '::Редактирование товара';
        $Product = new M_Product(); 
        $text = $Product->getIdFormHTML();
        if ($_POST['good_id']) {
            $req = $Product->getGood($_POST['good_id']);
            $text = $Product->getFormHTML('Отредактируейте и нажмите обновить','Обновить', $req);
        }
        $this->content = $this->Template('v/v_product.php', array('text' => $text));
        
        if($_POST['desc']){
            $Product->updateGood($_POST['name'], $_POST['desc'], $_POST['price'], $_POST['good_id']);
            header("location:index.php?c=product&act=updateProduct");
            //$_POST['good_id']=''; - неработает почему не понял ...
            //пришлось сделать редирект, не обнуляется $_POST['good_id'], что только не делал :))
        }	

    }
    public function action_deleteProduct(){}

}
