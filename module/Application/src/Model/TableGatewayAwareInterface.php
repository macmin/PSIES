<?php 

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;


interface TableGatewayAwareInterface
{
	/**
	 * @param TableGateway $tableGateway
	 */
	public function setTableGateway(TableGateway $tableGateway);

	public function getTableGateway();


}