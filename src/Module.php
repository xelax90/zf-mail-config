<?php
namespace XelaxMailConfig;
use Zend\Mail\Transport\TransportInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface
{
	const CONFIG_KEY = 'xelax_mail_config';
	
	public function getConfig() {
		return include __DIR__ . '/../config/module.config.php';
	}

	public function getServiceConfig() {
		return [
			'factories' => [
				TransportInterface::class => Listener\Factory\NotificationListenerFactory::class,
				Notification\NotificationPluginManager::class => Notification\Factory\NotificationPluginManagerFactory::class,
				Notification\Handler\HandlerPluginManager::class => Notification\Handler\Factory\HandlerPluginManagerFactory::class,
				Options\NotificationOptions::class => Options\Factory\NotificationOptionsFactory::class
			],
			'delegators' => [
			],
		];
	}

}