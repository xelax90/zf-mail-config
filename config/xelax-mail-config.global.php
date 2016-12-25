<?php
namespace XelaxMailConfig;
use Zend\Mail\Transport\Smtp;

return [
	Module::CONFIG_KEY => [
		'type'				=> Smtp::class,
		'name'              => 'localhost',
		'host'              => '127.0.0.1',
		'connection_class'  => 'login'
	],
];
