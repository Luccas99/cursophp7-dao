<?php

class Trampo {

	public $vulgo = "Japa"; 
	public $anos = 18;
	public $email = "japagay@gmail.com.br";
	public $pais = "Japão";

	public function analisarDados() {

		print $this->vulgo. "<br/>";
		print $this->anos. "<br/>";
		print $this->email. "<br/>";
		print $this->pais. "<br/>";

	}

}

class Programador extends Trampo {


}

$oi = new Trampo();

//print $oi->email . "<br/>";

$oi->analisarDados();

?>