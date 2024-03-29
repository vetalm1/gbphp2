<?php
//
// ������� ����� �����������.
//
abstract class Controller
{
	// ��������� �������� �������
	abstract function render();
	
	//
	// ������ ���������� ������� GET?
	//
	protected function IsGet()
	{
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}

	//
	// ������ ���������� ������� POST?
	//
	protected function IsPost()
	{
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}

	//
	// ��������� HTML ������� � ������.
	//
	protected function Template($fileName, $vars = array())
	{
		// ��������� ���������� ��� �������.
		foreach ($vars as $k => $v)
		{
			$$k = $v;
		}

		// ��������� HTML � ������.
		ob_start();
		include "$fileName";
		return ob_get_clean();	
	}	
	
	// ���� ������� �����, �������� ��� - ��������� ������
	public function __call($name, $params){
        die('�� ������ ����� � url-������!!!');
	}
}
