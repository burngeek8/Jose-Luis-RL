<?php 

	$confidencial = "esto no deberia verse por q es privado";
	$lenguage = "PHP"; 
	$titulo = 'MejorandoPHP';

	//Llamando una funcion
	view('home', compact('lenguage','titulo'));