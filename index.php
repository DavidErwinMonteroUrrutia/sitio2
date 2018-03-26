

<?php 
	include("biblioteca.php");//Incluir las funciones necesarias...
	$numeros = array();//Arreglo
	$largo = rand(1,20);//Numero aleatorio
	/*Cargar la coleccion con largo elementos "sin tope de elementos"
		LLenar el arreglo con nuestro acuerdo de 1-20 elementos 
	*/
	for($i=0;$i<$largo;$i++)
	{
		$numeros[$i] = rand(1,100);
	}	
	/*
		mostrar largo del arreglo y otros datos:
	*/
	echo "Largo inicial arreglo = $largo<br>";//Modo Una sola variable
	echo 'Largo inicial arreglo = '.$largo.'<br>';//Modo varias variables.
	echo 'mostrando valores...<br>';	
	asort($numeros);//ordenar de forma ascendente
	arsort($numeros);//ordenar de forma descendente
	foreach($numeros as $x){
		echo "$x<br>";
	}	
	echo '<table width="200" border="3">
		  <tr>
			<td width="79">Correlativo</td>
			<td width="68">Numeros</td>
			<td width="81">Tipo</td>
		  </tr>';
	$conta=0;
	$suma=0;
	arsort($numeros);
	foreach($numeros as $x)
	{
		//$conta=$conta + 1;
		$conta++;
		echo '<tr>
				<td>'.$conta.'</td>
				<td>'.$x.'</td>
				<td>'.esPar($x).'</td>
	  		</tr>';
			$suma+=$x;
	}
	echo '<tr><td width="68">Suma</td>
			<td width="81">'.sumatoria($numeros).'</td><td width="79"></td></tr>';
	echo '</table>';
?>