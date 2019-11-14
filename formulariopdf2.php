<?php
$db = new mysqli("localhost", "root", "", "vuelapet");


if(mysqli_connect_errno()){
	printf("Conexion Fallida: %s\n", mysql_connect_error);
	exit();
}
$consulta = "select count(id_con) from contacto;";
$resultado = $db -> query($consulta);
$re = $resultado-> num_rows;
$fila = $resultado->fetch_assoc();
$id_con = $fila['count(id_con)'];
echo ("id_con ".$id_con);

$consulta = "select count(id_pas) from pasajero;";
$resultado = $db -> query($consulta);
$re = $resultado-> num_rows;
$fila = $resultado->fetch_assoc();
$id_pas = $fila['count(id_pas)'];
echo ("id_pas ".$id_pas);


$n = isset($_POST['n']) ? $_POST['n'] : "0";

$lugar = isset($_POST['lugar']) ? $_POST['lugar'] : "";
$hora = isset($_POST['hora']) ? $_POST['hora'] : "";
$nombre1 = isset($_POST['nombre1']) ? $_POST['nombre1'] : "";
$edad1 = isset($_POST['edad1']) ? $_POST['edad1'] : "";
$nombre2 = isset($_POST['nombre2']) ? $_POST['nombre2'] : "";
$edad2 = isset($_POST['edad2']) ? $_POST['edad2'] : "";
$nombre3 = isset($_POST['nombre3']) ? $_POST['nombre3'] : "";
$edad3 = isset($_POST['edad3']) ? $_POST['edad3'] : "";
$nombre4 = isset($_POST['nombre4']) ? $_POST['nombre4'] : "";
$edad4 = isset($_POST['edad4']) ? $_POST['edad4'] : "";
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
$ss = isset($_POST['arv']) ? $_POST['arv'] : "";

$nombres = array($nombre1, $nombre2,$nombre3,$nombre4);
$edades = array($edad1, $edad2,$edad3,$edad4);
// La funcion explode convertira la cadena a arreglo
echo($edad1." ".$edad2." ".$edad3." ".$edad4);
$tok = explode(',',$ss); 
if($tok[0]!=""){
echo(" prueba = ".$tok[0]);
}
if($tok[1]!=""){
echo(" prueba = ".$tok[1]);
}
if($tok[2]!=""){
echo(" prueba = ".$tok[2]);
}
if($tok[3]!=""){
echo(" prueba = ".$tok[3]);
}

echo(" lugar = ".$lugar);
echo(" hora = ".$hora);
//echo("tablaAsientos = ".$tablaAsientos);

	 // igualar el valor de la variable JavaScript a PHP 



/* incluimos primeramente el archivo que contiene la clase fpdf */

include ('fpdf/fpdf.php');

/* tenemos que generar una instancia de la clase */

$pdf = new fpdf();
$pdf->gFPDF();


for($i = 0; $i<$n; $i++){
$pdf->AddPage();


$pdf->Image('jd.jpg',10,30,195);

$pdf->Image('co.jpg',124,48,19);

/* seleccionamos el tipo, estilo y tamaño de la letra a utilizar */

$pdf->SetFont('Helvetica', 'B', 14);


$pdf->Write (20,"VuelaPet ");


$pdf->Ln();
$pdf->Ln();
//-------------------------------------------------------
$pdf->Write (7,"Nombre del pasajero ");
$pdf->SetFont('Arial','I',14);
$pdf->Ln();
$pdf->Ln();
$pdf->Write(-4,$_POST["nombre".($i+1)]);
$pdf->SetFont('Helvetica', 'B', 14); 
$pdf->SetFont('Arial','I',6);
$pdf->Cell(128);
$pdf->Write(-4,$_POST["nombre".($i+1)]);
$pdf->Ln();
//--------------------------------------------------------
$pdf->Cell(140);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->Write (-5,"Nombre del pasajero ");


//-------------------------------------------------------------
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(0);
$pdf->Write (10,"Edad");
$pdf->Ln(); //salto de linea
$pdf->SetFont('Arial','I',14);
$pdf->write(2,$_POST["edad".($i+1)]);


if($i==0){
//------------------------------------------------------
//telefono
$pdf->SetFont('Helvetica', 'B', 14); 
$pdf->Ln();

$pdf->Write (13,"telefono");
$pdf->Ln(); //salto de linea
$pdf->SetFont('Arial','I',14);
$pdf->write(2,$_POST['telefono']);
}
//------------------------------------------------------
//Destino
$pdf->SetFont('Helvetica', 'B', 14); 
$pdf->Ln();
$pdf->Write (13,"Origen");
$pdf->Ln(); //salto de linea
$pdf->SetFont('Arial','I',14);
$pdf->write(2,"Monterrey");

//------------------------------------------------------
//Hora
$pdf->SetFont('Helvetica', 'B', 14); 
$pdf->Ln();
$pdf->Write (13,"Hora");
$pdf->Ln(); //salto de linea
$pdf->SetFont('Arial','I',14);
$pdf->write(2,"12:30");

//------------------------------------------------------
//Origen
$pdf->Cell(30);
$pdf->SetFont('Helvetica', 'B', 14); 
$pdf->Write (-45,"Destino");
$pdf->Cell(-15);
$pdf->SetFont('Arial','I',14);
$pdf->write(-30,$lugar);

$pdf->Cell(-17);
$pdf->SetFont('Helvetica', 'B', 14); 
$pdf->Write (-10,"Asiento");
$pdf->Cell(-17);
$pdf->SetFont('Arial','I',14);
$pdf->write(0,$tok[$i]);

//--------------------------------------------------------

$pdf->AliasNbPages();
}
$pdf->Output("Boletos VuelaPet.pdf",'F');

echo "<script language='javascript'>window.open('Boletos VuelaPet.pdf');</script>";//paral archivo pdf generado

$btn = $_POST['boton'];
switch ($btn) {
	case 'Confirmar':
		altaContacto($db,($id_con+1),$nombre1, $edad1, $telefono,$tok[0],$lugar,$hora);
		for($i=1; $i<$n; $i++){
			altaPasajero($db,($id_con+1),$nombres[$i], $edades[$i], $tok[$i],$lugar,$hora);
		}
		
		//	altaPasajero($db,($id_con+1),$nombre3, $edad3,$tok[2],$lugar,$hora);
	
		//	altaPasajero($db,($id_con+1),$nombre4, $edad4,$tok[3],$lugar,$hora);
		break;


}




function altaContacto($d,$i, $n, $e,$t,$a,$des,$h){


//echo("var_PHP = ".$asiento);

	if(mysqli_query($d, "INSERT INTO `contacto` (`id_con`, `nombre_con`, `edad_con`, `telefono_con`,`asiento_con`,`origen_con`,`destino_con`,`hora_con`) VALUES ('$i', '$n', '$e', '$t','$a','Monterrey','$des','$h')")){

						

		}
	}

function altaPasajero($d,$i, $n, $e,$a,$des,$h){


//echo("var_PHP = ".$asiento);

	if(mysqli_query($d, "INSERT INTO `pasajero` (`id_con`,`id_pas`, `nombre_pas`, `edad_pas`, `asiento_pas`,`origen_pas`,`destino_pas`,`hora_pas`) VALUES ('$i',NULL, '$n', '$e', '$a','Monterrey','$des','$h')")){

			

		}
}
//mysqli_query($d, "INSERT INTO `pasajero` (`id`, `Nombre`, `edad`, `Telefono`) VALUES (NULL, '$n', '$e', '$t')");

//$consulta="INSERT INTO `pasajero` (`id`, `Nombre`, `edad`, `Telefono`) VALUES (NULL, '$n', '$e', '$t');";

//mysqli_query($d,$consulta) or die (mysqli_error());




/*
function baja($d, $n, $c, $t){
	if($r = $d->query("SELECT * FROM `personas` WHERE 
		`Nombre` = '$n' AND `E_Mail` = '$c' AND 
		`Telefono` = '$t' ")){
		$r = mysqli_fetch_assoc($r);
		$id = $r['id'];
		if(mysqli_query($d, "DELETE FROM `personas` WHERE id = '$id' ")){
			header('Location: ./index.php');

		}
	}

}
function cambio($d, $n, $c, $t){
	if($r = $d->query("SELECT * FROM `personas` where `Telefono` = '$t'")){
		$r = mysqli_fetch_assoc($r);
		$id = $r['id'];
		echo("id = ".$id);
		if(mysqli_query($d, "UPDATE `personas` SET `Nombre` = '$n', `E_Mail` = '$c', `Telefono` = '$t' where id = '$id' ")){
			header('Location: ./index.php');
		}
	}


*/


exit;

?>