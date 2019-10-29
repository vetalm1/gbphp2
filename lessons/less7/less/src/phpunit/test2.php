<?php
//include "Demo.php";
use PHPUnit\Framework\TestCase;

class MasTest extends TestCase{
	/**
	*@dataProvider additionProvider
	*/
	function testAdd($a,$b,$expected){
		/*$obj = new Demo;
		$res = $obj->sum();*/
		$res = $a + $b;
		$this->assertSame($expected,$res);
	}
	
	public function additionProvider(){
		return [
			[1,2,3],
			[-1,-3,-4],
			[0,0,0]
		];
	}
}