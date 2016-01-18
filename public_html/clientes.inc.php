<?php 
    require_once ('dataObject.class.inc.php'); 
    
    class Clientes extends DataObject { 

        public function __construct(){

        }

        public $datos = array( 
            "idUser" => "", 
            "Nombre" => "", 
            "Apellido1" => "",
            "Apellido2"=>"",
            "email"=>"",
            "password"=>"",
            "nickname"=>"",
            "fechaNacimiento"=>""); 

        public static function obtenerClientes( $filaInicio, $numeroFilas, $orden ) { 

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

        
        public function inicioCliente($user, $passwd){
            $conexion = parent::conectar();

            $sql = "SELECT TRUE FROM " . TABLA_CLIENTES . " WHERE nickname = '$user' AND password = '$passwd'";
            try{
            
            $q = $conexion->query($sql);
            $resultado = $q->fetchColumn();
            }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 

            if ($resultado==true){
               return true;
            }
            else{
                return false;
                
            }
                
            
        }
        
        
        public static function obtenerClientesId( $idUser ) { 
            $conexion = parent::conectar(); 
            $sql = "SELECT * FROM " . TABLA_CLIENTES . " WHERE idUser = :idUser"; 

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
        

        public function insertarCliente($nick,$pass,$nombre,$ap1,$ap2,$fecha,$email)
        { 
            $conexion = parent::conectar(); //Añadimos la conexion
            
            $identidad;
			
		    //Obtenemos antes la maxima numero de Usuario
            //Metemos en un campo la columna que contiene la consultaId para que no nos de un string como resultado
            try{ 
                //Preparamos la consulta y la mandamos
                $q = $conexion->query("SELECT MAX(idUser) as maximo FROM ". TABLA_CLIENTES);
                //Obtenemos la unica columna en caso de que haya mas de una
                //Con el ultimo valor identidad
                $resultado = $q->fetchColumn();
                //Aumentamos el valor de identidad que despues insertaremos
                $resultado++;
                
                $identidad=$resultado;
				
				//Inicializamos los datos
				$this->datos["idUser"]=$identidad;
				$this->datos["Nombre"]=$nombre;
				$this->datos["nickname"]=$nick;
				$this->datos["Apellido1"]=$ap1;
				$this->datos["Apellido2"]=$ap2;
				$this->datos["email"]=$email;
				$this->datos["fechaNacimiento"]=$fecha;
				$this->datos["password"]=$pass;
				
               }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 

			//Si el nombre esta vacio por defecto le ponemos el nombre de usuario de nombre
           if (isset($nombre))
		   		$nombre=$nick;
		   
           //Si no esta registrado creamos el usuario, si no redireccionamos al inicio
		   if(isset($this->obtenerDatos($nick)))
           $consultaSQL = "INSERT INTO " . TABLA_CLIENTES . " VALUES ( '$identidad','$nick','$pass','$nombre','$ap1','$ap2','$fecha','$email')"; 
           
           else{
                echo '<script>alert("nombre ocupado, elija otro distinto");
                            location.href="formularioRegistro.html";
                      </script>';

           }

            try {  $conexion->query( $consultaSQL);  }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 
             
            
        }

		//Obtenemos los datos de un cliente en SQL
		public function obtenerDatos($nick){
			$conexion = parent::conectar(); 
            $sql = "SELECT * FROM " . TABLA_CLIENTES . " WHERE nickname = '$nick'"; 

            try { 
            $resultado = $conexion->query($sql);
            
          
           
    		// Extraemos los valores de resultado
    		$rows = $resultado->fetchAll();
    		//Actualizamos los valores del cliente
    		foreach ($rows as $row) {
        		$this->datos["Nombre"]= $row["Nombre"];
				$this->datos["idUser"]= $row["idUser"];
				$this->datos["nickname"]= $row["nickname"];
				$this->datos["Apellido1"]= $row["Apellido1"];
				$this->datos["Apellido2"]= $row["Apellido2"];
				$this->datos["email"]= $row["email"];
				$this->datos["fechaNacimiento"]= $row["fechaNacimiento"];
				$this->datos["password"]= $row["password"];
			
                parent::desconectar( $conexion ); 
			}
                
            } catch ( PDOException $e ) { 
                parent::desconectar( $conexion ); 
                die( "<br>Consulta fallida: " . $e->getMessage() ); 
            }
			
			return $this->datos; 
		}

		

    } 
?> 