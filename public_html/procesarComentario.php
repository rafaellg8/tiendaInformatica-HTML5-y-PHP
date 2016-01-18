<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PCNOW! - procesarComentario.php</title>
    </head>
    <body>
        <?php
            require_once('comentarios.inc.php');



            class Datos{
                private $idComment;
                private $idUser;
                private $date;
                private $producto;
                private $comentarioText;

                private $comentario;
                private $url; //Siguiente url a cargar
                function __construct(){
                	$this->comentario = new Comentarios();

                }

               

                public function getDatos(){
                   
                    
                        $this->idUser=$_REQUEST["idUsuario"];

                        $this->date=date("Y-m-d h:i:sa");
                   
                        $this->comentarioText = $_REQUEST["comentarioTexto"];
                        
                        $this->producto = $_REQUEST["producto"];
                    
                        $this->url = $_REQUEST["url"];
                        
                   
                }

                public function getUrl(){
                    return $this->url;
                }

                public function  mostrarDatos(){
                    echo "idComentario: $this->idComment";
                    echo "<br />";
                    echo "idUsuario: $this->idUser";
                    echo "<br />";

                   echo "Comentario : $this->comentarioText";
                   echo "<br />";
                   echo "Fecha : $this->date" ;
                   echo "<br />";
                   echo "Producto : $this->producto";
                }
             
                public function comprobarCampos(){
                if (empty($this->idUser) || (empty($this->idComment)) || (empty($this->comentarioText)))
                    return false;
                else return true;
                }
                
                //Insertamos los datos en la base de datos SQL
                public function insertarDatosSQL(){
                    $this->comentario->insertarComentario(
                    	$this->idUser,
                    	$this->date,
                    	$this->comentarioText,
                    	$this->producto);
                }
            }

          
                

        ?>
            
           
        
            <?php

            session_start();
            $_SESSION['fechaComentario']=date("Y-m-d h:i:sa");
            $datos = new Datos();
            $datos->getDatos();
            //$datos->mostrarDatos();
            $datos->insertarDatosSQL();
            $url = $datos->getUrl();
            header("Location: index.php");
?>
           
    </body>
</html>