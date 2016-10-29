<?php

$config = [
	'db' => [
		'dsn' => 'mysql:host=localhost;dbname=publications',
		'username' => 'root',
		'password' => 'vagrant'
	],
	'router' => [
		'/' => [
			'controller' => 'IndexController',
			'action' => 'indexAction'
		],
		'/about' => [
			'controller' => 'IndexController',
			'action' => 'aboutAction'
		],
		'/contact' => [
			'controller' => 'IndexController',
			'action' => 'contactAction'
		],
		'/tasks/([a-zA-Z0-9]{1,})/([0-9]{1,})' => [
			'controller' => 'TaskController',
			'action' => 'indexAction',
			'parameters' => ['section', 'task']
		]
	],
	'path_to_views' => '/src/app/tasksApp/view/'
];

return $config;
