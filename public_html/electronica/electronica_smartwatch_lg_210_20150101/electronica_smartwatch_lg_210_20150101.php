<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Electronica - SMARTWATCH LG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="../../producto.css" type="text/css"/>
         
         
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
                window.open("../../electronica.html");
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

        //Si no esta inicializada la inicializamos
        if ($fecha==null)
            $fecha=date("Y-m-d h:i:sa");

        $producto = "electronica_smartwatch_lg_210_20150101";

        $url = "electronica_smartwatch_lg_210_20150101.php";
       
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
            <h3>SMARTWATCH LG 210</h3>
        </section>
        
        <!--publicidad lateral-->
        <aside class="publiLateral" id="publicidadIzda" style="float: left">
        </aside>
        
        
        <aside class="publiLateral" id="publicidadDcha" style="float: right">
        </aside>
        
        <section>
        <article class="informeProducto">
            <h4>SMARTWATCH LG 210</h4>
           
                <figure style="float: left">
                    <img src="lg_g_watch_blanco_210_210.jpg" alt="producto1" height="300" width="350" title="portatil" style="float: left">
            
                    <input type="button" value="+info" onclick="mostrar()">
                <p style=" font-size: 50px; color: yellow; background-color: red; background-size: 120px auto; width: 145px; float: left;   border-radius: 50px 50px 50px 50px">279&euro;</p>
                
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
                <li>Sistema Operativo<strong>Android Wear</strong></li>
                <li><strong>Reconocimiento por voz</strong> </li>
                <li>Pantalla táctil<strong>IPS</strong></li>
                <li><strong>Batería 400 mAh</strong></li>
                <li>Compatible con Android 4.3 o superior</li>
            </ul>
            
           
            
            <table summary="Detalles producto" id="detallesOcultos" style=" display: none" onMouseOver="noticiasRelacionadas();return true;">
                <tbody>
                <caption> <h3>Características técnicas</h3></caption>
                   <tr>
                    <th scope="row"><span>RAM</span></th>
                    <td><span>
                    512 MB
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Memoria</span></th>
                    <td><span>
                    Flash 4 GB
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Version BLuetooth</span></th>
                    <td><span>
                    4.0
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Conector USB</span></th>
                    <td><span>
                    Micro USB B
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Batería</span></th>
                    <td><span>
                            Capacidad <strong>400 mAh</strong>
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Dimensiones</span></th>
                    <td><span>
                    3,79 x 4,65 cm  Grosor: 9,95 mm
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Pantalla</span></th>
                    <td><span>
                    Táctil LCD 1.65"
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Sistema Operativo</span></th>
                    <td><span>
                    Android Wear 1.0
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Procesador</span></th>
                    <td><span>
                    Qualcomm 1200 MHz
                    </span></td>
                    </tr>
                    
                    <tr>
                    <th scope="row"><span>Resistencia</span></th>
                    <td><span>
                    Al agua y al polvo
                    </span></td>
                    </tr>
                    
                    
                </tbody>
            </table>
            
          <!------ Video Demostrativo --->
          <iframe width="500" height="360" src="https://www.youtube.com/embed/H0W6dCG0aeo?feature=player_detailpage" frameborder="0" allowfullscreen></iframe> 
           
        
        </article>
            
        </section>
        
         <!-------- Productos relacionados---->
         <section class=" productosDcha">
            <article class="productos">
              
                <h3>Hyundai 50"</h3>
              
                        <p class="precio">600 &euro;</p>
                    
                        <img src="../electronica_televisor_hyundai_t50_20150101/televisor_hyundai_t50_20150101.jpg" alt="producto1" title="televisor" height="200" >
                       
                        <ul class="caracteristicasProductos">
                           <li>50"</li>
                            <li>FULL HD</li>
                            <li>Tecnología LED</li>
                            
                        </ul>
                </article>
             
               <article class="productos">
                    
                 <h3>Televisor LG</h3>
                    
                            <p class="precio">470&euro;</p>
                            
                            <img src="../electronica_televisor_lg_42lb630v_20150101/televisor_lg_42lb630v_42__led_ips_210_210.jpg" width="210" height="210" alt="lg_42lb630v_42__led_ips_210_210"/>
                          
                            <ul class="caracteristicasProductos">
                                 <li>42"</li>
                                 <li>FULL HD 1080</li>
                                 <li>Panel IPS</li>

                           
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

            <h3><a href="formulario.html"><input type="submit" value="SUSCRIBIRSE"/></a></h3>

        </footer>   


    </body>
</html>
