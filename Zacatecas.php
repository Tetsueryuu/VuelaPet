<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>VuelaPet</title>
    <link rel="stylesheet" href="css/estilos2.css">
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
        <form action="Asientos.php" method="post">
            <table>
                <tr >
                    <td colspan="3" >
                    <h1>ZACATECAS </h1>
                    </td>
                </tr>
               
            <tr>

            
                <td style="color: white; font-size: 30px"> 
                <select name="cantidad" id="cantidad" >
                <option value="0">Cantidad de pasajeros</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select>
                <select name="hora" id="hora" >
                <option value="0">Selecciona una hora</option>
                <option value="5">10:40</option>
                <option value="6">13:40</option>
                </select></td> 
                <td style="padding-left: 20px"></td>
                <td> <input type="text" name="lugar" value="Zacatecas"  style="background-color:white; width:0px; height:0px;"><input type="submit" value="Enviar">
                    </td>
                </tr>
                
             </table>
          </form>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
            
    </header>
    

    <main>  
    <section class="clientes contenedor">
          
            <h5 >Si estás buscando un bellísimo lugar para visitar, Zacatecas es la opción: un tesoro colonial declarado Patrimonio de la Humanidad por su arquitectura, 
                su traza urbana y su la irregularidad de la alineación de sus calles. La hermosa ciudad de cantera rosa que encierra magia, tradición y encanto.
                Tiene una gran variedad de atractivos turísticos, sin duda innumerables, ya que ofrece recintos históricos y culturales, ecoturísticos, religiosos, rutas taurinas, ruta del mezcal, así como las fiestas y tradiciones que envuelven este peculiar destino. Cuando visites Zacatecas no dejes de 
                dar un paseo por el teleférico, que une el Cerro de la Bufa con el Cerro del Grillo y te ofrece una inigualable visita de la hermosa ciudad.</h5> <br><br>
            <div class="cards">
                <div class="card">
                    <img src="img/Ed.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Mina el Eden</h4>
                        <p>La Mina el Edén como tal, abrió sus puertas el 1 de Enero de 1975, ofreciendo un recorrido por su interior. </p>
                    </div>
                </div>
                <div class="card">
                        <img src="img/bu.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Cerro de la bufa</h4>
                            <p>El Cerro de la Bufa es una reconocida elevación ubicada al este del centro histórico de la ciudad de Zacatecas.</p>
                        </div>
                    </div>

                </main>
                <main>  
                        <section class="clientes contenedor">
        <div class="cards">
            <div class="card">
                <img src="img/ca.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Catedral de Zacatecas</h4>
                    <p>La catedral de Zacatecas, dedicada a la Virgen de la Asunción, es el 
                        templo principal de la diócesis de Zacatecas. Ubicado en centro histórico de la ciudad, declarado Patrimonio Cultural de la Humanidad por la Unesco.
                        </p>
                </div>
            </div>
            <div class="card">
                    <img src="img/mu.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Museo Rafael Coronel</h4>
                        <p>La colección de máscaras del Museo Rafael Coronel, en el centro de Zacatecas, es considerada la más grande mundo.</p>
                    </div>
                </div>
               


    
  
      </main>


    <footer>
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
    </body>
    
    </html>