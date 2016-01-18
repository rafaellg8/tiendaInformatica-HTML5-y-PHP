
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
        require_once 'noticias.inc.php';
        session_start();
        $usuario = $_SESSION['user'];
		$cliente = $_SESSION['cliente'];
		
		$datos = $cliente->obtenerDatos($usuario);
		
		$_SESSION['datos']=$datos;
		
		$nombre = $datos["Nombre"];
		
        //Si la noticia esta creada la insertamos
        if ($_REQUEST["nombreNoticia"]!=null){
            $noticia = new Noticias();
            $nombreNoticia=$_REQUEST["nombreNoticia"];
            $descripcionNoticia=$_REQUEST["noticia"];
            $urlNoticia=$_REQUEST["urlNoticia"];
            $noticia->insertarNoticia($nombreNoticia,$descripcionNoticia,$urlNoticia);
        }


        ?>
        
        <title>PCNow! - Gestion Noticias :<?=$usuario?></title>
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


            function comprobarCampos(){
                var titulo=document.forms["formularioNoticia"]["nombreNoticia"].value;
                var descripcion=document.forms["formularioNoticia"]["noticia"].value;
                var url=document.forms["formularioNoticia"]["urlNoticia"].value;

                if ((titulo=="" || descripcion=="" || url=="")||(titulo=="titulo" || descripcion=="descripcion"
                    || url=="url")
                    ){
                    alert("Ningun campo puede estar vacio");
                    return false;
                }

                else return true;

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
        

        <!--Formulario Insertar Noticia-->
        <section style="text-align: center;">
            
        <form onsubmit="return comprobarCampos();" action="insertarNoticia.php" method="POST" name="formularioNoticia">
        <p>Inserte aqui su noticia</p>
            <p>Nombre noticia</p>
           <input type="text" name="nombreNoticia" value="" style="width: 500px; height: 12px">
           <br>
           <p>Descripcion</p>
           <input type="text" name="noticia" value="" style="width: 500px; height: 120px">
           <br>
           <p>URL</p>
           <input type="text" name="urlNoticia" value="" style="width: 500px; height: 12px">
           <br>
           <input type = "submit" id = "button1" value = "ENVIAR" />
           <input type = "reset" id = "button2" value = "ELIMINAR" />
        </form>
        </section>
        
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
