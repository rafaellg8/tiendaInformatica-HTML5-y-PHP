<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PCNOW! - procesarUsuario.php</title>
        <link rel="stylesheet" href="styleIndex.css" type="text/css"/>
    </head>
    <body>
        <?php
            require_once('clientes.inc.php');
            

            //Funcion que obtiene los datos y los modifica en unas variables pasadas por referencia
            function getDatos(&$usuario,&$contraseña){
                        
                $contraseña = $_REQUEST["pass"];
                $usuario = $_REQUEST["nickname"];
                
                
            }
                
             
            $user="";
            $password="";

            getDatos($user,$password);
            //Creamos un objeto nuevo de clientes 
            //que despues utilizaremos para mandar la peticion
            //de usuario registrado
            $cliente = new Clientes();
    
            //La funcion inicioCliente devuelve si el usuario esta registrado o no
            $estadoCliente = $cliente->inicioCliente($user,$password);
            
            if ($estadoCliente == TRUE){
            
            //Abrimos sesion y redireccionamos a la página principal del usuario
            session_start();
            
            $_SESSION['user'] = $user;
        
			$_SESSION['cliente'] = $cliente;


            
			
			
                header("Location: perfilCliente.php");
            }

            //Si el cliente no esta registrado
            else{
                echo '
                
               
        
        
        <header>
        
        <section>
            <img src="imagenes/decsai.png" alt="imagen publicidad" height="190" width="1300">
            <h1 style="text-align: center;font-size: 50px"><a href="index.html">PCNOW!</a></h1>
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
                   <a href="#menu" onclick="mostrarMenuUsuario()">
                    Usuarios
                    </a>
                </th>
                
                <th>
                   <a href="formularioRegistro.html">
                    Suscribirse
                    </a>
                </th>
            </tr>
            
            <tr id="menu" style="display: none; text-align: center">
                    <th>
                        <a href="inicioSesion.html">
                         Inicio Sesion 
                        </a>
                    </th>
                    
                    <th>
                       <a href="formularioRegistro.html">  REGISTRATE!</a>
                    </th>
                </tr>
        </tbody>
    </table>
       
        
    <table border="1" id="secciones" summary="seccionesTienda">
                <thead>
                  </thead>
                <tbody>
                    <tr>
                        <td style="background-color: lavender">
                            <a href="portatiles.html" >Portatiles</a>
                        </td>
                        <td style="background-color: lightblue">
                             <a href="sobremesa.html">Sobremesa</a>
                        </td>
                        <td style="background-color: lightgreen">
                             <a href="componentes.html" >Componentes</a>
                        </td>
                        <td style="background-color: #ff3333">
                             <a href="electronica.html">Electronica</a>
                        </td>
                       
                    </tr>
                    
                </tbody>
            </table>
        
        <!publicidad lateral>
        <aside class="publiLateral" id="publicidadIzda" style="float: left">
        </aside>
        
        
        <aside class="publiLateral" id="publicidadDcha" style="float: right">
        </aside>
                    
        
         <section style="width: 840px; height: auto; margin-left: 260px">
            <form action="procesarUsuario.php" method="POST" name="formularioRegistro" style="background: orange" onsubmit="return validateForm()">
                <h2>Contraseña o Usuario incorrecto</h2>

                <fieldset >
                    <legend style="font-weight: bold">Datos Acceso </legend>
                    <p>Nombre Usuario     <input type="text" name="nickname" value="" ></p>
                    <p>Contraseña         <input type="password" name="pass" value="" ></p>
                </fieldset>


                <input type = "submit" id = "button1" value = "ENVIAR"/>
                <input type = "reset" id = "button2" value = "ELIMINAR" />

            </form>

        </section>';
            }
            
?>
           
    </body>
</html>