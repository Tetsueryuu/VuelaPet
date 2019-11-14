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
                    <h1>MEXICO </h1>
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
                <option value="1">8:20</option>
                <option value="2">11:20</option>
                </select></td> 
                <td style="padding-left: 20px"></td>
                <td> <input type="text" name="lugar" value="Mexico"  style="background-color:white; width:0px; height:0px;"><input type="submit" value="Enviar">
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
           
            <h5 >La magia de la antigua Tenochtitlan aún cubre este maravilloso destino que atesora las más grandes y hermosas tradiciones mexicanas. 
                Prepárate para conocer esta ciudad cosmopolita con las grandes ofertas de vuelos a Ciudad de México que siempre tenemos para ti.
                 Visita nuestro sitio constantemente para aprovechar los mejores descuentos de la temporada y así enamorarte de la cultura, arte y gastronomía del corazón del país.</h5> <br><br>
            <div class="cards">
                <div class="card">
                    <img src="img/casa.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>¡Date una vuelta por la casa de Frida Kahlo y Diego Rivera!</h4>
                            <p>El Museo Casa Azul te da la oportunidad de revivir la historia de amor de estos pintores mexicanos; 
                            es un melancólico recorrido a través de la obra de Kahlo que se nutre con algunas de sus posesiones más preciadas. ¡Te robará el corazón!  </p>
                    </div>
                </div>
                <div class="card">
                        <img src="img/co.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Un paseo por Coyoacán</h4>
                            <p>No necesitas salir de la ciudad para visitar un clásico pueblo mexicano; este encantador rincón citadino te hará sentir en una provincia. 
                                Además, sus bares, cafés y deliciosos restaurantes serán el marco ideal para tus reuniones con amigos  o simplemente para pasar uno de los mejores días de tu vida.</p>
                        </div>
                    </div>
                </div>
        </section>
                </main>
                <main>  
                        <section class="clientes contenedor">
        <div class="cards">
            <div class="card">
                <img src="img/te.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Llénate de buena vibra en las pirámides de Teotihuacán</h4>
                    <p>Cárgate de energía en una de las ciudades prehispánicas más grandes de Mesoamérica. La vista desde la Pirámide de 
                        la Luna te da una panorámica sin igual de todo Teotihuacán. No olvides subir a la Pirámide del Sol y pedir un deseo, ¡te aseguramos que se te cumplirá!
                        </p>
                </div>
            </div>
            <div class="card">
                    <img src="img/xo.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Una fiesta al ritmo del mariachi en Xochimilco</h4>
                        <p>Una trajinera con tu nombre te espera para recorrer los canales de este pintoresco lugar. La música del mariachi o de una banda amenizará la
                             fiesta que continúa después de que el sol se ponga.</p>
                    </div>
                </div>
               


    
                            </div>
                    </section>
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