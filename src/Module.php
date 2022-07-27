<?php
namespace XelaxMailConfig;
use Laminas\Mail\Transport\TransportInterface;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ModuleManager\Feature\ServiceProviderInterface;

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
