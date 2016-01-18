<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
       <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>PCNow!-Electronica</title>
        <meta charset="UTF-8">

        

      <script type="text/javascript">
            function funcionGoogle(){
            window.open("formularioRegistro.html");
            }
        
        
        //Funcion que muestra el menu de secciones y clientes  
            function mostrarSecciones(){
            document.getElementById('secciones').style.display = 'block';
            }
            
            //Funcion que muestra el menu de los usuarios
            function mostrarMenuUsuario(){
                document.getElementById('menu').style.display = 'block';
            }
        </script>
        
        <?php
        require_once 'clientes.inc.php';
        
        session_start();
        $usuario = $_SESSION['user'];
        $cliente = $_SESSION['cliente'];

        $datos = $_SESSION['datos'];
        $idUsuario = $datos['idUser'];
        
        $producto = "electronica_smartwatch_lg_210_20150101";

        $url = "electronica_televisor_hyundai_t50_20150101.php";
       
      
       

        //Funcion que cierra la sesion actual
        function cerrarSesion(){
            session_unset();
            header("index.html");
        }
        ?>
       
    </head>
    <body>
        
        <header>
        
        <section id="cabecera">
            <img src="imagenes/decsai.png" alt="imagen publicidad" height="190" width="1300">
            <h1 style="text-align: center;font-size: 50px"><a href="index.php">PCNOW!</a></h1>
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
                   <a href="perfilCliente.php">
                    Perfil <?=$usuario?>
                    </a>
                </th>
                

                <th>
                    <p id="botonSesion"><a href="cerrarSesion.php"> Cerrar Sesion</a></p>
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
                            <a href="portatiles.php" >Portatiles</a>
                        </td>
                        <td style="background-color: lightblue">
                             <a href="sobremesa.php">Sobremesa</a>
                        </td>
                        <td style="background-color: lightgreen">
                             <a href="componentes.php" >Componentes</a>
                        </td>
                        <td style="background-color: #ff3333">
                             <a href="electronica.php">Electronica</a>
                        </td>
                       
                    </tr>
                    
                </tbody>
            </table>
      
        <!--NOMBRE SECCION PAGINA-->
        <section class="c1">
            <h3>ELECTRONICA</h3>
        </section>
        
        <!--publicidad lateral-->
        <aside class="publiLateral" id="publicidadIzda" style="float: left">
        </aside>
        
        
        <aside class="publiLateral" id="publicidadDcha" style="float: right">
        </aside>
        
        
        <!----------PRODUCTO DESTACADO------------------>
        
        <section id="productoDestacado">
            <a href="componentes/componentes_teclado_raton_logitech_mk270_20150101/componentes_teclado_raton_logitech_mk270_20150101.html">
            <h2 >Teclado + Raton Logitech</h2>
            
            </a>
            <figure style="float: left">
              
               <a href="componentes/componentes_teclado_raton_logitech_mk270_20150101/componentes_teclado_raton_logitech_mk270_20150101.html">
                  <img src="componentes/componentes_teclado_raton_logitech_mk270_20150101/teclado_raton_logitech_mk270_20150101.gif" alt="producto1" height="250" title="logitech"/>
                </a>
            
                <a href="componentes/componentes_teclado_raton_logitech_mk270_20150101/componentes_teclado_raton_logitech_mk270_20150101.html">+info</a>
            </figure>
            <ul class="caracteristicasProductos">
                <li>Sistemas Operativos compatibles: todos</li>
                <li>Inalámbrico</li>
            
                <li style=" font-size: 100px; color: yellow; background-color: red; background-size: 220px auto; width: 278px; float: left;   border-radius: 50px 50px 50px 50px;"> 37&euro;</li>
            </ul>
        </section>
        
        <br>
               
        
          <!--Contenedor Principal con los productos-->
        
        <section>
     
            <section class="productosIzda" >
                

                <article class="productos">
                    <a href="portatiles/portatil_hp_pavilionDV6_20150101/portatil_hp_pavilionDV6_20150101.php">
                <h3>HP Pavilion dv6</h3>
                    </a>
                        <p class="precio">354 &euro;</p>
                         <a href="portatiles/portatil_hp_pavilionDV6_20150101/portatil_hp_pavilionDV6_20150101.php">
                        <img src="portatiles/portatil_hp_pavilionDV6_20150101/imagenes/paviliondv6.jpg" widht="200" height="200" alt="paviliondv6"/>
                         </a>
                        
                        <ul class="caracteristicasProductos">
                            <li>Intel core i7</li>
                            <li>750 GB</li>
                            <li>6 GB RAM</li>
                            <li><a href="portatiles/portatil_hp_pavilionDV6_20150101/portatil_hp_pavilionDV6_20150101.php">+info</a></li>
                        </ul>
                </article>
                
             
                
                <article class="productos">
                    <a href="electronica/electronica_televisor_lg_42lb630v_20150101/electronica_televisor_lg_42lb630v_20150101.php">
                 <h3>Televisor LG</h3>
                    </a>
                            <p class="precio">470&euro;</p>
                            <a href="electronica/electronica_televisor_lg_42lb630v_20150101/electronica_televisor_lg_42lb630v_20150101.php">
                            <img src="electronica/electronica_televisor_lg_42lb630v_20150101/televisor_lg_42lb630v_42__led_ips_210_210.jpg" width="210" height="210" alt="lg_42lb630v_42__led_ips_210_210"/>
                            </a>
                            <ul class="caracteristicasProductos">
                                 <li>42"</li>
                                 <li>FULL HD 1080</li>
                                 <li>Panel IPS</li>

                            <li><a href="http://www.lg.com">+info</a></li>
                            </ul>
                </article>
            </section>
         
            <!--------------------PRODUCTOS DE LA ZONA DERECHA------------------------>
            
            <section class="productosDcha">
                
                <article class="productos2">
                     <a href="electronica/electronica_televisor_hyundai_t50_20150101/electronica_televisor_hyundai_t50_20150101.php">
                    <h2>Televisor Led 50"</h2>
                     </a>
                            <p class="precio">600&euro;</p>
                             <a href="electronica/electronica_televisor_hyundai_t50_20150101/electronica_televisor_hyundai_t50_20150101.php">
                            <img src="electronica/electronica_televisor_hyundai_t50_20150101/televisor_hyundai_t50_20150101.jpg" width="210" height="150" alt="televisor"/>
                             </a>
                            <ul class="caracteristicasProductos">
                                 <li>50"</li>
                                 <li>FULL HD</li>
                                 
                            <li> <a href="electronica/electronica_televisor_hyundai_t50_20150101/electronica_televisor_hyundai_t50_20150101.php">+info</a></li>
                            </ul>
                </article>
           
           
                   <article class="productos2">
                    <a href="electronica/electronica_smartwatch_lg_210_20150101/electronica_smartwatch_lg_210_20150101.php">
                 <h3>LG Smartwatch</h3>
                 </a>
                            <p class="precio">279&euro;</p>
                            <a href="electronica/electronica_smartwatch_lg_210_20150101/electronica_smartwatch_lg_210_20150101.php">
                            <img src="electronica/electronica_smartwatch_lg_210_20150101/lg_g_watch_blanco_210_210.jpg" alt="lgsmartwatch" height="200">
                            </a>
                            <ul class="caracteristicasProductos">
                                 <li>Sistema Operativo<strong>Android Wear</strong></li>
                                <li><strong>Batería 400 mAh</strong></li>

                            <li><a href="electronica/electronica_smartwatch_lg_210_20150101/electronica_smartwatch_lg_210_20150101.php">+info</a></li>
                            </ul>
                  </article>  
           
           </section>
           
            
            <section class="anunciosDcha">
                
                <article class="noticias">
                    <h1>Noticias</h1>
                    <iframe class="news" width="310" height="140" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?q=smartwatch%20relojes&amp;format=300x250&amp;hl=es">
                    </iframe>

                      <iframe class="news" width="310" height="140" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?q=smartwatch%20relojes&amp;format=300x250&amp;hl=es">
                    </iframe>

                      <iframe class="news" width="310" height="140" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?q=smartwatch%20relojes&amp;format=300x250&amp;hl=es">
                    </iframe>
                    
                </article>
            
                <section class="publicidad">
                    
                    <img src="imagenes/macbook-anuncio-1024x640.jpg" alt="macbook" height="280" width="333">
                </section>
                
            </section>
        </section>
        
        <footer  style="text-align: center";>
           
    <footer>
        <p style="color: white">....</p>
        <p>Rafael Lachica Garrido</p>
        <p>Contacto
            <a href="mailto:pcnow!@email.com">
               pcnow!@email.com  
            </a>
        </p>
        <p><address>Calle Periodista Daniel Saucedo Aranda s/n</address></p>
        <p>Telefono : <strong>958 001 002</strong> </p>
        
        <a href="pcnow_RafaelLachicaGarrido.pdf">Como se hizo</a>
        
        <h3><input type="submit" onclick="funcionGoogle()" value="SUSCRIBIRSE"/></a></h3>
        
        
    
        </footer>   
        
        
        
    </body>
    
   
    
</html>
