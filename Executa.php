<?php 

require_once('HtmlBuilder.php');
require_once('DiretorXml.php');

$input = "clientes.xml";
$builder = new HtmlBuilder();
$diretor = new DiretorXml($builder);
$diretor->construir($input);

file_put_contents("clientes.html", $builder->gerResultado());