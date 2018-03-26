<?php 
	/*
		Funciones basicas
	*/
	
	//Es par  
	function esPar($x)
	{
		$tipo="Es par";
		if($x%2==1)
		{
			$tipo="Es Impar";
		}
		return $tipo;
	}
	
	function sumatoria($arreglo)
	{
		$suma=0;
		$conta=0;
		foreach($arreglo as $x){
			$suma+=$arreglo[$conta];
			$conta++;
		}
		return $suma;
	}
	
?>