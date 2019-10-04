<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $bairro;
	private $cep;
	private $cidade;

	public function __construct($a, $b, $c, $d ,$e){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->bairro = $c;
		$this->cep = $d;
		$this->cidade = $e;

	}

	public function __destruct(){

		//var_dump("DESTRUIR");

	}

	public function __toString(){

		return $this->logradouro.", ".$this->numero.", ".$this->bairro.", "$this->cep." - ".$this->cidade;
	}

}

$meuEndereco = new Endereco("Rua Almirante Tamandaré", "157", "Jardim Montreal", "09662-010", "São Bernardo do Campo<br><br>");

echo $meuEndereco;

?>