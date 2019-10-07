<?php

use App\Vendas\Usuario;
use App\Vendas\Produtos;
use App\Vendas\Compra;
use App\Estoque\Estoque;
use App\Estoque\Produto;

require_once 'vendor/autoload.php';

$u = new Usuario();
$u->cadastrar('Luccas',20);

$p1 = new Produtos();
$p2 = new Produtos();

$p1->cadastrar('1', 'produto1');
$p2->cadastrar('2', 'produto2');

$c = new Compra();

$c->cadastrar(
	array(
		'p1' => $p1,
		'p2' => $p2
	), $u
);	

echo $c->imprimir();

$e = new Estoque();
echo $e->getTotal();