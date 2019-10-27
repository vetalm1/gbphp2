<?php
function sum($a,$b){
	return $a + $b;
}

function testSum($res,$a,$b){
	if(sum($a,$b)==res){
		return "ok";
	}
	else{
		return "bad";
	}
}

testSum(3,1,2);