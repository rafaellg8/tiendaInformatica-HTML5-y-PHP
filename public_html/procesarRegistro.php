<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PCNOW! - procesarRegistro.php</title>
    </head>
    <body>
        <?php
            require_once('clientes.inc.php');



            class Datos{
                private $nombre;
                private $usuario;
                private $apellido1;
                private $apellido2;
                private $pass1;
                private $pass2;
                private $fecNac; //fecha nacimiento
                private $telefono;
                private $email;

                private $cliente;
                function __construct(){
                	$this->cliente = new Clientes();

                }

               

                public function getDatos(){
                   
                        $this->nombre = $_REQUEST ["nombre"];
                    
                        $this->apellido1=$_REQUEST["apellidos1"];

                        $this->apellido2=$_REQUEST["apellidos2"];
                   
                        $this->pass1 = $_REQUEST["pass1"];
                        
                        $this->pass2 = $_REQUEST["pass2"];
                    
                        $this->fecNac = $_REQUEST["fechaNacimiento"];
                        
                        $this->usuario = $_REQUEST["nickname"];
                    
                        $this->email = $_REQUEST["email"];
                        
                   
                }

                public function  mostrarDatos(){
                    echo "Nombre: $this->nombre";
                    echo "<br />";
                    echo "apellido: $this->apellido1";
                    echo "<br />";

                   echo "Usuario : $this->usuario";
                   echo "<br />";
                   echo "Fecha nacimiento : $this->fecNac" ;
                }
             
                public function comprobarCampos(){
                if (empty($this->nombre) || (empty($this->apellido1)) || (empty($this->pass1)))
                    return false;
                else return true;
                }
                
                //Insertamos los datos en la base de datos SQL
                public function insertarDatosSQL(){
                    $this->cliente->insertarCliente(
                    	$this->usuario,
                    	$this->pass1,
                    	$this->nombre,
                    	$this->apellido1,
                    	$this->apellido2
                    	,$this->fecNac,
                    	$this->email);
                }
            }

          
                

        ?>
            
           
        
            <?php

            $datos = new Datos();
            $datos->getDatos();
            //$datos->mostrarDatos();
            $datos->insertarDatosSQL();
            header("Location: registroCorrecto.html");
?>
           
    </body>
</html>