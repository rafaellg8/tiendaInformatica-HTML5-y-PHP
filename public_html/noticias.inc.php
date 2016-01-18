<?php 
    require_once ('dataObject.class.inc.php'); 
    
    class Noticias extends DataObject { 

        public function __construct(){

        }

        public $datos = array( 
            "titulo" => "", 
            "descripcion" => "", 
            "url" => "",
            ); 

       
        
        
        
      
         
        

        public function insertarNoticia($tit,$descp,$url)
        { 
            $conexion = parent::conectar(); //Añadimos la conexion
            

            try{ 
				//Inicializamos los datos
				
				$this->datos["titulo"]=$tit;
				$this->datos["descripcion"]=$descp;
                $this->datos["url"]=$url;
               }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 

	
           $consultaSQL = "INSERT INTO " . TABLA_NOTICIAS . " VALUES ( '$tit','$descp','$url')"; 
           
            try {  $conexion->query( $consultaSQL);  }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 
             
            
        }


        public function eliminarNoticia($tit)
        { 
            $conexion = parent::conectar(); //Añadimos la conexion
            
           
            try{ 
                //Borramos los datos
                
                unset($this->datos);
               }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 

    
           $consultaSQL = "DELETE FROM " . TABLA_NOTICIAS . " WHERE titulo = '$tit'"; 
           
            try {  $conexion->query( $consultaSQL);  }
            catch ( PDOException $e ) { die ("<br> \nConsulta fallida: " . $e->getMessage()); } 
             
            
        }
		//Obtenemos los datos de una noticia en SQL
		public function obtenerDatos($titulo){
			$conexion = parent::conectar(); 
            $sql = "SELECT * FROM ". TABLA_NOTICIAS . "WHERE titulo = :titulo"; 

            try { 
            $resultado = $conexion->query($sql);
            
    		// Extraemos los valores de resultado
    		$rows = $resultado->fetchAll();
    		//Actualizamos los valores del cliente
    		
                parent::desconectar( $conexion ); 
			
            } catch ( PDOException $e ) { 
                parent::desconectar( $conexion ); 
                die( "<br>Consulta fallida: " . $e->getMessage() ); 
            }
			
			return $rows; 
		}

        public function obtenerNoticias(){
            $conexion = parent::conectar(); 
            $sql = "SELECT * FROM ". TABLA_NOTICIAS; 

            try { 
            $resultado = $conexion->query($sql);
            
            // Extraemos los valores de resultado
            $rows = $resultado->fetchAll();
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