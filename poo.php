<?php

class Humano {

	public $nome; //Atributo

	public function falar() { //Método

		return "O meu nome é: ".$this->nome;

	}

}

$luccas = new Humano();
$luccas->nome = "<strong>Luccas Santana Marinho</strong>";
print $luccas->falar();

?>

<?php 

class Empresa {

	public $nome;

	public function trabalho() {

		return "<br>Trabalho na empresa: ".$this->nome;

	}

}

$web = new Empresa();
$web->nome = "<strong>Webjump</strong>";
print $web->trabalho();


?>

<?php

class DataNasc {

	public $nome;

	public function Nascimento () {

		return "<br>Nasci no dia: ".$this->nome;

	}

}

$data = new DataNasc();
$data->nome = "<strong>15/08/1999</strong>";
print $data->nascimento();

?>

<?php 

class TimeQueTorço {

	public $nome;

	public function Timão() {

		return "<br>Torço para o: ".$this->nome;

	}

}

$time = new TimeQueTorço();
$time->nome = "<strong>Corinthians</strong>";
print $time->Timão();

?>

<?php

class Moro {

	public $nome;

	public function SBC() {

		return "<br>Moro em: ".$this->nome;

	}

}

$cidade = new Moro();
$cidade->nome = "<strong>São Bernardo do Campo</strong>";
print $cidade->SBC();

?>

