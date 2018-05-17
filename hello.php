<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

$confidencial = "wow such private very confidencial";

$languaje = "PHP";

//Declarando a una funcion
function view($languaje){
	require "view.php";
}

//Llamando a una funcion
view($languaje);
