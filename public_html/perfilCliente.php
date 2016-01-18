
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style type="text/css">
            
            #iframeid{
                float: top;
            }

        </style>
       <link rel="stylesheet" href="styleIndex.css" type="text/css"/>
    <?php
    	require_once 'clientes.inc.php';
        session_start();
        $usuario = $_SESSION['user'];
		$cliente = $_SESSION['cliente'];
		
		$datos = $cliente->obtenerDatos($usuario);
		
		$_SESSION['datos']=$datos;
		
		$nombre = $datos["Nombre"];
		
        //Funcion que cierra la sesion actual
        function cerrarSesion(){
          
            header("index.html");
        }
		
        ?>
        
        <title>PCNow! - Perfil :<?=$usuario?></title>
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
        
         
         <h1 style="text-align: center;">Bienvenido a su perfil : <?=$usuario?></h1>
         
         <ul style="text-align: center; height: auto; width: 400px; position: relative;
                float: left;
                 margin-top: 20px;
                 background-color: orange;
                 list-style: none" >
         	<li>
         		Nombre : <?=$nombre?>
         	</li>
         	<br>
         	<li>
         		Apellidos : <?=$datos["Apellido1"]?>
         	</li>
         	<br>
         	<li>
         		Email : <?=$datos["email"]?>
         	</li>
         	<br>
         	<li>
         		Fecha Nacimiento: <?=$datos["fechaNacimiento"]?>
         	</li>
         	
         </ul>

        <?php
        //Si es el administrador le permitimos gestionar las noticias
        if ($usuario=="userAdmin")
            echo'
         <table style="text-align: center; height: 120px; width: 400px; position: relative;
                 margin-left: 120px;
                 margin-top: 20px;
                 background-color: orange;
                 list-style: none">
             <caption>Menu Administrador</caption>
             <thead>
                 <tr>
                     <th><a href="modificarNoticia.php">Gestionar Noticias</a></th>
                 </tr>
             </thead>
         </table>';
        ?>
        
        <footer  style="text-align: left; height: 50px; width: 400px; position: static;
                 margin-left: 400px;
                 margin-top: 20px;">

            <p>Rafael Lachica Garrido</p>
            <p>Contacto
                <a href="mailto:pcnow!@email.com">
                    pcnow!@email.com  
                </a>
            </p>
            <address>Calle Periodista Daniel Saucedo Aranda s/n</address>
        <p>Telefono : <strong>958 001 002</strong> </p>

        <a href="pcnow_RafaelLachicaGarrido.pdf">Como se hizo</a>

        <h3><a href="formulario.html"><input type="submit" value="SUSCRIBIRSE"/></a></h3>



    </footer>   




    </body>
    </html>
