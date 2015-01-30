<?php

	class  Core{
            
   			public static $params = array();
            public static $controller;
			static private $conf;

		public static function init(){
		
			$conf=Config::getIns();
            static::router();

            }


        public static function router(){
	        $URI=explode('/',$_SERVER['REQUEST_URI']);
	            
	        Request::retrieve();
	        $route=Request::getCount();
	        $accion=Request::getAction();      
	        $fileroute=strtolower($route).'.php';
	              
	             // Coder::code($route);
            	  // Coder::code($accion);

	        	if(is_file(APP."controller".DS.$fileroute)){
		            $classname=ucfirst($route);
		            self::$controller=new $classname(self::$params);
		            return self::$controller->$accion();
	            }
            }

            
	}
