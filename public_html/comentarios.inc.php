<?php 
    require_once ('dataObject.class.inc.php'); 
    
    class Comentarios extends DataObject { 

        public function __construct(){

        }

        public $datos = array( 
            "idComment" => "", 
            "idUser" => "", 
            "date" => "",
            "comment" => "",
            "producto" => "",
            ); 

        public static function obtenerComentarios( $filaInicio, $numeroFilas, $orden ) { 

            $conexion = parent::conectar(); 
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TABLA_CLIENTES . " 
                ORDER BY “ . $orden . “LIMIT :filaInicio, :numeroFilas"; 
            try { 
                $st = $conexion->prepare( $sql ); 
                $st->bindValue( ":filaInicio", $filaInicio, PDO::PARAM_INT ); 
                $st->bindValue( ":numeroFilas", $numeroFilas, PDO::PARAM_INT );
                
                $st->execute(); 
                
                $clientes = array(); 
                foreach ( $st->fetchAll() as $fila ) { 
                    $clientes[] = new Clientes( $fila ); 
                } 
                
                $st = $conexion->query( "SELECT found_rows() AS filasTotales" ); 
                $fila = $st->fetch(); 
                parent::desconectar( $conexion ); 
                return array( $clientes, $fila["filasTotales"] ); 
            } catch ( PDOException $e ) { 
                parent::desconectar( $conexion ); 
                die( "<br>Consulta fallida: " . $e->getMessage() ); 
            } 
        } 

        
        
        
        
        public static function obtenerComentariosId( $idUser ) { 
            $conexion = parent::conectar(); 
            $sql = "SELECT * FROM " . TABLA_COMENTARIOS . " WHERE idUser = :idUser"; 

            try { 
                $st = $conexion->prepare( $sql ); 
                $st->bindValue( ":idUser", $id, PDO::PARAM_INT ); 
                $st->execute(); 
                $fila = $st->fetch(); 

                parent::desconectar( $conexion ); 

                if ( $fila ) return new Clientes( $fila ); 
            } catch ( PDOException $e ) { 
                parent::desconectar( $conexion ); 
                die( "<br>Consulta fallida: " . $e->getMessage() ); 
            } 
        } 
        

        public function insertarComentario($idUsuario,$fecha,$comentario,$producto)
        { 
            $conexion = parent::conectar(); //Añadimos la conexion
            
            $identidad;
			
            
		    //Obtenemos antes la maxima numero de Usuario
            //Metemos en un campo la columna que contiene la consultaId para que no nos de un string como resultado
            try{ 
                //Preparamos la consulta y la mandamos
                $q = $conexion->query("SELECT MAX(idComment) as maximo FROM ". TABLA_COMENTARIOS);
                //Obtenemos la unica columna en caso de que haya mas de una
                //Con el ultimo valor identidad
                $resultado = $q->fetchColumn();
                //Aumentamos el valor de identidad que despues insertaremos
                $resultado++;
                
                $identidad=$resultado;
                
             		
				//Inicializamos los datos
				$this->datos["idComment"]=$identidad;
				$this->datos["idUser"]=$idUsuario;
				$this->datos["date"]=$fecha;
                                $this->datos["comment"]=$comentario;
                                $this->datos["producto"]=$producto;
				
               }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 

	
           $consultaSQL = "INSERT INTO " . TABLA_COMENTARIOS . " VALUES ( '$identidad','$idUsuario','$fecha','$comentario','$producto')"; 
           
            try {  $conexion->query( $consultaSQL);  }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 
             
            
        }

		//Obtenemos los datos de un cliente en SQL
		public function obtenerDatos($nick,$producto){
			$conexion = parent::conectar(); 
            $sql = "SELECT `comment` FROM ". TABLA_COMENTARIOS . " WHERE date IN (Select max(date) ORDER BY date DESC) AND idUser='$nick' 
            AND producto='$producto'";

            try { 
            $resultado = $conexion->query($sql);
            
          
           
    		// Extraemos los valores de resultado
    		$rows = $resultado->fetch();
    		//Actualizamos los valores del cliente
    		
                parent::desconectar( $conexion ); 
			
            } catch ( PDOException $e ) { 
                parent::desconectar( $conexion ); 
                die( "<br>Consulta fallida: " . $e->getMessage() ); 
            }
			
			return $rows; 
		}

		

    } 
?> 