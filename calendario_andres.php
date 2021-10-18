

<?php

include('header.php');
include('menu1.php');
$mes = date("m");
$dia= date("d");
$ano= date("Y");
$diasMes= date("t");


$diaActual= 1;

$monthNum  = $mes;
$dateObj   = DateTime::createFromFormat('!m', $monthNum);
$monthName = $dateObj->format('F'); 

	echo '<table width="200px" border="0" cellspacing="0" cellpadding="4" align=right>';


	echo '<tr>';

	echo '<td style="background: #5DADE2;"><span class="calender-style align: center">';
	echo "<span>".$monthName."</span>";
	echo '</td>';
	
	echo '</tr>';

	echo '<tr>';

	echo '<td style="background: #5DADE2;"><span class="calender-style">Lun</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Mar</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Mie</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Jue</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Vie</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Sab</span></td>';
	echo '<td style="background: #5DADE2;"><span class="calender-style">Dom</span></td>';
	echo '</tr>';




	$bgcolor="#4B9E03";
	$tablecolor = "#666645";
	$fontcolor = "#FFFFFF";
	$tableborder = "#446655";



 // $fecha = getdate($segundos);
 $maniana = mktime(0, 0, 0, date("m") , date("d")+1, date("Y"));
$mes_anterior = mktime(0, 0, 0, date("m")-1, date("d"), date("Y"));
$anio_siguiente= mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
// echo "Mañana: " . $maniana . ", es decir, " . date('Y-m-d', $maniana). ".<br>";
// echo "Mes anterior: " . $mes_anterior . ", es decir, " . date('Y-m-d', $mes_anterior). ".<br>";
// echo "Año siguiente: " . $anio_siguiente . ", es decir, " . date('Y-m-d', $anio_siguiente). ".<br>";



//tomo el nombre del mes que hay que imprimir
$mes = date("m");
$dia= date("d");
$ano= date("Y");
$diasMes= date("t");
$diaActual= 1;


 $segundosDia1 = mktime(0, 0, 0,$mes , 1, $ano);
 $arrayDia1 = getdate($segundosDia1);
 $diaSemanaDia1 = $arrayDia1['wday'];
 
 
 
 
 
 if ($diaSemanaDia1==0)
 {
	 $diaSemanaDia1 = 7;
 }


  // echo '<table border="1">';
// echo '<tr>';

// echo "<td>" . $mes . "</td>";
// echo '</tr>';

	  
	  
	  //¿EN que día de la semana cae el día uno?
	    echo '<tr>';
		for($col=1; $col<$diaSemanaDia1; $col++){
			echo "<td>&nbsp;</td>";
		  
		 }
		for($col=$diaSemanaDia1; $col<8; $col++){
			echo "<td>".$diaActual."</td>";
			$diaActual++;
		 }  
		 echo '</tr>';
		 $numSemanas = ceil(($diasMes-$diaActual +1)/7);
		 
		for($filas=0; $filas<$numSemanas; $filas++){
			echo "<tr>";
			 for($col=0; $col<7; $col++){
			 
				 if ($diasMes<$diaActual){
					 echo "<td>&nbsp;</td>";
				 }
				 else{
					 
					 echo "<td>" . $diaActual . "</td>";
					 $diaActual++;
					}
			  
			 }
			 echo "</tr>";
		}


	  echo '</table>';
	  
	  
?>

