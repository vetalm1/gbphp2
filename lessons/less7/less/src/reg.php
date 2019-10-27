<?php
$rule = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-_]+\.[a-zA-Zа-яА-Я]{2,5}$/u";
$email = "test@mail.рф";

if(preg_match($rule,$email)){
	echo "ok";
}
