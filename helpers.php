<?php
//Declarando a una funcion
function view($template, $vars = array() ){
	extract($vars);
	require "$template.php";
} 