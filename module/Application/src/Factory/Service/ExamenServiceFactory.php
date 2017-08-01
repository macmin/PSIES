<?php


namespace Application\Factory\Service;


use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Application\Model\Repository\ExamenRepository;
use Application\Service\ExamenService;


class ExamenServiceFactory implements FactoryInterface
{

	public function __invoke(ContainerInterface $container, $requestedName, array $options=null)
	{
		$examenRepository = $container -> get(ExamenRepository::class);
		$examenService = new ExamenService();
		$examenService -> setExamenRepository($examenRepository);
		

	}



}