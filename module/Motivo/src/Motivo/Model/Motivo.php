<?php

namespace Motivo\Model;

class Motivo {

	public $codigo;
	public $nome;
	
	public function __construct(array $data) {
		$this->codigo = isset($data['codigo']) ? $data['codigo'] : NULL;
		$this->nome = isset($data['nome']) ? $data['nome'] : NULL;
	}
	
	public function toArray() {
		return get_object_vars($this);
	}
}

?>