<?php 

namespace Application\Factory\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Application\Service\ExamenService;
use Application\Controller\ExamenController;

class ExamenControllerFactory implements FactoryInterface
{

	public function __invoke(ContainerInterface $container,$requestedName,array $options=null){

		$examenService = $container -> get(ExamenService::class);


		$controller = new ExamenController();
		$controller -> setExamenService($examenService);
		return $controller;
	}
}