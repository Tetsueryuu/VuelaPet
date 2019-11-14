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
                    <td colspan="3">
                    <h1>TORREON </h1>
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
                <option value="3">9:30</option>
                <option value="4">12:30</option>
                </select></td> 
                <td style="padding-left: 20px"></td>
                <td> <input type="text" name="lugar" value="Torreon"  style="background-color:white; width:0px; height:0px;"><input type="submit" value="Enviar">
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
          
            <h5 >Este destino norteño te recibe con los brazos abiertos, igual que su Cristo de las Noas, una monumental escultura de 22 metros de altura, ícono de la ciudad. ¿Qué estás esperando? Reserva ahora tus boletos de avión con las ofertas de vuelos a Torreón que Interjet trae para ti y vuela a una de las ciudades más vanguardistas de México.</h5> <br><br>
            <div class="cards">
                <div class="card">
                    <img src="img/Ed.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Cuatro Ciénegas</h4>
                        <p>Este pueblo mágico está lleno de manantiales que forman preciosas ciénegas en medio del desierto; sus pozas de aguas azules serán el marco ideal para pasar una tarde en familia. Además, muy cerca puedes aventurarte a surcar las dunas de yeso. Su blanca arena blanca formada por cristales de yeso es un espectáculo natural que no debes perderte.</p>
                    </div>
                </div>
                <div class="card">
                        <img src="img/bu.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Parras de la Fuente</h4>
                            <p>Locación de distintas películas, este pequeño poblado coahuilense tiene mucho para ofrecerte. Te recomendamos visitar el  Estanque de la Luz, un balneario natural que se alimenta del agua de los manantiales de la región.</p>
                        </div>
                    </div>

                </main>
                <main>  
                        <section class="clientes contenedor">
        <div class="cards">
            <div class="card">
                <img src="img/ca.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Arteaga</h4>
                    <p>Ubicado a solo unos kilómetros de Saltillo, Arteaga es una isla boscosa rodeada por el inmenso mar de arena del desierto. Hospédate en una cabaña y disfruta la tranquilidad de “La Suiza de México”, como cariñosamente llaman los lugareños a Arteaga. Una razón más para marcarla en tu agenda es que aquí puedes esquiar; sí, como lo escuchas, Arteaga cuenta con varias pistas para practicar el esquí durante todo el año.
                        </p>
                </div>
            </div>
            <div class="card">
                    <img src="img/mu.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Casa Madero</h4>
                        <p>Y para terminar tu visita, ¿qué te parece beber vino en Casa Madero? Esta es una de las bodegas vinícolas con más tradición del mundo. Aquí podrás degustar un exquisito vino de uva shiraz, bebida que ha recibido reconocimientos a nivel mundial.</p>
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