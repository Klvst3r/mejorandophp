<?php

$confidencial = "wow such private very confidencial";

$languaje = "PHP";

//Declarando a una funcion
function view($languaje){
	require "view.php";
}

//Llamando a una funcion
view($languaje);
