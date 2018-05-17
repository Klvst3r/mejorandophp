<?php

require 'config.php';
require 'helpers.php';

$confidencial = "wow such private very confidencial";

$languaje = "PHP";
$titulo = "Mejorando Laravel by Klvst3r";

//Llamando a una funcion
view('view', ['languaje' => $languaje, 'titulo' => $titulo ]);
