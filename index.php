<?php
/*
 * El frontend controller se encarga de configurar 
 * nuestra aplicacion
 */
require 'config.php';
require 'helpers.php';

// Llamar a los controladores individuales


//index.php //Llamamos controlador home

if(empty($_GET['url'])){
	require 'controllers/home.php';
}
//index.php?url=contactos
elseif($_GET['url'] == 'contactos'){
	require 'controllers/contactos.php';
}

//print_r()
//var_dump() //utilizar para ver que esta sucediendo


//Imprimimos salida
//var_dump($_GET);


//index.php?url=asdasd
else{
	//error 404
	header("HTTP/1.0 404 Not Found");
	exit("Página no encontrada");
}	