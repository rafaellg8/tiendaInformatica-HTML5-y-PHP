<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <title>Portatiles- HP Pavilion DV6 php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../producto.css" type="text/css"/>


        <!--Funcion que muestra los detalles del producto-->
        <script type="text/javascript">
            function funcionGoogle(){
            window.open("formularioRegistro.html");
            }
        
        
        //Funcion que muestra el menu de secciones y clientes  
            function mostrarSecciones(){
            document.getElementById('secciones').style.display = 'block';
            }
            
            //Funcion que muestra el menu de los usuarios
            function mostrar() {
                document.getElementById('detallesOcultos').style.display = 'block';
            }

            function noticiasRelacionadas(){
                window.open("../../portatiles.html");
            }
        </script>

        <?php
        require_once '../../clientes.inc.php';
        require_once '../../comentarios.inc.php';
        session_start();
        $usuario = $_SESSION['user'];
        $cliente = $_SESSION['cliente'];

        $datos = $_SESSION['datos'];
        $idUsuario = $datos['idUser'];
        
        //Pasamos la fecha del ultimo comentario que hizo en esta sesion para este producto
        $fecha = $_SESSION['fechaComentario'];

        

        $producto = "portatil_hp_pavilionDV6_20150101";

        //Obtenemos el comentario de texto del usuario
        $comentario = new Comentarios();
        $comentarioTaux = $comentario->obtenerDatos($idUsuario,$producto);
        $comentarioTexto=$comentarioTaux[0];
        ?>
       
    </head>
    <body>
        
        <header>
        
        <section id="cabecera">
            <img src="../../imagenes/decsai.png" alt="imagen publicidad" height="190" width="1300">
            <h1 style="text-align: center;font-size: 50px"><a href="../../index.php">PCNOW!</a></h1>
        </section>
        
        
            
        </header>

          <table class="menuPrincipalTienda">
        <tbody>
            <tr>
                <th>
                   <a href="#idSecciones" onclick="mostrarSecciones()">
                    Secciones
                    </a>
                </th>
                
                <th>
                   <a href="../../perfilCliente.php">
                    Perfil <?=$usuario?>
                    </a>
                </th>
                

                <th>
                    <p id="botonSesion"><a href="../../cerrarSesion.php"> Cerrar Sesion</a></p>
                </th>  
            </tr>
            
        </tbody>
    </table>
       
        
    <table id="secciones" summary="seccionesTienda">
                <thead>
                  </thead>
                <tbody>
                    <tr>
                        <td style="background-color: lavender">
                            <a href="../../portatiles.php" >Portatiles</a>
                        </td>
                        <td style="background-color: lightblue">
                             <a href="../../sobremesa.php">Sobremesa</a>
                        </td>
                        <td style="background-color: lightgreen">
                             <a href="../../componentes.php" >Componentes</a>
                        </td>
                        <td style="background-color: #ff3333">
                             <a href="../../electronica.php">Electronica</a>
                        </td>
                       
                    </tr>
                    
                </tbody>
            </table>


        


        <!--NOMBRE SECCION PAGINA-->
        <section class="c1">
            <h3>HP PAVILION DV6</h3>
        </section>

        <!--publicidad lateral-->
        <aside class="publiLateral" id="publicidadIzda" style="float: left">
            
        </aside>


        <aside class="publiLateral" id="publicidadDcha" style="float: right">
        </aside>

        <section>
            <article class="informeProducto">
                <h4>HP PAVILION DV6</h4>

                <figure style="float: left">

                    <img src="imagenes/paviliondv6.jpg" alt="producto1" height="300" width="350" title="paviliondv6" style="float: left">

                    <input type="button" value="+info" onclick="mostrar()">
                    <p style=" font-size: 50px; color: yellow; background-color: red; background-size: 120px auto; width: 145px; float: left;   border-radius: 50px 50px 50px 50px">354&euro;</p>

                    <!-------Calificacion---------------->
                    <section class="ec-stars-wrapper" style="float: right">
                        <p style="font-size: 16px">Calificar</p>
                        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                        <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                    </section>
                    <noscript>Necesitas tener habilitado javascript para poder votar</noscript>

                </figure>


                <!---------Caracteristicas Generales ------------->
                <ul class="caracteristicasProductos">
                    <li>Pantalla 	<strong>15,6" (39,6 cm) retroiluminada LED</strong></li>
                    <li>Procesador 	<strong>Intel® Core™ i7-3610QM</strong> </li>
                    <li>RAM 	<strong>6 GB DDR3 </strong>(1 x 2 GB + 1 x 4 GB)</li>
                    <li>Tarjeta Gráfica 	<strong>NVIDIA GeForce GT 630M </strong>con tecnología NVIDIA® Optimus™</li>
                    <li>Disco Duro 	<strong>750 GB </strong>SATA 5400 rpm </li>
                </ul>

                <!--- Iconos de microprocesador y tarjeta grafica --------->
                <img src="../../imagenes/inteli7.jpeg" height="50" width="80">
                <img src="../../imagenes/nvidia.jpeg" height="50" width="80">


                <!---- Tabla con especificaciones detalladas---->
                <table summary="ficha detallada del artículo" id="detallesOcultos" style="display: none" onMouseOver="noticiasRelacionadas();return true;">

                    <tbody><tr>
                            <th scope="row"><span>Tamaño Pantalla</span></th>
                            <td><span>
                                    15,6" (39,6 cm) retroiluminada LED 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Resolución</span></th>
                            <td><span>
                                    1366 x 768 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Procesador</span></th>
                            <td><span>
                                    Intel® Core™ i7-3610QM 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Número de núcleos</span></th>
                            <td><span>
                                    4 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Velocidad / Frecuencia</span></th>
                            <td><span>
                                    2,3 GHz 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Hilos de proceso</span></th>
                            <td><span>
                                    8 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>RAM</span></th>
                            <td><span>
                                    6 GB DDR3 (1 x 2 GB + 1 x 4 GB) 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Slots RAM</span></th>
                            <td><span>
                                    2 (0 libres; máx. 8 GB) 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Tarjeta Gráfica</span></th>
                            <td><span>
                                    NVIDIA GeForce GT 630M con tecnología NVIDIA® Optimus™ 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Memoria Gráfica</span></th>
                            <td><span>
                                    2 GB DDR3 dedicados 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Disco Duro</span></th>
                            <td><span>
                                    750 GB sATA 5400 rpm 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Lector Óptico</span></th>
                            <td><span>
                                    Lector / grabador CD + DVD 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Puertos USB</span></th>
                            <td><span>
                                    <font color="crimson">3 x USB 3.0</font> + 1 x USB 2.0 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Conexiones</span></th>
                            <td><span>
                                    HDMI, VGA, RJ45, audio, micrófono 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Conectividad Wireless</span></th>
                            <td><span>
                                    802.11b/g/n; Bluetooth 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Lector de Tarjetas</span></th>
                            <td><span>
                                    Multiformato 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Teclado</span></th>
                            <td><span>
                                    Tamaño completo, tipo isla, con teclado numérico integrado 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Webcam</span></th>
                            <td><span>
                                    HP TrueVision HD con micrófono digital integrado (luz baja) 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Dimensiones</span></th>
                            <td><span>
                                    37,8 x 24,7 x 3,26 cm 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Peso</span></th>
                            <td><span>
                                    2,57 kg 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Modem / Red</span></th>
                            <td><span>
                                    Ethernet 10/100/1000 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Altavoces Integrados</span></th>
                            <td><span>
                                    Estéreo 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Audio</span></th>
                            <td><span>
                                    Beats Audio™ con HP Triple Bass Reflex Subwoofer 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Batería / Autonomía</span></th>
                            <td><span>
                                    6 celdas 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Extras</span></th>
                            <td><span>
                                    Lector de huellas digitales 
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Software Incluido</span></th>
                            <td><span>
                                    Microsoft® Office 2010 precargado (versiones de funcionalidad reducida de Word® y Excel® que incluyen publicidad
                                </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span>Sistema Operativo</span></th>
                            <td><span>
                                    Windows® 7 Home Premium 64 bits 
                                </span></td>
                        </tr>

                    </tbody>
                </table>

                <br><br><br>



            </article>

        </section>

        <!-------- Productos relacionados---->
        <section class=" productosDcha">
            <article class="productos">
               
                    <h5>Toshiba Satellite</h5>
               

                <p class="precio">840&euro;</p>
               
                    <img src="../portatil_toshiba_satelliteL70_20150101/toshiba_satellite_l70_b_10r_i5_4200u_8gb_1tb_r7m260_17_3__210_210.jpg"
                         alt="toshiba" width="150" height="120">
                


                <ul class="caracteristicasProductos">
                    <li>Intel core i7</li>
                    <li>500 GB</li>
                    <li>8 GB RAM</li>
                    <li><a href="http://www.toshiba.com">+info</a></li>
                </ul>

            </article>

            <article class="productos">
             
                    <h5>Acer Aspire V3</h5>
               
                <p class="precio">700 &euro;</p>
                     <img src="../portatil_acer_aspireV3_20150101/acer_aspire_v3_572g_729a_i7_4510u_8gb_500gb_gt820m__15_6__210_210.jpg" alt="acer aspire v3"
                         width="150" height="120" title="acerAspireV3">
                </a>
                <ul class="caracteristicasProductos">
                    <li>Intel core i7</li>
                    <li>500 GB</li>
                    <li>8 GB RAM</li>
                    <li><a href="http://www.hp.com">+info</a></li>
                </ul>
            </article>


            <article class="productos">
                
                    <h5>Lenovo B50</h5>
               
                <p class="precio">399 &euro;</p> 
              
                    <img src="../portatil_lenovo_b50_20150101/lenovo_b50_70_80eu_intel_core_i3_4005u_4gb_500gb_15_6__210_210.jpg" alt="lenovoB50" width="150" height="120">
                </a>

                <ul class="caracteristicasProductos">
                    <li>Intel core i3</li>
                    <li>500 GB</li>
                    <li>4 GB RAM</li>

                    <li><a href="http://www.hp.com">+info</a></li>
                </ul>
            </article>

        </section>

        <! PUBLICIDAD DCHA >
        <section class=" publicidad">
            <img src="../../imagenes/macbook-anuncio-1024x640.jpg" alt="macbook" height="200" width="250">
        </section>

     <!comentario del cliente>
         <section class="comentariosClientes">
            <article class="comentario">
                <form name="formularioAnterior" action="" method="" >
                    <h3>Comentario reciente</h3>
                    <fieldset><legend class="c8">Datos personales</legend>
                       
                        <p>nombre   <?= $usuario ?></p>

                        <p>email    <?= $datos["email"] ?></p>

                        <p>fecha    <?=$fecha?></p>
                        
                        <input type="hidden" name="producto" value="<?= $producto?>">
                        <input type="hidden" name="idUsuario" value="<?=$idUsuario?>">
                       
                    </fieldset>
                    <fieldset><legend>Opinión</legend>
                       <p style="background-color: white"><?=$comentarioTexto?> </p>
                   
                    </fieldset>
                   
                </form>
            </article>

       




       
            <article class="comentario">
                <form name="formulario" action="../../procesarComentario.php" method="GET" onsubmit="return validateForm()">
                    <h3>Comentario Nuevo</h3>
                    <fieldset><legend class="c8">Datos personales</legend>
                       
                        <p>nombre   <?= $usuario ?></p>

                        <p>email    <?= $datos["email"] ?></p>
                        
                        <input type="hidden" name="producto" value="<?= $producto?>">
                        <input type="hidden" name="idUsuario" value="<?=$idUsuario?>">
                        <input type="hidden" name="url" value="<?=$url?>">
                    </fieldset>
                    <fieldset><legend>Opinión</legend>
                        
                        <input type="text" name="comentarioTexto" value="" style="width: 500px; height: 120px">
                        
                        <!-------Calificacion---------------->
                        <section class="ec-stars-wrapper" style="float: right">
                            <p style="font-size: 16px">Calificar</p>
                            <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                            <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                            <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                            <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                            <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                        </section>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>

                   
                    </fieldset>
                    <input type = "submit" id = "button1" value = "ENVIAR"/>
                    <input type = "reset" id = "button2" value = "ELIMINAR" />
                    
                    
                </form>
            </article>

        </section>


        <footer  style="text-align: left; height: 250px; width: 400px; position: static;
                 margin-left: 400px;
                 margin-top: 200px;
                 margin-bottom: 200px">

            <p>Rafael Lachica Garrido</p>
            <p>Contacto
                <a href="mailto:pcnow!@email.com">
                    pcnow!@email.com  
                </a>
            </p>
            <p><address>Calle Periodista Daniel Saucedo Aranda s/n</address>
            <p>Telefono : <strong>958 001 002</strong> </p>

            <h3><a href="../../formulario.html"><input type="submit" value="SUSCRIBIRSE"/></a></h3>

        </footer>   


    </body>
</html>
