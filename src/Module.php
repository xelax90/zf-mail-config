<?php
namespace XelaxMailConfig;
use Zend\Mail\Transport\TransportInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface
{
	const CONFIG_KEY = 'xelax_mail_config';
	
	public function getConfig() {
		return include __DIR__ . '/../config/module.config.php';
	}

	public function getServiceConfig() {
		return [
			'factories' => [
				TransportInterface::class => Factory\TransportFactory::class,
			],
			'delegators' => [
			],
		];
	}

}