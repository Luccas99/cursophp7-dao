<?php

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() {

		return $this->modelo;

	}

	public function setModelo($modelo) {

		$this->modelo = $modelo; 

	}

	public function getMotor():float {

		return $this->motor;

	}

	public function setMotor($motor) {

		$this->motor = $motor; 

	}

	public function getAno():int {

		return $this->ano;

	}

	public function setAno($ano) {

		$this->ano = $ano; 

	}

	public function exibir() {

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);

	}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());

print "<br><br>";

?>








<?php 

class Estado {

	private $lapa;
	private $ipiranga;
	private $santana;

	public function getLapa() {

		return $this->lapa;

	}

	public function setLapa($lapa) {

		$this->lapa = $lapa; 

	}

	public function getIpiranga() {

		return $this->ipiranga;

	}

	public function setIpiranga($ipiranga) {

		$this->ipiranga = $ipiranga; 

	}

	public function getSantana() {

		return $this->santana;

	}

	public function setSantana($santana) {

		$this->santana = $santana; 

	}


public function mostrar() {

		return array(
			"lapa"=>$this->getLapa(),
			"ipiranga"=>$this->getIpiranga(),
			"santana"=>$this->getSantana()
		);

	}

}

$sp = new Estado();
$sp->setLapa("Z.O");
$sp->setIpiranga("Z.S");
$sp->setSantana("Z.N");

var_dump($sp->mostrar());

print "<br><br>";

?>






<?php

class Celular {

	private $iphone;
	private $samsung;
	private $motorola;

	public function getIphone() {

		return $this->iphone;

	}

	public function setIphone($iphone) {

		$this->iphone = $iphone; 

	}

	public function getSamsung() {

		return $this->samsung;

	}

	public function setSamsung($samsung) {

		$this->samsung = $samsung; 

	}

	public function getMotorola() {

		return $this->motorola;

	}

	public function setMotorola($motorola) {

		$this->motorola = $motorola; 

	}

public function Aparelhos() {

		return array(
			"iphone"=>$this->getIphone(),
			"samsung"=>$this->getSamsung(),
			"motorola"=>$this->getMotorola()
		);

	}

}

$alo = new Celular();
$alo->setIphone("Fera");
$alo->setSamsung("Serve");
$alo->setMotorola("Mais ou Menos");

var_dump($alo->aparelhos());

?>