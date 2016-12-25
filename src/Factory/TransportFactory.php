<?php
namespace XelaxMailConfig\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Mail\Transport\Factory;
use XelaxMailConfig\Module;
use Interop\Container\ContainerInterface;

class TransportFactory implements FactoryInterface{
	
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
		$config = $container->get('Config');
		$mailConfig = $config[Module::CONFIG_KEY];
		return Factory::create($mailConfig);
	}

}