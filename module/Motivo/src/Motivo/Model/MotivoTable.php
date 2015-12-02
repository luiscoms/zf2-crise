<?php

namespace Motivo\Model;

use Zend\Db\TableGateway\TableGatewayInterface;


class MotivoTable {

	/**
	 * @var TableGatewayInterface
	 */
	private $tableGateway;
	
	public function __construct(TableGatewayInterface $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function save(Motivo $motivo) {
		$data = $motivo->toArray();
		if (empty($motivo->codigo)) {
			$this->tableGateway->insert($data);
		} else {
			$this->tableGateway->update('codigo='.$motivo->codigo);
		}
	}
	
	/**
	 * @param unknown $codigo
	 * @return \Motivo
	 */
	public function get($codigo) {
		return new Motivo();
	}
	
	public function delete($codigo) {
		;
	}
}

?>