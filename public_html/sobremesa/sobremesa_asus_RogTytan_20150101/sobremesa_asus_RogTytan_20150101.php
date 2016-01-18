<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>


        <title>Sobremesa - Asus Rog Tytan</title>
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

        $producto = "sobremesa_asus_RogTytan_20150101";

        $url = "sobremesa_asus_RogTytan_20150101.php";
       
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
			<h3>ASUS ROG TYTAN</h3>
		</section>

		<!--publicidad lateral-->
		<aside class="publiLateral" id="publicidadIzda" style="float: left"></aside>

		<aside class="publiLateral" id="publicidadDcha" style="float: right"></aside>

		<section>
			<article class="informeProducto">
				<h4>Asus Rog Tytan</h4>

				<figure style="float: left">
					<img src="asus_RogTytan.jpg"  alt="producto1" height="300" width="350" title="sobremsa" style="float: left">

					<input type="button" value="+info" onclick="mostrar()">
					<p style=" font-size: 50px; color: yellow; background-color: red; background-size: 140px auto; width: 155px; float: left;   border-radius: 50px 50px 50px 50px">
						2000&euro;
					</p>

					<!-------Calificacion---------------->
					<section class="ec-stars-wrapper" style="float: right">
						<p style="font-size: 16px">
							Calificar
						</p>
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</section>
					<noscript>
						Necesitas tener habilitado javascript para poder votar
					</noscript>

				</figure>

				<!---------Caracteristicas Generales ------------->
				<ul class="caracteristicasProductos">
					<li>
						Procesador <strong>Intel® Core™ i7-4770k 3.5 GHz</strong>
					</li>
					<li>
						RAM <strong>16 GB DDR3 </strong>(8 GB x 2)
					</li>
					<li>
						Tarjeta Gráfica <strong>NVIDIA GeForce GTX780 </strong>con 3 GB dedicados
					</li>
					<li>
						Disco Duro <strong>1 TB </strong>SATA 5400 rpm
					</li>
					<li>
						Unidad almacenamiento extra <strong> 128 GB SSD </strong> SATA
					</li>

				</ul>

				<!--- Iconos de microprocesador y tarjeta grafica --------->
				<img src="../../imagenes/inteli7.jpeg" height="50" width="80">
				<img src="../../imagenes/nvidia.jpeg" height="50" width="80">

				<!---- Tabla con especificaciones detalladas---->
				<table summary="ficha detallada del artículo" id="detallesOcultos" style="display: none"
                onMouseOver="noticiasRelacionadas();return true;">

					<tbody>
						<tr>
							<th scope="row"><span>Sistema Operativo</span></th>
							<td><span> Windows 8.1 64bit </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Procesador</span></th>
							<td><span> Intel® Core™ i7-4770k </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Número de núcleos</span></th>
							<td><span> 4 </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Hilos de proceso</span></th>
							<td><span> 8 </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Velocidad / Frecuencia</span></th>
							<td><span> 3,5 GHz </span></td>
						</tr>

						<tr>
							<th scope="row"><span>RAM</span></th>
							<td><span> DDR3 16GB (8GB x 2) </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Slots RAM</span></th>
							<td><span> 4 x DIMMs Hasta 32 GB </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Disco Duro</span></th>
							<td><span> 1TB SATA + 128GB SATA SSD </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Tarjeta Gráfica</span></th>
							<td><span> NVIDIA GeForce GTX780 </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Memoria Gráfica</span></th>
							<td><span> 3 GB </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Lector Principal</span></th>
							<td><span> Lector grabador CD / DVD. Blu-Ray Disc Writer </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Modem / Red</span></th>
							<td><span> 10/100/1000 Mbps </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Dimensiones</span></th>
							<td><span> 270 x 500 x 600 mm </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Peso</span></th>
							<td><span> 20 kg </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Software Incluido</span></th>
							<td><span> Anti-Virus trial, Office trial </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Lector de Tarjetas</span></th>
							<td><span> 16-en-1: CF/ Micro Drive/ MS/ MS Duo/ MS Pro/ MS Pro Duo/ SD/ MMC/ MMC4.0/ RS-MMC/ RS-MMC4.0/ SDHC/ MS Micro-M2/ Mini SD/ Micro SD/ Mini MMC </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Conexiones</span></th>
							<td><span> 6 x USB 3.0; 6 x USB 2.0; 1 x HDMI; 1 x RJ45 LAN; 1 x Auriculares; 1 x Micrófono; 1 x PS/2 (Teclado/Ratón); 1 x Salida S/PDIF (Audio jack); 3 x 5.25"y 5 x 3.5" Drive Bay; 8 x SATA 6.0 Gb/s ports Serial ATA; 3 x PCI-e x 1; 3 x PCI-e x 16 </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Audio</span></th>
							<td><span> 8 Canales de audio High Definition </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Conectividad Wireless</span></th>
							<td><span> IEEE 802.11 b/g/n </span></td>
						</tr>

						<tr>
							<th scope="row"><span>Puertos USB</span></th>
							<td><span> 12 (6 x 3.0, 6 x 2.0) </span></td>
						</tr>

					</tbody>
				</table>

				<br>
				<br>
				<br>

			</article>

		</section>

		<!-------- Productos relacionados o Enlaces de interes---->
		<!-------- En este caso creare un menu ------------>
		<section class="productosDcha">
			<ul style="width: 300px;list-style: none; text-align: left; float: left; height: 100px; font-size: 20px">

				<li style="background-color: lavender">
					<a href="../../portatiles.php" >Portatiles</a>
				</li>
				<li style="background-color: lightblue">
					<a href="../../sobremesa.php">Sobremesa</a>
				</li>
				<li style="background-color: lightgreen">
					<a href="../../componentes.php" >Componentes</a>
				</li>
				<li style="background-color: #ff3333">
					<a href="../../electronica.php">Electronica</a>
				</li>
			</ul>

			<!------ oferta ------------>
			<article class="productos">
				<a href="../../televisor_hyundai_t50_20150101/televisor_hyundai_t50_20150101.php"> <h3>Hyundai 50"</h3> </a>
				<p class="precio">
					600 &euro;
				</p>
				<a href="../../televisor_hyundai_t50_20150101/televisor_hyundai_t50_20150101.php"> <img src="../../electronica/electronica_televisor_hyundai_t50_20150101/televisor_hyundai_t50_20150101.jpg" alt="producto1" title="televisor" height="200" > </a>
				<ul class="caracteristicasProductos">
					<li>
						50"
					</li>
					<li>
						FULL HD
					</li>
					<li>
						Tecnología LED
					</li>
					<li>
						<a href="../../televisor_hyundai_t50_20150101/televisor_hyundai_t50_20150101.php">+info</a>
					</li>
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
