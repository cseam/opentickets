<?php

namespace ConferenceTools\Tickets\Service\Factory;

use ConferenceTools\Tickets\Domain\Service\Configuration;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ConfigurationFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return Configuration::fromArray($serviceLocator->get('Config')['opentickets']);
    }
}