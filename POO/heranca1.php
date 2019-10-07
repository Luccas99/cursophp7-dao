<?php

class Exemplo {

	private $num;

	public function getNum()
	{

		return $this->num;

	}

	public function setNum($a)
	{

		$this->num = $a;

	}

}

class CEL extends Exemplo {

	public function validar():bool
	{

		$numCPF = $this->getNum();

		//validação do CEL

		return true;

	}

} 

$tem = new CEL();

$tem->setNum("9 1111-2222");

var_dump($tem->validar());

print "<br><br>";

print $tem->getNum();

?>

