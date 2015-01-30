<?php
    class Request{

        
        static private $a_parametro=array();
		static private $a_pregunta=array();
		static private $tpregunta;
		static private $cont;
        static private $accion;
		
		
		
		
        public static function retrieve(){ 
		
            self::$a_pregunta =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$a_pregunta;    
        }


       public static function getCount(){  
	   
           if(empty($a_pregunta[2])){
                self::$cont="home";
				
            }else{
            	self::$cont=self::$a_pregunta[2];
            } 
			
            return self::$cont;
        }


        public static function getParams(){   
		
            $tpregunta = count(self::$a_pregunta);
            $j2=0;
            if($tpregunta >= 6){
				
                if($tpregunta % 3 == 0){
                    for($j=2;$j < $tpregunta;$j++){ 
                        self::$a_parametro[$j2]= self::$a_pregunta[$j];
                        $j2++;  
                    }
                    return self::$a_parametro;
                }else{
                    echo "Incorrectos!!";
                }
            }else{
                echo "Correctos!!!";
            }
        }


          public static function getAction(){ 
           
            if(empty($a_pregunta[2])){
                self::$accion="home";
               
            }else{
                    self::$accion = self::$a_pregunta[3];
            }  
            return self::$accion;
        }
    }
