<?php

	Class Home extends Controller{
		function __construct($params){

			parent::__construct($params);
			$this->model = new mHome;	
		}


			function home(){
				$this->loader->vista('vhome.php',$this->model->Info());
			}


			function suma(){
					$data=Request::getParams();
					$val1 = $data[4];
					$val2 = $data[6];
					$a = $data[3];
					$b= $data[5];
					$this->loader->vista('vsuma.php',$this->model->suma($a,$b,$valor1,$valor2));

			}

	}