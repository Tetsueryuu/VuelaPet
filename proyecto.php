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

/*
$btn = $_POST['boton'];
switch ($btn) {
	case 'comprar':
		altaContacto($db,($id_con+1),$nombre1, $edad1, $telefono,$tok[0]);
		if($nombre2!= ""&&$edad2!=""){
			altaPasajero($db,($id_con+1),$nombre2, $edad2, $tok[1]);
		}
		if($nombre3!= ""&&$edad3!=""){
			altaPasajero($db,($id_con+1),$nombre3, $edad3,$tok[2]);
		}
		if($nombre4!= ""&&$edad4!=""){
			altaPasajero($db,($id_con+1),$nombre4, $edad4,$tok[3]);
		}
		header('Location: ./Asientos3.php');
		break;


}

*/

function altaContacto($d,$i, $n, $e,$t,$a,$o,$d,$h){


//echo("var_PHP = ".$asiento);

	if(mysqli_query($d, "INSERT INTO `contacto` (`id_con`, `nombre_con`, `edad_con`, `telefono_con`,`asiento_con`,`origen_con`,`destino_con`,`hora_con`) VALUES ('$i', '$n', '$e', '$t','$a','$o','$d','$h')")){

			

		}
	}


function altaPasajero($d,$i, $n, $e,$a,$o,$d,$h){


//echo("var_PHP = ".$asiento);

	if(mysqli_query($d, "INSERT INTO `pasajero` (`id_con`,`id_pas`, `nombre_pas`, `edad_pas`, `asiento_pas`,`origen_con`,`destino_con`,`hora_con`) VALUES ('$i',NULL, '$n', '$e', '$a','$o','$d','$h')")){

			

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


}
*/
?>

