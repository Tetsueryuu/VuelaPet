
<html lang="es">

<head>

  <script type="text/javascript">
scriptAr = new Array();
scriptAr[0] = "";
scriptAr[1] = "";
scriptAr[2] = "";
scriptAr[3] = "";


// lo convierte a cadena
var arv = scriptAr.toString();
// y como ya lo llevas oculto en el formulario, asi para a el script php

    var lugaresDisponibles = 0;
    var g="hola";
    var letras = ["A","B","C","D","E","F"];
        var asientos = ["","","",""];
        var asiento = "hola";
           function cambiarColor(x,n,i,j){
            
              

            if(lugaresDisponibles<n){
                if(x.style.background !="red"){
                    x.style.background="red";
                    scriptAr[lugaresDisponibles] = i+letras[j]+"";
                    lugaresDisponibles++;
                }else if(i <11 || i >12){
                    x.style.background="lightblue";
                    lugaresDisponibles--;
                }else {
                    x.style.background="blue";
                    lugaresDisponibles--;
                }
            }else if(x.style.background =="red"){
                if(i <11 || i >12){
                    x.style.background="lightblue";
                    lugaresDisponibles--;
                }else {
                    x.style.background="blue";
                    lugaresDisponibles--;
                }
            }
            var arv = scriptAr.toString();
            document.getElementById("arv").value= arv;
        }
</script>

<?php
$lugar = isset($_POST['lugar']) ? $_POST['lugar'] : "";


?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>VuelaPet</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="estilos.css">
    
</head>

<body>



    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="index.php"> Inicio</a></li>
                <li><a href="Destinos.php"> Destinos</a>
                <ul class="submenu">
                     <li><a href="Torreon.php">Torreon</a></li>
                     <li><a href="Mexico.php">Mexico</a></li>
                     <li><a href="Zacatecas.php">Zacatecas</a></li>
                    
                 </ul>
             </li>
                <li><a href="inicioSesion.php"> Iniciar Sesion</a> </li>
            </ul>
    
        </nav>
    
        <section class="textos-header">
            <h1>BIENVENID@ A LA SELECCIÓN DE ASIENTOS </h1>
            
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
            
    </header>
    
<h1 align="center" style="background-color: white;"> Seleccion de asientos</h1>
<div id="relleno" style="margin-top: 0; height: 1296;"></div>
<div  id="destino"> Origen: Monterrey
  <?php
    $hora = isset($_POST['hora']) ? $_POST['hora'] : "";
    $n = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
    switch ($hora) {
        case 1: $hora="8:20";
            break;
        case 2: $hora="11:20";
            break;
        case 3: $hora="9:30";
            break;
        case 4: $hora="12:30";
            break;
        case 5: $hora="10:40";
            break;
        case 6: $hora="13:40";
        break;
    }

    switch ($n) {
        case 1: $n=1;
            break;
        case 2: $n=2;
            break;
        case 3: $n=3;
            break;
        case 4: $n=4;
        
    }

    $lugar = isset($_POST['lugar']) ? $_POST['lugar'] : "";
    echo '<br>Destino:'.$lugar;
    echo '<br>Hora de vuelo - '.$hora;

    ?>
</div>
<?php
$lista = array("A","B","C","D","E","F");
$j = "div";
$lugaresDisponibles=0;

echo '<form name="pdf" method="post" action="formulariopdf2.php">';
 for($i=0 ; $i<$n ; $i++)
 {

echo '<div id="info" style="margin-top:'.($i==0?100:(100+($i*120))).'px; height: 20%;"> 
    <div style="color:blue">Informacion de comprador <br></div>
            <table>
            <tr>
                <td>
                       
                Nombre: <input type ="text" name = "nombre'.($i+1).'" id ="nombre'.($i+1).'" ">
                </td> 
            </tr>
                
            <tr>
                <td>
                Edad: <input type ="text" name = "edad'.($i+1).'" id ="edad'.($i+1).'" ">
                </td> 
            </tr>';
            if($i==0){
                echo '<tr>
                         <td>
                            Telefono: <input type ="text" name = "telefono" id ="telefono" >
                            <div  style="background-color:white; width=0px; height=0px;">
                  <input type ="text" name="arv" id="arv" value = "" style="background-color:white; width:0px; height:0px;"  > 
                  <input type ="text" name="lugar" id="lugar" value = "'.$lugar.'" style="background-color:white; width:0px; height:0px;"  > 
                  <input type ="text" name="hora" id="hora" value = "'.$hora.'" style="background-color:white; width:0px; height:0px;"  > 
                  </div>    
                         </td> 
                      </tr>';
            }
            
            if($i==$n-1){
                echo '<tr>
                         <td>
                         <div class="contenedor">
                         <article>
                             <br><br>
                             <h1 id="btn-abrir-popup" class="btn-abrir-popup">PagarConTarjeta</h1>
                             
                                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                         <input type="hidden" name="cmd" value="_s-xclick">
                                         <input type="hidden" name="hosted_button_id" value="F67ZBS3CSWE88">
                                         <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                         <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                         </form>
                         </article>
                 
                         <div class="overlay" id="overlay">
                             <div class="popup" id="popup">
                                 <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                                 <h3>Forma de Pago</h3>
                                 <h4>Ingresa los datos.</h4>
                                     <div class="contenedor-inputs">
                                     <input type ="text" name="n" id="n" value = "'.$n.'" style="background-color:white; width:0px; height:0px;"  > 
                                         <input type="text" placeholder="Nombre del propetario">
                                         <input type="cuenta" placeholder="No.Cuenta">
                                         <input type="fecha" placeholder="Fecha de vencimiento">
                                         </div>
                                         
                                         <input type="submit" class="btn-submit" name="boton" id="boton" value="Confirmar">
                                </form>
                             </div>
                                         
                         </div>

                     </div>
                 
                   
                         
                         </td> 
                      </tr>';
            } echo'</table></div>';
} 

    
    echo '</tr><tr>';

echo '</table></div>'; 
echo'<div id="space">
<table  id = "tablaAsientos" name = "tablaAsientos" cellpadding = "2" >
<tr>
    <td>    <div id="divSpace" align ="center" style="height: 10px;"> </div></td>
</tr>
';

for($i = 0; $i<30; $i++){
    echo '<tr>';
    if($i == 10 || $i == 11){
        echo '<tr>';
        echo '</tr>';
        for($j = 0; $j<6;$j++){
        if($j==3){
            echo '<td><p id="pas" style="width: 20px;"></p></td >';
        }
            echo '<td > <div id="div2" name="'.$nom.'" value="1" align="center" onclick="cambiarColor(this,'.$n.','.($i+1).','.$j.')">
           '.($i+1).$lista[$j].'</div></td>';
       }
       echo '<tr></tr>';
       echo '<tr></tr>';
    }else{
    
    for($j = 0; $j<6;$j++){
        if($j==3){
            echo '<td><p id="pas" style="width: 20px;"></p></td >';
        }
           $nom= "div".($i+1).$lista[$j];
            echo '<td > <div id="div" name="'.$nom.'" value="1" align="center" onclick="cambiarColor(this,'.$n.','.($i+1).','.$j.')">
           '.($i+1).$lista[$j].'</div></td>';
    }
}


  echo '</tr>';

  }
          $g = "<script> document.writeln(g); </script>"; 
    echo'</table></div></form>';

?>


<div id="seat" >
    <table>
        <tr>
            <td> <div id="divColor" style="background-color: lightblue" ></div> </td>

            <td>Disponible</td>
        </tr>
        <tr>
            <td> <div id="divColor" style="background-color: blue"></div> </td>
            <td>Especial</td>
        </tr>
         <tr>
            <td> <div id="divColor" style="background-color: grey"></div> </td>
                <td>Ocupado</td>
        </tr>
        <tr>
            <td> <div id="divColor" style="background-color: red"></div> </td>
                <td>Escogido</td>
        </tr>
    </table>
</div>




<img src="img/avion.jpg" class='heaven' style=" height:250.4%;" />  


    <footer style="margin-top: 618px;">
            <div class="contenedor-footer">
                
                    <div class="content-foo">
                            <h4>Email</h4>
                           <p>Vuelapet@gmail.com</p>
                        </div>
                    <div class="content-foo">
                            <h4>Telefono</h4>
                            <p>8717551156</p>
                        </div>
                    <div class="content-foo">
                            <h4>Localizacion</h4>
                            <p>Obispado</p>
                        </div>
               
            </div>
        </footer>
        <script src="popup.js"></script>
    </body>
    
    </html>