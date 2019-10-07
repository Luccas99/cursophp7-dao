<?php

abstract class Humano {

    public function fala() {

        return "Algo";

    }

    public function andar() {

        return "Passos";

    }

}

class Homem extends Humano {

    public function fala() {

        return "Salve";

    }

}

class Menino extends Humano {

    public function fala() {

        return "Mamãe";

    }

}

class Mulher extends Humano {

    public function fala() {

        return "Olá";

    }

}

$Joaozinho = new Homem();

print $Joaozinho->fala() . "<br>";
print $Joaozinho->andar() . "<br>";

echo "<strong>--------------------------</strong><br>";

$Menino = new Menino();

print $Menino->fala() . "<br>";
print $Menino->andar() . "<br>";

echo"<strong>---------------------------</strong><br>";

$Mariazinha = new Mulher();

print $Mariazinha->fala() . "<br>";
print $Mariazinha->andar() . "<br>";

?>