<?php

$description = 'Вывести 10 раз Hello World.';
$inputData = '$count = 10';
$result = sayHelloWorld(10);

function taskFunction($data, $dbConnection) 
{
	return sayHelloWorld(10);
}

function sayHelloWorld($count = 1)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) {
		$result .= 'Hello World!<br>';
	}
	return $result;
}


