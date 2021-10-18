<?php
 
$mes = date("m");
$dia= date("j"); // j hace que salga 1, 2, 3... en vez de 01, 02, 03...
$ano= date("Y");
$diasMes= date("t"); //ymd his (year month day, hour

$diaActual= 1;

//no sirve
$monthNum  = $mes;
$dateObj   = DateTime::createFromFormat('!m', $monthNum);
$monthName = $dateObj->format('F'); 

	echo '<table width="200px" border="0" cellspacing="0" cellpadding="4" align=right>';


	echo '<tr>';

	echo '<td style="background: #5DADE2;"><span class="calender-style align: center">';
	echo "<span>".$monthName."-".$ano."</span>";
	echo '</td>';
	
	echo '</tr>';
	echo '<tr>'; //Table row

	//Estilo para el calendario
	echo '<td style="background: #5DADE2;"><span class="calender-style">Lun</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Mar</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Mie</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Jue</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Vie</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Sab</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Dom</span></td>';


	$bgcolor="#4B9E03";
	$tablecolor = "#666645";
	$fontcolor = "#FFFFFF";
	$tableborder = "#446655";


//tomo el nombre del mes que hay que imprimir

//mktime(hour, min, sec, month, day, year) = num segundos desde 1 enero 1970 : solo es información

 $segundosDia1 = mktime(0, 0, 0,$mes , 1, $ano); //me devuelve una cantidad de segundos. Marca de tiempo Unix para el primer dia del mes
 $arrayDia1 = getdate($segundosDia1);
 $diaSemanaDia1 = $arrayDia1['wday']; //vemos en qué día cae el primer día del mes [0: domingo - 6:sabado]
 
 
 
 
 //Cambia el primer dia de la semana a Lunes en lugar de Domingo
 if ($diaSemanaDia1==0)
 {
	 $diaSemanaDia1 = 7;
 }


	  
	  //¿EN que día de la semana cae el día uno?
	    echo '<tr>';
		for($col=1; $col<$diaSemanaDia1; $col++){
			echo "<td>&nbsp;</td>"; //Imprime un espacio en blanco, porque aun no ha empezado el día
		  
		 }
		for($col=$diaSemanaDia1; $col<8; $col++){
			echo "<td>".$diaActual."</td>";
			$diaActual++;
		 }  
		 echo '</tr>';
		 
		//redondea hacia arriba
		 $numSemanas = ceil(($diasMes-$diaActual +1)/7);
		 
		for($filas=0; $filas<$numSemanas; $filas++){
			echo "<tr>";
			 for($col=0; $col<7; $col++){
			 
				 if ($diasMes<$diaActual){
					 echo "<td>&nbsp;</td>";
				 }
				 else{
					 if ($diaActual==$dia)
					 {
						echo '<td style ="background: #5DADE2;">' . $diaActual . '</td>'; //Cambiar estilo4
					 }
					 else
						 echo "<td>" . $diaActual . "</td>"; // Sin estilo
					 $diaActual++;
					}
			  
			 }
			 echo "</tr>";
		}


	  echo '</table>';
	  
	  
?>

