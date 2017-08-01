<?php 

namespace Application\Factory\Repository;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Hydrator\ClassMethods;
use Interop\Container\ContainerInterface;
use Application\Model\Entity\Examen;
use Application\Model\Repository\ExamenRepository;


class ExamenRepositoryFactory implements FactoryInterface
{
	/**
	*{@inheritDoc}
	*@see \Zend\ServiceManager\Factory\FactoryInterface::__invoke() 
	*/
	public function __invoke(ContainerInterface $container, $requestedName, array $options= null){
		$dbAdapter = $container -> get('general-db-adapter');
		$classMethodsHydrator = new ClassMethods();
		$classMethodsHydrator -> setUnderscoreSeparatedKeys(false);
		$hydratedResulSet = new HydratingResultSet($classMethodsHydrator,new Examen());
		$tableGateway = new TableGateway("examen",$dbAdapter,null, $HydratingResultSet);
		$examenRepository = ExamenRepository();
		$examenRepository -> setTableGateway($tableGateway);
		return $examenRepository;

	}



}