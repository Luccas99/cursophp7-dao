<?php

class Material {

	private $digito;

	public function getDigito(){
		return $this->digito;
	}

	public function setDigito($digito){
		$this->digito = $digito;
	}

}		

$numero = new Material();
$numero->setDigito("11111111111");

var_dump($numero->getDigito());

print "<br><br>";

?>
