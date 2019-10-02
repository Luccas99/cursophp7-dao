<?php

$empty = $post = array();
foreach ($_POST as $varname => $varvalue) {
    if (empty($varvalue)) {
        $empty [$varname] = $varvalue;
    } else  {
        $post [$varname] = $varvalue;
    }
}    

print "<pre>";

if (empty($empty)) 

{

print "<strong>Programinha fera tlgd cachorro:</strong> \n \n";

$qualOSeuSalário = 7900;

$SalárioRuim = 1000;

$SalárioBom = 3000;

$SalárioFera = 7000;

if ($qualOSeuSalário <= $SalárioRuim){

print "Pede um Aumento";

} else if ($qualOSeuSalário <= $SalárioBom) {

    print "Ajuda nas Conta";

} else if ($qualOSeuSalário <= $SalárioFera) {

    print "Tá Bem de Vida";

} else {

print "Conta Os Placo";

}

print ($qualOSeuSalário < $SalárioBom)?"<br><br>Tá Mal de Grana":"<br><br>Tá Bem de Grana";

$mesDoAno = 12;//date("5");

print "<br><br>";

switch ($mesDoAno) {

case 0:
print "Janeiro";
break;

case 1:
print "Fevereiro";
break;

case 2:
print "março";
break;

case 3:
print "abril";
break;

case 4:
print "maio";
break;

case 5:
print "junho";
break;

case 6:
print "julho";
break;

case 7:
print "agosto";
break;

case 8:
print "setembro";
break;

case 9:
print "outubro";
break;

case 10:
print "novembro";
break;

case 11:
print "dezembro";
break;

default;

print "mês inválido<br><br>";
break;

print "<br><br>";

}

for ($i = 0; $i < 1000; $i+=5) {

if ($i >=  200 && $i <= 800) continue;

if ($i ===900) break;

echo $i . "<br><br>";

}

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes ) {

	print "Indice: ".$index."<br>";
	print "O mês é: ".$mes."<br><br>";

}

}

?>

<form>
	
<input type="text" name="nome">

<input type="date" name="nascimento">


<input type="submit" value="OK">

</form>

<?php 

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {

		print "Nome do campo: " . $key . "<br><br>";

		print "Valor do campo: " . $value . "<br><br>";	

	}

print "<br>";

$condicao = true;

while ($condicao) {

	$numero = rand(1, 10);

	if ($numero === 3) {

		print "TRÊS!!!";
		$condicao = false;

	}

	print $numero . " ";

}

$total = 170;
$desconto = 0.9;

do {

	$total *= $desconto;

}

while ($total > 100);

print "<br><br>";

print $total;

$frutas = array("laranja", "abacaxi", "melancia");

print "<br><br>";

print_r($frutas);

$carros [0][0] = "GM";
$carros [0][1] = "Celta";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "FORD";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Focus";
$carros [1][3] = "Eco Sport";

print "<br>";

print $carros [0][3];

print "<br><br>";

print end($carros[1]);

print "<br><br>";

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Luccas',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Fernando',
	'idade' => 30
));

print_r($pessoas[0]['nome']);

print "<br><br>";

print json_encode($pessoas);

$json = '[{"nome":"Luccas","idade":20},{"nome":"Fernando","idade":30}]';

$data = json_decode($json, true);

var_dump($data);

define("SERVIDOR", "127.0.0.1");

print "<br>";

print SERVIDOR;

print "<br><br>";

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'rool',
	'password',
	'test'
], true);

print_r(BANCO_DE_DADOS);

print "<br>";

print PHP_VERSION;

print DIRECTORY_SEPARATOR;

print "<br><br>";

var_dump(session_start());

print "<br>";

switch(session_status()) {

	case PHP_SESSION_DISABLED;
	print "as sessões estão disabilitadas";
	break;

	case PHP_SESSION_NONE;
	print "as sessões estiverem habilitadas, ,as nenhuma existir";
	break;

	case PHP_SESSION_ACTIVE;
	print "as sessões estiverem habilitadas, e uma existir";
	break;

}

function ola(){

print "<br><br>";

print "Olá mundo!";

}

ola();
ola();

function salario(){

	return 946.00;

}

print "<br><br>";

print "Luccas recebeu 3 salários ".(salario()*3);

class Feio {
	
	public $nome;//Atributo

	public function dizer(){//Método

print "<br><br>";

		return "O mais feio da sala é o ".$this->nome;

	}

}

$independente = new Feio();
$independente->nome = "Japa";
print $independente->dizer();

print "<br><br>";

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

$objeto = new Pessoa();

echo $objeto->nome . "<br/><br/>";

class Documento {

	private $numero;

	public function getNumero()
	{

		return $this->numero;

	}
	
	public function setNumero($n)
	{	

		$this->numero = $n;

	}
	
}

class CPF extends Documento	{

	public function validar():bool	
	{

		$numeroCPF = $this->getNumero();

		//validação do CPF

		return true;

	}

}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

print "<br><br>";

interface Time

{

	public function Corinthians ($fut);
	public function Palmeiras ($fut);
	public function Santos ($fut);

}

class Gavioes implements Time {

	public function Corinthians($fut)
	{

		echo "O time fez gol até" . $fut . " arena";

	}

	public function Palmeiras($fut)
	{

		echo "O time fez até" . $fut . " arena";

	}

	public function Santos($velocidade)
	{

		echo "O Santos só tem véio " . $velocidade . " arena";

	}

}

$fut = new Gavioes();

$fut->Santos(1);

print "<br><br>";

////////////////////////////////////

interface Veiculo
{

	public function acelerar ($velocidade);
	public function frenar ($velocidade);
	public function trocarMarcha ($marcha);

}

abstract class Automovel implements veiculo {

	public function acelerar($velocidade)
	{

		echo "O veículo acelerou até: " . $velocidade . " km/h";

	}

	public function frenar($velocidade)
	{

		echo "O veículo frenou até: " . $velocidade . " km/h";

	}

	public function trocarMarcha($marcha)
	{

		echo "O veículo engatou a marcha: " . $marcha;

	}

}

class DelRey extends Automovel {

	public function empurrar()
	{

	}
	
}		

$carro = new DelRey();
$carro->acelerar(200);

print "<br><br>";

abstract class Animal {

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal {

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal {

	public function falar(){

		return "Mia";

	}

}

class Passaro extends Animal {

	public function falar() {

		return "Canta";

	}

	public function nover() {

		return "Voa e " . parent::mover();

	}

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo"--------------------------------<br>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo"--------------------------------<br>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";

print "<br><br>";

spl_autoload_register(function($nomeClass){ 

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if (file_exists($filename)) {

		require_once($filename);

	}

});

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

print "<br><br>";

echo "oi";

}

?>