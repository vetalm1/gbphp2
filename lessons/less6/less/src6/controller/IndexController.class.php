<?php

class IndexController extends Controller
{
    public $view = 'goods';
    public $title;

    function __construct()
    {
        parent::__construct();
        $this->title .= ' | Главная';
    }
	
	//метод, который отправляет в представление информацию в виде переменной content_data
	function index($data){
		return "test";
	}


}