<?php 

interface Torcida {

	public function torcer ($vitoria); 
	public function gritar ($vitoria);
	public function vaiar ($derrota);

}

class Corinthians implements Torcida {

	public function torcer ($vitoria)
	{

		print "A torcida torceu até " . $torcer . " Tempo 48 min";

	}

	public function gritar ($vitoria)
	{

		print "A torcida gritou até " . $gritar . " Tempo 48 min";

	}

	public function vaiar ($derrota)
	{

		print "A torcida vaiou até " . $derrota . " Tempo 48 min";

	}

}

$jogo = new Corinthians;

$jogo->vaiar(2);

print"<br><br>";

?>


<?php

interface Organizadas {

    public function gavioes ($doido);
    public function independente ($doido);
    public function mancha ($porco);

}

class Torce implements Organizadas {

    public function gavioes ($doido)
    {

        print "A gavioes é " . $gavioes . " A melhor";
    
    }

    public function independente ($doido)
    {

        print "A independente é " . $independente . " Morumbi";
    }

    public function mancha ($porco)
    {

        print "A mancha é " . $porco . " Barra Funda";
    }

}

$bandeira = new Torce;

$bandeira->mancha(0);

?>